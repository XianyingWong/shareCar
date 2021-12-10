<?php
include("conn.php");
//mysql_query("set names gb2312");
mysqli_set_charset($conn, "utf8");
error_reporting(0);
//下面先接收从add_news.php传过来的新闻标题与新闻内容.
//PHP变量是以$开头的,如$a,$b 变量,与C,C++一样都是以";"分号结果一句子;注释也与C,C++一样.
// 因为add_news.php表单定义的传输方式为POST所以这里要对应用POST接收,如果定义为GET则要用GET接收.
$Car_ID = $_POST['Car_ID'];
$Customer_ID = $_POST['Customer_ID'];
$Location_ID = $_POST['Location_ID'];
$Date_Reserved = $_POST['Date_Reserved'];
$Pickup = $_POST['Pickup'];
$Drop_Off = $_POST['Drop_Off'];

$sql = "INSERT INTO rentals(Car_ID,Customer_ID,Location_ID,Date_Reserved,Pickup,Drop_Off)

VALUES ($Car_ID,'$Customer_ID',$Location_ID,'$Date_Reserved','$Pickup','$Drop_Off')";

$result = @mysqli_query($conn, $sql) or die(mysqli_error($conn));  //如果添加成功,返回真给$result ,否则为false.

if ($result) {
    echo "交易成功,<a href='SHARE_CAR.php'>返回继续</a>";
} else {
    echo "交易失败,<a href='SHARE_CAR.php'>请返回</a>";
}
