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
            $result .= ucfirst(mb_strtolower($string));
        }
        
        return $result;
    }
    
    /**
     * Function for add a prefix
     *
     * @param string $str1 The base string
     * @param string $str2 The prefix string
     * @param bool   $toCamelCase If defined the returned sting is camelCased
     *
     * @return string
     */
    public function prefix(string $str1, string $str2, bool $toCamelCase = false):string
    {
        if ($toCamelCase) {
            $str1 = ucfirst(mb_strtolower($str1));
            $str2 = ucfirst(mb_strtolower($str2));
        }
       
        return self::concat($str2, $str1);
    }
	
	/**
	 * Function for add a suffix
	 *
	 * @param string $str1 The base string
	 * @param string $str2 The suffix string
	 * @param bool   $toCamelCase If defined the returned sting is camelCased
	 *
	 * @return string
	 */
    public function suffix(string $str1, string $str2, bool $toCamelCase = false):string
    {
        return self::prefix($str2, $str1, $toCamelCase);
    }
}
