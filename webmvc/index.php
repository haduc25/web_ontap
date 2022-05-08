<?php

    $url = isset($_GET['url']) == true ? $_GET['url']:"/";
    require_once './Controllers/HomeController.php';
    require_once './Controllers/ProductController.php';


    switch ($url)
    {
        case '/':
            $ctl =  new HomeController();
            $ctl->index();
            break;
        
        case 'index_create':
            $ctl = new ProductController();
            $ctl->index();
            break;    

        default: 
            echo 'Oét Ô Oét => Pages Not Found 404 !';
    }

    
?>
