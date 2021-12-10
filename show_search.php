<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>显示搜索结果</title>
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
    $numOfPass = $_POST['numOfPass'];   //先接收从news.php传过来的ID值以确定要修改的新闻
    echo "下面是所有能搭乘";
    echo $numOfPass;
    echo "人的车辆的信息:<br>";
    $query = "call numberOfPassengers($numOfPass)";
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $row = mysqli_num_rows($res);    //如果查询成功这里返回真否则为假
    ?>
    <table style='text-align:left;' border='1'>
        <tr>
            <th>Car_ID</th>
            <th>Make</th>
            <th>Model</th>
            <th>Price_Per_Hour</th>
            <th>Number_of_Passengers</th>
        </tr>
        <?php
        if ($row) {
            for ($i = 0; $i < $row; $i++)            //这里用一个FOR 语句查询显示多条结果
            {
                $dbrow = mysqli_fetch_array($res);

                $Car_ID = $dbrow['Car_ID'];
                $Make = $dbrow['Make'];
                $Model = $dbrow['Model'];
                $Number_of_Passengers = $dbrow['Number_of_Passengers'];
                $Price_Per_Hour = $dbrow['Price_Per_Hour'];

                echo "<tr><td>$Car_ID</td><td>$Make</td><td>$Model</td><td>$Price_Per_Hour</td><td>$Number_of_Passengers</td></tr>";
            }
        } else {
            echo "无相关数据";
        }
        ?>
    </table>
</body>

</html>