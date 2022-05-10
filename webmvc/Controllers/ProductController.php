<?php 

class ProductController
{
    public function index_create()
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
        $_day = $_POST['day'];
        $_month = $_POST['month'];
        $_year = $_POST['year'];
        $_date = $_day."/".$_month."/".$_year;
        // var_dump($_date); exit;
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
        $prds->ngaysanxuat = $_date;
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
        if (isset($_GET['id']) && !empty($_GET['id'])) 
        {
            $prds = new Products();
			$prds->delete($_GET['id']);?>
                <script language="javascript">alert("Đã xóa thành công!");
                window.location = './';
                </script>
            <?php
        }
    }


    //edit
    public function index_edit()
    {
        if (isset($_GET['id']) && !empty($_GET['id'])) 
        {
            $prds = new Products();
            // var_dump($prds->find($_GET['id'])); exit;
            // var_dump($prds->find2($_GET['id'])); exit;
            if(($value = $prds->find($_GET['id'])) != NULL)
            {
                // var_dump($value); exit;
                // var_dump($value->ma_nhasx); // lay ra id cua nha sx
                $value2 = $prds->find2($value->ma_nhasx);
                // var_dump($value2->ten_nhasx); exit; //lay ten nhasx
                require_once 'Views/edit.php';
            }
        }
    }

    public function edit()
    {
        // if (isset($_GET['id']) && !empty($_GET['id'])) 
        // {
        //     $prds = new Products();
        //     // var_dump($prds->find($_GET['id'])); exit;
        //     if(($value = $prds->find($_GET['id'])) != NULL)
        //     {
        //         require_once 'Views/edit.php';   
        //     }
        // }



        $_masp = $_GET['id'];
        $_tensp = $_POST['tensp'];
        $_nhasx = $_POST['nhasx'];
        $_hinhanh = $_FILES['hinhanh'];
        $fileName = $_hinhanh['name'];
        $fileName = null;

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

        //update
        if($_hinhanh['size'] > 0)
        {
            //neu co img update
            $fileName = 'uploads/'.time()."-".$_hinhanh['name'];
        }

        if(move_uploaded_file($_hinhanh['tmp_name'], $fileName)){
        }else
        { $fileName = null;}


        $prds = new Products();
        $prds->getAll2();

        // var_dump($temp[0]->ten_nhasx); exit;
        // var_dump($_POST['nhasx']); exit;


        $prds->ma_sp = $_masp;
        $prds->ten_sp = $_tensp;
        if($_nhasx != 0 && is_int($_nhasx))
            $prds->ma_nhasx = $_nhasx;
        $prds->hinhanh = $fileName;

        $prds->update($_masp);
        ?>
            <script language="javascript">alert("Đã cập nhập thành công!");
            window.location = './';
            </script>
        <?php
    }








}

?>