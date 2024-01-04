<?php 

    include('template.php');

    use Base as temp;

    $params = ['title' => 'About',
                'name' => 'Drive',
                'ark' => 'Akinori'];

    temp\Template::render($params, 'about.html');
    
?>