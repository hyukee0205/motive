<?php
include "../inc/session.php";
include "../inc/login_check.php";
include "../inc/dbcon.php";
$sql = "select * from orders where o_id='$s_id';";
// $sql = "select * from notice order by idx desc limit o_id='$s_id';";



$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);

// echo $array["o_name"];
// exit;

// echo $array["o_date"]; 
// echo $array["o_info"]; 
// echo $array["o_count"]; 
// echo $array["o_pay"];
// echo $array["o_name"];
// exit; 




// 전체 데이터 가져오기
$total = mysqli_num_rows($result);

// paging : 한 페이지 당 보여질 목록 수
$list_num = 5;

// paging : 한 블럭 당 페이지 수
$page_num = 3;

// paging : 현재 페이지
$page = isset($_GET["page"])? $_GET["page"] : 1;

// paging : 전체 페이지 수 = 전체 데이터 / 페이지 당 목록 수,  ceil : 올림값, floor : 내림값, round : 반올림
$total_page = ceil($total / $list_num);
// echo "전체 페이지수 : ".$total_page;
// exit;

// paging : 전체 블럭 수 = 전체 페이지 수 / 블럭 당 페이지 수
$total_block = ceil($total_page / $page_num);

// paging : 현재 블럭 번호 = 현재 페이지 번호 / 블럭 당 페이지 수
$now_block = ceil($page / $page_num);

// paging : 블럭 당 시작 페이지 번호 = (해당 글의 블럭 번호 - 1) * 블럭 당 페이지 수 + 1
$s_pageNum = ($now_block - 1) * $page_num + 1;
if($s_pageNum <= 0){
    $s_pageNum = 1;
};

// paging : 블럭 당 마지막 페이지 번호 = 현재 블럭 번호 * 블럭 당 페이지 수
$e_pageNum = $now_block * $page_num;
// 블럭 당 마지막 페이지 번호가 전체 페이지 수를 넘지 않도록
if($e_pageNum > $total_page){
    $e_pageNum = $total_page;
};
?>








<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My page</title>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/mypage.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script defer src="../js/header.js"></script>
  <script defer src="../js/footer.js"></script>


</head>
<body>

  
  <!-- header -->
  <header>
    <nav class=header_box>

      <div class="gnb">
        <div class="logo">
          <a href="../index.php">
            <img src="../images/motive_logo.svg" alt="모티브">
          </a>
        </div>


        <ul class="main_menu">
          <li><a id="life" href="../product/product_list.php">라이프</a>
            <ul id="life_sub">
              <li><a href="../product/product_list.php">라이프</a></li>
              <li><a href="../product/product_list.php">패션</a></li>
              <li><a href="../product/product_list.php">테크</a></li>
              <li><a href="../product/product_list.php">미디어</a></li>
            </ul>
          </li>
          <li><a id="mag" href="../product/product_list.php">매거진</a>
            <ul id="mag_sub">
              <li><a href="../product/product_list.php">패션·디자인</a></li>
              <li><a href="../product/product_list.php">트렌드</a></li>
              <li><a href="../product/product_list.php">푸드</a></li>
              <li><a href="../product/product_list.php">뷰티</a></li>
              <li><a href="../product/product_list.php">여행</a></li>
            </ul>
          </li>
          <li><a id="free" href="../product/product_list.php">커뮤니티</a>
            <ul id="free_sub">
              <li><a href="../product/product_list.php">자유게시판</a></li>
              <li><a href="../product/product_list.php">설문조사</a></li>
            </ul>
          </li>
          <li><a id="cs" href="../product/product_list.php">고객센터</a>
            <ul id="cs_sub">
              <li><a href="../product/product_list.php">1:1문의</a></li>
              <li><a href="../product/product_list.php">공지사항</a></li>
              <li><a href="../product/product_list.php">제휴문의</a></li>
            </ul>
          </li>
        </ul>

        <ul class="sub_menu">
            <?php if(!$s_idx){ ?> 
              <li><a href="javscript:void(0)">Search</a></li>
              <li><a href="../login/login.php">Login</a></li>
              <li><a href="../members/join.php">Join</a></li>
            <?php } else{ ?>
              <li><a href="javscript:void(0)">Search</a></li>
              <li><a href="mypage.php">Mypage</a></li>
              <li><a href="../login/logout.php">Logout</a></li>
            <?php }; ?> 
        </ul>
      </div>

      <div class="m_gnb">
        <div class="m_main_gnb">
          <div class="m_logo">
            <a href="../index.php">
              <img src="../images/motive_logo.svg" alt="모티브">
            </a>
          </div>
          <i class="fa-solid fa-bars menu_icon"></i>
        </div>




        <div class="m_menu_box">
          <ul class="m_main_menu">
            <li><a id="m_life" href="../product/product_list.php">라이프</a>
              <ul id="m_life_sub">
                <li><a href="../product/product_list.php">라이프</a></li>
                <li><a href="../product/product_list.php">패션</a></li>
                <li><a href="../product/product_list.php">테크</a></li>
                <li><a href="../product/product_list.php">미디어</a></li>
              </ul>
            </li>
            <li><a id="m_mag" href="../product/product_list.php">매거진</a>
              <ul id="m_mag_sub">
                <li><a href="../product/product_list.php">패션·디자인</a></li>
                <li><a href="../product/product_list.php">트렌드</a></li>
                <li><a href="../product/product_list.php">푸드</a></li>
                <li><a href="../product/product_list.php">뷰티</a></li>
                <li><a href="../product/product_list.php">여행</a></li>
              </ul>
            </li>
            <li><a id="m_free" href="../product/product_list.php">커뮤니티</a>
              <ul id="m_free_sub">
                <li><a href="../product/product_list.php">자유게시판</a></li>
                <li><a href="../product/product_list.php">설문조사</a></li>
              </ul>
            </li>
            <li><a id="m_cs" href="javascript:void(0)">고객센터</a>
              <ul id="m_cs_sub">
                <li><a href="../product/product_list.php">1:1문의</a></li>
                <li><a href="../product/product_list.php">공지사항</a></li>
                <li><a href="../product/product_list.php">제휴문의</a></li>
              </ul>
            </li>
          </ul>

          <ul class="m_sub_menu">
            <?php if(!$s_idx){ ?> 
              <li><a href="javscript:void(0)">Search</a></li>
              <li><a href="../login/login.php">Login</a></li>
              <li><a href="../members/join.php">Join</a></li>
            <?php } else{ ?>
              <li><a href="javscript:void(0)">Search</a></li>
              <li><a href="mypage.php">Mypage</a></li>
              <li><a href="../login/logout.php">Logout</a></li>
            <?php }; ?> 
          </ul>
        </div>

      </div>

    </nav>

    <div class="nav_bg"></div>
  </header>


  <div class="mg_wrap">

    <div class="mg_inner">

      <div class="mg_box">
        <div class="left_box">
          <h2>My Page</h2>
              
            <div>
              <div class="s_info">
                <h3>쇼핑 정보</h3>
                <div><a href="mypage.php">최근 주문 현황</a></div>
                <div><a href="mypage.php">주문 내역 조회</a></div>
              </div>
              
              <div class="m_info">
                <h3>회원 정보</h3>
                <div><a href="member_info.php">회원 정보</a></div>
                <div><a href="javascipt:void(0)">1:1 문의내역</a></div>
              </div>
            </div>

        </div>



        <div class="right_box">
          
          <div class="order_title">
            <h3>최근 주문 현황</h3>
          </div>


          <div class="order_info">
            <ul>
              <li>주문일자</li>
              <li>상품정보</li>
              <li>수량</li>
              <li>구매금액</li>
              <li>결제</li>
            </ul>
          </div>
          <?php 
              $start = ($page -1) * $list_num;
              $sql = "select * from orders where o_id='$s_id' order by idx desc limit $start, $list_num;";
              $result = mysqli_query($dbcon, $sql);
              $i = $total - (($page - 1) * $list_num);
              while($array = mysqli_fetch_array($result)){
              // $array = mysqli_fetch_array($result){;
          ?>

          <div class="order_info order_more">
            <ul>
              <?php $o_date = substr($array["o_date"], 0, 10); ?>
              <li><?php echo $o_date; ?></li>
              <li><?php echo $array["o_info"]; ?></li>
              <li><?php echo $array["o_count"]; ?></li>
              <li><?php echo $array["o_pay"]; ?></li>
              <li>결제완료</li>
            </ul>
          </div>

          <?php
              $i--;
              }; 
          ?>

          <div class="pager">
            <?php
              if($page <= 1){
              ?>
              <a href="mypage.php?page=1">이전</a>
              <?php } else{ ?>
              <a href="mypage.php?page=<?php echo ($page - 1); ?>">이전</a>
              <?php }; ?>

              <?php
              for($print_page = $s_pageNum;  $print_page <= $e_pageNum; $print_page++){
              ?>
              <a href="mypage.php?page=<?php echo $print_page; ?>"><?php echo $print_page; ?></a>
              <?php }; ?>

              <?php
              if($page >= $total_page){
              ?>
              <a href="mypage.php?page=<?php echo $total_page; ?>">다음</a>
              <?php } else{ ?>
              <a href="mypage.php?page=<?php echo ($page + 1); ?>">다음</a>
            <?php }; ?>
          </div>

        </div>

      </div>

    </div>

  </div>
  













  <footer>

    <div class="ft_box">
      <div class="ft_inner">
        <div class="ft_logo">
          <img src="../images/motive_ft_logo.svg" alt="모티브">
        </div>

        <div class="ft_wrap">
          <ul>
            <li><a href="javascript:void(0)">이용약관</a></li>
            <li><a href="javascript:void(0)">위치기반서비스 이용약관</a></li>
            <li><a href="javascript:void(0)">개인정보처리방침</a></li>
            <li><a href="javascript:void(0)">개인정보보호센터</a></li>
          </ul>

          <div class="ft_info">
            <div class="info_box_1">
              <p>주식회사 모티브 대표이사 : 전찬혁</p>
              <address>서울시 강남구 테헤란로34길 7</address>
            </div>
            <p>사업자등록번호 : 123-45-78910</p>
            <div class="info_box_2">
              <p>고객센터 : 1800-1234</p>
              <p>hyukee0205@gmail.com</p>
            </div>
            <p>© MOTIVE DEPARTMENT STORE GROUP Co. Ldiv. ALL RIGHTS RESERVED</p>
          </div>

        </div>


        <div class="ft_sns">
          <ul>
            <li><a class="sns_youtube" href="https://www.youtube.com/">유튜브</a></li>
            <li><a href="https://www.facebook.com/">페이스북</a></li>
            <li><a href="https://www.instagram.com/">인스타그램</a></li>
            <li><a href="https://post.naver.com/">네이버</a></li>
          </ul>
        </div>

      </div>

      <div id="top" class="top_btn_inner">
        <button type="button">
          <i class="fa-solid fa-arrow-up top_btn"></i>
        </button>
      </div>
    </div>


  </footer>
















</body>
</html>

  
