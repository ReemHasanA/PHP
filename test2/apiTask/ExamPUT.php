<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: access');
header('Access-Control-Allow-Methods: PUT');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');

include 'conn.php';
if($_SERVER["REQUEST_METHOD"] == "PUT"){
if (isset($_GET['Exam_ID'])){
    $Exam_ID=$_GET['Exam_ID'];
    $sql="SELECT * FROM Exam WHERE Exam_ID='$Exam_ID'";
    $result = $conn->query($sql);
    $nresult=$result->fetch_assoc();
    
        if ($result->num_rows > 0) {
        $data = json_decode(file_get_contents("php://input"));
        
        if(isset($data->Subject_ID)&&!empty($data->Subject_ID)){
        $Subject_ID= $data->Subject_ID;
        
        }else{
            $Subject_ID =$nresult['Subject_ID'];
        }
        if(isset($data->Date)&&!empty($data->Date)){
           $Date = $data->Date;
            
            }else{
                $Date =$nresult['Date'];
            }
        if(isset($data->Max_Score)&&!empty($data->Max_Score)){
            $Max_Score  = mysqli_real_escape_string($conn, trim($data->Max_Score));
            
            }else{
                $Max_Score =$nresult['Max_Score'];
            }
        
        $sql="UPDATE Exam  SET Subject_ID= '$Subject_ID', Date='$Date', Max_Score='$Max_Score'  WHERE Exam_ID='$Exam_ID'";
        $RES=$conn->query($sql);
        if (!$RES){
            echo 'invalid';
        }}}
    

    
    if ($query) sendJson(201, "successfully added.");
    sendJson(500, 'Something going wrong.');
    
endif;

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