<?php
// not var -php use $
//write a php code to create a for loop which prints every alternate number from 10-50
//for loop have 3 parts - part one start value 10/ 
//part two- condition/end part  value 50 - <=50/ when over 5 o it stop
//  when over 5 o it stop- last part: increase by 2 +=2 means counter = counter +2

//counter is variable
for ($counter=10; $counter<=50; $counter+=2){
    echo("<br> $counter" );
}


// question2-Write a php code to print all multiples of 5 from 100 to 10
//reduce by 5

for ($num=100; $num>=10; $num-=5 ){
    echo("<br> $num" );
}


//Write a  code to add all numbers from 1-10
//increse by 1
//make total 1+2+3 until 10 and total all number
// add start value have to be 0
$total= 0;
for ($numTwo=1; $numTwo<=10; $numTwo++ ){
  $total=$total+$numTwo;
}
echo("<br> $total");



//Write a code to multiply all numbers from 1-10
//mutiply start value have to be one
//$endvalue it will end at 5--mutiply 1 to 5

$endvalue = 5;
$final= 1;
for ($num2=1; $num2<=$endvalue; $num2++ ){
    $final=$final*$num2;
}
echo("<br> $final");


?>