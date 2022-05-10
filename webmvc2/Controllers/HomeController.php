<?php
require_once './Models/Products.php';

class HomeController
{
    public function index()
    {
        $prds = Products::getAll2();
        require_once 'Views/index.php';
    } 


}


?>