<?php 


    $a = null;
    $a1 = [];

    $b = false ?: 'ab' ?: 'a';

    $c = $_POST['user'] ?? $_POST['user']?->country ?? 'a';

    echo $c, '<br>';

    function test():? string {

        return 69;

    }

    function sum(?string $num): int {

        return $num + $num;

    }

    var_dump(test());
    echo '<br>';
    var_dump(sum('3'));

?>