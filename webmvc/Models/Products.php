<?php 
// require_once 'ModelConfig.php';


// class Products extends ModelConfig
// {
//     public $tName = 'tbl_sanpham';
//     public $cols = ['ma_sp', 'ten_sp', 'ma_nhasx', 'hinhanh'];
// }


?>

<?php 
require_once 'ModelConfig.php';
/**
 * 
 */
class Products extends ModelConfig
{
    public $tName = 'tbl_sanpham';
    public $cols = ['ma_sp', 'ten_sp', 'ma_nhasx', 'hinhanh'];
}

 ?>