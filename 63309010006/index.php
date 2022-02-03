<?php
    $contents = scandir(__DIR__);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการไฟล์</title>
    <style>
        table{
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border-bottom: 1px solid #ddd;
            padding: 15px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>รายการไฟล์ที่ส่งทั้งหมด</h2>
    <hr color="green">
    <table>
        <tr>
            <th>ที่</th>
            <th>ชื่อไฟล์</th>
        </tr>
        <?php $num = 1; foreach ($contents as $c) { ?>
        <?php if ($c!="." && $c!="..") { ?>
        <tr>    
            <td><?php echo $num++;  ?></td>
            <td><?php echo $c; ?></td>
        </tr>
        <?php } } ?>
    </table>
</body>
</html>