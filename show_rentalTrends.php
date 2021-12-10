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
    echo "最受欢迎的车型，包括分析出学生喜欢租什么车，非学生喜欢租什么车:";
    $query = "call rentalTrends()";
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $row = mysqli_num_rows($res);    //如果查询成功这里返回真否则为假
    ?>
    <table style='text-align:left;' border='1'>
        <tr>
            <th>Make</th>
            <th>Model</th>
            <th>Is_Student</th>
            <th>Number_of_Times_Rented</th>
        </tr>
        <?php
        if ($row) {
            for ($i = 0; $i < $row; $i++)            //这里用一个FOR 语句查询显示多条结果
            {
                $dbrow = mysqli_fetch_array($res);

                $Make = $dbrow['Make'];
                $Model = $dbrow['Model'];
                $Is_Student = $dbrow['Is_Student'];
                $Number_of_Times_Rented = $dbrow['Number_of_Times_Rented'];

                echo "<tr><td>$Make</td><td>$Model</td><td>$Is_Student</td><td>$Number_of_Times_Rented</td></tr>";
            }
        } else {
            echo "无相关数据";
        }
        ?>
    </table>
</body>

</html>