<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test 데이터베이스 자료 출력하기</title>
    <link href="./css/style.css" type="text/css" rel="stylesheet">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   
  </head>
  <body>
    <h2 class='text-center'>test_drive 데이터베이스 자료 출력하기</h2>

    <?php

    $mysql_host = 'localhost';  
    $mysql_user = 'root';
    $mysql_password = '1234';
    $mysql_db = 'kdt';

    
    $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);


    if(!$conn){
    die('연결실패 : ' .mysqli_connect_error());
      } else{
        echo 'DB연결성공';
      }

      $query = 'SELECT * FROM test_drive';
      $result = mysqli_query($conn, $query);

      print "<form name='리스트화면' method='post' action='db_insert.php'>";
      print  "<table><caption>test_drive리스트</caption><thead><tr><th>Num</th><th>
      고객명</th><th>휴대폰</th><th>sms</th><th>이메일</th><th>전시장</th><th>차량</th><th>
      보유차량</th><th>시승희망일</th></thead></tbody>";

      while($row = mysqli_fetch_row($result)){
        print'<tr><td>'.$row[0].'</td>';
        print'<td>'.$row[1].'</td>';
        print'<td>'.$row[2].'</td>';
        print'<td>'.$row[3].'</td>';
        print'<td>'.$row[4].'</td>';
        print'<td>'.$row[5].'</td>';
        print'<td>'.$row[6].'</td>';
        print'<td>'.$row[7].'</td>';
        print'<td>'.$row[8].'</td></tr>';
      }
      print "</tbody></table>";
      print "<div class='text-center mt-3'>
      <input type='search' placeholder='검색어 입력' name='search_txt'>
      <input type='submit' value='검색하기'>
      </div>";
      print "</form>"; // <form> 태그 추가

      print"<br>데이터 리스트 출력완료";
      mysqli_close($conn);
      ?>
      </body>
      </html>
