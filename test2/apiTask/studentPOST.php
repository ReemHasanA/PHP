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

// require_once __DIR__ . '/database.php';
// require_once __DIR__ . '/sendJson.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') :
    $data = json_decode(file_get_contents('php://input'));//
    // if (
    //     !isset($data->Name) ||
    //     !isset($data->email) ||
    //     !isset($data->password) ||
    //     empty(trim($data->Name)) ||
    //     empty(trim($data->email)) ||
    //     empty(trim($data->password))
    // ) :
    //     sendJson(
    //         422,
    //         'Please fill all the required fields & None of the fields should be empty.',
    //         ['required_fields' => ['name', 'email', 'password']]
    //     );
    // endif;

    $name = $data->Name;
    $Class = $data->Class;
    $DateOfBirth = mysqli_real_escape_string($conn, trim($data->DateOfBirth));
    $Address = mysqli_real_escape_string($conn, trim($data->Address));
    $Contact = $data->Contact;

    // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) :
    //     sendJson(422, 'Invalid Email Address!');

    // elseif (strlen($password) < 8) :
    //     sendJson(422, 'Your password must be at least 8 characters long!');

    // elseif (strlen($name) < 3) :
    //     sendJson(422, 'Your name must be at least 3 characters long!');

    // endif;

    // $hash_password = password_hash($password, PASSWORD_DEFAULT);
    // $sql = "SELECT `email` FROM `users` WHERE `email`='$email'";
    // $query = mysqli_query($connection, $sql);
    // $row_num = mysqli_num_rows($query);

    // if ($row_num > 0) sendJson(422, 'This E-mail already in use!');

    $sql = "INSERT INTO `student`(`Name`,`Class`,`DateOfBirth`,`Address`,`Contact`) VALUES('$name','$Class','$DateOfBirth','$Address','$Contact')";
    $query = mysqli_query($conn, $sql);
    if ($query) sendJson(201, 'You have successfully registered.');
    sendJson(500, 'Something going wrong.');
endif;

sendJson(405, 'Invalid Request Method. HTTP method should be POST');