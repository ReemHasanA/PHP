<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <input type="number" name="x" placeholder="First number">
        <select name="operator">
            <option value="+">(+)</option>
            <option value="-">(-)</option>
            <option value="*">(*)</option>
            <option value="/">(/)</option>
        </select>
        <input type="number" name="y" placeholder="Second number">
        <input type="submit" value="calc">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (empty($_GET['x']&&$_GET['y'])) {
        echo 'please enter your number';
    }else{
        $x = $_GET['x'];
        $y = $_GET['y'];
        $operator = $_GET['operator'];

        switch ($operator) {
            case '+':
                $result = $x + $y;
                break;
            case '-':
                $result = $x - $y;
                break;
            case '*':
                $result = $x* $y;
                break;
            case '/':
                if ($y != 0) {
                    $result = $x / $y;
                } else {
                    echo "Division by zero is not allowed.";
                }
                break;
        }

        echo  $result;
    }}
    ?>
</body>
</html>