<?php 

    
    $url = isset($_GET['url']) ? trim($_GET['url'], '/') : 'home';

    $rutas = [
        'home' => "home.php"
    ];

    if (array_key_exists($url, $rutas)) {
        require $rutas[$url];
    }else{
    
    }