<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: access');
header('Access-Control-Allow-Methods: PUT');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

include 'conn.php';
if($_SERVER["REQUEST_METHOD"] == "PUT"){
if (isset($_GET['Student_ID'])){
    $Student_ID=$_GET['Student_ID'];
    $sql="SELECT * FROM student WHERE Student_ID='$Student_ID'";
    $result = $conn->query($sql);
    $nresult=$result->fetch_assoc();
    if ($result->num_rows > 0) {
        $data = json_decode(file_get_contents("php://input"));
        
        if(isset($data->Name)&&!empty($data->Name)){
        $name = $data->Name;
        
        }else{
            $name =$nresult['Name'];
        }
        if(isset($data->Class)&&!empty($data->Class)){
            $Class = $data->Class;
            
            }else{
                $Class =$nresult['Class'];
            }
        if(isset($data->DateOfBirth)&&!empty($data->DateOfBirth)){
            
            $DateOfBirth = mysqli_real_escape_string($conn, trim($data->DateOfBirth));
            
            }else{
                $DateOfBirth =$nresult['DateOfBirth'];
            }
        
        $Address = mysqli_real_escape_string($conn, trim($data->Address));
        $Contact = $data->Contact;

        $sql="UPDATE student  SET Class= '$Class', Name='$name', Address='$Address', DateOfBirth= '$DateOfBirth',Contact='$Contact'  WHERE Student_ID='$Student_ID'";
        $RES=$conn->query($sql);
        if (!$RES){
            echo 'invalid';
        }}}
        // update query
//     $query = "UPDATE
//     " . $this->student . "
// SET
//     Name = :$name,
//     price = :price,
//     description = :description,
//     category_id = :category_id
// WHERE
//     id = :id";
    // json_encode($result);
    // print_r($JSON);
    // ECHO $JSON;

// 
//     # code...
// $JSON=array();
// $sql="SELECT * FROM student";}
// $result = $conn->query($sql);

// $JSON[$row['Student_ID']]=json_encode($row);}
// print_r($JSON);
}else {
    echo 'error method';
}