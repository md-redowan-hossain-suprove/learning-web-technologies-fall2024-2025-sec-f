<?php
$number1 = 22;
$number2 = 30;
$number3 = 32;

echo "Number 1 is " . $number1 . "<br>";
echo "Number 2 is " . $number2 . "<br>";
echo "Number 3 is " . $number3 . "<br> <br>";

if ($number1 > $number2 && $number1 > $number3) 
{
    echo "The Largest Number is : " . $number1;
} 
elseif ($number2 > $number1 && $number2 > $number3) 
{
    echo "The Largest Number is : " . $number2;
} 

else 
{
    echo "The Largest Number is : " . $number3;
}
