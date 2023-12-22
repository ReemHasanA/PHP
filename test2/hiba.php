)
<?php
$arr = array('red', 'green', 'white') ;
echo  "The memory  the  " . $arr[0]. "carpet, the " . $arr[1] . "  lawn, the " .  $arr[2] . " house, the leaden sky.  ";

?>


2)
<?php
$colors = array('white', 'green', 'red');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Color List</title>
</head>
<body>
    <ul>
        <?php foreach ($colors as $color): ?>
            <li><?php echo $color; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>


3)
<?php
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
"Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
"Germany" => "Berlin", "Greece" => "Athens",
"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid",
"Sweden"=>"Stockholm", "United Kingdom"=>"London",
"Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
"Czech Republic"=>"Prague", "Estonia"=>"Tallin",
"Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta",
"Austria" => "Vienna", "Poland"=>"Warsaw") ;
asort($ceu) ;
foreach($ceu as $country => $capital)
{
echo "The capital of $country is $capital"."\n" ;
}
echo'<br>'
?>



4)
<?php
$color = array(4 => 'white', 6 => 'green', 11 => 'red');


$firstElement = reset($color);

echo "The first element of the array is: $firstElement";
echo'<br>'
?>

<?php

$originalArray = array('item1', 'item2', 'item3', 'item4');


$newItem = 'newItem';


$position = 2;


array_splice($originalArray, $position, 1, $newItem);

print_r($originalArray);
echo'<br>'
?>

<?php
$associativeArray = array(
    'c' => 'banana',
    'a' => 'apple',
    'b' => 'cherry',
    'd' => 'date',
);


asort($associativeArray);


foreach ($associativeArray as $key => $value) {
    echo "$key: $value<br>";
}
?>