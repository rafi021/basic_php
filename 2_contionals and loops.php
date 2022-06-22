<?php
/*Conditional Statements*/

// if....else
// $age = 15;

// if($age >= 18)   ///  =, >, <, != >=, <=, +,-,*,/,++--
// echo "Happy Birthday!!";
// else
// echo "Your are below 18";




// $color ="red";
// if($color == 'blue')
// print "Color is : blue";
// else
// print "Color is: not blue";


// if...elseif...else
// $color ="white";
// if($color == 'blue')
// print "Color is : blue";
// elseif($color == 'red')
// print "Color is: red";
// elseif($color == 'yellow')
// print "Color is: Yellow";
// else
// print "Color is undefined!"



// switch
// $color = "yellow";

// switch ($color){
//     case "blue":
//         echo "This color is blue";
//         break;
//     case "yellow":
//         echo "This color is yellow";
//         break;
//     case "green":
//         echo "This color is green";
//         break;
//     default:
//         print "Not specific color found!";     
// }



/*PHP Loops */

// while
$t_counter = 0;

// while ($t_counter <= 100){
//     print "The Ticket Counter: $t_counter <br>";
//     $t_counter++;
// }

// do while
// do {
//     print "The Ticket Counter: $t_counter <br>";
//     $t_counter++;
// } while ($t_counter <= 50);



//for
// for($t_counter = 0 ; $t_counter<=300; $t_counter++){
//     print "The Ticket Counter: $t_counter <br>";
// }



// foreach ---> array {key: value}
// $busket = ['apple', 'banana', 'cloths', 'toys', 'pen', 'book'];

// foreach($busket as $value){
//     print "$value <br>";
// }


$persons = array(
    'Sakil' => 35, 
    'Ahmed' => 45, 
    'Rubel' => 15, 
    'Joynal' => 55, 
    'Lima' => 25, 
    'Tania' => 37, 
    'Joy' => 5, 
);

foreach ($persons as $key => $value){
    print "Name: $key Age: $value <br>";
}

?>