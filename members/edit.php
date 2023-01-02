<?php
include "../inc/session.php";

//데이터 가져오기
$pwd = $_POST["pwd"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$birth = $_POST["birth"];
$ps_code = $_POST["ps_code"];
$addr_b = $_POST["addr_b"];
$addr_d = $_POST["addr_d"];
$addr = $ps_code." ".$addr_b." ".$addr_d;

// DB 접속
include "../inc/dbcon.php";

// 쿼리 작성
$sql = "update members set ";
$sql .= "pwd='$pwd', ";
$sql .= "mobile='$mobile', ";
$sql .= "email='$email', ";
$sql .= "birth='$birth', ";
$sql .= "ps_code='$ps_code', ";
$sql .= "addr_b='$addr_b', ";
$sql .= "addr_d='$addr_d', ";
$sql .= "addr='$addr' ";
$sql .= "where idx=$s_idx;";


// 비밀번호를 입력하지 않은 경우
$sql_nPwd = "update members set mobile='$mobile', email='$email', birth='$birth', ps_code='$ps_code', addr_b='$addr_b', addr_d='$addr_d', addr='$addr' where idx=$s_idx;";


// 쿼리 전송
if($pwd){
  mysqli_query($dbcon, $sql);
} else{
  mysqli_query($dbcon, $sql_nPwd);
};

// DB 종료
mysqli_close($dbcon);

// 페이지 이동
echo "
    <script>
        alert('수정되었습니다.');
        location.href = 'member_info.php';
    </script>
    ";
?>









