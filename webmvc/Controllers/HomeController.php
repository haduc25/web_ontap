<?php 
require_once './Models/Products.php';


class HomeController
{
    public function index()
    {
        $prds = Products::getAll2();
        // var_dump($prds); exit;
        require_once 'Views/index.php';
    }

    public function index2()
    {
        $prds = Products::getAll2();
        // var_dump($prds); exit;
        require_once 'Views/index.php';
    }
}

?>