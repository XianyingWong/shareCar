<?php
include("conn.php");
//mysql_query("set names gb2312");
mysqli_set_charset($conn, "utf8");
error_reporting(0);
//下面先接收从add_news.php传过来的新闻标题与新闻内容.
//PHP变量是以$开头的,如$a,$b 变量,与C,C++一样都是以";"分号结果一句子;注释也与C,C++一样.
// 因为add_news.php表单定义的传输方式为POST所以这里要对应用POST接收,如果定义为GET则要用GET接收.
$Customer_ID = $_POST['Customer_ID'];
$Last_Name = $_POST['Last_Name'];
$First_Name = $_POST['First_Name'];
$Address = $_POST['Address'];
$Customers_Telephone = $_POST['Customers_Telephone'];
$Cell_Phone = $_POST['Cell_Phone'];
$Email_Address = $_POST['Email_Address'];
$Credit_Card = $_POST['Credit_Card'];
$Is_Student = $_POST['Is_Student'];
$Tickets = $_POST['Tickets'];
$License_Number = $_POST['License_Number'];
$State_Issued = $_POST['State_Issued'];
$Expiration_Date = $_POST['Expiration_Date'];
$Location_ID = $_POST['Location_ID'];
$Street_Address = $_POST['Street_Address'];
$Locations_Telephone = $_POST['Locations_Telephone'];

$sql = "INSERT INTO user(Customer_ID,Last_Name,First_Name,Address,Customers_Telephone,Cell_Phone,Email_Address,Credit_Card,Is_Student,Tickets,License_Number,State_Issued,Expiration_Date,Location_ID,Street_Address,Locations_Telephone)

VALUES ('$Customer_ID','$Last_Name','$First_Name','$Address','$Customers_Telephone','$Cell_Phone','$Email_Address',$Credit_Card,$Is_Student,$Tickets,$License_Number,'$State_Issued','$Expiration_Date',$Location_ID,'$Street_Address','$Locations_Telephone')";

$result = @mysqli_query($conn, $sql) or die(mysqli_error($conn));  //如果添加成功,返回真给$result ,否则为false.

if ($result) {
    echo "注册成功,<a href='SHARE_CAR.php'>返回继续</a>";
} else {
    echo "注册失败,<a href='SHARE_CAR.php'>请返回</a>";
}
