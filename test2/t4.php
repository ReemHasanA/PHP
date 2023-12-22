<?php
echo "Warning error"; 
//1
$colors = array('white', 'green', 'red');
printf(
    "The memory of that scene for me is like a frame of film forever frozen at that moment: the %s carpet, the %s lawn, the %s house, the leaden sky. The new president and his first lady.<br> - Richard M. Nixon<br>"
    ,$colors[2],$colors[1],$colors[0]
);

//2
echo '<ul>';
for ($i=0; $i <3 ; $i++) { 
    echo "<li>".$colors[$i]."</li>";
}
echo '</ul>';

//3
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
foreach($cities as $x => $x_value) {
    echo "The capital of " . $x . " is " . $x_value;
    echo "<br>";
  }

//4
$color = array (4 => 'white', 6 => 'green', 11=> 'red');
$value = empty($color) ? $default : reset($color);
echo $value;


//5
$Array=array( 1, 2, 3, 4, 5 )  ;
$x=4;
array_splice($Array, $x-1, 0,'$');
print_r($Array);  
echo "<br>";
  
//6
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);//arsort>>reverse abc sort
foreach ($fruits as $key => $val) {
    echo "$key = $val<br>";
}

//7
$sum=0;
$Sample=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
for ($i=0; $i <count($Sample); $i++) { 
    $sum+=$Sample[$i];
}
echo 'Average Temperature is:'. ($sum/count($Sample)).'<br>';

sort($Sample);
print_r( array_slice($Sample, 0, 7)); 
echo "<br>";
print_r( array_slice($Sample, -7)); 
echo "<br>";

//8
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
print_r(array_merge($array1,$array2));
echo "<br>";

//9
$array2 = array("melon","banana","apple","orange","lemon");//you can use flip and convert the key to uppercase
foreach ($array2 as $value) {
    echo strtoupper($value).'<br>';
}

//10
$colors = array("RED","BLUE", "WHITE","YELLOW");
foreach ($colors as $value) {
    echo strtolower($value).'<br>';
}

//11
//range(200,250,4) love it 
$z=range(200,250);
foreach ($z as $value) {
    if ($value% 4==0) {
        echo $value .',';
    }
}
    echo "<br>";

//12
$words =  array("abcd","abc","de","hjjj","g","wer");//use array_map
$len=array();
foreach ($words as $key) {
    $len[]=strlen($key);
}
sort($len);
// print_r($len)
echo 'The shortest array length is '. $len[0].' The longest array length is '.$len[count($len)-1].'<br>';

//13
for ($i=0; $i < 10; $i++) { 
        
    echo rand(11,20);
}

//14
$array1 = array( 2, 0, 10, 12, 6);
sort($array1);
for ($i=0; $array1[$i] ==0 ; $i++) { 
    
}

//19 use itersect ()for the two array

?>