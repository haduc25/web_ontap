<?php 

class ProductController
{
    public function index()
    {
        require_once 'Views/create.php';
    }

    public function insert()
    {
        // var_dump($_POST['nhasx']); exit;
        $_tensp = $_POST['tensp'];
        $_nhasp = $_POST['nhasx'];
        $_hinhanh = $_FILES['hinhanh'];
        //var_dump($_FILES['hinhanh']);


        $fileName = $_hinhanh['name'];
        $prds = new Products();

        $temp = $prds->getAll2();
        var_dump($temp[0]->ten_nhasx); exit;


        $prds->ma_sp = null;
        $prds->ten_sp = $_tensp;
        $prds->ma_nhasx = 1;


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
}

?>