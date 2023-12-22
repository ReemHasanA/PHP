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

if (isset($_POST['add'])) {
    $ID=$_POST['ID'];
    $img=$_POST['img'];
    $Name=$_POST['Name'];
    $Address=$_POST['Address'];
    $Salary=$_POST['Salary'];

    do {
        if (empty($ID)||empty($Name)||empty($Address)||empty($Salary)) {
            $mes='fill all fields';
            break;
        }
        
    // $pathToImage = "/new/file/path/unique/$ID.png";
    // move_uploaded_files($_FILES['file']['tmp_name'], $pathToImage);

        $sql="INSERT INTO empolyees(ID, IMG, Name, Address, Salary)"." VALUES ('$ID','$img','$Name','$Address','$Salary')";
        $RES=$conn->query($sql);
        if (!$RES) {
            $mes='invalied :'.$conn->error;
            break;
        }

        $ID="";
        $img="";
        $Name="";
        $Address="";
        $Salary="";

        $mes='done';

        header('location: INDEX.PHP');
        exit;

    } while (false);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new empolyee</title>
</head>
<body>
    <?php
    if (!empty($mes)){
        echo $mes;
        $mes='';
    }
    ?>
    <form action="" method="post">
        <label for="ID">ID</label>
        <input type="number" name="ID" id="ID"><br>
        <label for="img">img</label>
        <input type="file" name="img">
        <!-- <input type="image" name="img" src="img_submit.gif" alt="Submit" width="48" height="48"> -->
        <br>
        <label for="Name">Name</label>
        <input type="text" name="Name" id="Name"><br>
        <label for="Address">Address</label>
        <input type="text" name="Address" id="Address"><br>
        <label for="Salary">Salary</label>
        <input type="number" name="Salary" id="Salary"><br>
        <button type="submit" name="add">submit</button>
    </form>
</body>
</html>