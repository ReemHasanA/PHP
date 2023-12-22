<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="advance";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$ID="";
$img="";
$Name="";
$Address="";
$Salary="";
$mes='';

if($_SERVER["REQUEST_METHOD"] == "GET"){
    if (!isset($_GET['ID'])) {
        header('location: INDEX.PHP');
        exit;
    }
    $ID=$_GET['ID'];
    $sql = "SELECT * FROM  empolyees WHERE ID=$ID";                    
    $result=$conn->query($sql);
    $row = $result->fetch_assoc();
    if (!$row) {
        header('location: INDEX.PHP');
        exit;
    }
    $ID=$row['ID'];
    $img=$row['IMG'];
    $Name=$row['Name'];
    $Address=$row['Address'];
    $Salary=$row['Salary'];
   } 
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view empolyee</title>
</head>
<body>
    <?php
    if (!empty($mes)){
        echo $mes;
        $mes='';
    }
    ?>
    <main>
        <h3>ID: <?php echo $ID ?></h3>
        <input type="hidden" name="ID" id="ID" value=<?php echo $ID ?>><br>
        <img src="<?php echo $img ?>" alt=""><br>
        <h4>Name:<?php echo $Name ?></h4>
        <h4>Address:<?php echo $Address ?></h4>
        <h4>Salary:<?php echo $Salary ?></h4><br>
    </main>
</body>
</html>