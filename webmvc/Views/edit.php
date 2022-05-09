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