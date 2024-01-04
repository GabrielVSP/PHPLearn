<?php

    date_default_timezone_set('America/Sao_Paulo');

    $date = DateTime::createFromFormat('d/m/Y', '20/02/2007');
    echo $date->format('d/m/Y'), '<br>';

    echo date('d/m/Y H:i:s', strtotime('2007-02-20 09:30:00'));

    echo '<br>', strtotime('+1 day');

?>