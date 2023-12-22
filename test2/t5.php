<?php
$x=26;
if ($x<20) {
    echo' we are in winter <br>';
}else{
    echo '‘It is summertime!’';
}
echo'<br>';
/////////////

$x=4;
$y=4;
if($y==$x){
    $sum=($x+$y)*3;
}else{
    $sum=($x+$y);
}
echo$sum;
echo'<br>';

/////////////
if(($x+$y)==30){
    echo ($x+$y);
}else{
    echo 'false';
}
echo'<br>';


/////////////////////

if($x%3==0){
    echo 'True';
}else{
    echo'False';
}
echo'<br>';


///////////////

if($x>=20 &&$x<=50){
echo 'True';
}else{
echo'False';
}
echo'<br>';

///////////////////

$arr=array (1,4,6,7);
$max=$arr[0];
for ($i=1; $i <count($arr) ; $i++) { 
   if($arr[$i-1]<$arr[$i]) {
    $max=$arr[$i];
   }
}
echo $max.'<br>';

///////////////

$u=30;
if ($u<=50) {
    $e=$u*2.5;
}else if ($u<=150) {
    $e=2.5*50+($u-100)*5;
}else if ($u<=200) {
    $e=2.5*50+100*5+($u-150)*6.2;
}else {
    $e=2.5*50+100*5+100*6.2+($u-250)*7.5;
}
echo $max.'<br>';

///////////////

$si='*';
switch ($si) {
    case '+':
      echo $x+$y;
      break;
    case '-':
        echo $x-$y;
      break;
    case '*':
        echo $x*$y;
      break;
      case '/':
        echo $x/$y;
      break;
    default:
      echo 'different from all labels';
  }
  echo'<br>';

///////////////

$age=15;
if($age<18){
    echo'is no eligible to vote';
}else{
    echo'is eligible to vote';

}
echo'<br>';

/////////////////

$t=-15;
if ($t<0) {
    echo 'negative';
}elseif ($t==0) {
    echo 'zero';
}else{
    echo 'positive';
}
echo'<br>';

///////////////
$total=0;
$Inputs= array(60,86,95,63,55,74,79,62,50);
for ($i=0; $i < count($Inputs) ; $i++) { 
    $total+=$Inputs[$i];
}
$g=$total/count($Inputs);
$g=0;
switch (true) {//3shan yodkul arqam alswitch
    case ($g>=90):
      echo 'A';
      break;
    case ($g>=80):
        echo 'B';
      break;
    case ($g>=70):
        echo 'C';
      break;
      case ($g>=60):
        echo 'D';
      break;
    default:
      echo 'F';
  }
  echo'<br>'

?>