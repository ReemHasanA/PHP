<?php
//1
$y=31;
if ($y>0) {
$txt="Your variable is a prime no";
if ( strval($y) !== strval(intval($y)) ) {
    echo "Your variable is not an integer";
  }else{
    $x=$y/2;
    for ($i=2; $i <$x ; $i++) { 
        if ($y%$i==0) {
            $txt="Your variable is not a prime no";
        }
    }
    echo $y.' ' . $txt;
  }
}else{
    echo "Your variable is a negative no";
}
echo'<br>';

//2
echo strrev("remove");echo'<br>';

//3
$x='hi all';
if($x==strtolower($x)){
    echo ' Your String is Ok ';
};echo'<br>';

//4+5
$y=10;
$x=12;
$v=$x;
$x=$y;
$y=$v;
echo 'y='.$y.', x='.$x;
echo'<br>';

//6
$a=407;
$array  = array_map('intval', str_split($a));
$sum=0;
for ($i=0; $i <Count ($array) ; $i++) { 
    $sum+=pow($array[$i],count($array));
}
if ($a==$sum) {
    echo $a.' is Armstrong Number ';
}else{
    echo $a." isn't Armstrong Number ";
}
echo'<br>';

//7
$Input='Eva, can I see bees in a cave?';
$new= preg_replace('/[^a-zA-Z0-9_]/s', '', strtolower($Input));
if ($new == strrev($new)) {
    echo 'Yes it is a palindrome ';
}else{
    echo 'No it is not a palindrome ';
}
echo'<br>';

//8
$array1 = array(2, 4, 7, 4, 8, 4);// you can use array unique
for ($i=0; $i <Count ($array1) ; $i++) { 
    for ($j=$i+1; $j <Count ($array1) ; $j++) { 
        if($array1[$i]==$array1[$j]){
            array_splice($array1, $j, 1);
        }

    }
}
echo '<pre>';
print_r($array1);
echo '</pre>';
?>