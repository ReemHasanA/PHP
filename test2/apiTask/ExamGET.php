<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: access');
header('Access-Control-Allow-Methods: GET');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

include 'conn.php';
if($_SERVER["REQUEST_METHOD"] == "GET"){
if (isset($_GET['Exam_ID'])){
    $Exam_ID=$_GET['Exam_ID'];
    $sql="SELECT * FROM exam WHERE Exam_ID='$Exam_ID'";
    $result = $conn->query($sql);
    // $result->excute();
    $nresult=$result->fetch_assoc();
    print_r(json_encode($nresult));
}
else {
$JSON=array();
$sql="SELECT * FROM exam";
$result = $conn->query($sql);
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
$JSON=json_encode($row);
print_r($JSON);}
}else {
    echo 'error method';
}    