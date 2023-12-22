<?php
$dsn="mysql:localhost;dbname:new data";
$dbusername="root";
$dbpassword="";//declare the information that we,ll use 

try {
    $pdo=new PDO($dsn,$dbusername,$dbpassword);//to connect sql with php the most important part.
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//to find error
} catch (PDOException $e) {//to declare error
    echo 'connection faild '.$e->getMessage();
}



?>