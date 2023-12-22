<?php 

//1
for ($i=1; $i <=10 ; $i++) { 
    echo $i;
    if($i==10){break;}
    echo '-';
}
echo'<br>';

//2
$total=0;
for ($i=0; $i <=30 ; $i++) { 
    $total+=$i;
}
echo $total.'<br>';

//3
    $j='A';
for ($i=5; $i >0 ; $i--) { 
    for ($k=0; $k < $i-1; $k++) { 
        echo 'A';
    }
    
    for ($c=0;$c !==6-$i ; $c++) { 
        echo$j;
    }
    ++$j;
    echo'<br>';
}

//4
for ($i=5; $i >0 ; $i--) { 
    for ($k=1; $k < $i; $k++) { 
        echo '1';
    }
    $j=6-$i;
    for ($c=0;  $c <$j ; $c++) { 
        echo$j;
    }
    echo'<br>';
}   

//5
for ($i=1; $i <6 ; $i++) { 
    for ($c=1; $c <6 ; $c++) { 
        if ($i==$c) {
            echo $i;
        }else{
            echo '0';
        }
    }
    echo'<br>';
}

//6
$x=5;$fac=1;
for ($i=1; $i < $x+1; $i++) { 
    $fac*=$i;
}
echo ('fac of '.$x.'=' .$fac.'<br>');

//7
$y=9;
$b=1;$d=0;
if($y>=2){
    echo $d;
    echo ','.$b;
    for ($i=2;$i<$y;$i++){
        $c=$b+$d;
        echo ','.$c;
        $d=$b;
        $b=$c;
    }
}elseif ($y==1) {
    echo $d;
} else{
    echo 'error';
}
echo'<br>';

//8
$text ="Orange Coding Academy";
echo substr_count(strtolower($text),'c');
echo'<br>';

//9
echo "<table border: 1px solid black;>";
for ($i=1; $i <7 ; $i++) { 
    echo'<tr>';
    for ($j=1; $j <6 ; $j++) { 
        echo'<td>' .$i.'*'.$j.'='.$i*$j.'</td>';
       
    }
    echo'</tr>';
}
echo "</table>";

//10
for ($i=1; $i <51 ; $i++) { 
    if ($i%3==0||$i%5==0) {
        if ($i%3==0) {
            echo "Fizz";
        }
        if ($i%5==0) {
            echo "Buzz";
        }
        echo "&nbsp;";
    }else {
        echo $i,"&nbsp;";
    }
}
echo'<br>';

//11
$num=1;
for ($i=0; $i <5 ; $i++) { 
    for ($j=0; $j <=$i ; $j++) { 
        echo $num++;
    }echo'<br>';

}

//12
for ($i=5; $i >0 ; $i--) {
    for ($k=0; $k < $i-1; $k++) { 
        echo "&nbsp;&nbsp;";
    } 
    $j='A';
for ($c=0;$c !==6-$i ; $c++) { 
    echo$j,"&nbsp;";
        if($i==5){echo'A';}
++$j;
}
    echo'<br>';
}
for ($i=5; $i >0 ; $i--) {
    for ($c=0; $c!==6-$i ; $c++) { 
        echo "&nbsp;&nbsp;";
    } 
    $j='A';
    for ($k=0; $k < $i-1; $k++) { 
        echo$j,"&nbsp;";
    ++$j;
    }
    echo'<br>';
}


?>