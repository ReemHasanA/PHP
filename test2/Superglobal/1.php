<!DOCTYPE html>
<html>
<body>

<form method="POST" action="">
    <label for="search" name="search">search:</label>
    <input type="text" name="search">
  <input type="submit" value="GO">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $search = $_POST['search'];
    header("Location: $search");
    // echo 'window.location.href = '.$search.';';
    
}
?>

</body>
</html>