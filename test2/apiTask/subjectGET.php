<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: access');
header('Access-Control-Allow-Methods: GET');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

include 'conn.php';
if($_SERVER["REQUEST_METHOD"] == "GET"){
if (isset($_GET['Subject_ID'])){
    $subject_ID=$_GET['Subject_ID'];
    $sql="SELECT * FROM subject WHERE Subject_ID='$subject_ID'";
    $result = $conn->query($sql);
    // $result->excute();
    $nresult=$result->fetch_assoc();
    print_r(json_encode($nresult));
}
else {
$JSON=array();
$sql="SELECT * FROM subject";
$result = $conn->query($sql);
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
$JSON=json_encode($row);
print_r($JSON);}
}else {
    echo 'error method';
}    