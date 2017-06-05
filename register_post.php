<?php session_start(); ?>
<meta charset="UTF-8">

<?php
include("../include/mysql_connect.inc");

$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$address = $_POST['address'];
$age = $_POST['age'];
$gender = $_POST['gender'];

if($id != null && $pw != null && $pw2 != null && $phone != null && $mail != null && $address != null && $age != null && $gender != null)
{
  if($pw==$pw2)
  {
    if($result = mysqli_query($link,"INSERT INTO `user` (`U_id`, `U_name`, `U_pwd`, `U_phone`, `U_mail`, `U_address`, `U_age`, `U_gender`) VALUES (NULL, '$id', '$pw', '$phone', '$mail', '$address', '$age', '$gender')"))
    {
      echo "註冊成功";
      echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
    }
    else
    {
      echo "電話號碼和年紀只接受數字";
      echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
    }
  }
  else
  {
    echo "兩次密碼不同";
    echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
  }
}
else
{
  echo "有漏填的項目";
  echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
}
