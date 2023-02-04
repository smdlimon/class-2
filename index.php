<?php

//Write a program that can calculate the sum and average of three numbers.//

$num1 = 20;
$num2 = 40;
$num3 = 30;

$sum =($num1+$num2+$num3);
$average = ($sum / 3);
echo "addition number is", " $sum";
echo "<br>","<br>","<br>";
echo "Average value is", "  $average";
echo "<br>","<br>","<br>";

//There is given the radius of a circle. Find the area, circumference of it. (Use π as a symbolic constant).//

$r = 2;
$a = 3.1416;
$area = $a * $r * $r;
$b = 2 * $a * $r;
echo "Area is ", " $area" ;
echo "<br>","<br>","<br>";
echo "Circumference is", " $b";
echo "<br>","<br>","<br>";

//There is given the area and height of a triangle. Find out the base of triangle.
$h = 3;
$area = 12;
$base = 1/2*($area*$h);
echo "Base value is ",$base;
echo "<br>","<br>","<br>";

//Find out the maximum of two numbers using if structure
$num1 = 26;
$num2 = 35;
if($num1>$num2){
    echo "Maximum number is ","$num1";
}
else{
    echo "Maximum number is ","$num2";

}
echo "<br>","<br>","<br>";




//Find out the maximum of three numbers using only if structure.
$num1 = 26;
$num2 = 35;
$num3 = 39;
if($num1>$num2 && $num1>$num3){
    echo "maximum number is ", "$num1";
}
elseif($num2>$num3 && $num2>$num3 ){
    echo "maximum number is ", "$num2";

}
else{
    echo " maximum number is ","$num3";
}
echo "<br>","<br>","<br>";


//Writ a program that can test whether it is divisible by 5 or not//

$num = 6;
if($num % 2==0){
    echo " Number is Divisible ";
}
else{
    echo "Number is Not divisible";

}
echo "<br>","<br>","<br>";

//Write a program that can test whether a number is Odd or Even.
$num = 60;
if($num % 2==0){
    echo "Number is Even";

}
else{
    echo "Number is odd";
}
echo "<br>","<br>","<br>";

//There are three values of three lines; Find out the area of it.//

$a = 14;
$b = 15;
$c = 16;
$s = ($a + $b + $c)/2;
$area=(sqrt($s*($s-$a)*($s-$b)*($s-$c)));
echo "Area values is  ", "<br>", "$area";
echo "<br>","<br>","<br>";




$num = 9;

switch ($num) {
    case 1:
        echo "January";
        break;
    case 2:
        echo "February";
        break;
    case 3:
        echo "March";
        break;
    case 4:
        echo "April";
        break;
    case 5:
        echo "May";
        break;
    case 6:
        echo "June";
        break;
    case 7:
        echo "July";
        break;
    case 8:
        echo "August";
        break;
    case 9:
        echo "September";
        break;
    case 10:
        echo "October";
        break;
    case 11:
        echo "November";
        break;
    case 12:
        echo "December";
        break;
    default:
        echo "Invalid Number";
}


echo "<br>","<br>","<br>";


$week = 7;

switch ($week) {
    case 1:
        echo "Saturday";
        break;
    case 2:
        echo "Sunday";
        break;
    case 3:
        echo "Monday";
        break;
    case 4:
        echo "Tuesday";
        break;
    case 5:
        echo "Wednesday";
        break;
    case 6:
        echo "Thursday";
        break;
    case 7:
        echo "Friday";
        break;
    default:
        echo "Invalid Number";
}




$key = 'b';
 
if(ctype_alpha($key)){
   echo "It is a Character.";
}
elseif(ctype_digit($key)){
   echo "It is a Digit.";
}
else{
    echo "It is a Functional K";
}




$key = 'u';
 
$ascii_value = ord($key);
 
echo "The ASCII value of the key $key is $ascii_value";







//Write a program that can test a year whether it is leaper or not