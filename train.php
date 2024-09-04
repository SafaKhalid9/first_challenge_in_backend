<?php
	echo "Hello Safa" . "<br>";
//condition
$num1 = 10;
$num2 = 100;
if($num1 > $num2){
	echo "Yes " . $num1 . " is greater than " . $num2;
}
elseif($num1 < $num2){
	echo "Yes " . $num1 . " is smaller than " . $num2;
}
else{
	echo "Yes " . $num1 . " is equal " . $num2;
}

//data type
$name = "Noor";
$age = 21;
echo gettype($name) . "<br>";
var_dump($name);
echo "<br>";

echo gettype($age) . "<br>";
var_dump($age);
echo "<br>";

echo "Hello " . $name . " your age is " .$age . "<br>";
$names = array("Safa", 1, 2.5, 60, " Noor");
echo gettype($names) . "<br>";
var_dump($names);
echo "<br>";

$s = null;
echo gettype($s) . "<br>";
var_dump($s);
echo "<br>";

//constants
define("FIRST_NAME", "Safa", false);
echo FIRST_NAME . "<br>";

echo PHP_INT_MAX . "<br>";

//operators
$a = 10;
$b = 5;
echo $a + $b . "<br>";

$c = $a - $b;
if($c === 5){
	echo "correct number" . "<br>";
}
else{
	echo "wrong number" . "<br>";
}
if ($a + $b == 15 && $c == 2)
{
		echo "correct number2" . "<br>";
}
else{
	echo "wrong number2" . "<br>";
}

// $file = @fopen("Safa.txt", "r") or die("This is not found");
// echo "<br>";

$var2 = "html";
$var2 .= " css";
$var2 .= " js";
$var2 .= " python";
echo $var2 . "<br>";

$num3 = 4;
echo $num3++ . "<br>";
echo $num3++ . "<br>";

$num4 = 90;
echo --$num4 . "<br>";
echo --$num4 . "<br>";

//loop
for($i=0; $i<=20; $i++){
	echo $i . "<br>";
}
$langs = array("html", "css", "js");
echo "<ul>";
	for($i=0; $i < count($langs); $i++){
		echo "<li>" . $langs[$i] . "</li>";
	}
echo "</ul>";

$l = 1;
while ($l <10){
	echo $l . "<br>";
	$l++; 
}
$g = 1;
do{
	echo $g . "<br>";
	$g++; 
}while($g <= 10);


$countries = array("yemen", "Sudan", "Quater");
foreach($countries as $country){
	echo $country . "<br>";
}


// function
function Hello(){
	echo "Hello Saja" . "<br>";
}
Hello();


function HelloName($name){
	echo "Hello " . $name ."<br>";
}
HelloName("Noor");


function calculateAge($age){
	$result = $age * 365;
	return $result;
}
echo calculateAge("21") . "<br>";

//array
$games = array("soccer", "teniss", "football", "golf");
echo "<pre>";
print_r($games);
echo "</pre>";
echo $games[2] . "<br>";
echo "The count of elements in array: " . count($games) . "<br>";
if(in_array("teniss", $games, true)){
	echo "yes its in array." . "<br>";
}
$search = array_search("golf",  $games, true);
echo "yes its in array." . "<br>";
array_push($games, "running", "walk");
array_unshift($games, "swim", "wool");
echo "<pre>";
print_r($games);
echo "</pre>";
array_pop($games);
array_shift($games);
echo "<pre>";
print_r($games);
echo "</pre>";
sort($games);
sort($games, SORT_REGULAR);
echo "<pre>";
print_r($games);
echo "</pre>";

$Languages = array('html' => '90%',
 					'css' => '80%',
 					'python' => '100%',
 					'js' => '40%');
echo "<pre>";
print_r($Languages);
echo "</pre>";
if(array_key_exists("python", $Languages))
{
	echo "yes its found: " . $Languages["python"];
}
asort($Languages);
echo "<pre>";
print_r($Languages);
echo "</pre>";
arsort($Languages);
echo "<pre>";
print_r($Languages);
echo "</pre>";
ksort($Languages);
echo "<pre>";
print_r($Languages);
echo "</pre>";
krsort($Languages);
echo "<pre>";
print_r($Languages);
echo "</pre>";

$diet = array("Day One" => array("apple", "orange", "milk"),
			"Day Two" => array("kiwi", "banana", "milk"),
			"Day Three" => array("egg", "milk"),
);
echo "<pre>";
print_r($diet);
echo "</pre>";

$numbers = array(1, 90, 60, 5.5, 45);
echo "<pre>";
print_r($numbers);
echo "</pre>";
$reverse = array_reverse($numbers);
echo "<pre>";
print_r($reverse);
echo "</pre>";
shuffle($numbers);
echo "<pre>";
print_r($numbers);
echo "</pre>";
$sum = array_sum($numbers);
echo "Sum of array = " . $sum . "<br>";


$fi = array_fill(4, 7, "Safa");
echo "<pre>";
print_r($fi);
echo "</pre>";
$uniqe = array_unique($fi);
echo "<pre>";
print_r($uniqe);
echo "</pre>";
