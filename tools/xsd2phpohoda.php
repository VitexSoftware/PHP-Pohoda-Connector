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

use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\SerializerBuilder;

require_once \dirname(__DIR__).'/vendor/autoload.php';

$serializerBuilder = SerializerBuilder::create();
$serializerBuilder->addMetadataDir(\dirname(__DIR__).'/metadata', 'Pohoda')->setPropertyNamingStrategy(new \JMS\Serializer\Naming\IdenticalPropertyNamingStrategy());
$serializerBuilder->configureHandlers(static function (HandlerRegistryInterface $handler) use ($serializerBuilder): void {
    $serializerBuilder->addDefaultHandlers();
    $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
    $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling
    // $handler->registerSubscribingHandler(new YourhandlerHere());
});

$serializer = $serializerBuilder->build();

// deserialize the XML into Demo\MyObject object
$object = $serializer->deserialize(file_get_contents(\dirname(__DIR__).'/tests/getBank.xml'), 'Pohoda\Data\DataPack', 'xml');

// some code ....
// serialize the Demo\MyObject back into XML
$newXml = $serializer->serialize($object, 'xml');

echo $newXml;
