<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <style>
        h1
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
        <h1>Thêm sản phẩm</h1>
        <form action="insert" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Thông tin sản phẩm</legend>
                <label for="">Tên sản phẩm</label>
                <input type="text" name="tensp">

                <br>
                <br>
                <label for="">Nhà sản xuất</label>
                <select name="nhasx">
                    <option value="Apple">Apple</option>
                    <option value="Dareu">Dareu</option>
                    <option value="Logitech">Logitech</option>
                    <option value="Samsung">Samsung</option>
                </select>

                <br>
                <br>
                <label for="">Hình ảnh</label>
                <input type="file" name="hinhanh">

                <br>
                <br>
                <input type="submit" value="Thêm">
                <input type=button onClick="location.href='./'" value='Quay lại'>
            </fieldset>
        </form>

    </div>
</body>
</html>