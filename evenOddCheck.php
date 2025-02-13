<?php
// Function to check if a string is a palindrome
function isPalindrome($str) {
    $reversed = strrev($str);
    return $str === $reversed;
}

// Input
$string = "madam";

// Output
if (isPalindrome($string)) {
    echo "$string is a Palindrome.";
} else {
    echo "$string is not a Palindrome.";
}
?>
