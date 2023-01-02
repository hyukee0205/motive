<?php
include "../inc/session.php";

//이전 데이터값
$o_info = $_POST["info"];
$o_count = $_POST["count"];
$o_pay = $_POST["pay"];
$o_date = date("Y-m-d");


// echo $s_name;
// echo $s_id;
// echo $s_mobile;
// echo $s_email;
// echo $s_addr;
// echo $info;
// echo $count;
// echo $pay;
// echo $reg_date;
// exit;




include "../inc/dbcon.php";

//쿼리 작성
$sql = "insert into orders(";
$sql .= "o_name, o_id, o_mobile, ";
$sql .= "o_email, o_addr, o_info, ";
$sql .= "o_count, o_pay, o_date";
$sql .= ") values(";
$sql .= "'$s_name', '$s_id', '$s_mobile',";
$sql .= "'$s_email', '$s_addr', '$o_info',";
$sql .= "'$o_count', '$o_pay', '$o_date');";


//DB 쿼리 전송
mysqli_query($dbcon, $sql);

//DB 접속 종료
mysqli_close($dbcon);

echo " 
  <script>
    location.href='order_ok.php';
  </script>
";
?>

















