<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$sms = $_POST['sms'];
$email = $_POST['email'];
$region = $_POST['region'];
$s_car = $_POST['s_car'];
$my_car = $_POST['my_car'];
$e_date = $_POST['e_date'];

print $name . $phone . $sms . $email . $region . $s_car . 
$my_car . $e_date;

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password = '1234';
$mysql_db = 'kdt';

$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);


if(!$conn){
  die('연결실패 : ' .mysqli_connect_error());
}

$query = 'insert into test_drive (name, phone, sms, email, region, s_car, my_car, e_date)
          values("'.$name.'","'.$phone.'","'.$sms.'","'.$email.'","'.$region.'","'.$s_car.'","'.$my_car.'","'.$e_date.'")';

$result = mysqli_query($conn, $query);

echo '입력완료';

echo "<input type='button' onclick='history.back()' value='이전페이지로'>";
echo "<br>";


//07. db접속종료
mysqli_close($conn);

?>  