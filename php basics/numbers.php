<?php
echo PHP_INT_MAX,"\n";
echo PHP_INT_MIN,"\n";
echo PHP_INT_SIZE,"\n";
$x=866;
var_dump(is_int($x));
var_dump(is_long($x));
//float
var_dump(PHP_FLOAT_MAX);
var_dump(PHP_FLOAT_MIN);
var_dump(PHP_FLOAT_DIG);
var_dump(PHP_FLOAT_EPSILON);
$f=76.9;
var_dump(is_float($f));
var_dump(is_double($f));
//infinite-num larger than float max
$inf=1.9e433;
var_dump(is_infinite($inf));
var_dump(is_nan($inf));
var_dump(is_finite($inf));
//numerical string
$x=86645;
var_dump(is_numeric($x));
//casting
$a=12.86;
echo (int)$a;
?>