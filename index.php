<?php session_start(); ?>
<meta charset="UTF-8">
<?php
//echo "邊緣人團購網首頁",'&nbsp','&nbsp','&nbsp','&nbsp';
if(@$_SESSION['username'] != null)
{
//echo "你好",'&nbsp',$_SESSION['username'],'&nbsp' ;
//echo '<a href="log/logout.php">登出</a>';
//echo '<br>';
}
else
{
//echo "訪客模式";
//echo '<br>';
}
?>

<!-- <a href="log/index.php">會員登入</a> </br>
<a href="class_good/index.php">分類商品</a> </br>
<a href="help/index.php">幫助</a> </br>
<a href="group_open/index.php">開團</a> </br>
<a href="group_find/index.php">尋找團</a> </br>
<a href="member_center/index.php">會員中心</a> </br>
<a href="shopping_car/index.php">購物車</a> </br> -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>歡迎來到邊緣人團購網</title>
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
	<meta name=”viewport” content=”width=device-width, initial-scale=1.0″>
</head>
<body class="backimg" background="shopping.jpg" bgcolor="#F0F0F0">
	<div class="wrap">
	<div class="index_header">
		<div class="title">
			<a href="log/member.php"><h1>邊緣人團購網</h1></a>
		</div>
		<div class="title_right">
			<!-- 成為主購 -->
			<!-- <a href="#"><div class="buyer">成為主購</div></a> -->
			<div class="login"><a href="log/index.php">登入</a></div>
		</div>
		<div class="clear"></div>
	</div>
		<a class="wierd" href="log/register.php"><button class="enroll"><strong>免費註冊 ></strong></button></a>
	</div>
	<!-- <div class="footer">
		©DB/PHP 2017<br>
		<strong><span style="color:black">邊緣人</span>團購網</strong>
	</div> -->




</body>
</html>
