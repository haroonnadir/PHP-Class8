<?php
// $cars = [
//     "Volvo",
//     "BMW",
//     "Toyota"
//   ];
// echo $cars[2];


// $cars = array("Volvo", "BMW", "Toyota");
// echo $cars[2];


// $cars = array("Volvo", "BMW", "Toyota");
// $cars[1] = "Ford";
// var_dump($cars);

// $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
// var_dump($car);

// $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
// echo $car["model"];


// $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
// $car["year"] = 2024;
// var_dump($car);


// $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
// foreach ($car as $x => $y) {
//   echo "$x: $y <br>";
// }



$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";



$emp = [
    [1,"Krishana","Manager",50000],
    [2,"Salman","Salesman",20000],
    [3,"Mohan","Computer Operator",12000],
    [4,"Amir","Driver",5000]
];
foreach ($emp as list($id, $name,$desg,$salary)) {
echo "$id $name $desg $salary </br>";
}
/* print with table tag */
echo "<table border='1px' cellpadding='5px' cellspacing='0'>
  <tr>
      <th>Emp Id</th>
      <th>Emp Name</th>
      <th>Designation</th>
      <th>Salary</th>
  </tr>";
foreach ($emp as list($id, $name,$desg,$salary)) {
echo "<tr><td>$id</td><td>$name</td><td>$desg</td><td>$salary</td></tr>";
}
echo "</table>";


$arr = array(
    "Java" => array(
        "SpringBoot",
        "Eclipse"
    ) ,
    "Python" => array(
        "Django"
    ) ,
    "PHP" => array(
        "CodeIgniter"
    )
); 
print_r($arr);
print ("<br>");
echo "Sub elements of an array: ". sizeof($arr) . "<br>";
echo "All elements of an array: ". sizeof($arr, 1);


$arr = array(
    "Java" => array(
        "SpringBoot",
        "Eclipse"
    ) ,
    "Python" => array(
        "Django"
    ) ,
    "PHP" => array(
        "CodeIgniter"
    )
);
 
print_r($arr);
print ("<br>");
echo "Sub elements of an array: " . count($arr) . "<br>";
echo "All elements of an array: ". count($arr, 1);


$array = ['apple', 'banana', 'mango']; 
//in_array() is used to check the existence of an element and returns the boolean value.
if (in_array('apple', $array)) { 
	echo true; 
} else { 
	echo false; 
} 
// It will echo true, because element presents in $array 
//array_search() is also search the element in the array but it returns the index (key) of element if it is found of the first record found.
$key = array_search('apple', $array); 
echo $key; 
// It will echo 0, because index of 'apple' in $array is  

// PHP function to illustrate the use of array_search()
function Search($value, $array)
{
	return (array_search($value, $array));
}
$array = array(
	"ram",
	"aakash",
	"saran",
	"mohan",
	"saran"
);
$value = "saran";
print_r(Search($value, $array));

// PHP program to illustrate array_replace_recursive() 
// function 
$array1 = array( "a" => array("red"), "b" => array("green", "blue")); 
$array2=array( "a" => array("yellow"), "b" => array("black")); 
$array3=array("a" => array("orange"),  "b" => array("burgundy")); 
print_r(array_replace_recursive($array1, $array2, $array3)); 



// PHP code to illustrate the use of array_pop() 
$array = array(1=>"ram", 2=>"krishna", 3=>"aakash");  
print_r("Popped element is "); 
echo array_pop($array);
print_r("\nAfter popping the last element, ". "the array reduces to: \n"); 
print_r($array); 


// PHP code to illustrate the use of array_push() 
// Input array 
$array = array("ram", "krishna", "aakash"); 
// elements to push 
$a1 = "rohan"; 
$a2 = "rajeeb"; 
$a3 = "saniya"; 
// array after pushing new elements 
print_r(array_push($array, $a1, $a2, $a3)); 


// PHP function to illustrate the use of array_shift() 
function Shifting($array) 
{ 
    print_r(array_shift($array)); 
    echo "\n"; 
    print_r($array); 
} 
$array = array("ram"=>2, "aakash"=>4, "saran"=>5, "mohan"=>100); 
Shifting($array); 

// PHP program to illustrate 
// the use of array_unshift() 
// Input Array 
$array = array("ram", "krishna", "aakash"); 
// Values to be added 
$a1 = "rohan"; 
$a2 = "rajeeb"; 
$a3 = "saniya"; 
// Calling array_unshift() 
array_unshift($array, $a1, $a2, $a3); 
// Print modified array 
print_r($array); 


$array1 = ['a' => 'apple', 'b' => 'banana'];
$array2 = ['b' => 'blueberry', 'c' => 'cherry'];
$merged = array_merge($array1, $array2);
print_r($merged);

$keys = ['a', 'b', 'c'];
$values = ['apple', 'banana', 'cherry'];
$combined = array_combine($keys, $values);
print_r($combined);


// PHP program to illustrate the  
// array_slice() function 
// Input array 
$array = array("ram", "krishna", "aakash", "gaurav", "raghav"); 
// Slice from pos 1 to pos 3                         
print_r(array_slice($array, 1, 3, true)); 


// PHP program to illustrate the use  
// of array_splice() function 
$array1 = array("10"=>"raghav", "20"=>"ram", "30"=>"laxman","40"=>"aakash","50"=>"ravi"); 
$array2 = array("60"=>"ankita","70"=>"antara"); 
echo "The returned array: \n"; 
print_r(array_splice($array1, 1, 4, $array2));   
echo "\nThe original array is modified to: \n"; 
print_r($array1); 



$array = ['a' => 'apple', 'b' => 'banana', 'c' => 'apple'];
$keys = array_keys($array, 'apple');
print_r($keys); // Outputs: Array ( [0] => a [1] => c )

$array = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry'];
$firstKey = array_key_first($array);
echo $firstKey; // Outputs: a+

$array = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry'];
$lastKey = array_key_last($array);
echo $lastKey; // Outputs: c

$array = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry'];
$exists = key_exists('b', $array);
echo $exists ? 'Key exists' : 'Key does not exist'; // Outputs: Key exists


$array = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry'];
$exists = array_key_exists('b', $array);
echo $exists ? 'Key exists' : 'Key does not exist'; // Outputs: Key exists


$array1 = ['a', 'b', 'c'];
$array2 = ['b', 'd'];
$result = array_diff($array1, $array2); // Result: ['a', 'c']


$array1 = ['a' => 1, 'b' => 2];
$array2 = ['b' => 3, 'c' => 4];
$result = array_diff_key($array1, $array2); // Result: ['a' => 1]

$array1 = ['a' => '1', 'b' => '2'];
$array2 = ['a' => '1', 'b' => '3'];
$result = array_diff_assoc($array1, $array2); // Result: ['b' => '2']


// function key_compare($key1, $key2) {
//     return $key1 <=> $key2;
// }
// $array1 = ['a' => '1', 'b' => '2'];
// $array2 = ['a' => '1', 'b' => '3'];
// $result = array_diff_uassoc($array1, $array2, 'key_compare'); // Result: ['b' => '2']


// function key_compare($key1, $key2) {
//     return $key1 <=> $key2;
// }
// $array1 = ['a' => '1', 'b' => '2'];
// $array2 = ['a' => '1', 'b' => '3'];
// $result = array_diff_uassoc($array1, $array2, 'key_compare'); // Result: ['b' => '2']



// function key_compare($key1, $key2) {
//     return $key1 <=> $key2;
// }
// $array1 = ['a' => '1', 'b' => '2'];
// $array2 = ['b' => '3', 'c' => '4'];
// $result = array_diff_ukey($array1, $array2, 'key_compare'); // Result: ['a' => '1']


// function value_compare($a, $b) {
//     return $a <=> $b;
// }
// $array1 = ['a' => '1', 'b' => '2'];
// $array2 = ['a' => '1', 'b' => '3'];
// $result = array_udiff_assoc($array1, $array2, 'value_compare'); // Result: ['b' => '2']


// function value_compare($a, $b) {
//     return $a <=> $b;
// }
// function key_compare($key1, $key2) {
//     return $key1 <=> $key2;
// }
// $array1 = ['a' => '1', 'b' => '2'];
// $array2 = ['a' => '1', 'b' => '3'];
// $result = array_udiff_uassoc($array1, $array2, 'value_compare', 'key_compare'); // Result: ['b' => '2']

// function value_compare($a, $b) {
//     return $a <=> $b;
// }
// $array1 = ['a', 'b', 'c'];
// $array2 = ['b', 'd'];
// $result = array_udiff($array1, $array2, 'value_compare'); // Result: ['a', 'c']


// $array = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry'];
// $result = array_values($array); // Result: ['apple', 'banana', 'cherry']

// $array = ['apple', 'banana', 'apple', 'cherry', 'banana'];
// $result = array_unique($array); // Result: ['apple', 'banana', 'cherry']


// $data = [
//     ['id' => 1, 'name' => 'John', 'age' => 28],
//     ['id' => 2, 'name' => 'Jane', 'age' => 22],
//     ['id' => 3, 'name' => 'Doe', 'age' => 31]
// ];
// // Extract 'name' column
// $names = array_column($data, 'name');
// // Result: ['John', 'Jane', 'Doe']
// // Extract 'name' column with 'id' as index
// $names_by_id = array_column($data, 'name', 'id');
// // Result: [1 => 'John', 2 => 'Jane', 3 => 'Doe']

// $data = [
//     (object) ['id' => 1, 'name' => 'John', 'age' => 28],
//     (object) ['id' => 2, 'name' => 'Jane', 'age' => 22],
//     (object) ['id' => 3, 'name' => 'Doe', 'age' => 31]
// ];
// Extract 'name' property
// $names = array_column($data, 'name');
// Result: ['John', 'Jane', 'Doe']


$array = ['a', 'b', 'c', 'd', 'e', 'f'];
// Split into chunks of 2
$chunks = array_chunk($array, 2);
// Result: [['a', 'b'], ['c', 'd'], ['e', 'f']]

$array = [1 => 'a', 2 => 'b', 3 => 'c', 4 => 'd', 5 => 'e'];
// Split into chunks of 2, preserving keys
$chunks_with_keys = array_chunk($array, 2, true);
// Result: [[1 => 'a', 2 => 'b'], [3 => 'c', 4 => 'd'], [5 => 'e']]

$array = ['a' => 1, 'b' => 2, 'c' => 3];
// Flip keys and values
$flipped = array_flip($array);
// Result: [1 => 'a', 2 => 'b', 3 => 'c']

$array = ['a' => 1, 'b' => 2, 'c' => 1]; // Note: value '1' is duplicated
// Flip keys and values
$flipped = array_flip($array);
// Result: [1 => 'c', 2 => 'b']
// Only the last key for value '1' ('c') is preserved

?>
