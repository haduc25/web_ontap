<?php 
// require_once './Models/Products.php';


// class HomeController
// {
//     public function index()
//     {
//         $prds = Products::getAll();
//         var_dump($prds); exit;
//         require_once 'Views/index.php';
//     }
// }

?>

<?php 
require_once './Models/Products.php';

/**
 * 
 */
class HomeController
{
	
	public function index()
	{
		$users = Products::getAll(); //chay ham getAll();
        echo 'done';
		// require_once 'Views/index.php';
	}


}

 ?>