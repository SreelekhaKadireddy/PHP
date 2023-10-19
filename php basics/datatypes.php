<?php
//string
$x="hello world";
$y='welcome';
echo "$x\n$y";
//integer
$x=10;
echo"\n$x";
var_dump($x);//returns data type and value

//float
$num=10.58;
var_dump($num);
//boolean
$bool=true;
$f=false;
var_dump($bool);
var_dump($f);
//array-stores multiple values in a single variable
$nums=array(1,2,3,4,5);
$cars=array('volvo','bmw','toyota');
var_dump($nums);
var_dump($cars);
//object-instance of class
//class-template of objects
class Car{
    public $color;
    public $model;
    public function __construct($color,$model){
        $this->color=$color;
        $this->model=$model;
    }
    public function message(){
        return ("my car is  ".$this->color. " ".$this->model."!");
    }
}
$mycar=new Car("black","volvo");
echo $mycar->message(),"\n";
$mycar=new Car("white","bmw");
echo $mycar->message(),"\n";

//null
//$a;
$b=null;
echo $b;
//var_dump($a);
var_dump($b);
?>