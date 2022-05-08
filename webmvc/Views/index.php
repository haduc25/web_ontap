<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        h1
        {
            text-align: center;
            color: red;
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
            
        }
    </style>
</head>
<body>
        <h1>That is index in Views Folder!</h1>

        <h2>Danh sách sản phẩm</h2>
        <table>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Mã nhà sản xuất</th>
                <th>Hình ảnh</th>
            </tr>
            <?php foreach ($prds as $prd) {
            ?>
                <tr>
                    <td><?=$prd->ma_sp?></td>
                    <td><?=$prd->ten_sp?></td>
                    <td><?=$prd->ma_nhasx?></td>
                    <td><?=$prd->hinhanh?></td>
                </tr>
            <?php } ?>
        </table>

</body>
</html>