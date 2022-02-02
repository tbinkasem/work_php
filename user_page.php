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
    <title>Main Page</title>
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
    </style>
</head>
<body>
    <h2>[Your ID :] <?php echo $id; ?> </h2>
    <h2>[Your Full Name :] <?php echo $fname; ?> - - [Department :] <?php echo $dname; ?> </h2>
    <hr color="red">
    <form action="process_file.php" method="post">
        <p>Your Send PHP File</p>
        <input id="php" type="submit" value="Send File">
    </form>
    <form action="process_image.php" method="post">
        <p>Your Send Image File</p>
        <input id="img" type="submit" value="Send File">
    </form>
    <br>
    <a href="./<?php echo $id; ?>/" target="_blank">
        <button id="work" type="submit">Open PHP Work</button>
    </a>
    

</body>
</html>