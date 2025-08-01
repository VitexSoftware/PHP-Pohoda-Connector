<?php

declare(strict_types=1);

/**
 * This file is part of the PHP-Pohoda-Connector package
 *
 * https://github.com/VitexSoftware/PHP-Pohoda-Connector
 *
 * (c) VitexSoftware. <https://vitexsoftware.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace mServer;

use Ease\Functions;
// PHP8+ use native CurlHandle type hinting
use Ease\Shared;
use Riesenia\Pohoda;

/**
 * Stormware's Pohoda mServer's client class.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 *
 * @no-named-arguments
 */
class Client extends \Ease\Sand
{
    use \Ease\recordkey;

    /**
     * We Connect to server by default.
     */
    public bool $offline = false;

    /**
     * Override cURL timeout.
     *
     * @var int seconds
     */
    public ?int $timeout = 30;

    /**
     * Body data  for next curl POST operation.
     */
    public ?string $postFields = null;

    /**
     * Enable Curl Compress ?
     */
    public bool $compress = true;

    /**
     * Raw Content of last curl response.
     */
    public ?string $lastCurlResponse = null; // Ensure this property is initialized

    /**
     * HTTP Response code of last request.
     */
    public ?int $lastResponseCode = null;

    /**
     * Meaning of HTTP Response code of last request.
     */
    public ?string $lastResponseMessage = null;

    /**
     * Informace o poslední HTTP chybě.
     */
    public ?string $lastCurlError = null;

    /**
     * Informace o posledním HTTP requestu.
     */
    public mixed $curlInfo;

    /**
     * Array of errors.
     *
     * @var mixed[]
     */
    public array $errors = [];

    /**
     * Response stats live here.
     *
     * @var mixed[]
     */
    public array $responseStats = [];

    /**
     * Messages from last operation.
     *
     * @var array<string, array<string>>
     */
    public array $messages = [];

    /**
     * @var array<string, string> of Http headers attached with every request
     */
    public array $defaultHttpHeaders = [
        'STW-Application' => 'PHPmServer',
        'Accept' => 'application/xml',
        'Content-Type' => 'application/xml',
    ];

    /**
     * [protocol://]Server[:port].
     */
    public ?string $url = null;

    /**
     * REST API Username.
     */
    public ?string $user = null;

    /**
     * REST API Password.
     */
    public ?string $password = null;

    /**
     * Current Object's agenda.
     */
    public ?string $agenda = null;

    /**
     * Request XML helper.
     */
    public ?Pohoda\Agenda $requestXml = null;

    /**
     * Where to find current record name.
     *
     * @var string column name or path in array address:company
     */
    public ?string $nameColumn = null;

    /**
     * Path to teporary XML file.
     */
    public ?string $xmlCache = null;
    public ?Response $response = null;

    /**
     * SQL table for current agenda.
     */
    public string $sqlTable = '';

    /**
     * UserAgent string.
     */
    protected string $userAgent = 'mServerPHP';

    /**
     * My Company identification ID.
     */
    protected ?string $ico = null;

    /**
     * XML Response Processor.
     */
    protected Pohoda $pohoda;
    private bool $autoload = false;

    /* PHP8+ \CurlHandle */
    private \CurlHandle $curl;

    /**
     * mServer client class.
     *
     * @param mixed                 $init    default record id or initial data. See processInit()
     * @param array<string, string> $options Connection settings and other options override
     */
    public function __construct($init = null, array $options = [])
    {
        parent::setObjectName();
        $this->setUp($options);
        $this->userAgent = 'mServerPHP v'.self::libVersion().' https://github.com/VitexSoftware/PHP-Pohoda-Connector';
        $this->curlInit();
        Pohoda::$encoding = 'UTF-8';
        $this->reset();

        if (!empty($init)) {
            $this->processInit($init);
        }
    }

    /**
     * Reconnect After unserialization.
     */
    public function __wakeup(): void
    {
        $this->curlInit();
    }

    /**
     * SetUp Object to be ready for work.
     *
     * @param array<string, string> $options Object Options ( user,password,authSessionId
     *                                       company,url,agenda,
     *                                       debug,autoload,
     *                                       filter,ignore404
     *                                       timeout,companyUrl,ver,throwException
     */
    public function setUp(array $options = []): void
    {
        $this->setupProperty($options, 'ico', 'POHODA_ICO');
        $this->setupProperty($options, 'url', 'POHODA_URL');
        $this->setupProperty($options, 'user', 'POHODA_USERNAME');
        $this->setupProperty($options, 'password', 'POHODA_PASSWORD');
        $this->setupIntProperty($options, 'timeout', 'POHODA_TIMEOUT');
        $this->setupBoolProperty($options, 'compress', 'POHODA_COMPRESS');
        $this->setupBoolProperty($options, 'autoload');

        if (isset($options['agenda'])) {
            $this->setAgenda($options['agenda']);
        }

        if (\array_key_exists('instance', $options)) {
            $this->setInstance($options['instance']);
        }

        if (\array_key_exists('application', $options)) {
            $this->setApplication($options['application']);
        }

        if (\array_key_exists('duplicity', $options)) {
            $this->setCheckDuplicity((bool) $options['duplicity']);
        }

        $this->setupProperty($options, 'debug', 'POHODA_DEBUG');
    }

    /**
     * Set/Get the current userAgent.
     */
    public function userAgent(?string $userAgent = null): string
    {
        if ($userAgent) {
            $this->userAgent = $userAgent;
        }

        return $this->userAgent;
    }

    /**
     * Prepare XML processing engine.
     */
    public function reset(): void
    {
        $this->dataReset();
        $this->pohoda = new Pohoda($this->ico);
        $this->pohoda->setApplicationName(Shared::cfg('APP_NAME', 'PHPmPohoda'));
        $this->xmlCache = sys_get_temp_dir().'/phpmPohoda_'.Functions::randomString().'.xml';
        $this->pohoda->open($this->xmlCache, microtime(), 'generated by PHPmPohoda');

        if ($this->debug) {
            $this->addStatusMessage('Initialising new PHPmPohoda XMLCache: '.$this->xmlCache, 'debug');
        }
    }

    /**
     * {@inheritDoc}
     */
    public function setObjectName($forceName = '')
    {
        return parent::setObjectName(($this->getMyKey() ? $this->getMyKey().'@' : '').\Ease\Logger\Message::getCallerName($this));
    }

    /**
     * Process and use initial value.
     *
     * This method handles different types of initial data:
     * - If an integer is provided, it loads the record with that ID.
     * - If an string is provided, it loads the record with that IDS.
     * - If an array is provided and aultoload mode is enable, it loads the record with that data.
     * - It an array is provided and autoload mode is disabled, it takes the data as is.
     *
     * @param mixed $init
     */
    public function processInit($init): void
    {
        if (\is_int($init)) {
            $this->loadFromPohoda($init);
        } elseif (\is_string($init)) {
            $this->loadFromPohoda(['IDS' => $init]);
        } elseif (\is_array($init) && $this->autoload) {
            $this->loadFromPohoda($init);
        } else {
            $this->takeData($init);
        }
    }

    /**
     * Add Info about used user, server and libraries.
     *
     * @param string $prefix banner prefix text
     * @param string $suffix banner suffix text
     */
    public function logBanner($prefix = null, $suffix = null): void
    {
        parent::logBanner(
            $prefix,
            'mServer '.str_replace('://', '://'.$this->user.'@', $this->url).' PHPmServer v'.self::libVersion().
                $suffix,
        );
    }

    /**
     * Set Authentication.
     */
    public function setAuth(): bool
    {
        $this->defaultHttpHeaders['STW-Authorization'] = 'Basic '.base64_encode($this->user.':'.$this->password);

        return \strlen($this->user) && \strlen($this->password);
    }

    /**
     * Set Instance http header.
     */
    public function setInstance(string $instance): self
    {
        $this->defaultHttpHeaders['STW-Instance'] = $instance;

        return $this;
    }

    /**
     * Set Application http header.
     */
    public function setApplication(string $application): self
    {
        $this->defaultHttpHeaders['STW-Application'] = $application;

        return $this;
    }

    /**
     * Set "Check Duplicity" http header enabler.
     */
    public function setCheckDuplicity(bool $flag): self
    {
        if ($flag) {
            $this->defaultHttpHeaders['STW-Check-Duplicity'] = 'true';
        } else {
            unset($this->defaultHttpHeaders['STW-Check-Duplicity']);
        }

        return $this;
    }

    /**
     * CURL initialization.
     *
     * @return bool Online Status
     */
    public function curlInit()
    {
        if ($this->offline === false) {
            $this->curl = \curl_init(); // create curl resource
            \curl_setopt($this->curl, \CURLOPT_RETURNTRANSFER, true); // return content as a string from curl_exec
            \curl_setopt($this->curl, \CURLOPT_FOLLOWLOCATION, true); // follow redirects
            \curl_setopt($this->curl, \CURLOPT_HTTPAUTH, \CURLAUTH_ANY); // HTTP authentication
            \curl_setopt($this->curl, \CURLOPT_SSL_VERIFYPEER, false); // for Self-Signed certificates
            \curl_setopt($this->curl, \CURLOPT_SSL_VERIFYHOST, 0);
            \curl_setopt($this->curl, \CURLOPT_VERBOSE, $this->debug === true); // For debugging

            if (null !== $this->timeout) {
                \curl_setopt($this->curl, \CURLOPT_TIMEOUT, $this->timeout);
            }

            if ($this->compress === true) {
                \curl_setopt($this->curl, \CURLOPT_ENCODING, 'gzip');
            }

            \curl_setopt($this->curl, \CURLOPT_USERAGENT, $this->userAgent);
        }

        return !$this->offline && $this->setAuth();
    }

    /**
     * Prepare data to send.
     *
     * @param string $data
     */
    public function setPostFields(array|string $data): self
    {
        $this->postFields = $data;

        return $this;
    }

    /**
     * Perform HTTP request.
     *
     * @param string $url    Request URL
     * @param string $method HTTP Method GET|POST
     *
     * @return int HTTP Response CODE
     */
    public function doCurlRequest(string $url, string $method)
    {
        $httpHeaders = [];
        \curl_setopt($this->curl, \CURLOPT_URL, $url);
        \curl_setopt($this->curl, \CURLOPT_CUSTOMREQUEST, strtoupper($method));
        \curl_setopt($this->curl, \CURLOPT_POSTFIELDS, $this->postFields);

        if ($this->debug && !empty($this->postFields)) {
            $tmpfile = sys_get_temp_dir().'/mPohodaReq'.time().'.xml';
            file_put_contents($tmpfile, $this->postFields);
            $this->addStatusMessage('request body saved as: '.$tmpfile, 'debug');
            // system('netbeans ' . $tmpfile);
        }

        foreach ($this->defaultHttpHeaders as $header => $value) {
            $httpHeaders[] = $header.': '.$value;
        }

        \curl_setopt($this->curl, \CURLOPT_HTTPHEADER, $httpHeaders);

        $response = \curl_exec($this->curl);
        $this->lastCurlResponse = $response ?: '';
        $this->curlInfo = \curl_getinfo($this->curl);
        $this->curlInfo['when'] = microtime();
        $this->lastResponseCode = $this->curlInfo['http_code'];
        $this->lastCurlError = \curl_error($this->curl);

        if (\strlen($this->lastCurlError)) {
            throw new HttpException(sprintf('Curl Error (HTTP %d): %s', $this->lastResponseCode, $this->lastCurlError), $this->lastResponseCode);
        }

        if ($this->debug) {
            $tmpName = sys_get_temp_dir().'/mPohodaRes'.time().'.xml';
            file_put_contents($tmpName, $this->lastCurlResponse);
            $this->addStatusMessage('response saved as: '.$tmpName, 'debug');
        }

        return $this->lastResponseCode;
    }

    /**
     * A function that performs an I/O operation and evaluates the result.
     *
     * @param string $urlSuffix part of the URL after the company identifier
     * @param string $method    HTTP/REST metoda
     *
     * @return bool request commit status
     */
    public function performRequest($urlSuffix = '', $method = 'POST'): bool
    {
        $this->responseStats = [];
        $this->errors = [];

        if (preg_match('/^http/', $urlSuffix)) {
            $url = $urlSuffix;
        } elseif (\strlen($urlSuffix) && ($urlSuffix[0] === '/')) {
            $url = $this->url.$urlSuffix;
        } else {
            $url = $this->url;
        }

        return $this->processResponse($this->doCurlRequest($url, $method));
    }

    /**
     * Response processing handler.
     */
    public function processResponse(int $httpCode): bool
    {
        $this->messages = [];

        switch ($httpCode) {
            case 0:
                $this->lastResponseMessage = '0: '.$this->lastCurlError;

                break;
            case 400:
                $this->lastResponseMessage = '400: Bad request';

                // "Požadavek nemůže být vyřízen, poněvadž byl syntakticky nesprávně zapsán"
                break;
            case 401:
                $this->lastResponseMessage = '401: Unauthorized';

                // "Používán tam, kde je vyžadována autentifikace, ale nebyla zatím provedena". V tomto případě se jedná o problém, kdy buď v HTTP požadavku chybí autentizační údaje nebo daný uživatel není v programu POHODA vytvořen.
                break;
            case 403:
                $this->lastResponseMessage = '403: Forbidden';

                // "Požadavek byl legální, ale server odmítl odpovědět". Například se jedná o problém, kdy daný uživatel nemá právo na otevření účetní jednotky v programu POHODA.
                break;
            case 404:
                $this->lastResponseMessage = '404: Not found';

                // „Požadovaný dokument nebyl nalezen“. Jedná se o problém, kdy byla chybně zadaná URL cesta k mServeru. Například se jedná o problém, kdy v URL adrese není uvedena cesta k umístění na serveru "/XML". Příklad správně zadné URL: 192.168.0.1:444/xml
                break;
            case 405:
                $this->lastResponseMessage = '405: Method not allowed';

                // „Požadavek byl zavolán na zdroj s metodou, kterou nepodporuje. Například se jedná o službu, na kterou se odesílají data metodou POST a někdo se je místo toho pokusí odeslat metodou GET.“
                break;
            case 408:
                $this->lastResponseMessage = '408: Request Timeout';

                // „Vypršel čas vyhrazený na zpracování požadavku“
                break;
            case 500:
                $this->lastResponseMessage = '500: Internal server error';

                // „Při zpracovávání požadavku došlo k blíže nespecifikované chybě“
                break;
            case 502:
                $this->lastResponseMessage = '502: Bad Gateway';

                // „Proxy server nebo brána obdržely od serveru neplatnou odpověď“
                break;
            case 503:
                $this->lastResponseMessage = '503: Service unavailable';

                // „Služba je dočasně nedostupná“
                break;
            case 504:
                $this->lastResponseMessage = '504: Gateway Timeout';

                // „Proxy server nedostal od cílového serveru odpověď v daném čase“
                break;
            case 505:
                $this->lastResponseMessage = '505: HTTP Version Not Supported';

                // „Server nepodporuje verzi protokolu HTTP použitou v požadavku“
                break;

            default:
                $this->lastResponseMessage = $httpCode.': ok';

                // Check for error state in XML response and print note if present
                if (!empty($this->lastCurlResponse)) {
                    libxml_use_internal_errors(true);
                    $xml = simplexml_load_string($this->lastCurlResponse, 'SimpleXMLElement', \LIBXML_NOCDATA);

                    if ($xml === false) {
                        $errors = libxml_get_errors();

                        foreach ($errors as $error) {
                            $this->messages['error'][] = $error->message;
                            $this->addStatusMessage('XML parse error: '.$error->message, 'error');
                        }

                        libxml_clear_errors();
                    } elseif (isset($xml['state']) && (string) $xml['state'] === 'error') {
                        if (isset($xml['note'])) {
                            $this->messages['error'][] = (string) $xml['note'];
                        }
                    }

                    if ($this->debug) {
                        $this->addStatusMessage('validate request by: xmllint --schema '.\dirname(__DIR__, 3).'/pohodaser/xsd/data.xsd'.$this->xmlCache.' --noout', 'debug');
                    }

                    libxml_use_internal_errors(false);
                }

                $this->response = new Response($this);

                //                if ($this->response->isOk() === false) {
                if ($this->response->getNote()) {
                    $this->messages['error'][] = $this->response->getNote();
                    $this->addStatusMessage($this->response->getNote(), 'error');
                }

                foreach ($this->response->messages as $type => $messages) {
                    foreach ($messages as $message) {
                        $toLog = $message['state'].' '.$message['errno'].': '.$message['note'].(\array_key_exists('XPath', $message) ? ' ('.$message['XPath'].')' : '');
                        $this->messages[$type][] = $toLog;
                        $this->addStatusMessage($toLog, $type);
                    }
                }

                //                }
                break;
        }

        return \is_object($this->response) && ($this->response->isOk() || $this->response->isWarning());
    }

    /**
     * Check mServer availability.
     */
    public function isOnline(): bool
    {
        $this->responseStats = [];
        $this->errors = [];

        return ($this->doCurlRequest($this->url.'/status', 'POST') === 200) && str_contains($this->lastCurlResponse, 'Response from POHODA mServer');
    }

    /**
     * Use data in object.
     *
     * @param array<string, string> $data raw document data
     */
    public function takeData(array $data): int
    {
        // Use only the first record if $data contains multiple records
        if (isset($data[0]) && \is_array($data[0])) {
            $data = $data[0];
        }

        parent::takeData($data);
        $created = $this->create($this->getData());
        $this->setObjectName();

        return $created;
    }

    /**
     * Create Agenda document using given data.
     *
     * @param array<string, string> $data
     */
    public function create(array $data): int
    {
        // Use only the first record if $data contains multiple records
        if (isset($data[0]) && \is_array($data[0])) {
            $data = $data[0];
        }

        $this->requestXml = $this->pohoda->create($this->agenda, $data);

        return empty($this->requestXml) ? 0 : 1;
    }

    /**
     * Insert prepared record to Pohoda.
     *
     * @param array<string, string> $data extra data
     */
    public function addToPohoda($data = []): self
    {
        if (!empty($data)) {
            $this->takeData($data);
        }

        if ($this->requestXml) {
            if (method_exists($this->requestXml, 'addActionType')) {
                $this->requestXml->addActionType('add'); // "add", "add/update", "update", "delete"
            }

            $this->pohoda->addItem('2', $this->requestXml);
        }

        return $this;
    }

    public function commit(): bool
    {
        $this->pohoda->close();
        $this->setPostFields(file_get_contents($this->xmlCache));

        if ($this->debug) {
            $this->addStatusMessage('validate request by: xmllint --schema '.\dirname(__DIR__, 3).'/pohodaser/xsd/data.xsd'.$this->xmlCache.' --noout', 'debug');
        }

        return $this->performRequest('/xml');
    }

    /**
     * Insert prepared record to Pohoda.
     *
     * @param array<string, string> $data   extra data
     * @param null|mixed            $filter
     */
    public function updateInPohoda(array $data = [], $filter = null): bool
    {
        if (!empty($data)) {
            $this->takeData($data);
        }

        if ($this->requestXml) {
            if (method_exists($this->requestXml, 'addActionType')) {
                // "add", "add/update", "update", "delete"
                $this->requestXml->addActionType('update', empty($filter) ? $this->filterToMe() : $filter);
            }

            $this->pohoda->addItem('2', $this->requestXml);
        }

        $this->setPostFields($this->pohoda->close());

        return $this->performRequest('/xml');
    }

    /**
     * Filter to select only "current" record.
     *
     * @return array<string, string>
     */
    public function filterToMe()
    {
        if ($this->nameColumn) {
            if (strstr($this->nameColumn, ':')) {
                $data = $this->getData();

                foreach (explode(':', $this->nameColumn) as $key) {
                    if (\array_key_exists($data, $data)) {
                        $data = $data[$key];
                    } else {
                        throw new \Exception('Data Path '.$this->nameColumn.'does not exist');
                    }
                }

                $filter = [$key => $data];
            } else {
                $filter = [$this->nameColumn => $this->getDataValue($this->nameColumn)];
            }
        } else {
            $filter = [$this->getKeyColumn() => $this->getMyKey()];
        }

        return $filter;
    }

    /**
     * Obtain given fields from Pohoda.
     *
     * @param array $columns<string>           list of columns to obtain
     * @param array $conditions<string,string> conditions to filter
     */
    public function getColumnsFromPohoda(array $columns = ['id'], $conditions = []): ?array
    {
        $this->requestXml = $this->pohoda->createListRequest(['type' => ucfirst($this->agenda)]);

        if (\count($conditions)) {
            $this->requestXml->addFilter($conditions);
        }

        $this->pohoda->addItem('2', $this->requestXml);
        $xmlTmp = $this->pohoda->close();
        $this->setPostFields($this->xmlCache ? file_get_contents($this->xmlCache) : $xmlTmp);

        $response = $this->performRequest('/xml') ? $this->response->getAgendaData($this->agenda) : null;

        if ($response && !empty($columns)) {
            return array_map(static function ($item) use ($columns) {
                return array_intersect_key($item, array_flip($columns));
            }, $response);
        }

        return $response;
    }

    /**
     * Load data from Pohoda.
     *
     * @return null|int number of records loaded or null if nothing found
     */
    public function loadFromPohoda(mixed $phid = null)
    {
        if ((null === $phid) === true) {
            $condition = [];
        } else {
            $condition = \is_array($phid) ? $phid : ['id' => (string) $phid];
        }

        return $this->takeData($this->getColumnsFromPohoda(['*'], $condition)) ? $this->getMyKey() : null;
    }

    /**
     * Application version or "0.0.0" fallback.
     */
    public static function libVersion(): string
    {
        return \Composer\InstalledVersions::getPrettyVersion('vitexsoftware/pohoda-connector');
    }

    public function sendRequest(string $request): string
    {
        $this->setPostFields($request);
        $this->performRequest('/xml');

        return $this->lastCurlResponse;
    }

    public function setAgenda(string $agenda): self
    {
        $this->agenda = $agenda;

        return $this;
    }

    public function getPohodaXML(null|array|int $filter = null): ?string
    {
        $this->requestXml = $this->pohoda->createListRequest(['type' => ucfirst($this->agenda)]);

        if (\is_int($filter)) {
            $filter = [$this->getKeyColumn() => $filter];
        }

        if (\is_array($filter)) {
            $this->requestXml->addFilter($filter);
        }

        $this->pohoda->addItem('2', $this->requestXml);
        $xmlTmp = $this->pohoda->close();
        $this->setPostFields($this->xmlCache ? file_get_contents($this->xmlCache) : $xmlTmp);

        return $this->performRequest('/xml') ? $this->response->getRawXml() : null;
    }

    public function getPohodaObject(null|array|int $filter = null): mixed
    {
        return $this->getPohodaXML($filter) ? Response::deserialize($this->response->getRawXml()) : null;
    }

    /**
     * Create List request.
     */
    public function createListRequest(array $conditions = []): \Riesenia\Pohoda\ListRequest
    {
        if ($this->agenda) {
            $conditions['type'] = ucfirst($this->agenda);
        }

        return $this->pohoda->createListRequest($conditions);
    }

    public function queryFilter(string $query, string $name = ''): \Riesenia\Pohoda\ListRequest
    {
        return $this->createListRequest()->addQueryFilter(['textName' => $name, 'filter' => $query]);
    }

    public function getListing(\Riesenia\Pohoda\ListRequest $listRequest): ?array
    {
        $this->pohoda->addItem('2', $listRequest);

        $xmlTmp = $this->pohoda->close();
        $this->setPostFields($this->xmlCache ? file_get_contents($this->xmlCache) : $xmlTmp);

        $response = $this->performRequest('/xml') ? $this->response->getAgendaData($this->agenda) : null;

        if ($response && !empty($columns)) {
            return array_map(static function ($item) use ($columns) {
                return array_intersect_key($item, array_flip($columns));
            }, $response);
        }

        return $response;
    }

    /**
     * Check Record presence in Pohoda.
     *
     * @throws \UnexpectedValueException
     */
    public function recordExists(null|int|string $id = null): bool
    {
        if (empty($this->sqlTable)) {
            throw new \UnexpectedValueException('The $this->sqlTable is not set.');
        }

        $recordFound = $this->getListing($this->queryFilter($this->sqlTable.'.ID='.($id ?: $this->getMyKey()), 'Record #'.($id ?: $this->getMyKey()).' exists in '.$this->agenda));

        return empty($recordFound) === false;
    }
}
