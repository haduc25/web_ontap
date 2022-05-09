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

    //insert
    public function insert(){
        // var_dump($this->tName); exit();
        $this->queryBuilder = "insert into $this->tName (";
        // var_dump($this->tName); exit;
        foreach ($this->columns as $col) {
            if($this->{$col} == null){
                continue;
            }
            $this->queryBuilder .= "$col, ";
        }
        $this->queryBuilder = rtrim($this->queryBuilder, ", ");
        $this->queryBuilder .= ") values ( ";
        foreach ($this->columns as $col) {
            if($this->{$col} == null){
                continue;
            }
            $this->queryBuilder .= "'" . $this->{$col} ."', ";
        }
        $this->queryBuilder = rtrim($this->queryBuilder, ", ");
        $this->queryBuilder .= ")";

        // var_dump($this->queryBuilder); exit;
        $stmt = $this->conn->prepare($this->queryBuilder);
        try{

            $stmt->execute();
            $this->id = $this->conn->lastInsertId();
            return $this;
        }catch(Exception $ex){
            var_dump($ex->getMessage());die;
        }
    }


    //delete
    public function delete($id){
        // var_dump($id); exit();
        // var_dump($this->tName); exit();
        // var_dump($this->columns[0]); exit();

        $_id = $this->columns[0]; //save id from csdl
        // var_dump($_id); exit;

        // $this->queryBuilder = "delete from $this->tName where id_sp = $id";
        $this->queryBuilder = "delete from $this->tName where $_id = $id";
        // var_dump($this->queryBuilder); exit();

        $stmt = $this->conn->prepare($this->queryBuilder);
        try{

            $stmt->execute();
            return true;
        }catch(Exception $ex){
            var_dump($ex->getMessage());die;
        }
    }




    
 }



?>
