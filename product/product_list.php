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
  <title>magazine</title>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/product_list.css">
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

  <div class="p_list_wrap">

    <div class="p_list_inner">
      <div class="title_inner">
        <ul>
          <li><a href="javascript:void(0)">New</a></li>
          <li><a href="javascript:void(0)">Fashion</a></li>
          <li><a href="javascript:void(0)">Beauty</a></li>
          <li><a href="javascript:void(0)">Media</a></li>
        </ul>
      </div>



      <div class="p_list_box">
        <ul>

          <li>
            <div class="thumbnail">
              <a href="product.php">
                <img src="../images/p_img_1_1.png" alt="">
              </a>
            </div>
            <div class="description">
              <p>ARABICA
                ISSUE NO.92</p>
              <p>₩18,000</p>
            </div>
          </li>

          <li>
            <div class="thumbnail">
              <a href="product.php">
                <img src="../images/p_img_2_1.png" alt="">
              </a>
            </div>
            <div class="description">
              <p>HAWAII ISSUE NO.91</p>
              <p>₩20,000</p>
            </div>
          </li>

          <li>
            <div class="thumbnail">
              <a href="product.php">
                <img src="../images/p_img_3_1.jpg" alt="">
              </a>
            </div>
            <div class="description">
              <p>KYOTO ISSUE NO.67</p>
              <p>₩16,000</p>
            </div>
          </li>

          <li>
            <div class="thumbnail">
              <a href="product.php">
                <img src="../images/p_img_4_1.jpg" alt="">
              </a>
            </div>
            <div class="description">
              <p>MUJI ISSUE NO.53</p>
              <p>₩19,000</p>
            </div>
          </li>


          <li>
            <div class="thumbnail">
              <a href="product.php">
                <img src="../images/p_img_5_1.jpg" alt="">
              </a>
            </div>
            <div class="description">
              <p>ARC'TERYX ISSUE NO.89</p>
              <p>₩18,000</p>
            </div>
          </li>

          <li>
            <div class="thumbnail">
              <a href="product.php">
                <img src="../images/p_img_6_1.jpg" alt="">
              </a>
            </div>
            <div class="description">
              <p>COPENHAGEN ISSUE NO.88</p>
              <p>₩18,000</p>
            </div>
          </li>

          <li>
            <div class="thumbnail">
              <a href="product.php">
                <img src="../images/p_img_7_1.jpg" alt="">
              </a>
            </div>
            <div class="description">
              <p>BLUE BOTTLE ISSUE NO.76</p>
              <p>₩16,000</p>
            </div>
          </li>

          <li>
            <div class="thumbnail">
              <a href="product.php">
                <img src="../images/p_img_8_1.jpg" alt="">
              </a>
            </div>
            <div class="description">
              <p>
                HAY ISSUE NO.72</p>
              <p>₩15,000</p>
            </div>
          </li>

          <li>
            <div class="thumbnail">
              <a href="product.php">
                <img src="../images/p_img_9_1.jpg" alt="">
              </a>
            </div>
            <div class="description">
              <p>BANGKOK ISSUE NO.74</p>
              <p>₩15,000</p>
            </div>
          </li>


          <li>
            <div class="thumbnail">
              <a href="product.php">
                <img src="../images/p_img_10_1.jpg" alt="">
              </a>
            </div>
            <div class="description">
              <p>DJI ISSUE NO.71</p>
              <p>₩15,000</p>
            </div>
          </li>


          <li>
            <div class="thumbnail">
              <a href="product.php">
                <img src="../images/p_img_11_1.jpg" alt="">
              </a>
            </div>
            <div class="description">
              <p>HOSHINOYA ISSUE NO.66</p>
              <p>₩16,000</p>
            </div>
          </li>

          <li>
            <div class="thumbnail">
              <a href="product.php">
                <img src="../images/p_img_12_1.jpg" alt="">
              </a>
            </div>
            <div class="description">
              <p>MONOCLE ISSUE NO.60</p>
              <p>₩18,000</p>
            </div>
          </li>

          <li>
            <div class="thumbnail">
              <a href="product.php">
                <img src="../images/p_img_13_1.jpg" alt="">
              </a>
            </div>
            <div class="description">
              <p>SOHO HOUSE ISSUE NO.81</p>
              <p>₩16,000</p>
            </div>
          </li>

          <li>
            <div class="thumbnail">
              <a href="product.php">
                <img src="../images/p_img_14_1.jpg" alt="">
              </a>
            </div>
            <div class="description">
              <p>MINI ISSUE NO.79</p>
              <p>₩18,000</p>
            </div>
          </li>


          <li>
            <div class="thumbnail">
              <a href="product.php">
                <img src="../images/p_img_15_1.jpg" alt="">
              </a>
            </div>
            <div class="description">
              <p>MR PORTER ISSUE NO.51</p>
              <p>₩15,000</p>
            </div>
          </li>


          <li>
            <div class="thumbnail">
              <a href="product.php">
                <img src="../images/p_img_16_1.jpg" alt="">
              </a>
            </div>
            <div class="description">
              <p>SEOUL EDITION ISSUE NO.50</p>
              <p>₩19,000</p>
            </div>
          </li>


      
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

  
