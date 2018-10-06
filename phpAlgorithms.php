<?php
/**
 * Palindrome
 * A palindrome is a word, number, phrase, or other sequence of characters which reads the same
 * backward as forward, such as madam or racecar or the number 10201. Sentence-length palindromes
 * may be written when allowances are made for adjustments to capital letters, punctuation, and
 * word dividers, such as "A man, a plan, a canal, Panama!", "Was it a car or a cat I saw?"
 * or "No 'x' in Nixon".
 */

/**
 * @param $strToCheck
 * @return boolean
 */
function palindromeCheck($strToCheck){

    $strToLowercase = strtolower($strToCheck);
    $trimedStr = str_replace(" ", "", str_replace(",", "", $strToLowercase));
    $reversedStr = strrev($trimedStr);

    if ($trimedStr == $reversedStr){
        return "true";
    }

    return "false: " . $trimedStr . " = " . $reversedStr;
}
echo "a word: " . palindromeCheck("racecar") . "<br>";
echo "a number: " . palindromeCheck("10201") . "<br>";
echo "a phrase: " . palindromeCheck("A man, a plan, a canal, Panama") . "<br>";