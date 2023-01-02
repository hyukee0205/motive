<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>로그인</title>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
  integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script defer src="../js/header.js"></script>
  <script defer src="../js/login.js"></script>
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
          <li><a href="javscript:void(0)">Search</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="../members/join.php">Join</a></li>
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
            <li><a href="javscript:void(0)">Search</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="../members/join.php">Join</a></li>
          </ul>
        </div>

      </div>

    </nav>

    <div class="nav_bg"></div>
  </header>



  <div class="login_wrap">

    <div class="login_inner">

      <div class="login_box">

        <h2>로그인</h2>
        
        <form class="login_form" name="login_form" action="login_ok.php" method="post" onsubmit="return login_form_check()">

          <div class="id_wrap">
            <div class="id_inner">
              <input type="text" name="u_id" id="u_id" placeholder="아이디">
            </div>
          </div>

          <div class="pwd_wrap">
            <div class="pwd_inner">
              <input type="text" name="pwd" id="pwd" placeholder="패스워드">
            </div>
          </div>

          <div class="submit_inner">  
            <button type="submit">로그인</button>
          </div>
        </form>

        <div class="sub_menu_inner">
            <a href="javascript:void(0)">주문조회</a>
            <a href="javascript:void(0)">아이디찾기</a>
            <a href="javascript:void(0)">비밀번호찾기</a>
            <a href="../members/join.php">회원가입</a>
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
            <p>© MOTIVE DEPARTMENT STORE GROUP Co. Ltd. ALL RIGHTS RESERVED</p>
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

  
