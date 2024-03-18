<?php
    $str="This";
    echo $str;

    echo "<br>";
    $lenn=strlen($str);
    echo "The length of this string is ". $lenn. ". Thank you";
    echo "<br>";
    echo "The number of words in this string is ". str_word_count($str). ". Thank you";
    echo "<br>";
    echo "The reversed string is ". strrev($str). ". Thank you";
    echo "<br>";
    echo "The search for is in this string is ". strpos($str,"is"). ". Thank you";
    echo "<br>";
    echo "The replaced string is ". str_replace("is","at",$str). ". Thank you";
    // echo $lenn;
?>