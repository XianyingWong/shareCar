<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>租车</title>
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
    $Car_ID = $_GET['Car_ID'];   //先接收从news.php传过来的ID值以确定要修改的新闻
    //接着查出该新闻有关数据.
    $query = "select * from car where Car_ID=$Car_ID";
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $row = mysqli_num_rows($res);    //如果查询成功这里返回真否则为假
    $dbrow = mysqli_fetch_array($res);

    $Location_ID = $dbrow['Location_ID'];

    ?>

    <form action="save_rental.php" method="post">
        <!--这里是一个表单,意思是以post方式把下面输入的数据传到save_news.php页面. ,表单以</form>结束-->
        <table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td width="30%" align="right">Car_ID</td>
                <td width="70%" align="left"><input type="text" name="Car_ID" size="30" value="<?php echo $Car_ID; ?>" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">Location_ID</td>
                <td width="70%" align="left"><input type="text" name="Location_ID" size="30" value="<?php echo $Location_ID; ?>" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">Customer_ID</td>
                <td width="70%" align="left"><input type="text" name="Customer_ID" size="30" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">Date_Reserved</td>
                <td width="70%" align="left"><input type="text" name="Date_Reserved" size="30" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">Pickup</td>
                <td width="70%" align="left"><input type="text" name="Pickup" size="30" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">Drop_Off</td>
                <td width="70%" align="left"><input type="text" name="Drop_Off" size="30" /></td>
            </tr>
        </table>
        <table width="70%" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td align="center">
                    <input type="submit" name="submit1" value="确定租车" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>