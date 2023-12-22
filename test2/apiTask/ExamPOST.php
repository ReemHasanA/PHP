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
    $Subject_ID= $data->Subject_ID;
    $Date = $data->Date;
    $Max_Score = $data->Max_Score;

    $sql = "INSERT INTO `exam`(`Subject_ID`,`Date`,`Max_Score`) VALUES('$Subject_ID','$Date','$Max_Score')";
    $query = mysqli_query($conn, $sql);
    if ($query) sendJson(201, "successfully added.");
    sendJson(500, 'Something going wrong.');
    
endif;

sendJson(405, 'Invalid Request Method. HTTP method should be POST');