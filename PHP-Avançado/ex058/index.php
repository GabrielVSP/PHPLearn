<?php 

    include('cache.php');
    $cache = new Cache;
    $readCache = $cache->readCache();

    if($readCache !== null) {
        echo $cache->readCache()->content;
    }

?>