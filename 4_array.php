<?php 
/* An array stores multiple values in one single variable 
For example:

$companies = array("Honda", "Yamaha", "Bajaj", "Sujuki", "Kawasaki");

Array types: 
1. Index Array - array with a numeric index   
$companies = array("Honda", "Yamaha", "Bajaj", "Sujuki", "Kawasaki");

2. Associative Array - array with named keys  
$marketShare = array("Honda" => "35b", "Yamaha" => "32b", "Bajaj" =>"18b", "Sujuki" => "28b", "Kawasaki" => "25b");

3. Multidimensional Array - array containing one or more arrays
$companyProfiles = array(
    array("Honda", "35b", 100K),
    array("Yamaha", "32b", 99K), 
    array("Bajaj", "18b", 85K)
);


*/


/* loop throght array */
// $companies = array("Honda", "Yamaha", "Bajaj", "Sujuki", "Kawasaki");
// $companiesLength = count($companies);

// for($index=0; $index < $companiesLength; $index++){
//     echo "$index => $companies[$index] <br>";
// }


// $marketShare = array("Honda" => "35b", "Yamaha" => "32b", "Bajaj" =>"18b", "Sujuki" => "28b", "Kawasaki" => "25b");

// foreach ($marketShare as $key => $value) {
//     echo "Company: $key " . " Market share: $value $ <br>";
// }


// $companyProfiles = array(
//     array("Honda", "35b", '100K'),
//     array("Yamaha", "32b", '99K'), 
//     array("Bajaj", "18b", '85K')
// );

// for ($row=0; $row < count($companyProfiles) ; $row++) { 
//    echo "<p>Row # $row</p>";
//    echo "<ul>";

//    for ($col=0; $col <3 ; $col++) { 
//         echo "<li>".$companyProfiles[$row][$col]."</li>";
//    }
//    echo "</ul>";
// }


// Array sorting
/*
sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key
*/


// $companies = array("Honda", "Yamaha", "Bajaj", "Sujuki", "Kawasaki");
// // sort($companies);
// rsort($companies);
// for($index=0; $index < count($companies); $index++){
//     echo "$index => $companies[$index] <br>";
// }

// $marketShare = array("Honda" => "35b", "Yamaha" => "32b", "Bajaj" =>"18b", "Sujuki" => "28b", "Kawasaki" => "25b");
// // asort($marketShare);
// // arsort($marketShare);
// // ksort($marketShare);
// krsort($marketShare);

// foreach ($marketShare as $key => $value) {
//     echo "Company: $key " . " Market share: $value $ <br>";
// }



// most used array functions
$companies = array("Honda", "Bajaj", "Yamaha", "Bajaj", "Sujuki", "Kawasaki");
$marketShare = array("Honda" => "35b", "Yamaha" => "32b", "Bajaj" =>"18b", "Sujuki" => "28b", "Kawasaki" => "25b");

/* is_array() -> return 1 or True */
// echo is_array($companies);

/* in_array() -> return 1 or True */
// $result = in_array('Honda', $companies);
// echo $result;

// array_merge -> return a new array (use print_r)
$merged = array_merge($companies, $marketShare);
// print_r($merged);

// array_keys -> extract all keys
// print_r(array_keys($merged));

// array_key_exists -> 1 or True
// print_r(array_key_exists('Honda', $merged));


// array_push -> add a new value to existing array
// array_push($companies, "BMW");
// print_r($companies);


// array_pop -> remove last value
// array_pop($companies);
// array_pop($companies);
// array_pop($companies);
// array_pop($companies);
// print_r($companies);


// array_values -> return all values
// print_r(array_values($merged));


// array_map -> loop through each elements of an array and perform an single action to all - returns another array
// function salesTax($price) {
// 	return number_format ( ($price * 1.05), 2, '.', '' );
// }

// $items = array (
// 		100,
// 		50,
// 		250,
// 		70,
// 		500 
// );
// $finalCost = array_map ( 'salestax', $items );
// print_r ( $finalCost );


// array_unique
// print_r(array_unique($companies));


// array_slice - returns a new array after removing indexed value
// $companies = array("Honda", "Yamaha", "Bajaj", "Sujuki", "Kawasaki");
// print_r($companies);
// print_r(array_slice($companies, 1, 5));
?>

