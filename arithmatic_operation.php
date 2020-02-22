<?php 
$x = 10;
$y = 20;

$z = $x+$y;
echo $z;

$z = $x-$y;
echo $z;

$z = $x*$y;
echo $z;

$z = $x/$y;
echo $z;


//Quize
$a = 1;
$a = $a + 10;

echo $a;

// augmented expression

$a += 10; // $a = $a + 10;
$a  = $b + 20; // $a += 20 OR $b += 20; is WRONG
$b = $b - 20; // $b -=20;

$x +=10; // $x = $x+10;

$x *=10; // $x = $x*10;

$y = $y/10; // $y /=10;

//QUIZE
$a = 1;
$b = 5;
$a = $a+$b+20;
//Answer
$a +=$b+20;


//QUIZE
$a = $a*$b;
//Answer
$a *=$b;

$a = $a+1;
$a += 1;
$a++;

$a = $a-1;
$a -= 1;
$a--;

$a=10;
$b =$a%3;
echo $b;

$a=12;
$b =$a%3;
echo $b;


?>