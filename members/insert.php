<?php

//이전 데이터값
$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];
$u_name = $_POST["u_name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$ps_code = $_POST["ps_code"];
$addr_b = $_POST["addr_b"];
$addr_d = $_POST["addr_d"];
$addr = $ps_code." ".$addr_b." ".$addr_d;
$birth = $_POST["birth"];
$reg_date = date("Y-m-d");

include "../inc/dbcon.php";

//쿼리 작성
$sql = "insert into members(";
$sql .= "u_id, pwd, u_name, ";
$sql .= "email, mobile, ps_code, ";
$sql .= "addr_b, addr_d, addr, ";
$sql .= "birth, reg_date";
$sql .= ") values(";
$sql .= "'$u_id', '$pwd', '$u_name',";
$sql .= "'$email', '$mobile', '$ps_code',";
$sql .= "'$addr_b', '$addr_d', '$addr',";
$sql .= "'$birth', '$reg_date');";



//DB 쿼리 전송
mysqli_query($dbcon, $sql);

//DB 접속 종료
mysqli_close($dbcon);

echo " 
  <script>
    location.href='welcome.php';
  </script>
";


?>

















