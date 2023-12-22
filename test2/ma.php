<?php




// 4.	$color = array (4 => 'white', 6 => 'green', 11=> 'red');

// Write a PHP script to display the first element of the above array. 
// Expected Output:  white
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo $color['4'];
 
// 5.	Write a PHP script that inserts a specific new item in an array in any position.
$originalArray = [1, 2, 3, 4, 5];

$newItem = 100;

$position = 4;

array_splice($originalArray, $position,0, $newItem);

echo "<pre>";
print_r($originalArray);
echo "</pre>";

// Sample Input:

// Array 1 2 3 4 5   
// Location: 4
// New Item: $

// Expected Output: 1 2 3 $ 4 5
 
// 6.	Write a PHP script to sort the following associative array depending on the key value [asc] : 

// Sample Input: 

// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

// Expected Output:
// c = apple
// b = banana
// d = lemon
// a = orange
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

asort($fruits);
echo "<pre>";
print_r($fruits);
echo "</pre>";
 
// 7.	Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures 

// Sample Input:  78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
$samples = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$samplesLength = count($samples);
$sum=0;
for ($i=0; $i < $samplesLength; $i++) { 
    $sum+= $samples[$i];
}
$avg = $sum / $samplesLength;
echo "$avg";
sort($samples);
// echo "<pre>";
// print_r( $array_slice($samples,0,5));
// echo "</pre>";
echo "<pre>";
print_r(array_slice($samples, -5));
echo "</pre>";
echo "<pre>";
print_r(array_slice($samples, 0,5));
echo "</pre>";
// Expected Output:
// Average Temperature is: 70.6 
// List of seven lowest temperatures: 60, 62, 63, 63, 64, 
// List of seven highest temperatures: 76, 78, 79, 81, 85,
 
// 8.	Write a PHP program to merge the following two arrays. 

// Sample Input: 

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
echo "<pre>";
print_r(array_merge($array1,$array2));
echo "</pre>";

// Expected Output:

// Array
// (
//     [color] => green
//     [0] => 2
//     [1] => 4
//     [2] => a
//     [3] => b
//     [shape] => trapezoid
//     [4] => 4
// )
// 9.	Write a PHP function to change the following array's and convert all the strings to upper case. 

// Sample Input:

$colors = array("red","blue", "white","yellow");
$colors = array_flip($colors);
$colors = array_change_key_case($colors, CASE_UPPER);
$colors = array_flip($colors);
echo "<pre>";
print_r($colors);
echo "</pre>";

// Expected Output :

// Array
// (
//     RED
//     BLUE
//     WHITE
//     YELLOW

// )


// 10.	Write a PHP function to change the following array's and convert all the strings to lower case. 

// Sample Input:

// $colors = array("RED","BLUE", "WHITE","YELLOW");

// Expected Output :

// Array
// (
//     red
//     blue
//     white
//     yellow

// )
 
// 11.	 Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4. 
$dis = array();
for ($i=200; $i <250 ; $i++) { 
        if ($i%4 == 0) {
            array_push($dis,$i);
            echo $i.",";
        }
    }
echo "<pre>";
print_r($dis);
echo "</pre>";
// Expected Output: 200,204,208,212,216,220,224,228,232,236,240,244,248
 
// 12.	Write a PHP script to get the shortest/longest string length from an array. 

// Sample Input:

 $words =  array("abcd","abc","de","hjjj","g","wer");
 $max= strlen($words[0]);
 $min = $max;
 for ($i= 1; $i < count($words); $i++){
    if (strlen($words[$i])>$max) {
        $max = strlen($words[$i]);
    }
    if (strlen($words[$i])<$min) {
        $min = strlen($words[$i]);
    }
 }
 echo "longest word length is ".$max." and the shortest length word is".$min;

// Expected Output : 

// The shortest array length is 1. The longest array length is 4.
 
 
// 13.	Write a PHP script to generate unique random 10 numbers within a specific range. 

// Sample Input: (11, 20)
// Sample Output: 17 16 13 20 14 19 18 15 11 12
$numbers = range(11, 20);
shuffle($numbers);
echo "<pre>";
print_r(array_slice($numbers,0,10));
echo "</pre>";

// 14.	Write a PHP script that returns the lowest integer in the array  that is not 0. 

// Sample Input: $array1 = array( 2, 0, 10, 12, 6) 
// Sample Output:  2
$array1 = array( 2, 0, 10, 12, 6);
$min = $array1[0];
for ($i=0; $i <count($array1) ; $i++) { 
    if ($array1[$i]<$min && $array1[$i]!== 0 ) {
        $min = $array1[$i];
    }
}
echo $min;


// 15.	Write a PHP program to sort an array of positive integers using the any Sort Algorithm.          
// Input array : Array ( [0] => 5 / [1] => 3 / [2] => 1 / [3] => 3 / [4] => 8 / [5] => 7 / [6] => 4 / [7] => 1/ [8] => 1 / [9] => 3 )
// Expected Result : Array ( [0] => 8 / [1] => 7 / [2] => 5 / [3] => 4 / [4] => 3 / [5] => 3 / [6] => 3 / [7] => 1 [8] => 1/ [9] => 1 )
$arr = array(1,1,1,3,3,4,5,7,8);
rsort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

// 16.	Write a PHP function to floor decimal numbers with precision. Note: Accept three parameters number, precision, and $separator

function floorDec($number, $precision, $separator)
{
$number_part=explode($separator, $number);
$number_part[1]=substr_replace($number_part[1],$separator,$precision,0);
if($number_part[0]>=0)
{$number_part[1]=floor($number_part[1]);}
else
{$number_part[1]=ceil($number_part[1]);}

$ceil_number= array($number_part[0],$number_part[1]);
return implode($separator,$ceil_number);
}
print_r(floorDec(1.155, 2, ".")."\n");
print_r(floorDec(100.25781, 4, ".")."\n");
print_r(floorDec(-2.9636, 3, ".")."\n");
// -------------------------------------------------------------------------------------------------------------------
// Sample Data : 
// 1.155, 2, "."
// 100.25781, 4, "."
// -2.9636, 3, "."
// Expected Output :
// 1.15
// 100.2578
// -2.964




echo "<br>";

// 17.  Write a PHP script to merge two commas separated lists with unique values only.
// Sample input: list1 = "4, 5, 6, 7";
//   		list2 = "4, 5, 7, 8";
// Sample output: 4, 5, 6, 7, 8
$a1 = array(4, 5, 6, 7);
$a2 = array(4, 5, 7, 8);
$array = array_merge($a1,$a2);
array_unique($array);
echo "<pre>";
print_r(array_unique($array));
echo "</pre>";

// 18. Write a PHP function to remove the duplicate entry from an array.
// sample input = 4, 5, 6, 7, 4, 7, 8
// sample Output = 4, 5, 6, 7, 8
$array = array(4, 5, 6, 7, 4, 7, 8);
echo "<pre>";
print_r(array_unique($array));
echo "</pre>";


// 19. Write a PHP Program to find if an array is a subset of another.
// sample input:
// array1 = 'a','1','2','3','4'
// array2 = 'a','3'
// 	sample output:
// array2 is a subset array from array1
$supersetArray = [1, 2, 3, 4, 5,7,8,9];
$subsetArray = [2, 4, 5];

// Check if $subsetArray is a subset of $supersetArray
$isSubset = empty(array_diff($subsetArray, $supersetArray));

if ($isSubset) {
    echo "The subset is present in the superset.";
} else {
    echo "The subset is not a subset of the superset.";
}



//16
function floorDecimal($number, $precision, $separator) 
{
    $factor = pow(10, $precision); //100
    $multiplied = $number * $factor;//115.5
    $floored = floor($multiplied);//115
    $result = $floored / $factor;//1.15
    return number_format($result, $precision, $separator, "");
}
echo floorDecimal(1.155, 2, ".") ."<br>";
 //1.15
?>
