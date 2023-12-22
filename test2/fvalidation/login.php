<?php
session_start();
if (!isset($_SESSION['user'])) {
    $_SESSION['Username'] = '';
    $_SESSION['email'] = '';
}
$emailErr="";
$passwordErr="";
$mes='';
$Username='';
include 'connect.php';
if (isset($_POST['Login'])) {
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    do {

        if (empty($email) ||empty($password)) {
            $mes='fill fields';
            break;
        }
        $sql = "SELECT * FROM  sighnup WHERE email='$email'";
        $result = $conn->query($sql);
        

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $passwordch=$row['password'];
                $Username=$row['Username'];
        $role=$row['role'];
    
    }
if($passwordch!==$password){
        $passwordErr='err pass';
        break;
    // echo  " - email: ". $row["email"];
  }
} else {
//   echo "0 results".$result->num_rows;
  $emailErr="signup first";
  break;
}

        // $stmt = $conn->prepare($sql);
        // if (!$stmt) {
        //     $mes='invalied :'.$conn->error;
        //     break;
        // }

    // $stmt->bind_param("s", $email);
    // $stmt->execute();

    // $result = $stmt->get_result();

    // if ($result->num_rows = 0) {
    //     
    //     
    // } else{
        
    // }
        // $sql="INSERT INTO sighnup(id, Username, email,phone, password)"." VALUES ('$id','$Username','$email','$phone','$password')";
        // $RES=$conn->query($sql);
        
        $_SESSION['Username']=$Username;
        $_SESSION['email']=$email;
        $_SESSION['role']=$role;
        if ($role) {
            header('location: admin.php');
        exit;
        }else{
        // $mes='done';

        header('location: INDEX.PHP');
        exit;}

    } while (false);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{
            background-color: #eeeeee;
        }
        .container{
            box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
                        padding: 50px;

            margin-top: 50px;
        }
        .submit-btn{
            display: flex;
            justify-content: end;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center mt-4">Login</h2>
                <?php
            if (!empty($mes)){
                echo $mes;
                $mes='';
            }
            ?>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <?php echo $emailErr;
                        $emailErr="";
                        ?>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <?php echo $passwordErr;
                        $passwordErr="";
                        ?>
                    
                    <div class="submit-btn">
                        <button type="submit" class="btn btn-primary" name='Login'>Login</button>
                    </div>
                    <div class="d-flex justify-content-center align-items-end p-4">
                            <p>Dont have Account?<a href="signup.php">SignUp</a> </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
