<?php
    require_once 'src/Palindrome.php';

    class PalindromeTest extends PHPUnit_Framework_TestCase
    {
        function test_identify_single()
        {
            //Arrange
            $test_Palindrome = new Palindrome;
            $word = 'kayak';

            //Act
            $result = $test_Palindrome->identify($word);

            //Assert
            $this->assertEquals(TRUE, $result);
        }

        // function test_identify_2()
        // {
        //     //Arrange
        //     $test_Palindrome = new Palindrome;
        //     $word = ''
        // }
    }
 ?>
