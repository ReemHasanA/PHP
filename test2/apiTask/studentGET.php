<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: access');
header('Access-Control-Allow-Methods: GET');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

include 'conn.php';
if($_SERVER["REQUEST_METHOD"] == "GET"){
if (isset($_GET['Student_ID'])){
    $Student_ID=$_GET['Student_ID'];
    $sql="SELECT * FROM student WHERE Student_ID='$Student_ID'";
    // $result = $conn->query($sql);// ////$result->excute();//$nresult=$result->fetchAll(PDO::FETCH_ASSOC);
    // json_encode($result);
    // print_r($JSON);
    // ECHO $JSON;
}
else {
    # code...
$JSON=array();
$sql="SELECT * FROM student";}
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
$JSON[$row['Student_ID']]=json_encode($row);}
print_r($JSON);
}else {
    echo 'error method';
}