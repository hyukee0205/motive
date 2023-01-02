<?php 
include "../inc/session.php";
include "../inc/dbcon.php";
$sql = "select idx, u_name, u_id, pwd, mobile, ps_code, addr_b, addr_d from members where u_id='$s_idx';";
$result = mysqli_query($dbcon, $sql);
$array = mysqli_fetch_array($result);
$pay = $_GET["pay"];
$count = $_GET["count"];

function phone_number($number) {
  return preg_replace("/(^02.{0}|^01.{1}|[0-9]{3})([0-9]+)([0-9]{4})/", "$1-$2-$3", $number);
}

?>




<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>주문/결제</title>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/order.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script defer src="../js/header.js"></script>
  <script defer src="../js/order.js"></script>
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
              <li><a href="../members/mypage.php">Mypage</a></li>
              <li><a href="../login/logout.php">Logout</a></li>
            <?php }; ?> 
          </ul>
        </div>

      </div>

    </nav>

    <div class="nav_bg"></div>
  </header>


  <div class="order_wrap">

    <div class="order_inner">
      <h2>주문/결제</h2>

      <div class="order_box">


        <div class="left_box">

          <div class="c_info">
            <h3>1. 주문 고객 정보</h3>
            <div><span><?php echo $s_name; ?></span></div>
            <div><?php echo phone_number("$s_mobile"); ?></span></div>
            <div><span><?php echo $s_email; ?></span></div>
          </div>


          <div class="address_info">
            <h3>2. 배송지 정보</h3>
            <div><span><?php echo $s_name; ?> [기본배송지]</span><span><a href="../members/member_info.php">수정</a></span></div>
            <div><span><?php echo phone_number("$s_mobile"); ?></span></div>
            <div><span><?php echo $s_addr; ?></span></div>
          </div>


          <div class="coupon_info">
            <h3>3. 할인</h3>
            <div><span>적립금</span></div>
            <div class="coupon_box">
              <input type="text" value="0" disabled>
              <button type="button">모두사용</button>
              <div>0원</div>
            </div>
            <div>예치금 사용 기본 단위는 10원이며, 1회 사용 금액은 제한이 없습니다.</div>
          </div>

          <div class="payment_info">
            <h3>4. 결제</h3>

            <div>
              <input type="radio" name="payments" id="card" value="c">
              <label for="card">신용카드</label>
            </div>

            <div>
              <input type="radio" name="payments" id="money" value="m">
              <label for="money">무통장입금</label>
            </div>

            <div>
              <input type="radio" name="payments" id="phone" value="p">
              <label for="phone">휴대폰 결제</label>
            </div>

            <div>
              <input type="radio" name="payments" id="naver" value="n">
              <label for="naver">네이버페이</label>
            </div>
          </div>



        </div>



        <div class="right_box">
          <div class="order_product">
            <h3>주문상품</h3>

            <div class="product_box">
              <div class="product_img">
                <div></div>
              </div>
              <div class="product_info">
                <h4>ISSUE NO.90 LEMAIRE</h4>
                <div>₩18,000</div>
                <div>수량 <span><?php echo $count ?></span></div>
              </div>
            </div>

            <div class="p_order_list">
              <ul>
                <li>총 상품금액</li>
                <li><?php echo $pay ?>원</li>
              </ul>

              <ul>
                <li>배송비</li>
                <li>0원</li>
              </ul>

              <ul>
                <li>총 할인금액</li>
                <li>0원</li>
              </ul>
            </div>

            <div class="p_confirm">
              <div>
                <div>총 결제금액</div>
                <div><?php echo $pay ?>원</div>
              </div>


              <div>
                <form name="hidden_form" action="order_ok.php" method="post" onsubmit="return form_check()">
                  <input type="hidden" name="info" id="info" value="ISSUE NO.90 LEMAIRE">
                  <input type="hidden" name="count" id="count" value="<?php echo $count ?>">
                  <input type="hidden" name="pay" id="pay" value="<?php echo $pay ?>">
                  <button type="submit">결제하기</button>
                </form>
              </div>

              <div>무료배송, 무료반품 혜택과 함께 새로운 상품을 찾아보세요.</div>

              <div>배송완료 후 14일 이내 청약철회(반품)가 가능합니다. 자세한 내용은 <span>반품 및 환불</span>을 확인해주세요.</div>

            </div>




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