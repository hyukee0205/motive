<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>회원가입</title>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/join.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script defer src="../js/header.js"></script>
  <script defer src="../js/join.js"></script>
  <script defer src="../js/footer.js"></script>
  <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
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
          <li><a href="../login/login.php">Login</a></li>
          <li><a href="join.php">Join</a></li>
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
            <li><a href="../login/login.php">Login</a></li>
            <li><a href="join.php">Join</a></li>
          </ul>
        </div>

      </div>

    </nav>

    <div class="nav_bg"></div>
  </header>



  <div class="join_wrap">

    <div class="join_inner">


      <div class="join_box">
        <h2>회원가입</h2>

        <form class="join_form" name="join_form" action="welcome.php" method="post" onsubmit="return form_check()">

          <div class="id_box">
            <label for="u_id">아이디<sapn class="identify">*</sapn></label>
            <input type="text" name="u_id" id="u_id" placeholder="아이디를 입력해주세요">
            <div class="err_txt hide" id="err_id">아이디를 입력해 주세요.</div>
          </div>

          <div class="pwd_box">
            <label for="pwd">비밀번호<sapn class="identify">*</sapn></label>
            <input type="text" name="pwd" id="pwd" placeholder="비밀번호를 입력해주세요">
            <div class="err_txt hide" id="err_pwd">비밀번호는 4~8글자만 입력할 수 있습니다.</div>
          </div>

          <div class="repwd_box">
            <label for="repwd">비밀번호 확인<sapn class="identify">*</sapn></label>
            <input type="text" name="repwd" id="repwd" placeholder="비밀번호를 입력해주세요">
            <div class="err_txt hide" id="err_repwd">비밀번호가 일치하지 않습니다.</div>
          </div>

          <div class="name_box">
            <label for="u_name">이름<sapn class="identify">*</sapn></label>
            <input type="text" name="u_name" id="u_name" placeholder="이름을 입력해주세요">
            <div class="err_txt hide" id="err_name">이름을 입력해 주세요.</div>
          </div>

          <div class="email_box">
            <label for="email">이메일<sapn class="identify">*</sapn></label>
            <input type="text" name="email" id="email" placeholder="예 : Motive@gmail.com">
            <div class="err_txt hide" id="err_email">이메일을 입력해 주세요.</div>
          </div>

          <div class="mobile_box">
            <label for="mobile">휴대전화<sapn class="identify">*</sapn></label>
            <input type="text" name="mobile" id="mobile" placeholder="숫자만 입력해주세요">
            <div class="err_txt hide" id="err_mobile">전화번호를 입력해 주세요.</div>
            <div class="err_txt hide" id="err_mobile_2">숫자만 입력할 수 있습니다.</div>
          </div>

          <div class="address_box">
            <div class="address_box1">
              <label for="ps_code">우편번호<sapn class="identify">*</sapn></label>
              <div class="ps_code_box">
                <input type="text" name="ps_code" id="ps_code" readonly>
                <button type="button" onclick="findAddr()">주소검색</button>
              </div>
              <div class="err_txt hide" id="err_ps_code">주소를 입력해 주세요.</div>
            </div>
            <div class="address_box2">
              <label for="addr_b">기본주소<sapn class="identify">*</sapn></label>
              <input type="text" name="addr_b" id="addr_b" readonly>
            </div>
            <div class="address_box3">
              <label for="addr_d">상세주소<sapn class="identify"></sapn></label>
              <input type="text" name="addr_d" id="addr_d">
            </div>
          </div>





          <div class="birth_box">
            <label for="birth">생년월일<sapn class="identify">*</sapn></label>
            <input type="text" name="birth" id="birth" placeholder="YYYYMMDD" maxlength="8">
            <div class="err_txt hide" id="err_birth">생년월일을 입력해 주세요.</div>
            <div class="err_txt hide" id="err_birth_2">숫자만 입력할 수 있습니다.</div>
          </div>


          <div class="apply_wrap">
            <h3>서비스 이용 동의</h3>

            <div class="apply_box apply_all">
                <input type="checkbox" name="selectall" id="selectall" value="selectall" onclick="selectAll(this)">
                <label for="selectall">이용약관에 모두 동의합니다. (선택 정보 포함)</label>
            </div>

            <div class="apply_box">
              
                <input type="checkbox" name="apply" id="apply_1" value="apply_1" onclick='checkSelectAll()'>
                <label for="apply_1">[필수] <a href="javascript:void(0)"> 이용약관</a>에 동의합니다.</label>
            </div>

            <div class="apply_box">
              
                <input type="checkbox" name="apply" id="apply_2" value="apply_2" onclick='checkSelectAll()'>
                <label for="apply_2">[필수] <a href="javascript:void(0)"> 개인정보 수집 및 이용</a>에 동의합니다.</label>
            </div>

            <div class="apply_box">
                <input type="checkbox" name="apply" id="apply_3" value="apply_3" onclick='checkSelectAll()'>
                <label for="apply_3">[선택] SMS 수신여부에 동의합니다.</label>
            </div>

            <div class="apply_box">
                <input type="checkbox" name="apply" id="apply_4" value="apply_4" onclick='checkSelectAll()'>
                <label for="apply_4">[선택] 이메일 수신여부에 동의합니다.</label>     
            </div>
            <div class="err_txt hide" id="err_apply">필수 사항을 체크해 주세요.</div>
          </div>

          <div class="join_submit_box">
            <button type="submit">가입하기</button>
          </div>
        </form>
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