<?php

namespace Test\mServer;

use mServer\Adressbook;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2021-01-01 at 21:47:12.
 */
class AdressbookTest extends \PHPUnit\Framework\TestCase {

    /**
     * @var Adressbook
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void {
        $this->object = new Adressbook();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void {
        
    }

    /**
     * @covers mServer\Adressbook::create
     * @todo   Implement testcreate().
     */
    public function testcreate() {
        $this->assertEquals('', $this->object->create());
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }

}
