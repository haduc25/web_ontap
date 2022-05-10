<?php

    $url = isset($_GET['url']) == true ? $_GET['url']:"/";
    require_once './Controllers/ProductController.php';
    require_once './Controllers/HomeController.php';


    switch($url)
    {
        case '/':
            $ctl = new HomeController();
            $ctl->index();
            break;

        case 'index_create':
            $ctl = new ProductController();
            $ctl->index_create();
            break;

        case 'insert':
            $ctl = new ProductController();
            $ctl->insert();
            break;

        default:
            echo 'sos - 404 pages not found!';
    }


?>