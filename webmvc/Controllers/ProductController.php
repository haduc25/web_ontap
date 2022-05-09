<?php 

class ProductController
{
    public function index()
    {
        require_once 'Views/create.php';
    }


    //insert
    public function insert()
    {
        // var_dump($_POST['nhasx']); exit;
        $_tensp = $_POST['tensp'];
        $_nhasx = $_POST['nhasx'];
        $_hinhanh = $_FILES['hinhanh'];
        //var_dump($_FILES['hinhanh']);

        switch($_nhasx)
        {
            case 'Logitech':
                $_nhasx = 1;
                break;
            case 'Dareu':
                $_nhasx = 2;
                break;
            case 'Apple':
                $_nhasx = 3;
                break;
            case 'Samsung':
                $_nhasx = 4;
                break;
            default:
                $_nhasx = 0;
                echo "Nhà sx này chưa có trong csdl, vui lòng thêm !";
                exit();
        }


        $fileName = $_hinhanh['name'];
        $prds = new Products();

        $temp = $prds->getAll2();

        // var_dump($temp[0]->ten_nhasx); exit;
        // var_dump($_POST['nhasx']); exit;


        $prds->ma_sp = null;
        $prds->ten_sp = $_tensp;
        
        if($_nhasx != 0 && is_int($_nhasx))
        {
            // var_dump($_nhasx); exit;
            $prds->ma_nhasx = $_nhasx;
        }

		$fileName = null;
		if($_hinhanh['size'] > 0){
			$fileName = 'uploads/'.time()."-".$_hinhanh['name'];
        }

        if(move_uploaded_file($_hinhanh['tmp_name'], $fileName)){
			//have image
			// $sql.=" ,avatar=:avatar";
		}else{
			//no image
			$fileName = null;
		}

        $prds->hinhanh = $fileName;
        $prds->insert();


        ?>
            <script language="javascript">alert("Đã thêm thành công!");
            window.location = './';
            </script>
        <?php
    }


    //del
    public function delele()
    {
        // $prds = new Products();
		// $prds->delete($_GET['id']);

        // echo 'use wanna delete';
        if(isset($_GET['id']) && !empty($_GET['id']))
        {
            // echo 'do u sure wanna to delete?';
            ?>
                <script language="javascript">
                    // var txt;
                    if(confirm("Bạn có chắc chắn muốn xóa?")){
                        // txt = 'deleted';
                        <?php /*$prds = Products::delete($_GET['id']);*/ 
                            $prds = new Products();
                            $prds->delete($_GET['id']);
                        ?>
                        alert("Đã xóa thành công!");
                    }
                    else{
                        // txt = 'cancel';
                    }
                    // console.log(txt);
                    window.location = './';
                // window.location = '../login';
                </script>
            <?php
        }
    }










}

?>