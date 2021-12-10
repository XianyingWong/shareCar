<!DOCTYPE html>
<html>

<head>
    <title>车辆信息</title>
</head>

<body>
    <?php
    include("conn.php");
    mysqli_set_charset($conn, "utf8");
    echo "下面是所有车辆的信息:<br>";
    $query = "select * from car";
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $row = mysqli_num_rows($res);    //如果查询成功这里返回真否则为假
    ?>
    <table style='text-align:left;' border='1'>
        <tr>
            <th>Car_ID</th>
            <th>Make</th>
            <th>Model</th>
            <th>Number_of_Passengers</th>
            <th>Description</th>
            <th>Price_Per_Hour</th>
            <th>Price_Per_Day</th>
            <th>Location_ID</th>
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
                $Description = $dbrow['Description'];
                $Price_Per_Hour = $dbrow['Price_Per_Hour'];
                $Price_Per_Day = $dbrow['Price_Per_Day'];
                $Location_ID = $dbrow['Location_ID'];

                echo "<tr><td>$Car_ID</td><td>$Make</td><td>$Model</td><td>$Number_of_Passengers</td><td>$Description</td><td>$Price_Per_Hour</td><td>$Price_Per_Day</td><td>$Location_ID</td><td><a href='rental_car.php?Car_ID=$Car_ID'>租车</a></td></tr>";
            }
        } else {
            echo "无相关数据";
        }
        ?>
    </table>
</body>

</html>