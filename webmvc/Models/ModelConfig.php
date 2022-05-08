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

 }



?>
