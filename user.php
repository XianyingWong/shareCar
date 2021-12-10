<!DOCTYPE html>
<html>

<head>
    <title>用户信息</title>
</head>

<body>
    <?php
    include("conn.php");
    mysqli_set_charset($conn, "utf8");
    echo "下面是所有用户的信息:<br>";
    $query = "select * from user";
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $row = mysqli_num_rows($res);    //如果查询成功这里返回真否则为假
    ?>
    <table style='text-align:left;' border='1'>
        <tr>
            <th>Customer_ID</th>
            <th>Last_Name</th>
            <th>First_Name</th>
            <th>Address</th>
            <th>Customers_Telephone</th>
            <th>Cell_Phone</th>
            <th>Email_Address</th>
            <th>Credit_Card</th>
            <th>Is_Student</th>
            <th>Tickets</th>
            <th>License_Number</th>
            <th>State_Issued</th>
            <th>Expiration_Date</th>
            <th>Location_ID</th>
            <th>Street_Address</th>
            <th>Locations_Telephone</th>
        </tr>
        <?php
        if ($row) {
            for ($i = 0; $i < $row; $i++)            //这里用一个FOR 语句查询显示多条结果
            {
                $dbrow = mysqli_fetch_array($res);

                $Customer_ID = $dbrow['Customer_ID'];
                $Last_Name = $dbrow['Last_Name'];
                $First_Name = $dbrow['First_Name'];
                $Address = $dbrow['Address'];
                $Customers_Telephone = $dbrow['Customers_Telephone'];
                $Cell_Phone = $dbrow['Cell_Phone'];
                $Email_Address = $dbrow['Email_Address'];
                $Credit_Card = $dbrow['Credit_Card'];
                $Is_Student = $dbrow['Is_Student'];
                $Tickets = $dbrow['Tickets'];
                $License_Number = $dbrow['License_Number'];
                $State_Issued = $dbrow['State_Issued'];
                $Expiration_Date = $dbrow['Expiration_Date'];
                $Location_ID = $dbrow['Location_ID'];
                $Street_Address = $dbrow['Street_Address'];
                $Locations_Telephone = $dbrow['Locations_Telephone'];

                echo "<tr><td>Customer_ID</td><td>$Last_Name</td><td>$First_Name</td><td>$Address</td><td>$Customers_Telephone</td><td>$Cell_Phone</td><td>$Email_Address</td><td>$Credit_Card</td><td>$Is_Student</td><td>$Tickets</td><td>$License_Number</td><td>$State_Issued</td><td>$Expiration_Date</td><td>$Location_ID</td><td>$Street_Address</td><td>$Locations_Telephone</td></tr>";
            }
        } else {
            echo "无相关数据";
        }
        ?>
    </table>
</body>

</html>