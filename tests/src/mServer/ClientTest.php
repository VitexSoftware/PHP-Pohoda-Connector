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

namespace Test\mServer;

use mServer\Client;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2021-01-01 at 21:47:41.
 */
class ClientTest extends \PHPUnit\Framework\TestCase
{
    protected Client $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new Client();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
    }

    /**
     * @covers \mServer\Client::processInit
     */
    public function testprocessInit(): void
    {
        if ($this->object->agenda) {
            $this->object->processInit(0);
            $this->assertNull($this->object->data);
        } else {
            $this->markTestSkipped('No Agenda set');
        }
    }

    /**
     * @covers \mServer\Client::logBanner
     */
    public function testlogBanner(): void
    {
        $this->object->logBanner();
        $lastMessage = end($this->object->getStatusMessages());
        $this->assertStringContainsString('PHPmServer', $lastMessage->body);
    }

    /**
     * @covers \mServer\Client::setUp
     */
    public function testsetUp(): void
    {
        $this->object->setUp(['url' => 'http://localhost:12345']);
        $this->assertEquals('http://localhost:12345', $this->object->url);
    }

    /**
     * @covers \mServer\Client::setAuth
     */
    public function testsetAuth(): void
    {
        $this->assertTrue($this->object->setAuth());
    }

    /**
     * @covers \mServer\Client::setInstance
     */
    public function testsetInstance(): void
    {
        $this->object->setInstance('test');
        $this->assertArrayHasKey('STW-Instance', $this->object->defaultHttpHeaders);
    }

    /**
     * @covers \mServer\Client::setApplication
     */
    public function testsetApplication(): void
    {
        $this->object->setApplication('test');
        $this->assertEquals('test', $this->object->defaultHttpHeaders['STW-Application']);
    }

    /**
     * @covers \mServer\Client::setCheckDuplicity
     */
    public function testsetCheckDuplicity(): void
    {
        $this->object->setCheckDuplicity(true);
        $this->assertEquals('true', $this->object->defaultHttpHeaders['STW-Check-Duplicity']);
    }

    /**
     * @covers \mServer\Client::curlInit
     */
    public function testcurlInit(): void
    {
        $this->assertTrue($this->object->curlInit());
    }

    /**
     * @covers \mServer\Client::setPostFields
     */
    public function testsetPostFields(): void
    {
        $this->object->setPostFields(['test']);
        $this->assertEquals(['test'], $this->object->postFields);
    }

    /**
     * @covers \mServer\Client::doCurlRequest
     *
     * @todo   Implement testdoCurlRequest().
     */
    public function testdoCurlRequest(): void
    {
        $this->assertEquals('', $this->object->doCurlRequest());
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @covers \mServer\Client::performRequest
     *
     * @todo   Implement testperformRequest().
     */
    public function testperformRequest(): void
    {
        $this->assertEquals('', $this->object->performRequest());
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @covers \mServer\Client::processResponse
     *
     * @todo   Implement testprocessResponse().
     */
    public function testprocessResponse(): void
    {
        $this->assertEquals('', $this->object->processResponse());
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @covers \mServer\Client::getStatus
     */
    public function testgetStatus(): void
    {
        $this->assertTrue($this->object->isOnline());
    }

    /**
     * @covers \mServer\Client::takeData
     */
    public function testtakeData(): void
    {
        $this->object->takeData(['test' => 'true'], true);
        $this->assertEquals(['test' => 'true'], $this->object->getData());
    }

    /**
     * @covers \mServer\Client::create
     *
     * @todo   Implement testcreate().
     */
    public function testcreate(): void
    {
        $this->assertEquals('', $this->object->create());
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @covers \mServer\Client::addToPohoda
     */
    public function testaddToPohoda(): void
    {
        $this->assertEquals(1, $this->object->addToPohoda());
    }

    /**
     * @covers \mServer\Client::updateInPohoda
     *
     * @todo   Implement testupdateInPohoda().
     */
    public function testupdateInPohoda(): void
    {
        $this->assertEquals('', $this->object->updateInPohoda());
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @covers \mServer\Client::filterToMe
     */
    public function testfilterToMe(): void
    {
        $this->assertEquals(['id' => null], $this->object->filterToMe());
    }

    /**
     * @covers \mServer\Client::getColumnsFromPohoda
     *
     * @todo   Implement testgetColumnsFromPohoda().
     */
    public function testgetColumnsFromPohoda(): void
    {
        $this->assertEquals('', $this->object->getColumnsFromPohoda());
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * @covers \mServer\Client::__wakeup
     */
    public function testWakeup(): void
    {
        $this->assertEquals('', $this->object->__wakeup());
    }
}
