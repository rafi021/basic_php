<?php

/* functions  - a block of statements that can be used repeatedly in a program 

function functinName(){
    code to be executed
}

1. function with no return
2. function with arguments
3. function with default argument value
4. function with returning values
5. function with referenced argument

*/

// function with no return
// function printMessage(){
//     print "We are learning PHP language <br>";
// }

// printMessage(); // call the function


// function with arguments
// function fullName($firstName, $lastName){
//     print $firstName.' '.$lastName ."<br>";
// }

// fullName("Omar bin", "Ibrahim");


// funtion with default argument value
// function printFullName($fullName="Mahmud Ibrahim"){
//     echo "Hello Mr. $fullName";
// }

// printFullName("Omar Bin Ibrahim");



// funtion with returing value
// function fullName($firstName, $lastName){
//     return $firstName.' '.$lastName ."<br>";
// }

// print fullName("Mr.", "Anas");


// return type declearation
// function addNumbers(int $x=0, int $y=0) :float
// {
//     return $x+$y;
// }

// print addNumbers(5);



// function with referenced argument

// function addFivetoCount(&$countValue){
//     $countValue +=5;
// }

// $countingNumber = 20;

// addFivetoCount($countingNumber);

// echo $countingNumber;


function calculator($method="sum", int $var1, int $var2){
    if($method == 'sum')
    return $var1+$var2;
    elseif($method == 'sub')
    return $var1 - $var2;
    elseif($method == 'mul')
    return $var1*$var2;
    elseif($method == 'div')
    return $var1/$var2;
}


print calculator('div', 5, 6);
?>