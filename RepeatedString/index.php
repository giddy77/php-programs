<?php
/**
 * program to calculate the number of occurence in a given string to a given length
 * 
 * first count the appearance of the character in the given string,
 * multiply by the number the string is repeated which is the quotient 
 * add the count of the appearance of the character in the remainder string
 */
class RepeatedString{

    function repeatedString($string, $n, $char)
    {
        $str_length = strlen($string);
        
        $quotient = intdiv($n , $str_length);

        $remainder = $n % $str_length; //acts as the length of the remainder string

        $counts = $quotient *( $this->stringCount($string, $str_length, $char)) + $this->stringCount($string, $remainder, $char);
        return $counts;
    }

    function stringCount($s, $str_length, $char)
    {
        $count = 0;

        for($i=0;$i<$str_length; $i++){
            if($s[$i] == $char){
                $count++;
            }
        }
        return $count;
    }

    
}

$repeated_string = new RepeatedString;
$result = $repeated_string->repeatedString('abc',10, 'a');
echo $result."\n";