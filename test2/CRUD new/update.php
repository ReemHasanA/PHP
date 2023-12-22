<?php
include 'connect.php';
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname ="advance";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);

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
    
    $mes='';
}else {
    if (isset($_POST['add'])) {
    $ID=$_POST['ID'];
    $img=$_POST['img'];
    $Name=$_POST['Name'];
    $Address=$_POST['Address'];
    $Salary=$_POST['Salary'];

    do {
        if (empty($Name)||empty($Address)||empty($Salary)) {
            $mes='fill all fields';
            break;
        }
        $sql="UPDATE empolyees  SET IMG= '$img', Name='$Name', Address='$Address', Salary= '$Salary'  WHERE ID=$ID";
        $RES=$conn->query($sql);
        if (!$RES) {
            $mes='invalied :'.$conn->error;
            break;
        }

        $mes='done';

        header('location: INDEX.PHP');
        exit;

    } while (false);
}
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
        <label for="ID">ID: <?php echo $ID ?></label>
        <input type="hidden" name="ID" id="ID" value=<?php echo $ID ?>><br>
        <label for="img">img</label>
        <input type="url" name="img" value=<?php echo $img ?>>
        <img src="<?php echo $img ?>" alt="">
        <!-- <input type="image" name="img" src="img_submit.gif" alt="Submit" width="48" height="48"> -->
        <br>
        <label for="Name">Name</label>
        <input type="text" name="Name" id="Name" value=<?php echo $Name ?>><br>
        <label for="Address">Address</label>
        <input type="text" name="Address" id="Address" value=<?php echo $Address ?>><br>
        <label for="Salary">Salary</label>
        <input type="number" name="Salary" id="Salary" value=<?php echo $Salary ?>><br>
        <button type="submit" name="add">update</button>
    </form>
</body>
</html>