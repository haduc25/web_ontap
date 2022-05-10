<?php 
require_once 'ModelConfig.php';


class Products extends ModelConfig
{
    public $tName = 'tbl_sanpham';
    public $tName2 = 'tbl_nhasx';
    public $columns = ['ma_sp', 'ten_sp', 'ma_nhasx', 'hinhanh', 'ngaysanxuat'];
    public $columns2 = ['ma_nhasx', 'ten_nhasx'];
}


?>