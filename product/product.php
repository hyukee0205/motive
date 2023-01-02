<?php 
include "../inc/session.php";
include "../inc/dbcon.php";
$sql = "select idx, u_name, u_id, pwd from members where u_id='$s_idx';";
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>product</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/product.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script defer src="../js/header.js"></script>
  <script defer src="../js/product.js"></script>
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
          <li><a id="life" href="product_list.php">라이프</a>
            <ul id="life_sub">
              <li><a href="product_list.php">라이프</a></li>
              <li><a href="product_list.php">패션</a></li>
              <li><a href="product_list.php">테크</a></li>
              <li><a href="product_list.php">미디어</a></li>
            </ul>
          </li>
          <li><a id="mag" href="product_list.php">매거진</a>
            <ul id="mag_sub">
              <li><a href="product_list.php">패션·디자인</a></li>
              <li><a href="product_list.php">트렌드</a></li>
              <li><a href="product_list.php">푸드</a></li>
              <li><a href="product_list.php">뷰티</a></li>
              <li><a href="product_list.php">여행</a></li>
            </ul>
          </li>
          <li><a id="free" href="product_list.php">커뮤니티</a>
            <ul id="free_sub">
              <li><a href="product_list.php">자유게시판</a></li>
              <li><a href="product_list.php">설문조사</a></li>
            </ul>
          </li>
          <li><a id="cs" href="product_list.php">고객센터</a>
            <ul id="cs_sub">
              <li><a href="product_list.php">1:1문의</a></li>
              <li><a href="product_list.php">공지사항</a></li>
              <li><a href="product_list.php">제휴문의</a></li>
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
              <li><a href="../members/mypage.php">Mypage</a></li>
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
            <li><a id="m_life" href="product_list.php">라이프</a>
              <ul id="m_life_sub">
                <li><a href="product_list.php">라이프</a></li>
                <li><a href="product_list.php">패션</a></li>
                <li><a href="product_list.php">테크</a></li>
                <li><a href="product_list.php">미디어</a></li>
              </ul>
            </li>
            <li><a id="m_mag" href="product_list.php">매거진</a>
              <ul id="m_mag_sub">
                <li><a href="product_list.php">패션·디자인</a></li>
                <li><a href="product_list.php">트렌드</a></li>
                <li><a href="product_list.php">푸드</a></li>
                <li><a href="product_list.php">뷰티</a></li>
                <li><a href="product_list.php">여행</a></li>
              </ul>
            </li>
            <li><a id="m_free" href="product_list.php">커뮤니티</a>
              <ul id="m_free_sub">
                <li><a href="product_list.php">자유게시판</a></li>
                <li><a href="product_list.php">설문조사</a></li>
              </ul>
            </li>
            <li><a id="m_cs" href="javascript:void(0)">고객센터</a>
              <ul id="m_cs_sub">
                <li><a href="product_list.php">1:1문의</a></li>
                <li><a href="product_list.php">공지사항</a></li>
                <li><a href="product_list.php">제휴문의</a></li>
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
              <li><a href="../members/mypage.php">Mypage</a></li>
              <li><a href="../login/logout.php">Logout</a></li>
            <?php }; ?> 
          </ul>
        </div>

      </div>

    </nav>

    <div class="nav_bg"></div>
  </header>


  <form class="product_wrap" name="product_form" action="../order/order.php" method="get" onsubmit="$('input[name=pay]').val($('#pay').text());">

    <div class="product_inner">

      <div class="product_box">

        <div class="product_img">

            <div class="product_thumb">
              <div class="thumb_img"></div>
            </div>
          
        </div>

        <div class="product_info">

          <div class="p_title">
            <h3>ISSUE NO.90 LEMAIRE</h3>
            <div>₩<span class="o">18,000</span></div>
          </div>

          <div class="p_description">
            <p>1991년 프랑스 파리에서 디자이너 크리스토프 르메르가 설립한 패션 브랜드 르메르는 ‘시대를 초월한 일상복’을 표방하는 컬렉션을 선보이면서 두터운 마니아층을 형성해왔습니다. 다양한 피부색을 고려해 주로 톤 다운된 차분한 색감을 활용하고, 실용적이면서 미학적 개성이 담긴 독특한 소재를 개발하는 데 집중해온 르메르 특유의 디자인 문법은 드라이 실크 소재의 셔츠나 비대칭 단추 디테일을 적용한 트위스티드 드레스 등의 에센셜 아이템에서 살펴볼 수 있습니다. 2010년 사라-린 트란이 합류해 현재의 공동 크리에이티브 디렉터 체제를 갖추면서 브랜드는 제2의 전환기를 맞이했고, 주얼리·가죽 소재 가방·슈즈 라인의 확장과 유니클로 협업 컬렉션을 통해 장르와 젠더를 초월해 다양한 세대에게 사랑받고 있습니다.</p>
            <p><span>구매혜택</span> 475 포인트 적립예정</p>        
          </div>

   
          <div class="p_price">
            <div class="p_count_box">
              <a class="m"><span class="material-icons">remove</span></a> 
              <label for="count"><input type="text" value="1" name="count" class="cnt"></label> 
              <a class="p"><span class="material-icons">add</span></a>
            </div>
            <div class="p_price_total">
              <div>TOTAL</div>
              <div>₩<span class="sumNum" id="pay">18,000</span></div>
              <!-- <div>₩<span name="test" class="sumNum">18,000</span></div> -->
              <input type="hidden" name="pay" value=""> 
            </div>
          </div>

          <script>
            

          </script>









  
          <div class="p_buy">
            <button type="submit">구매하기</button>
            <button type="submit">장바구니</button>
          </div>


        </div>






      </div>
    </div>

    <div class="product_inner2">

      <div class="product_box2">
        <div></div>
        <div></div>
        <p class="page_letter">유년 시절의 크리스토프에게 옷이 사회 문화적 소속감의 의미를 지녔다면, 제 경우는 반대로 옷이 타인이 쉽게 식별할 수 없고, 규정지을 수 없는 저만의 언어였으면 했어요. 그것은 어떤 시간과 장소, 사회적 문맥도 자유롭게 넘나들 수 있는 일종의 다공성(porosity)을 복장에 부여하는 일이었는데요, 현재 르메르의 비전도 이와 맞닿아 있죠.</p>
        <p class="page_letter_name">사리-린 트란, Co-creative directors of Lemaire</p>
        <div></div>
        <div></div>
        <p class="page_letter">몸과 옷 사이의 사적 거리를 허락하는 옷, 제스처를 해방하는 옷은 자연스럽게 착용자의 성격과 매력을 드러나게 해주죠. 그리고 옷을 만들 때, 디자이너의 일은 50%고, 나머지 50%는 착용자의 몫이라는 점을 늘 염두에 둬요. 디자이너로서 개인의 생각을 강요하기보다 언제나 해석의 여지를 남겨두려고 노력하죠.</p>
        <p class="page_letter_name">크리스토프 르메르, Co-creative directors of Lemaire</p>
        <div></div>
        <div></div>


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

  
