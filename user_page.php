<?php

    session_start();
    $id = $_SESSION['ids'];
    $fname = $_SESSION['fullname'];
    $dname = $_SESSION['depname'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าหลักของ [ <?php echo $id; ?> ]</title>
    <style>
        #php{
            background-color: red;
            width: 100px;
            height: 30px;
            color: white;
        }
        #img{
            background-color: yellow;
            width: 100px;
            height: 30px;
        }
        #work{
            background-color: green;
            width: 120px;
            height: 30px;
            color: white;
        }
        #logout{
            text-align: right;
        }
        #phplog{
            background-color: blue;
            width: 120px;
            height: 30px;
            color: white;
        }
    </style>
</head>
<body>
    <h1>[รหัสประจำตัวนักศึกษา] <?php echo $id; ?></h1>
    <h2>[ชื่อ - สกุล] <?php echo $fname; ?></h2>
    <h3>[สาขาวิชา] <?php echo $dname; ?></h3>
    <div id="logout">
        <a href="logout.php" onclick="return confirm('ยืนยันออกจากระบบ')">
            <button id="phplog" type="submit">ออกจากระบบ</button>
        </a>
    </div>
    <hr color="red">
    <form action="process_file.php" method="post" enctype="multipart/form-data">
        <p>ส่งไฟล์ชิ้นงาน xxx.php</p>
        <input name="fphp" type="file" accept=".php">
        <input id="php" type="submit" value="ส่งไฟล์ PHP">
    </form>
    <form action="process_image.php" method="post" enctype="multipart/form-data">
        <p>ส่งไฟล์รูปภาพประกอบ</p>
        <input name="fimage" type="file" accept="image/*">
        <input id="img" type="submit" value="ส่งไฟล์ รูปภาพ" name="submit">
    </form>
    <br>
    <hr color="green">
    <br>
    เปิดหน้าเว็บ ตรวจสอบไฟล์ที่ส่งทั้งหมด &nbsp;&nbsp;
    <a href="./<?php echo $id; ?>/" target="_blank">
        <button id="work" type="submit">เปิดดูชิ้นงาน</button>
    </a>

</body>
</html>