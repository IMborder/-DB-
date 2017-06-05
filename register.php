<?php session_start(); ?>
<meta charset="UTF-8">

<form name="registerID" method="post" action="register_post.php">
  帳號：<input type="text" name="id" /> <br>
  密碼：<input type="password" name="pw" /> <br>
  再次輸入密碼：<input type="password" name="pw2" /> <br>
  電話：<input type="text" name="phone" /> <br>
  電子信箱：<input type="text" name="mail" /> <br>
  地址：<input type="text" name="address" /> <br>
  年齡：<input type="text" name="age" /> <br>
  性別：<input type="text" name="gender" /> <br>
  <input type="submit" name="button" value="註冊" />
</form>
