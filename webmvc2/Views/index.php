<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
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

        th
        {
            height: 80px;
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
    <h2>Thông tin sản phẩm</h2>

    <table>
        <tr>
            <td>STT</td>
            <td>Tên sản phẩm</td>
            <td>Nhà sản xuất</td>
            <td>Hình ảnh</td>
            <td><a href="index_create">Thêm sp</a></td>
        </tr>

        <?php /*var_dump($prds);*/
            $stt = 1;
             foreach ($prds as $prd) { ?>
                <tr>
                    <th><?=$stt?></th>
                    <th><?=$prd->ten_sp?></th>
                    <th><?=$prd->ten_nhasx?></th>
                    <th><img src="./<?=$prd->hinhanh?>" alt="<?=$prd->ten_sp?>" width=100></th>
                    <th>
                        <a href="#">Sửa</a>
                        <a href="#">Xóa</a>
                    </th>
                </tr>
        <?php $stt++; }?>
    
    </table>
</body>
</html>