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
    $i=array();
    $exam=array();
    $sql="SELECT Subject_ID FROM sub_stu WHERE Student_ID='$Student_ID'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $Subject_ID=$row['Subject_ID'];
        // echo $Subject_ID ."<br>";
        $sql="SELECT * FROM exam WHERE Subject_ID='$Subject_ID'";
        $result1 = $conn->query($sql);
        // // $i++;
        while ($row1 = $result1->fetch_assoc()) {
            // $nresult=$result->fetch_assoc();
            
            $exam[]=$row1;}
            // $i[]=$exam;
    }
    
    // $result->excute();
    print_r(json_encode($exam));
}}
// else {
// $JSON=array();
// $sql="SELECT * FROM exam";
// $result = $conn->query($sql);
// $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
// $JSON=json_encode($row);
// print_r($JSON);}
// }else {
//     echo 'error method';
// }    