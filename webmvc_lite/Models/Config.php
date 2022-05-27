<?php


 class Config
 {
    public $conn;
    public function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost; dbname=project_sp; charset=utf8", 'root', '');
    }
    
    public static function getAll()
    {
        $model = new static();
        // $sql = "select * from `$model->tName`, `$model->tName2` where $model->tName.ma_nhasx = $model->tName2.ma_nhasx";
        $sql = "select * from `$model->tName`, `$model->tName2` where soluong > 5";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $rs = $stmt ->fetchAll(PDO::FETCH_CLASS, get_class($model));
        return $rs;
    }

    //insert
    public function insert(){
        $this->queryBuilder = "insert into $this->tName (";
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
        $_id = $this->columns[0]; //save id from csdl
        $this->queryBuilder = "delete from $this->tName where $_id = $id";
        $stmt = $this->conn->prepare($this->queryBuilder);
        try{

            $stmt->execute();
            return true;
        }catch(Exception $ex){
            var_dump($ex->getMessage());die;
        }
    }

    //find 
    public static function find($id){
        $model = new static();
        $_id = $model->columns[0]; //save id from csdl

        $sql = "select * from $model->tName where $_id = $id";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));

        if (count($result) > 0) {
            return $result[0];
        } else {
            return null;  
        }
    }

    //find 
    public static function find2($id){
        $model = new static();
        $_id = $model->columns2[0]; //save id from csdl

        $sql = "select * from $model->tName2 where $_id = $id";
        $stmt = $model->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($model));

        if (count($result) > 0) {
            return $result[0];
        } else {
            return null;  
        }
    }

    //edit
    function update($id){
        $this->queryBuilder = "update $this->tName set ";
        foreach ($this->columns as $col) {
            if($this->{$col} == null){
                continue;
            }
            $this->queryBuilder .= " $col = '" . $this->{$col} . "', ";
        }

        $this->queryBuilder = rtrim($this->queryBuilder, ", ");
        $_id = $this->columns[0]; //save id from csdl
        $this->queryBuilder .= " where $_id = $id";
        $stmt = $this->conn->prepare($this->queryBuilder);
        try{
            $stmt->execute();
            return $this;
        }catch(Exception $ex){
            var_dump($ex->getMessage());
            die;
        }
    }
    
 }
?>
