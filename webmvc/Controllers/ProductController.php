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
        //date
        $_day = $_POST['day'];
        $_month = $_POST['month'];
        $_year = $_POST['year'];
        //dongia, soluong
        $_dongia = $_POST['dongia'];
        $_soluong = $_POST['soluong'];
        //mau sac
        if(isset($_POST['mausac']))
        {
            $colors = $_POST['mausac'];
            foreach ($colors as $color) 
            {
                $_arrColor[] = $color; 
            }
            $_mausac = implode(", ", $_arrColor); //convert array to string
        }else
        {
            $_mausac = null;
        }

        //khuyenmai
        // var_dump($_POST['khuyenmai']); exit;
        if(isset($_POST['khuyenmai']))
            $_khuyenmai = $_POST['khuyenmai'];
        else
            $_khuyenmai = null;

        //thongtinthem
        $_thongtinthem = $_POST['thongtinthem'];
        
        //date
        if(intval($_day) < 10)
        {
            $_day = str_replace('0', '', $_day);
            $_day = '0'.$_day;
        }

        if(intval($_month) < 10)
        {
            $_month = str_replace('0', '', $_month);
            $_month = '0'.$_month;
        }

        $_date = $_day."/".$_month."/".$_year;

        // var_dump($_day); exit;
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
                echo "Nh?? sx n??y ch??a c?? trong csdl, vui l??ng th??m !";
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
        $prds->dongia = $_dongia;
        $prds->soluong = $_soluong;
        $prds->mausac = $_mausac;
        $prds->khuyenmai = $_khuyenmai;
        $prds->thongtinthem = $_thongtinthem;
        $prds->insert();


        ?>
            <script language="javascript">alert("???? th??m th??nh c??ng!");
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
                <script language="javascript">alert("???? x??a th??nh c??ng!");
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
                
                // var_dump($value->mausac); exit;
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
        $_day = $_POST['day'];
        $_month = $_POST['month'];
        $_year = $_POST['year'];
        //dongia, soluong
        $_dongia = $_POST['dongia'];
        $_soluong = $_POST['soluong'];
        //mau sac
        if(isset($_POST['mausac']))
        {
            $colors = $_POST['mausac'];
            foreach ($colors as $color) 
            {
                $_arrColor[] = $color; 
            }
            $_mausac = implode(", ", $_arrColor); //convert array to string
        }else
        {
            $_mausac = null;
        }
        
        //khuyenmai
        // var_dump($_POST['khuyenmai']); exit;
        if(isset($_POST['khuyenmai']))
            $_khuyenmai = $_POST['khuyenmai'];
        else
            $_khuyenmai = null;

        //thongtinthem
        $_thongtinthem = $_POST['thongtinthem'];

        //date
        if(intval($_day) < 10)
        {
            $_day = str_replace('0', '', $_day);
            $_day = '0'.$_day;
        }

        if(intval($_month) < 10)
        {
            $_month = str_replace('0', '', $_month);
            $_month = '0'.$_month;
        }

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
                echo "Nh?? sx n??y ch??a c?? trong csdl, vui l??ng th??m !";
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
        $prds->ngaysanxuat = $_date;
        $prds->dongia = $_dongia;
        $prds->soluong = $_soluong;
        $prds->mausac = $_mausac;
        $prds->khuyenmai = $_khuyenmai;
        $prds->thongtinthem = $_thongtinthem;
        

        $prds->update($_masp);
        ?>
            <script language="javascript">alert("???? c???p nh???p th??nh c??ng!");
            window.location = './';
            </script>
        <?php
    }








}

?>