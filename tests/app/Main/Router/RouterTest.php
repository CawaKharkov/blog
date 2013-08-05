<?php

namespace Main\Router;


use   Main\Config\ConfigReader,
     Main\Router\Router;
/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-08-05 at 17:43:22.
 */
class RouterTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Router
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() 
    {
        
        $routeConfig = ConfigReader::readConfig('app');
         
        $this->object = new Router($routeConfig['router']);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers Main\Router\Router::process
     * @todo   Implement testProcess().
     */
    public function testProcess() 
    {
       
        $this->assertTrue($this->object->process());
    }

}