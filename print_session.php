<?php
  session_start();

?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1. 세션정보 출력하기</title>
</head>
<body>
  <h2>1. 세션정보 출력하기</h2>
  <p>전달받은 세션값은 : <?php echo $_SESSION
  ['mysession'];?> 입니다.</p>
  
</body>
</html>
