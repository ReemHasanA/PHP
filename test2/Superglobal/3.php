<!DOCTYPE html>
<html>
<body>

<form method="POST" action="">
    <label for="toDo" name="ToDo">ToDo:</label>
    <input type="text" name="ToDo">
    <button type='button'  name='add' value="Add" onclick="document.write('<?php  $_SESSION['ToDo']=$ToDo ; ?>');">Add</button>
  <input type="submit" name='show' value="Show">
</form>

<?php
session_start();
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}
    $ToDo = array();
    if (isset($_POST['show'])) {

    // $_SESSION['ToDo']=0;
// if (isset($_POST['add'])) {
    $i=$_SESSION['count'];
    $ToDo[$i] = $_POST['ToDo'];
   print_r($_SESSION['ToDo']);
    echo '<ul>';
    foreach ($ToDo as $toDo) {
      
        echo "<li>".$toDo."</li>";
    }
    echo '</ul>';
}
// }

    echo 'Page loaded in ' . microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'] . ' seconds!<br>';
    echo$_SERVER['SCRIPT_NAME'];//https://www.delftstack.com/howto/php/php-get-file-name/#google_vignette
    echo '<br>';
    echo $_SERVER['REQUEST_TIME_FLOAT'];echo date("l jS \of F Y H:i:s",($_SERVER['REQUEST_TIME_FLOAT']));echo'<br>';
    
    echo basename($_SERVER['PHP_SELF'], ".php");

?>

</body>
</html>