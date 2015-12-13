<?php
    class Palindrome
    {
        function identify($word)
        {
            // $split_length = ($length / 2);
            $string = str_replace(' ', '', (strtolower($word)));
            $new_string = preg_replace('/[^a-zA-Z0-9\s]/', '', $string);
            $string_array = str_split($new_string);
            $length = strlen($new_string)-1;
            $i = 0;
            $reverse = array();
            while ($i < $length+1)
            {
                array_push($reverse, $new_string[$length - $i]);
                $i++;
            }
            if ($string_array == $reverse)
            {
                return 'Yes';
            }
            else
            {
                return FALSE;
            }
        }
    }
 ?>
