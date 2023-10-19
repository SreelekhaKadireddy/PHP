<?php
//string manipulations
$str = "Hello , World !"; //original string
echo strlen($str),"\n";
echo str_word_count($str),"\n";
echo strrev($str),"\n";
echo strpos($str,"World"),"\n";
echo str_replace("World","php",$str),"\n";
$str2="learn php strings";
echo str_replace($str,$str2, $str),"\n";


?>