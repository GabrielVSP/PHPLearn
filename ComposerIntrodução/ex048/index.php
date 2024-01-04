<?php

    require('vendor/autoload.php');
    use Carbon\Carbon;
    use Eduardokum\CorreiosPhp\Calculo;
    use Eduardokum\CorreiosPhp\Correios;

    $correios = new Calculo();
  

    $today = Carbon::today('America/Sao_Paulo');

    if(!Carbon::now()->isWeekend()) {
        echo "cry";
    }


?>