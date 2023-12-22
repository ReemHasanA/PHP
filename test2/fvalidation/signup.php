<?php
session_start();
if (!isset($_SESSION['Username'])) {
    $_SESSION['Username'] = '';
    $_SESSION['email'] = '';
}
include 'connect.php';
$emailErr="";
$phoneErr="";
$passwordErr="";
$confirm_passwordErr="";
if (isset($_POST['add'])) {
    $id=$_POST['id'];
    
    $Username=$_POST['Username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];


    do {

        if (empty($id)||empty($Username)||empty($email)||empty($phone)||empty($password)||empty($confirm_password)) {
            $mes='fill all fields';
            
            break;
        }else{
           if (!preg_match("/^[^ ]+@[a-zA-Z_]+\.[a-zA-Z]{2,3}$/",$email)) {
                $emailErr = "Invalid email";
                // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                //     $emailErr = "Invalid email format";
                //   }
                break;
              }
              if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&.])[A-Za-z\d@$!%*#?&]{8,18}$/",$password)) {
                $passwordErr = "Invalid password";
                break;
              }
              if ($password !==$confirm_password) {
                $confirm_passwordErr="not match";
                break;
              } 
        }
        $sql="INSERT INTO sighnup(id, Username, email,phone, password)"." VALUES ('$id','$Username','$email','$phone','$password')";
        $RES=$conn->query($sql);
        if (!$RES) {
            $mes='invalied :'.$conn->error;
            break;
        }

        $_SESSION['Username']=$Username;
        $_SESSION['email']=$email;

        $mes='done';

        header('location: INDEX.PHP');
        exit;

    } while (false);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup Form</title>
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
            <?php
            if (!empty($mes)){
                echo $mes;
                $mes='';
            }
            ?>
                <h2 class="text-center mt-4">Signup</h2>
                <form method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="Username" placeholder="Enter your username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        <?php echo $emailErr;
                        $emailErr="";
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="phone">phone</label>
                        <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter your phone" required>
                        <?php echo $phoneErr;
                        $phoneErr="";
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                        <?php echo $passwordErr;
                        $passwordErr="";
                        ?>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm your password" >
                        <?php echo $confirm_passwordErr;
                        $confirm_passwordErr="";
                        ?>
                    </div>
                    <div class="submit-btn">
                        <button type="submit" class="btn btn-primary" name="add">Sign Up</button>
                    </div>
                    <div class="d-flex justify-content-center">
                            <p>Have Account?<a href="login.php">Login</a> </p>
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
