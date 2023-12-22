<?php
include 'conn.php';
function sendJson(int $status, string $message, array $extra = []): void
{
    $response = ['status' => $status];
    if ($message) $response['message'] = $message;
    http_response_code($status);
    echo json_encode(array_merge($response, $extra));
    exit;
}

      
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: access');
header('Access-Control-Allow-Methods: POST');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

if ($_SERVER['REQUEST_METHOD'] == 'POST') :
    $data = json_decode(file_get_contents('php://input'));
    // if (isset($_GET['Subject_ID'])){
    $Student_ID= $data->Student_ID; 
    // }
    // if (isset($_GET['Student_ID'])){
    $Subject_ID= $data->Subject_ID;
    // }
    

    $sql = "INSERT INTO `sub_stu`(`Student_ID`,`Subject_ID`) VALUES('$Student_ID','$Subject_ID')";
    $query = mysqli_query($conn, $sql);
    if ($query) sendJson(201, "successfully added.");
    sendJson(500, 'Something going wrong.');
    
endif;

sendJson(405, 'Invalid Request Method. HTTP method should be POST');