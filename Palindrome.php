<?php

class Palindrome
{
    public static function isPalindrome($word)
    {
        $lowerCaseWord = strtolower($word);
        $characters = str_split($lowerCaseWord);
        $charactersReverse = array_reverse($characters);
        $lowerCaseWordReverse = implode('', $charactersReverse);

        return ($lowerCaseWordReverse == $lowerCaseWord);
    }
}

echo Palindrome::isPalindrome('Deleveled');
