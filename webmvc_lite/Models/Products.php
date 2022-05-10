<?php 
require_once 'Config.php';


class Products extends Config
{
    public $tName = 'tbl_sanpham';
    public $tName2 = 'tbl_nhasx';
    public $columns = ['ma_sp', 'ten_sp', 'ma_nhasx', 'hinhanh', 'ngaysanxuat', 'dongia', 'soluong', 'mausac', 'khuyenmai', 'thongtinthem'];
    public $columns2 = ['ma_nhasx', 'ten_nhasx'];
}
?>