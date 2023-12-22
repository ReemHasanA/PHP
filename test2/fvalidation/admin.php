<?php
session_start();
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="creat.php"><button>add new</button></a>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_SESSION['role'])&& ($_SESSION['role'])) {
                    $sql = "SELECT * FROM  sighnup";                    
                    $result=$conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo"
                        <tr>
                            <td>$row[Username]</td>
                            <td>$row[email]</td>
                            <td>$row[phone]</td>
                            
                            <td>
                                <a href='read.php?id=$row[id]' id=><i class='fa-solid fa-eye'></i></a>
                                <a href='update.php?id=$row[id]' ><i class='fa-solid fa-pen-to-square'></i></a>
                                <a href='INDEX.PHP?id=$row[id]' name='remove' ><i class='fa-solid fa-trash'></i></a>
                            </td>
                        </tr>
                        ";
                    }
                    
        
                }
                ?> 
</body>
</html>