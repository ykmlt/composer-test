<?php
use PHPUnit\Framework\TestCase;
use Foo\HelloWorld;

class HelloWorldTest extends TestCase
{
    public function testSting()
    {
        $msg = new HelloWorld();
        $this->assertEquals('Hello World !', (string)$msg);
    }
}