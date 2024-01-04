<?php 
    
    declare(strict_types = 1);
    include 'inc/autoloader.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    
    <?php 
    
       try { 
            echo Person\Person::$drinkingAge, "<br>";
            Person\Person::setDrinkingAge(34);
            echo Person\Person::$drinkingAge, "<br>";
        } catch(TypeError $e) {
            echo $e->getMessage();
        }

        $person1 = new Person\Person('drive', 'Owner', 16);
        echo $person1->getDA();

        $person2 = new Person\Person('Mel', 'Admin', 17);
        echo $person2->getDA();



    ?>

</body>
</html>