<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
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
        <h2>Thêm sản phẩm</h2>
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
                <label for="">Ngày sản xuất</label>
                <br>
                <br>
                <label for="">Ngày</label>
                <input type="number" name="day" value="<?= date("d")?>" min="1" max="31">
                <label for="">Tháng</label>
                <input type="number" name="month" value="<?= date("n")?>" min="1" max="12">
                <label for="">Năm</label>
                <input type="number" name="year" value="<?= date("Y")?>" min="1500" max="3000">

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