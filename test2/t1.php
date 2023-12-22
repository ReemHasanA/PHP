<?php
$x='hi all';
echo strtoupper($x);echo'<br>';
echo strtolower($x);echo'<br>';
echo ucfirst($x);echo'<br>';
echo ucwords($x);echo'<br>';

$string = '085119';
echo substr_replace($string,':', 2, 0); echo'<br>';
$str1= '082307';  echo substr(chunk_split($str1, 2, ':'), 0, -1);echo'<br>';

$DATE = "085119";

echo date("H:i:s",(strtotime($DATE)));echo'<br>';

$h="I'm adeveloper @ orange";
if (strpos($h,'orange' ) == true) { 
    echo( "found it");
    echo'<br>';
}
if (str_contains($str1, "2"))
{
echo 'Found it';
}


// function checkIfContains( , $h) {
  
// $str
// explode("/",$str);  
// }

list($a, $b) = explode('/', 'stackoverflow.com/questions');
echo($b);
$path = "/testweb/var/www/mywebsite/htdocs/index.html"; 
echo strstr($path,"/").'<br>';
$file1 = basename($path); echo'<br>';

// Show filename with file extension 
echo $file1 . "<br>";

echo strtok($path, "/"). "<br>";

list($a, $b) = explode('@', 'reem@yahoo');
echo($a);echo'<br>';
strstr('reem@yahoo','@',true).'<br>';//if false output:@yahoo

$string = 'this.is.a.sample';
$last_section = substr($string,-3);
echo $last_section;echo'<br>';

echo substr(str_shuffle("0123456789qwertyuiopasdfghjklmnbvcxz"),rand(1,strlen("0123456789qwertyuiopasdfghjklmnbvcxz"))); echo'<br>';

echo str_replace("world","Peter","Hello world!");
echo'<br>';

$string1 = 'foobarbaz';
$string2 = 'foobarbiz';
$pos = strspn($string1 ^ $string2, "\0");

printf(
    'First difference at position %d: "%s" vs "%s""<br>"',
    $pos, $string1[$pos], $string2[$pos]
);
$e='Twinkle, twinkle, little star.';
$n = explode(',', $e);
echo var_dump($n) . "<br>";

$str = 'a';
echo ++$str . "<br>";

$ch = 'z';
$next_ch = ++$ch;
if (strlen($next_ch) > 1) { // if you go beyond z or Z reset to a or A
$next_ch = $next_ch[0];
}
echo $next_ch . "<br>";

$value = "Test me more";
echo strtok($value, " "). "<br>";

$string = 'I am happy today.';
$replacement = 'very ';

echo substr_replace($string, $replacement, 4, 0). "<br>"; 
// substr($input, 0, 3).$pad_str.substr($input, 3);//<3

echo preg_replace("/0/i", "", "0001217503220", -1).'<br>';
echo rtrim('1200054320800', '0').'<br>';//r means right and l left
echo trim('1200054320800', '0').'<br>';

echo str_replace("fox","","The quick brown fox jumps over the lazy dog");
echo'<br>';

$string1="The quick brown fox jumps over the lazy dog--";
$string1 = rtrim($string1, '-');
echo $string1 .'<br>';
$String='1@2/3%4';
echo preg_replace('/[^a-zA-Z0-9_]/s', '', $String)."<br>";

$length=5;

    if(strlen($string1) > $length) {
        $string1 = substr($string1, 0, strpos($string1, ' ', $length));
    }
    echo $string1 .'<br>';

    $words= explode(' ', "The quick brown fox jumps over the lazy dog");
    $len = min(5, count($words));
echo implode(' ',array_slice($words, 0, $len) ).'<br>';

for ($i='a'; $i <='z' ; $i++) { 
    echo $i.' ';
    if($i=='z'){break;}
}
echo'<br>';

echo str_replace(",","","2,123.5").'<br>';

echo date(" h:i:s");
?>