<?php
    class Palindrome
    {
        function identify($word)
        {
            // $split_length = ($length / 2);
            $string = str_replace(' ', '', (strtolower($word)));
            $string_array = str_split($string);
            $length = strlen($string)-1;
            $i = 0;
            $reverse = array();
            while ($i < $length+1)
            {
                array_push($reverse, $string[$length - $i]);
                $i++;
            }
            if ($string_array == $reverse)
            {
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }
    }
 ?>
