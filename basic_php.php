<?php
  
    echo "Hello World ";
    echo '<br>';
    echo '<br>';


//variable and data types
$n1= 'php class';
echo $n1;
$n2= 30;
$n3= 56.6;
echo $n2;



echo '<br>';
//string 
echo strlen("Hello World");
echo '<br>';
echo str_word_count("Hello World");
echo '<br>';
echo strrev("Hello World");
echo '<br>';
echo strpos("Hello World","World");
echo '<br>';
echo str_replace("World","Web","Hello World");
echo '<br>';
//constant
define("value1","Welcome to my class!");
echo value1;

//operator
$x=10;
$y=7;
echo '<br>';
echo $x + $y;
echo '<br>';
echo $x - $y;
echo '<br>';
echo $x * $y;
echo '<br>';
echo $x / $y;
echo '<br>';
echo $x ** $y;
echo '<br>';

$x1=100;
$x1+=10;
echo $x1;
echo '<br>';

if($x==10 and $y==6){
    echo "well done";
}
else{
     echo "not done";
    
}

echo '<br>';
//concate
$txt1="PHP";
$txt2="CLASS";

echo $txt1.$txt2;

echo '<br>';

//index array
$s1=array("C","C++","JAVA");
echo $s1[2];
echo '<br>';
//associative 
$s2=array("C"=>12,"C++"=>10,"JAVA"=>20);
echo "C has ".$s2['C']."id";
echo '<br>';

//multidimentional array

$s3=array(
    
    array("C","C++","JAVA"),
    array("C1","C++1","JAVA1"),
    array("C2","C++2","JAVA2")
);
echo $s3[0][1];

echo '<br>';

//for
for($x=0;$x<=10;$x++){
    echo "The number: $x <br>" ;
}

//while
$x=1;
while($x<=5){
    echo "The number: $x <br>" ;
    $x++;
}

//for each
$s1=array("C","C++","JAVA");
foreach ($s1 as $value){
    echo "$value <br>";
}


function person($name,$age){
    echo "$name and $age";
}

person("abc",10);
echo '<br>';
//global

$a = 1;
$b = 2;  
function Sum()
{
   global $a,$b;
   $b = $a + $b;
}
Sum();  
echo $b;
echo '<br>';

//static


function Test1()
{
    static $a = 0;
    echo $a;
    $a++;
}
Test1();
Test1();
Test1();
Test1();




?>