<?php
    namespace Test\Model;

use Model\StringFormatter;
use PHPUnit\Framework\TestCase;

class StringFormatterTest extends TestCase
{
    private static $str1;
    private static $str2;
    private static $stringFormatter;
    
        /**
         * StringFormatterTest constructor.
         */
        public function __construct()
        {
            parent::__construct();
            
            self::$str1 = "Hello";
            self::$str2 = "WorlD";
            self::$stringFormatter = new StringFormatter();
        }
    
    public function testConcat()
    {
        $this->assertSame("HelloWorlD", self::$stringFormatter->concat(self::$str1, self::$str2));
    }
    
    public function testCamelCase()
    {
        $this->assertSame("HelloWorld", self::$stringFormatter->toCamelCase([self::$str1, self::$str2]));
    }
    
    public function testsuffix()
    {
        $this->assertSame("WorldHello", self::$stringFormatter->prefix(self::$str1, self::$str2, true));
        $this->assertSame("WorlDHello", self::$stringFormatter->prefix(self::$str1, self::$str2));
    }
}
