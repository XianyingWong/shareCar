<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>新用户注册</title>
    <style>
        form {
            padding: 0px;
            margin: 0px;
        }
    </style>
</head>

<body>
    <table width="70%" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">用户注册 请填写您的个人信息信息</td>
        </tr>
    </table>
    <form action="save_register.php" method="post">
        <!--这里是一个表单,意思是以post方式把下面输入的数据传到save_news.php页面. ,表单以</form>结束-->
        <table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td width="30%" align="right">Customer_ID </td>
                <td width="70%" align="left"><input type="text" name="Customer_ID" size="30" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">Last_Name </td>
                <td width="70%" align="left"><input type="text" name="Last_Name" size="30" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">First_Name </td>
                <td width="70%" align="left"><input type="text" name="First_Name" size="30" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">Address </td>
                <td width="70%" align="left"><input type="text" name="Address" size="30" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">Customers_Telephone </td>
                <td width="70%" align="left"><input type="text" name="Customers_Telephone" size="30" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">Cell_Phone </td>
                <td width="70%" align="left"><input type="text" name="Cell_Phone" size="30" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">Email_Address </td>
                <td width="70%" align="left"><input type="text" name="Email_Address" size="30" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">Credit_Card </td>
                <td width="70%" align="left"><input type="text" name="Credit_Card" size="30" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">Is_Student </td>
                <td width="70%" align="left"><input type="text" name="Is_Student" size="30" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">Tickets </td>
                <td width="70%" align="left"><input type="text" name="Tickets" size="30" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">License_Number </td>
                <td width="70%" align="left"><input type="text" name="License_Number" size="30" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">State_Issued </td>
                <td width="70%" align="left"><input type="text" name="State_Issued" size="30" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">Expiration_Date </td>
                <td width="70%" align="left"><input type="text" name="Expiration_Date" size="30" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">Location_ID </td>
                <td width="70%" align="left"><input type="text" name="Location_ID" size="30" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">Street_Address </td>
                <td width="70%" align="left"><input type="text" name="Street_Address" size="30" /></td>
            </tr>
            <tr>
                <td width="30%" align="right">Locations_Telephone </td>
                <td width="70%" align="left"><input type="text" name="Locations_Telephone" size="30" /></td>
            </tr>
        </table>
        <table width="70%" height="30" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td align="center"><input type="submit" name="submit1" value="立即注册" /></td>
            </tr>
        </table>
    </form>
</body>

</html>