<?php

    $url = isset($_GET['url']) == true ? $_GET['url']:"/";
    require_once './Controllers/HomeController.php';


    switch ($url)
    {
        case '/':
            $ctl =  new HomeController();
            $ctl->index();
            break;

        default: 
            echo 'sos';
    }

    
?>
