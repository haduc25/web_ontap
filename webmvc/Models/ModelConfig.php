<?php


 class ModelConfig
 {
    public $conn;
    public function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost; dbname=project_sp; charset=utf8", 'root', '');
    }
    

    public static function getAll()
    {
        $model = new static();
        $sql = "select * from $model->tName";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $rs = $stmt ->fetchAll(PDO::FETCH_CLASS, get_class($model));
        return $rs;
    }

    public static function getAll2()
    {
        $model = new static();
        // var_dump($model->tName); exit;

        //SELECT * FROM `tbl_sanpham`, `tbl_nhasx` WHERE tbl_sanpham.ma_nhasx = tbl_nhasx.ma_nhasx
        // $sql = "select * from $model->tName";

        // $sql = "select * from `$model->tName`, `$model->tName2` where `$model->tName.ma_nhasx` = `$model->tName2.ma_nhasx`";
        $sql = "select * from `$model->tName`, `$model->tName2` where $model->tName.ma_nhasx = $model->tName2.ma_nhasx";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $rs = $stmt ->fetchAll(PDO::FETCH_CLASS, get_class($model));
        return $rs;
    }
    
 }



?>
