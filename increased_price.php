<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>提升价格</title>
    <style>
        form {
            padding: 0px;
            margin: 0px;
        }
    </style>
</head>

<body>
    <?php
    include("conn.php");
    //mysql_query("set names gb2312");
    mysqli_set_charset($conn, "utf8");
    $query = "call increasedPrice()";
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
    if ($res) {
        echo "提升价格成功,<a href='SHARE_CAR.php'>返回继续</a>";
    } else {
        echo "提升价格失败,<a href='SHARE_CAR.php'>请返回</a>";
    }
    ?>
</body>

</html>