<?php
include 'connect.php';
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname ="advance";
// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $d="DELETE FROM empolyees WHERE id=$id";
    $conn->query($d);
    echo "<p>$id deleted</p>";
}
?>
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
                    <th>email</th>
                    <th>salary</th>
                    <!-- <th>action</th>
                    <th>Address</th>
                    <th>salary</th>
                    <th>action</th> -->
                </tr>
            </thead>
            <tbody>
                <?php

                   
                    $sql = "SELECT * FROM  empolyees";                    
                    $result=$conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo"
                        <tr>
                            <td>$row[id]</td>
                            <td>$row[Username]</td>
                            <td>$row[email]</td>
                            <td>$row[Salary]</td>
                            <td>
                                <a href='read.php?ID=$row[id]' id=><i class='fa-solid fa-eye'></i></a>
                                <a href='update.php?ID=$row[id]' ><i class='fa-solid fa-pen-to-square'></i></a>
                                <a href='INDEX.PHP?id=$row[id]' name='remove' ><i class='fa-solid fa-trash'></i></a>
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