<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: access');
header('Access-Control-Allow-Methods: GET');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

include 'conn.php';

if($_SERVER["REQUEST_METHOD"] == "GET"){
if (isset($_GET['Subject_ID'])){
    $Subject_ID=$_GET['Subject_ID'];
    $sql="SELECT * FROM exam INNER JOIN subject ON SUBJECT .Subject_ID = exam.Subject_ID WHERE subject.Subject_ID='$Subject_ID'";
    $result = $conn->query($sql);
    // $result->excute();
    while ($row = $result->fetch_assoc()) {
    // $nresult=$result->fetch_assoc();
    print_r(json_encode($row));}
}else {
    echo'set Subject_ID';
    
}
}else{
    echo'error method';
}