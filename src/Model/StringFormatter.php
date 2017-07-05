<?php
    namespace Model;

class StringFormatter
{
    
    /**
     *  Function for concat two string
     *
     * @param string $str1 Start string
     * @param string $str2 End string
     *
     * @return string
     */
    public static function concat(string $str1, string $str2):string
    {
        return $str1.$str2;
    }
        
    public function toCamelCase(string $str):string
    {
        $result = "";
        return $result;
    }
        
    public function prefix(string $str1, string $str2):string
    {
        $result = "";
        return $result;
    }
        
    public function suffix(string $sr2, string $str2):string
    {
        $result = "";
        return $result;
    }
}
