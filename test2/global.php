<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label for="email" name="email">Email:</label>
    <input type="email" name="email">
    <label for="password" name="password">Password:</label>
    <input type="password" name="password">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $email = $_POST['email'];
    $password = $_POST['password'];
    
}
?>

</body>
</html>
<?php

?>