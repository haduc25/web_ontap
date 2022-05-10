<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đây là trang thêm sp bla bla...</title>
    <style>
        h2
        {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Thêm sản phẩm</h2>

    <form action="insert" method="POST" enctype="multipart/form-data">
        <label for="">Tên sản phẩm</label>
        <input type="text" name="tensp">
        <br>
        <br>
        <label for="">Nhà sản xuất</label>

        <!-- combobox - nhà sản xuất -->
        <select name="nhasx">
                    <option value="Apple">Apple</option>
                    <option value="Dareu">Dareu</option>
                    <option value="Logitech">Logitech</option>
                    <option value="Samsung">Samsung</option>
        </select>

        <br>
        <br>
        <input type="file" name="hinhanh">
        <br>
        <br>
        <!-- nút thêm -->
        <input type="submit" value="Thêm">
        <!-- nút quay lại -->
        <input type="button" value="Quay lại" onClick="location.href='./'">
    </form>

</body>
</html>