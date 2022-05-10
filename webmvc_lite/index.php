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
        
        //insert
        case 'index_create':
            $ctl = new ProductController();
            $ctl->index_create();
            break;    
        
        case 'insert':
            $ctl = new ProductController();
            $ctl->insert();
            break;    

        //delete
        case 'del':
            $ctl = new ProductController();
            $ctl->delele();
            break;  

        //edit
        case 'index_edit':
            $ctl = new ProductController();
            $ctl->index_edit();
            break;    

        case 'edit':
            $ctl = new ProductController();
            $ctl->edit();
            break;    

        default: 
            echo 'Oét Ô Oét => Pages Not Found 404 !';
    }
?>
