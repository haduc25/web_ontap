<?php 
require_once './Models/Products.php';


class HomeController
{
    public function index()
    {
        $prds = Products::getAll();
        require_once 'Views/index.php';
    }
}

?>