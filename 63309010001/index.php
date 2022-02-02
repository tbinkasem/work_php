<?php

    $contents = scandir(__DIR__);
    // foreach ($contents as $c) {
    //     if ($c!="." && $c!="..") {
    //         //echo is_dir($c) ? "DIR" : "FILE" ;
    //         echo "$c<br>";
    //     }
    // }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List PHP File</title>
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
    <h2>Your PHP File</h2>
    <hr color="green">
    <table>
        <tr>
            <th>No</th>
            <th>File Name</th>
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