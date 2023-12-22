<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: access');
header('Access-Control-Allow-Methods: DELETE');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

include 'conn.php';
if($_SERVER["REQUEST_METHOD"] == "DELETE"){
if (isset($_GET['Student_ID'])){
    $Student_ID=$_GET['Student_ID'];
    $sql="SELECT * FROM student WHERE Student_ID='$Student_ID'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $d="DELETE FROM student WHERE Student_ID='$Student_ID'";
    $conn->query($d);
    }
    else {
        echo 'not found';
    }
}else{
    echo'get Student_ID';
}}else{
    
    echo 'error method';
}

