<?php
include 'connect.php';
$conn = new mysqli($servername, $username, $password, $dbname);
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $d="DELETE FROM empolyees WHERE ID=$id";
    $conn->query($d);
}
?>
echo "<p>$id deleted</p>";
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Empolyee</title>
</head>
<body>
    <main>
        <h2>list of empolyees</h2>
        <a href="creat.php"><button>add new</button></a>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>salary</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    // $dsn="mysql:localhost;dbname: advance";
                    // $dbusername="root";
                    // $dbpassword="";
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname ="advance";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);


                    $sql = "SELECT * FROM  empolyees";                    
                    $result=$conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo"
                        <tr>
                            <td>{$row['ID']}</td>
                            <td>$row[Name]</td>
                            <td>$row[Address]</td>
                            <td>$row[Salary]</td>
                            <td>
                                <a href='read.php?{ID=$row['ID']}'><i class='fa-solid fa-eye'></i></a>
                                <a href='update.php?ID=$row[ID]' ><i class='fa-solid fa-pen-to-square'></i></a>
                                <a href='INDEX.PHP?id=$row[ID]' name='remove' ><i class='fa-solid fa-trash'></i></a>
                            </td>
                        </tr>
                        ";
                    }

                ?>
                
            </tbody>
        </table>
    </main>
</body>
</html>