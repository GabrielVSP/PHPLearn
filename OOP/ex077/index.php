<?php 

    declare(strict_types = 1);
    define('ROOT', __DIR__);
    include 'inc/autoloader.php';

    $result = 0;

    if(isset($_POST['submit'])) {

        $operation = $_POST['operation'];
        $num1 = (float)$_POST['num1'];
        $num2 = (float)$_POST['num2'];

        if(is_numeric($num1)) {
            $calculator = new Calculate($operation, $num1, $num2);
    
            try {
                $result = $calculator->calculate();
            } catch(TypeError $e) {
                echo $e->getMessage();
            }
        }else {
            echo 'Error: Not a Number';
        }       

        var_dump($num1);

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    
    <main>

        <form method="post">

            <input type="text" name="num1" id="num1" placeholder="First number" value="0">
            <select name="operation" id="operation">
                <option value="sum">Sum</option>
                <option value="subtract">Subtract</option>
                <option value="multiply">Multiply</option>
                <option value="divide">Divide</option>
            </select>
            <input type="text" name="num2" id="num2" placeholder="Second number" value="0">

            <input type="submit" value="Calculate" name="submit">

        </form>

        <h2><?= $result ?></h2>

    </main>

</body>
</html>