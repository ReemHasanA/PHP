<?php
include 'connect.php';

$id="";
$img="";
$Username="";
$email="";
$Salary="";
$Role="";
$offdays="";
$mes='';

if (isset($_POST['add'])) {
    $id=$_POST['id'];
    $img=$_POST['img'];
    $Username=$_POST['Username'];
    $email=$_POST['email'];
    $Salary=$_POST['Salary'];
    $offdays=$_POST['offdays'];
    $Role=$_POST['Role'];

    do {
        if (empty($Username)||empty($email)||empty($Salary)||empty($offdays)||empty($Role)) {
            $mes='fill all fields';
            break;
        }
        
    // $pathToImage = "/new/file/path/unique/$id.png";
    // move_uploaded_files($_FILES['img']['tmp_name'], $pathToImage);

        $sql="INSERT INTO empolyees(id, img, Username, email, Salary,offdays,Role)"." VALUES ('$id','$img','$Username','$email','$Salary','$offdays','$Role')";
        $RES=$conn->query($sql);
        if (!$RES) {
            $mes='invalied :'.$conn->error;
            break;
        }

        $id="";
        $img="";
        $Username="";
        $email="";
        $Salary="";
        $offdays="";
        $Role="";

        // $ID="";
        // $img="";
        // $Name="";
        // $Address="";
        // $Salary="";

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
        <input type="hidden" name="id" id="id"><br>
        <label for="img">img</label>
        <input type="file" name="img">
        <!-- <input type="image" name="img" src="img_submit.gif" alt="Submit" width="48" height="48"> -->
        <br>
        <label for="Username">Username</label>
        <input type="text" name="Username" id="Username"><br>
        <label for="email">email</label>
        <input type="email" name="email" id="email"><br>
        <label for="Address">Address</label>
        <input type="text" name="Address" id="Address"><br>
        <label for="Salary">Salary</label>
        <input type="number" name="Salary" id="Salary"><br>
        <label for="offdays">offdays</label>
        <input type="number" name="offdays" id="offdays"><br>
        <label for="Role">Role</label>
        <input type="number" name="Role" id="Role"><br>
        <button type="submit" name="add">submit</button>
    </form>
</body>
</html>