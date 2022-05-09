<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - Danh sách sản phẩm</title>
    <style>
        h2
        {
            text-align: center;
            /* color: red; */
        }

        table
        {
            width: 100%;
            text-align: center;
            border-collapse: collapse;
        }

        table, th, td
        {
            border: 1px solid #000;
            padding: 3px;
        }

        td
        {
            height: 50px;
        }

        a
        {
            text-decoration: none;
            color: #fff;
            padding: 2px 8px;
            margin-left: 5px;
            margin-right: 5px;
            background-color: #000;
            opacity: .8;
            /* border: 1px solid #000; */
        }

        a:hover
        {
            color: #000;
            background-color: #fff;
            text-decoration: underline;
        }

    </style>
</head>
<body>
        <h2>Danh sách sản phẩm</h2>
        <table>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Tên nhà sản xuất</th>
                <th>Hình ảnh</th>
                <th><a href="./index_create">Thêm</a></th>
            </tr>
            <?php $stt = 1;
            foreach ($prds as $prd) {?>
                <tr>
                    <td><?=$stt?></td>
                    <td><?=$prd->ten_sp?></td>
                    <td><?=$prd->ten_nhasx?></td>
                    <td><img src="./<?=$prd->hinhanh?>" alt="<?=$prd->ten_sp?>" width=100></td>
                    <td>
                        <a href="#">Sửa</a>
                        <a href="#">Xóa</a>
                    </td>
                </tr>
            <?php $stt++; } ?>
        </table>

</body>
</html>