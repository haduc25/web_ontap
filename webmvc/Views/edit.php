<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sản phẩm</title>
    <style>
        h2
        {
            text-align: center;
        }

        div
        {
            width: 100%;
        }
    </style>
</head>
<body>
    <div>
        <h2>Sửa sản phẩm</h2>
        <form action="edit?id=<?=$_GET['id']?>" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Thông tin sản phẩm</legend>
                <label for="">Tên sản phẩm</label>
                <input type="text" name="tensp" value="<?=$value->ten_sp?>">

                <br>
                <br>
                <?php /*var_dump($value); exit;*/ ?>
                <label for="">Nhà sản xuất</label>
                <select name="nhasx">
                    <option selected value="<?=$value2->ten_nhasx?>"><?=$value2->ten_nhasx?></option>
                    <option value="Apple">Apple</option>
                    <option value="Dareu">Dareu</option>
                    <option value="Logitech">Logitech</option>
                    <option value="Samsung">Samsung</option>
                </select>
                
                <br>
                <br>
                <label for="">Ngày sản xuất</label>
                <br>
                <br>
                <label for="">Ngày</label>
                <input type="number" name="day" value="<?=substr($value->ngaysanxuat, 0, 2);?>" min="1" max="31">
                <label for="">Tháng</label>
                <input type="number" name="month" value="<?=substr($value->ngaysanxuat, 3, -5);?>" min="1" max="12">
                <label for="">Năm</label>
                <input type="number" name="year" value="<?=substr($value->ngaysanxuat, 6);?>" min="1500" max="3000">

                <br>
                <br>
                <label for="">Đơn giá</label>
                <input type="number" name="dongia" value="<?=$value->dongia?>" min="1000" step="500"> VNĐ
                <br>
                <br>
                <label for="">Số lượng</label>
                <input type="number" name="soluong" value="<?=$value->soluong?>" min="1">

                <br>
                <br>
                <label for="">Màu sắc</label>
                <br>
                <input type="checkbox" name="mausac[]" value="Trắng" <?php if(strpos($value->mausac, "Trắng") !== false ){?> checked <?php } ?>>
                <label for="vehicle1"> Trắng</label>
                <input type="checkbox" name="mausac[]" value="Đen" <?php if(strpos($value->mausac, "Đen") !== false ){?> checked <?php } ?>>
                <label for="vehicle2"> Đen</label>
                <input type="checkbox" name="mausac[]" value="Vàng" <?php if(strpos($value->mausac, "Vàng") !== false ){?> checked <?php } ?>>
                <label for="vehicle2"> Vàng</label>
                <input type="checkbox" name="mausac[]" value="Đỏ" <?php if(strpos($value->mausac, "Đỏ") !== false ){?> checked <?php } ?>>
                <label for="vehicle2"> Đỏ</label>
                <input type="checkbox" name="mausac[]" value="Tím" <?php if(strpos($value->mausac, "Tím") !== false ){?> checked <?php } ?>>
                <label for="vehicle2"> Tím</label>
                <input type="checkbox" name="mausac[]" value="Xanh dương" <?php if(strpos($value->mausac, "Xanh dương") !== false ){?> checked <?php } ?>>
                <label for="vehicle2"> Xanh dương</label>

                <br>
                <br>
                <label for="">Khuyến mại</label>
                <br>
                <input type="radio" name="khuyenmai" value="10%" <?php if(strpos($value->khuyenmai, "10%") !== false ){?> checked <?php } ?>>10%
                <input type="radio" name="khuyenmai" value="20%" <?php if(strpos($value->khuyenmai, "20%") !== false ){?> checked <?php } ?>> 20%
                <input type="radio" name="khuyenmai" value="Bảo hành 1 năm" <?php if(strpos($value->khuyenmai, "Bảo hành 1 năm") !== false ){?> checked <?php } ?>> Bảo hành 1 năm

                <br>
                <br>
                <label for="">Thông tin thêm</label>
                <br>
                <textarea name="thongtinthem" rows="4" cols="50" placeholder="Viết gì đó ở đây :>"><?=$value->thongtinthem?></textarea>
                
                <br>
                <br>
                <label for="">Hình ảnh</label>
                <?php
                    if($value->hinhanh)
                    {?>
                        <br>
                        <img src="./<?=$value->hinhanh?>" alt="<?=$value->ten_sp?>" width=250>
                        <br>
                    <?php }
                ?>
                <input type="file" name="hinhanh">

                <br>
                <br>
                <input type="submit" value="Chỉnh sửa">
                <input type=button onClick="location.href='./'" value='Quay lại'>
            </fieldset>
        </form>

    </div>
</body>
</html>