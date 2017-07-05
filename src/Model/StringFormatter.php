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
    
    /**
     * 	Function for transform a array of string to camel case
     *
     * @param array $arrayOfString The array of string
     *
     * @return string the camelCase string
     */
    public function toCamelCase(array $arrayOfString):string
    {
        $result = "";
        foreach ($arrayOfString as $string) {
            $result .= mb_strtoupper($string[0]) . mb_strtolower(substr($string, 1));
        }
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
