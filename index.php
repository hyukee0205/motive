<?php 
include "inc/session.php";
include "inc/dbcon.php";
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
  <title>모티브 | Motive</title>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js" integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script defer src="js/main.js"></script>
</head>

<body>


  <div class="wrap">
    
    <!-- header -->
    <header>
      <nav class=header_box>

        <div class="gnb">
          <div class="logo">
            <a href="index.php">
              <img src="images/motive_logo.svg" alt="모티브">
            </a>
          </div>


          <ul class="main_menu">
            <li><a id="life" href="product/product_list.php">라이프</a>
              <ul id="life_sub">
                <li><a href="product/product_list.php">라이프</a></li>
                <li><a href="product/product_list.php">패션</a></li>
                <li><a href="product/product_list.php">테크</a></li>
                <li><a href="product/product_list.php">미디어</a></li>
              </ul>
            </li>
            <li><a id="mag" href="product/product_list.php">매거진</a>
              <ul id="mag_sub">
                <li><a href="product/product_list.php">패션·디자인</a></li>
                <li><a href="product/product_list.php">트렌드</a></li>
                <li><a href="product/product_list.php">푸드</a></li>
                <li><a href="product/product_list.php">뷰티</a></li>
                <li><a href="product/product_list.php">여행</a></li>
              </ul>
            </li>
            <li><a id="free" href="product/product_list.php">커뮤니티</a>
              <ul id="free_sub">
                <li><a href="product/product_list.php">자유게시판</a></li>
                <li><a href="product/product_list.php">설문조사</a></li>
              </ul>
            </li>
            <li><a id="cs" href="product/product_list.php">고객센터</a>
              <ul id="cs_sub">
                <li><a href="product/product_list.php">1:1문의</a></li>
                <li><a href="product/product_list.php">공지사항</a></li>
                <li><a href="product/product_list.php">제휴문의</a></li>
              </ul>
            </li>
          </ul>

          <ul class="sub_menu">
            <?php if(!$s_idx){ ?> 
              <li><a href="javscript:void(0)">Search</a></li>
              <li><a href="login/login.php">Login</a></li>
              <li><a href="members/join.php">Join</a></li>
            <?php } else{ ?>
              <li><a href="javscript:void(0)">Search</a></li>
              <li><a href="members/mypage.php">Mypage</a></li>
              <li><a href="login/logout.php">Logout</a></li>
            <?php }; ?> 
          </ul>
        </div>

        <div class="m_gnb">
          <div class="m_main_gnb">
            <div class="m_logo">
              <a href="index.php">
                <img src="images/motive_logo.svg" alt="모티브">
              </a>
            </div>
            <i class="fa-solid fa-bars menu_icon"></i>
          </div>




          <div class="m_menu_box">
            <ul class="m_main_menu">
              <li><a id="m_life" href="javascript:void(0)">라이프</a>
                <ul id="m_life_sub">
                  <li><a href="product/product_list.php">라이프</a></li>
                  <li><a href="product/product_list.php">패션</a></li>
                  <li><a href="product/product_list.php">테크</a></li>
                  <li><a href="product/product_list.php">미디어</a></li>
                </ul>
              </li>
              <li><a id="m_mag" href="javascript:void(0)">매거진</a>
                <ul id="m_mag_sub">
                  <li><a href="product/product_list.php">패션·디자인</a></li>
                  <li><a href="product/product_list.php">트렌드</a></li>
                  <li><a href="product/product_list.php">푸드</a></li>
                  <li><a href="product/product_list.php">뷰티</a></li>
                  <li><a href="product/product_list.php">여행</a></li>
                </ul>
              </li>
              <li><a id="m_free" href="javascript:void(0)">커뮤니티</a>
                <ul id="m_free_sub">
                  <li><a href="product/product_list.php">자유게시판</a></li>
                  <li><a href="product/product_list.php">설문조사</a></li>
                </ul>
              </li>
              <li><a id="m_cs" href="javascript:void(0)">고객센터</a>
                <ul id="m_cs_sub">
                  <li><a href="product/product_list.php">1:1문의</a></li>
                  <li><a href="product/product_list.php">공지사항</a></li>
                  <li><a href="product/product_list.php">제휴문의</a></li>
                </ul>
              </li>
            </ul>

            <ul class="m_sub_menu">
              <?php if(!$s_idx){ ?> 
                <li><a href="javscript:void(0)">Search</a></li>
                <li><a href="login/login.php">Login</a></li>
                <li><a href="members/join.php">Join</a></li>
              <?php } else{ ?>
                <li><a href="javscript:void(0)">Search</a></li>
                <li><a href="members/mypage.php">Mypage</a></li>
                <li><a href="login/logout.php">logout</a></li>
              <?php }; ?> 
            </ul>
          </div>

        </div>

      </nav>

      <div class="nav_bg"></div>







    </header>



    <!-- main -->
    <main>




      <!-- banner -->


      <section class="main_banner">
        <div class="swiper bannerSwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="swiper-inner">
                <img src="images/banner_pc_0.png" alt="">
                <div class="text_box">
                  <h2>YOGURT</h2>
                  <p>누구의 식탁 위에 올라도 어색함 없는 요거트는 다양한 활용 방식과 포용력을 무기로, <br>
                   국가와 지역을 불문하고 간편식의 대표 아이템으로 자리 잡았습니다.
                  </p>
                  <a href="product/product_list.php">SHOP NOW</a>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="swiper-inner">
                <img src="images/banner_pc_2.png" alt="">
                <div class="text_box">
                  <h2>HAWAII</h2>
                  <p>옛 정취의 로컬 가게들부터 와이키키 해변에 뿌리를 둔 호텔과 리조트, <br>
                    생태계 복원에 힘쓰는 비영리 농장, 그리고 아티스틱한 감성의 카카아코까지. <br>
                    '알로하 스피릿'의 고향, 하와이의 다양한 정체성을 담았습니다.
                  </p>
                  <a href="product/product_list.php">SHOP NOW</a>
                </div>
              </div>

            </div>

            <div class="swiper-slide">
              <div class="swiper-inner">
                <img src="images/banner_pc_3.png" alt="">
                <div class="text_box">
                  <h2>Olive</h2>
                  <p>수천 년이 넘는 재배 역사를 이어오며 인류 식문화에 깊은 영향을 끼쳐온 올리브는 <br>
                    완전무결한 식물성 지방이자 고품질 에너지의 근원, 그리고 풍요와 평화의 상징으로 그 존재감을 발휘합니다.
                  </p>
                  <a href="product/product_list.php">SHOP NOW</a>
                </div>
              </div>
            </div>

          </div>
          <!-- <div class="swiper-scrollbar"></div> -->
        </div>
      </section>



      <!-- content_1 -->

      <section class="content_section">

        <div class="content_list">
          <div class="list_wrap">
            <div class="list">
              <ul>
                <li class="list1 list_title"><a href="javascript:void(0)">NEWS</a></li>
                <li class="list2 list_title"><a href="javascript:void(0)">LIFE</a></li>
                <li class="list3 list_title"><a href="javascript:void(0)">MAGAZINE</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="content1 content_tab1">
          <div class="content_wrap">
            <div class="content_inner">

              <div class="post">
                <a href="javascript:void(0)">
                  <div class="thumb"><img src="images/News_image1.jpg" alt=""></div>
                  <div class="text_inner">
                    <div class="title">애플카, ‘완전 자율주행차’ 포기하고 출시를 연기했다</div>
                    <div class="info">애플이 자율주행 전기차, 애플카의 개발 목표 '완전 자율주행'을 포기한 것으로 알려졌다. <블룸버그>는 현지 시간 6일 소식통을 인용해 이 같은 사실을
                        전하며, 애플카 출시 시기도 당초 계획보다 1년 늦은 2026년으로 연기되었다고 보도했다. 애플은 현재까지 자동차 업체들이 구현하지 못한 최고 수준의 자율주행인 '레벨 5'
                        기술을
                        적용할 예정이었으나, 최근 몇 달간 경영진은 현재 기술로는 이를 구현할 수 없다는 현실에 고심을 거듭해 왔다고. 이에 따라 애플은 결국 운전대와 페달을 제공하고, 고속도로에서만
                        완전
                        자율주행을 지원하는 수준으로 계획을 수정하게 됐다. 즉, 고속도로 운행 중 운전자가 영화를 보거나 게임을 하며, 도심에 진입하거나 궂은 날씨를 만났을 때는 수동운전으로 전환할
                        수
                        있는
                        충분한 시간을 제공하는 자율주행차를 개발하겠다는 것이다. </div>
                  </div>
                </a>
              </div>



              <div class="post">
                <a href="javascript:void(0)">
                  <div class="thumb"><img src="images/News_image2.jpg" alt=""></div>
                  <div class="text_inner">
                    <div class="title">팬톤이 선정한 2023 올해의 컬러 ‘비바 마젠타’</div>
                    <div class="info">팬톤(PANTONE)이 2023 올해의 컬러를 발표했다. 바로 용기, 포용력 그리고 자기 표현의 신호를 뜻하는 '비바 마젠타' 컬러가 그 주인공.
                      자연의
                      힘을
                      불러일으키는 '비바 마젠타'는 우리의 정신을 자극해 내면의 힘을 키울 수 있도록 도와준다. 강력하고 힘이 넘치며 삶에 대한 열정과 반항 정신을 가진 모든 이들을 위한 색. 팬톤에
                      따르면
                      '비바 마젠타'는 천연 염료 계열에 속하는 가장 귀중한 염료 중 하나이자 세계에서 가장 밝은 염료 중 하나인 코치닐의 레드에서 영감받았다. 따뜻함과 차가움 사이의 균형을 제시하는
                      톤으로
                      대담하지만 공격적이지 않고, 보다 긍정적인 미래를 위해 추진할 수 있는 변형적인 레드톤인 것. 다가올 해를 위한 새로운 힘의 신호를 보여줄 '마젠타 레드' 보다 자세한 내용은
                      이곳에서
                      확인할 수 있다.</div>
                  </div>
                </a>
              </div>

              <div class="post">
                <a href="javascript:void(0)">
                  <div class="thumb"><img src="images/News_image3.jpg" alt=""></div>
                  <div class="text_inner">
                    <div class="title">전 세계에서 생활비가 가장 비싼 도시는?</div>
                    <div class="info">뉴욕과 싱가포르가 전 세계 주요 도시 중 생활비가 가장 비싼 도시라는 타이틀을 함께 거머쥐었다. 이코노미스트 인텔리전스 유닛(EIU)이 발표한
                      ‘2022
                      전
                      세계 생활비’ 보고서에 따르면, 뉴욕과 싱가포르가 172개 도시 중 ‘올해 생활비가 가장 높은 도시’ 공동 1위에 올랐다. EIU는 뉴욕 물가(100점)를 기준으로 식품과 의류,
                      주거,
                      교통, 학비 등 160여 개 상품 및 서비스의 가격을 반영한 세계생활비지수에 따라 도시 생활비 순위를 매기는데, 여기서 뉴욕과 싱가포르가 최고점 100점을 기록한 것. 보고서에
                      따르면
                      뉴욕이 1위에 오른 것은 처음이고, 미국 도시 중에선 뉴욕 외에도 로스앤젤레스와 샌프란시스코 등 3곳이 10위권 안에 들었다. 이는 물가 상승뿐만 아니라 강달러 현상 때문이라고
                      EIU는
                      분석했다. 싱가포르의 경우, 올해를 포함해 지난 10년간 8번 1위에 오르며 늘 최상위권을 차지했다. 두 도시에 이어 이스라엘 텔아비브(3위), 홍콩·미국 로스앤젤레스(공동4위),
                      스위스
                      취리히(6위), 스위스 제네바(7위), 미국 샌프란시스코(8위), 프랑스 파리(9위), 덴마크 코펜하겐·호주 시드니(공동 10위) 순으로 집계됐다. 반면, 생활비가 가장 값싼
                      도시로는
                      시리아 다마스쿠스가 꼽혔다. 그 뒤로 리비아 트리폴리(171위), 이란 테헤란(170위), 튀니지 튀니스(169위), 우즈베키스탄 타슈켄트(168위) 등 순이었다.</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="content1 content_tab2">
          <div class="content_wrap">
            <div class="content_inner">

              <div class="post">
                <a href="javascript:void(0)">
                  <div class="thumb"><img src="images/lif_cafe.jpg" alt=""></div>
                  <div class="text_inner">
                    <div class="title">커피 마니아들을 위한, 서울 핸드드립 카페</div>
                    <div class="info">온갖 다양한 컨셉과 즐길 거리로 넘쳐나는 서울의 카페들. 그중 핸드드립 커피를 전문적으로 하고 있는 카페 6곳을 소개한다. 정성스럽게 내린 맛있는 커피
                      한 잔으로 소소한 행복을 전하는 핸드드립 카페 리스트를 아래에서 확인해 보자. 핸드드립에 한번 빠지게 되면, 자신의 취향에 맞는 원두를 찾아가는 재미 또한 커질 터.</div>
                  </div>
                </a>
              </div>



              <div class="post">
                <a href="javascript:void(0)">
                  <div class="thumb"><img src="images/life_apple.jpg" alt=""></div>
                  <div class="text_inner">
                    <div class="title">애플, 노래방 서비스 ‘애플뮤직 싱’ 출시</div>
                    <div class="info">애플(Apple)이 노래를 쉽게 따라 부를 수 있는 노래방 서비스 ‘애플뮤직 싱’을 선보인다. 애플은 애플뮤직(Apple Music)을 통해 음원과
                      가사를 제공해 오고 있는데, 여기에 새 기능을 추가해 선보인 것. 이용자들은 목소리의 높낮이에 맞게 톤을 조절할 수 있고, 이를 통해 혼자서는 물론, 원가수와 듀엣으로 부르면서
                      쉽게 노래를 배울 수 있다. 가사는 보컬의 리듬에 맞춰 춤을 추는 애니메이션 형태로 제공된다. 애플뮤직 가입자들은 이달 말부터 아이폰과 아이패드, 애플TV 4K(3세대)에서
                      ‘애플뮤직 싱’에 접속할 수 있다.</div>
                  </div>
                </a>
              </div>

              <div class="post">
                <a href="javascript:void(0)">
                  <div class="thumb"><img src="images/life_ja.jpg" alt=""></div>
                  <div class="text_inner">
                    <div class="title">몸과 마음이 힐링되는, 삿포로 료칸</div>
                    <div class="info">이번 겨울 일본으로 향할 계획이라면, 온몸으로 일본의 정취를 느낄 수 있는 료칸에서의 하룻밤은 어떤가. 뜨거운 온천에 몸을 담근 뒤 다다미방으로 향하는
                      발걸음은 그 어느 때보다도 가벼울 테니. 색다른 유카타와 게타, 고급스러운 가이세키 요리까지 즐긴다면 이보다 특별한 휴식은 없을 거다. 다가오는 겨울 온종일 머무르기 좋은 삿포로
                      료칸 6곳을 모아봤다.</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="content1 content_tab3">
          <div class="content_wrap">
            <div class="content_inner">

              <div class="post">
                <a href="javascript:void(0)">
                  <div class="thumb"><img src="images/mag_lemaire.jpg" alt=""></div>
                  <div class="text_inner">
                    <div class="title">MAGAZINE - LEMAIRE</div>
                    <div class="info">애플이 자율주행 전기차, 애플카의 개발 목표 '완전 자율주행'을 포기한 것으로 알려졌다. <블룸버그>는 현지 시간 6일 소식통을 인용해 이 같은 사실을
                        전하며, 애플카 출시 시기도 당초 계획보다 1년 늦은 2026년으로 연기되었다고 보도했다. 애플은 현재까지 자동차 업체들이 구현하지 못한 최고 수준의 자율주행인 '레벨 5'
                        기술을
                        적용할 예정이었으나, 최근 몇 달간 경영진은 현재 기술로는 이를 구현할 수 없다는 현실에 고심을 거듭해 왔다고. 이에 따라 애플은 결국 운전대와 페달을 제공하고, 고속도로에서만
                        완전
                        자율주행을 지원하는 수준으로 계획을 수정하게 됐다. 즉, 고속도로 운행 중 운전자가 영화를 보거나 게임을 하며, 도심에 진입하거나 궂은 날씨를 만났을 때는 수동운전으로 전환할
                        수
                        있는
                        충분한 시간을 제공하는 자율주행차를 개발하겠다는 것이다.</div>
                  </div>
                </a>
              </div>



              <div class="post">
                <a href="javascript:void(0)">
                  <div class="thumb"><img src="images/mag_nb.jpg" alt=""></div>
                  <div class="text_inner">
                    <div class="title">MAGAZINE - NEW BALANCE</div>
                    <div class="info">팬톤(PANTONE)이 2023 올해의 컬러를 발표했다. 바로 용기, 포용력 그리고 자기 표현의 신호를 뜻하는 '비바 마젠타' 컬러가 그 주인공.
                      자연의
                      힘을
                      불러일으키는 '비바 마젠타'는 우리의 정신을 자극해 내면의 힘을 키울 수 있도록 도와준다. 강력하고 힘이 넘치며 삶에 대한 열정과 반항 정신을 가진 모든 이들을 위한 색. 팬톤에
                      따르면
                      '비바 마젠타'는 천연 염료 계열에 속하는 가장 귀중한 염료 중 하나이자 세계에서 가장 밝은 염료 중 하나인 코치닐의 레드에서 영감받았다. 따뜻함과 차가움 사이의 균형을 제시하는
                      톤으로
                      대담하지만 공격적이지 않고, 보다 긍정적인 미래를 위해 추진할 수 있는 변형적인 레드톤인 것. 다가올 해를 위한 새로운 힘의 신호를 보여줄 '마젠타 레드' 보다 자세한 내용은
                      이곳에서
                      확인할 수 있다.</div>
                  </div>
                </a>
              </div>

              <div class="post">
                <a href="javascript:void(0)">
                  <div class="thumb"><img src="images/mag_margiela.jpg" alt=""></div>
                  <div class="text_inner">
                    <div class="title">MAGAZINE - MAISON MARGIELA</div>
                    <div class="info">무명의 상표를 고정하는 네 개의 하얀 스티치로 잘 알려진 메종 마르지엘라는 1988년 프랑스 파리에서 자신의 첫 컬렉션을 선보인 벨기에 디자이너 마르탱
                      마르지엘라에 의해 탄생했습니다. 해체와 재조합, 오버사이즈, 트롱프뢰유(눈속임) 등의 실험을 통해 의복 구성의 형식을 파괴하는가 하면 디자이너 개인으로 일체의 대외 홍보활동을 하지
                      않으며 기존 패션 브랜드 방식에 반하는 철저한 익명성으로 일관해왔습니다. 2009년 마르탱 마르지엘라의 은퇴 이후에도 그가 패션을 대해온 태도와 정신은 브랜드의 명맥을 잇는 자산이
                      되고 있으며, 영감의 원천으로 차세대 디자이너들에게 새로운 방향을 제시하고 있습니다. </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

      </section>



      <!-- Books -->
      <section class="content_section_2 scroll-spy">
        <div class="bk_box">

          <div class="bk_text_inner">
            <h3 class="back-to-position to-right">
              Motive Life Style</h3>
            <p class="back-to-position to-right delay-1">
              크고 작은 브랜드의 행보를 지속적으로 관찰하며 <br>
              그들의 창의적 아이디어와 목소리를 기사와 인터뷰, 영상 등의 컨텐츠로 제작해 전달하고자 합니다.
            </p>

            <p class="back-to-position to-right delay-2"><a href="product/product_list.php">VIEW ALL</a></p>
          </div>


          <div class="bookSwiper_box">
            <div class="swiper bookSwiper">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <a href="product/product.php" class="book_inner">
                    <div class="book_img_wrap">
                      <div class="book_img1">Hawaii 매거진</div>
                    </div>

                    <div class="book_text_wrap">
                      <p>Magazine HAWAII</p>
                      <p>₩18,000</p>
                    </div>
                  </a>
                </div>


                <div class="swiper-slide">
                  <a href="product/product.php" class="book_inner">
                    <div class="book_img_wrap">
                      <div class="book_img2">HAY 매거진</div>
                    </div>

                    <div class="book_text_wrap">
                      <p>Magazine HAY</p>
                      <p>₩16,000</p>
                    </div>
                  </a>
                </div>


                <div class="swiper-slide">
                  <a href="product/product.php" class="book_inner">
                    <div class="book_img_wrap">
                      <div class="book_img3">APC 매거진</div>
                    </div>

                    <div class="book_text_wrap">
                      <p>Magazine APC</p>
                      <p>₩20,000</p>
                    </div>
                  </a>
                </div>


                <div class="swiper-slide">
                  <a href="product/product.php" class="book_inner">
                    <div class="book_img_wrap">
                      <div class="book_img4">KYOTO 매거진</div>
                    </div>

                    <div class="book_text_wrap">
                      <p>Magazine KYOTO</p>
                      <p>₩16,000</p>
                    </div>
                  </a>
                </div>


                <div class="swiper-slide">
                  <a href="product/product.php" class="book_inner">
                    <div class="book_img_wrap">
                      <div class="book_img5">Acen 매거진</div>
                    </div>

                    <div class="book_text_wrap">
                      <p>Magazine ACEN STUDIO</p>
                      <p>₩18,000</p>
                    </div>
                  </a>
                </div>



                <div class="swiper-slide">
                  <a href="product/product.php" class="book_inner">
                    <div class="book_img_wrap">
                      <div class="book_img6">Copenhagen 매거진</div>
                    </div>

                    <div class="book_text_wrap">
                      <p>Magazine COPENHAGEN</p>
                      <p>₩18,000</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="product/product.php" class="book_inner">
                    <div class="book_img_wrap">
                      <div class="book_img7">Moscot 매거진</div>
                    </div>

                    <div class="book_text_wrap">
                      <p>Magazine MOSCOT</p>
                      <p>₩16,000</p>
                    </div>
                  </a>
                </div>



                <div class="swiper-slide">
                  <a href="product/product.php" class="book_inner">
                    <div class="book_img_wrap">
                      <div class="book_img8">Margiela 매거진</div>
                    </div>

                    <div class="book_text_wrap">
                      <p>Magazine MARGIELA</p>
                      <p>₩16,000</p>
                    </div>
                  </a>
                </div>



                <div class="swiper-slide">
                  <a href="product/product.php" class="book_inner">
                    <div class="book_img_wrap">
                      <div class="book_img9">ArcTeryx 매거진</div>
                    </div>

                    <div class="book_text_wrap">
                      <p>Magazine ARC'TERYX</p>
                      <p>₩16,000</p>
                    </div>
                  </a>
                </div>







              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <!-- <div class="swiper-pagination"></div> -->
            </div>

          </div>


        </div>
      </section>





      <section class="video_box scroll-spy">
        <div class="video_wrap">
          <div class="video_inner">


            <div class="text_inner">
              <div class="back-to-position to-right">Editor Pick</div>
              <div class="back-to-position to-right delay-1">LEMAIRE</div>

              
              <div class="back-to-position to-right delay-2">편안한 착용감이 첫째 조건이에요. 몸과 옷 사이의 사적 거리를 허락하는 옷, 제스처를 해방하는 옷은 자연스럽게 착용자의 성격과 매력을 드러나게 해주죠. 그리고 옷을 만들 때, 디자이너의 일은 50%고, 나머지 50%는 착용자의 몫이라는 점을 늘 염두에 둬요. 개인의 생각을 강요하기보다 언제나 해석의 여지를 남겨두려고 노력하죠.</div>
              <div class="back-to-position to-right delay-2">크리스토프 르메르, Co-creative directors of Lemaire</div>
            
              <div class="btn back-to-position to-right delay-3"><a href="product/product.php">
                <div class="more_text">더 많은 자료 보기</div>
                <div class="arrow_icon"></div>
              </a></div>         
            </div>

            <div class="video">
              <div class="video-container back-to-position to-left">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/X_byaN0n8WY" frameborder="0"
                  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>




    </main>




    <!-- footer -->
    <footer>





      <div class="ft_box">
        <div class="ft_inner">
          <div class="ft_logo">
            <img src="images/motive_ft_logo.svg" alt="모티브">
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

  </div>








</body>

</html>