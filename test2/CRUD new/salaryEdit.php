<?php
include 'connect.php';
$newSalary='';
$all=false;
$sql = "SELECT Salary,offdays,id FROM  empolyees ";
        $result = $conn->query($sql);
        // while ($row = $result->fetch_assoc()) {
        //     $newSalary=(30-$row[offdays])/30*$row[Salary];
        // }
if($_SERVER["REQUEST_METHOD"] == "GET"){
    if (isset($_GET['id'])&&isset($_GET['all'])) {
        echo 'choose one';
        break;
    }else if (isset($_GET['id'])){
        $id= $_GET['id'];
        $sql = "SELECT Salary FROM  empolyees WHEN id='$id'";
    }else if(isset($_GET['all'])) {
        $all=$_GET['all'];
        echo $all;
        // break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
    <label for="Salary">Salary</label>
        <input type="number" name="Salary" id="Salary"><br>
        <label for="addition">addition</label>
        <input type="number" name="addition" id="addition"><br>
        <label for="id">id</label>
        <input type="number" name="id" id="id"><br>
        <label for="all">all</label><br>
        <input type="checkbox" id="all" name="all">
        <button type="submit" name="add"> salary</button>

    </form>
    <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>salary</th>
                     <th> new salary</th>
                    <!--<th>Address</th>
                    <th>action</th>
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
                            <td>".
                            (((30-$row['offdays']))*$row['Salary']/30)
                            ."</td>
                        </tr>
                        ";
                    }

                ?>
                
            </tbody>
        </table>
</body>
</html>