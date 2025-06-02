<?php
  session_start();

  $session_value = '홍길동';
  $_SESSION['mysession'] = $session_value;
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1. 세션정보 만들기</title>
</head>
<body>
  <h2>1. 세션정보 만들기</h2>
  <p><a href="print_session.php" title="세션정보 출력">세션정보 출력하기</a></p>
</body>
</html>
