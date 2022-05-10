<?php

class ProductController
{
    public function index_create()
    {
        require_once 'Views/create.php';
    } 

    public function insert()
    {
       $_tensp = $_POST['tensp'];
       $_nhasx = $_POST['nhasx'];
       $_hinhanh = $_FILES['hinhanh'];
       $fileName = $_hinhanh['name'];
       $fileName = null;

    //    var_dump($_POST['nhasx']); exit;

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

       //kt hinh anh
       if($_hinhanh['size'] > 0)
           $fileName = 'uploads/'.time()."-".$_hinhanh['name'];

       if(move_uploaded_file($_hinhanh['tmp_name'], $fileName)){
       }else{
           $fileName = null;
       }

       //tro dl den csdl
       $prds = new Products();
       $prds->ma_sp = null;
       $prds->ten_sp = $_tensp;

       //kt ma nha sx
       if($_nhasx != 0 && is_int($_nhasx))
       {
            $prds->ma_nhasx = $_nhasx;
       }

       $prds->hinhanh = $fileName;

       //goi ham insert
       $prds->insert();
       ?>
            <script language="javascript">alert("Đã thêm thành công!");
            window.location = './';
            </script>
       <?php


    } 
}


?>