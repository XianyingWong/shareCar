<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>显示结果</title>
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
    echo "受欢迎的地点。显示在各个地点处发生交易的次数:";
    $query = "call popularLocations()";
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $row = mysqli_num_rows($res);    //如果查询成功这里返回真否则为假
    ?>
    <table style='text-align:left;' border='1'>
        <tr>
            <th>Location_ID</th>
            <th>Street_Address</th>
            <th>Locations_Telephone</th>
            <th>Nuber_of_Rentals</th>
        </tr>
        <?php
        if ($row) {
            for ($i = 0; $i < $row; $i++)            //这里用一个FOR 语句查询显示多条结果
            {
                $dbrow = mysqli_fetch_array($res);

                $Location_ID = $dbrow['Location_ID'];
                $Street_Address = $dbrow['Street_Address'];
                $Locations_Telephone = $dbrow['Locations_Telephone'];
                $Nuber_of_Rentals = $dbrow['Nuber_of_Rentals'];

                echo "<tr><td>$Location_ID</td><td>$Street_Address</td><td>$Locations_Telephone</td><td>$Nuber_of_Rentals</td></tr>";
            }
        } else {
            echo "无相关数据";
        }
        ?>
    </table>
</body>

</html>