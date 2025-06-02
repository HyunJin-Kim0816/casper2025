<?php
  include('./sub/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="stylesheet" href="./css/login.css" type="text/css">
  <link rel="stylesheet" href="./css/main.css" type="text/css">
  <link rel="stylesheet" href="./css/common.css" type="text/css">
  <link rel="stylesheet" href="./css/reset.css" type="text/css">
  <link rel="stylesheet" href="./css/base.css" type="text/css">


</head>
<body>
  
  <div class="login_wrapper">
    <h2>로그인</h2>
    <form method="post" action="">
      <input type="text" name="id" id="name" placeholder="아이디를 입력해주세요">
      <input type="password" name="password" id="password" placeholder="비밀번호를 입력해주세요">
      <label for="id_check">
        <input type="checkbox" id="remember_check">아이디저장하기
      </label>
      <input type="submit" value="로그인" >
    </form>
      <div class="link">
        <a href="" title="아이디 찾기">아이디 찾기</a>
        <a href="" title="비밀번호 찾기">비밀번호 찾기</a>
        <a href="" title="회원가입">회원가입</a>
      </div>
  </div>

  <?php
  include('./sub/footer.php');
?>
  
</body>
</html>
