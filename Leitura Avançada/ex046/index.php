<?php

    $xml = simplexml_load_file('data.xml');

    print_r($xml);
    echo "<br>" . $xml->channel->item->age;

?>