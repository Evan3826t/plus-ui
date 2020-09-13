<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<style>
    .swiper {
        height: 85vh;
    }



    input[type="text"] {
        background-color: black;
        border: none;
    }

    input {
        color: white;
        background-color: #D69F72;
        border: none;
        padding: 5px;
        font-size: 25px;
        padding-right: 60px;
        padding-left: 60px;
        border-radius: 30px;
    }

    .message {
        background-color: black;
        border: none;
    }

    .navbg {
        background-color: rgba(0, 0, 0, 0.7);
    }



    .detial {
        color: #D69F72;
        background-color: #0A0E14;
    }

    .footer {
        background-color: black;
        color: #D69F72;
        font-size: 25px;
        padding-top: 75px;
        padding-bottom: 75px;
    }

    .icon {
        width: 25px;
        height: 25px;
    }

    .inputText>img {
        height: 30px;
    }

    .anchor {
        margin-top: 145px;
        margin-bottom: 110px;
    }

    .banner {
        color: #D69F72;
        background: linear-gradient(0deg, #0a0e1b 35%, black 60%);
        background: -moz-linear-gradient(0deg, #0a0e1b 35%, black 60%);
        background: -webkit-linear-gradient(0deg, #0a0e1b 35%, black 60%);
        background: -o-linear-gradient(0deg, #0a0e1b 35%, black 60%);
    }

    .gradient {
        background: linear-gradient(90deg, #0a0e1b 35%, black 60%);
        background: -moz-linear-gradient(90deg, #0a0e1b 35%, black 60%);
        background: -webkit-linear-gradient(90deg, #0a0e1b 35%, black 60%);
        background: -o-linear-gradient(90deg, #0a0e1b 35%, black 60%);
    }

    /* 大於 600 */
    @media screen and (min-width: 600px) {
        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 20;
            height: 55px;
        }
        .navbar-collapse {
            margin-left: -100px;
        }

        .banner {
            padding-bottom: 145px;
        }

        .grades {
            height: 475px;
            width: 25vw;
        }

        .anchortop {
            margin-top: 145px;
            height: 200px;
            margin-bottom: 110px;
        }

        .arrow {
            margin-top: 110px;
            margin-bottom: 110px;
            height: 90px;
        }

        .skillall {
            padding-bottom: 100px;
        }

        .skilltop {
            padding-bottom: 160px;
        }

        .skilltext>div {
            text-align: left;
            font-size: 28px;
            padding-left: 30px;
        }

        .skillimg {
            margin-top: 75px;
            margin-bottom: 60px;
        }

        .skilltext>h3 {
            font-size: 48px;
        }

        .spantext {
            font-weight: bold;
            font-size: 40px;
        }

        .mainType {
            background-image: url(./uploads/type/底圖_白色大理石_調白.jpg);
            height: 475px;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .typeImage {
            height: 203px
        }

        .mainTypePadding {
            padding-top: 136px
        }

        .skill {
            width: 200px;
            height: 200px;
            margin-bottom: 75px;

        }

        .img_3c {
            height: 350px;
            width: 350px;
        }

        .inputtop {
            padding-bottom: 75px;
        }

        .inputText {
            text-align: right;
            padding-bottom: 60px;
        }

        .inputPadding {
            padding-bottom: 60px;
        }
    }

    /* 小於 600 */
    @media screen and (max-width: 600px) {
        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 20;
        }
    
        .grades {
            height: 225px;
            width: 50vw;
        }

        .anchortop {
            margin-top: 50px;
            height: 75px;
            margin-bottom: 48px;

        }

        .banner {
            padding-bottom: 50px;
        }

        .banner>h2 {
            font-size: 16px;
        }

        .spantext {
            font-weight: bold;
            font-size: 25px;
        }

        .skillall>h2 {
            font-size: 16px;
        }

        .arrow {
            margin-top: 35px;
            margin-bottom: 35px;
            height: 40px;
        }

        .skillall {
            padding-bottom: 39px;
        }

        .skilltop {
            padding-bottom: 50px;
        }

        .skillimg {
            margin-top: 35px;
            margin-bottom: 25px;
        }

        .skilltext>div {
            text-align: left;
            font-size: 9px;
            padding-left: 0px;
        }

        .skilltext>h3 {
            font-size: 14px;
        }

        .typeImage {
            height: 65px
        }

        .mainType {
            background-image: url(./uploads/type/底圖_白色大理石_調白.jpg);
            height: 130px;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .mainTypePadding {
            padding-top: 35px
        }

        .skill {
            width: 50px;
            height: 50px;
            margin-bottom: 75px"

        }

        .img_3c {
            height: 160px;
            width: 160px;
        }

        .inputtop {
            padding-bottom: 36px;
        }

        .inputText {
            padding-bottom: 12px;
        }

        .inputPadding {
            padding-bottom: 27px;
        }
    }
</style>

<body>
    <!-- navbar -->
    <div class="top-navbg"></div>
    <section id="header" class="inxBg">
        <div id="navbar" class="fixed-top" style="background: rgba(0, 0, 0, 0.7);">
          <div id="navbarBg"></div>
          <!-- cantainer -->
          <div class="container">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-white">
              <header class="navbar-brand" href="index.html">
                <div>
                    <img  src="./uploads/icon/思微LOGO.png" class="logo" alt="" title="">
                    <span class="navmobile ml-5">
                        <a href="index.php"><img src="./uploads/toptitle/Home.png" class="toptitle" alt=""></a>
                        <a href="work.php"><img src="./uploads/toptitle/Works.png" class="toptitle" alt=""></a>
                        <a href="Blog.php"><img src="./uploads/toptitle/Blog.png" class="toptitle" alt=""></a>
                    </span>
                </div>
              </header>
              <button class="navbar-toggler ml-auto" type="button" onclick="openNav()">
                <span class="navbar-toggler-icon"><img src="./uploads/icon/漢堡.png" width="30px"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav text-right">
                  <li class="nav-item navmobilenon">
                    <a active" href="2index.html"><img src="./uploads/toptitle/Home.png" class="toptitle" alt=""></a>
                  </li>
                  <li class="nav-item navmobilenon">
                    <a  href="2products.html"><img src="./uploads/toptitle/Works.png" class="toptitle" alt=""></a>
                  </li>
                  <li class="nav-item navmobilenon">
                    <a  href="2products.html"><img src="./uploads/toptitle/Blog.png" class="toptitle" alt=""></a>
                  </li>
                  <li class="nav-item">
                    <a href="2products.html"><img src="./uploads/toptitle/Ebook.png" class="toptitle" alt=""></a>
                  </li>
                  <li class="nav-item">
                    <a href="2service.html"><img src="./uploads/toptitle/Customers.png" class="toptitle" alt=""></a>
                  </li>
                  <li class="nav-item">
                    <a href="2service.html"><img src="./uploads/toptitle/About us.png" class="toptitle" alt=""></a>
                  </li>
                  <li class="nav-item d-lg-none">
                    <a href="javascript:void(0)" class="nav-link closeBtn" onclick="closeNav()">&times;</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </section>


    <!-- swiper -->
    <div id="carouselExampleCaptions" class="carousel slide swiper" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <picture>
                    <source media="(max-width: 600px)" srcset="./uploads/slide/1-3.jpg">
                    <source media="(min-width: 600px)" srcset="./uploads/slide/3.jpg">
                    <img src="elva-800w.jpg" alt="Chris standing up holding his daughter Elva" style="width: 100%;height: 100%;object-fit: cover;" class="d-block w-100 swiper">
                  </picture>
               <div class="carousel-caption d-none d-md-block" >
                </div>
            </div>
            <div class="carousel-item">
                <picture>
                    <source media="(max-width: 600px)" srcset="./uploads/slide/1-3.jpg">
                    <source media="(min-width: 600px)" srcset="./uploads/slide/2.jpg">
                    <img src="elva-800w.jpg" alt="Chris standing up holding his daughter Elva" class="d-block w-100 swiper">
                  </picture>
                <div class="carousel-caption d-none d-md-block" >
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="banner text-center">
        <img class="rounded  anchortop" src="./uploads/Anchor/ICON_旗子問號與箭頭-01.png" alt="">
        <h2 class="text-center">思微設計是 <span class="spantext">專業</span> 的工業設計公司</h2>
        <h2 class="text-center">為您打造 <span class="spantext">高銷量</span> 深具魅力之產品</h2>
        <h2 class="text-center">以下 <span class="spantext">四組數字</span> 是我們累積的經驗與成績</h2>
    </div>
    <div class="row m-0 p-0">
        <div class="col-6 col-lg-3 p-0"><img src="./uploads/title/1.jpg" class="grades" alt=""></div>
        <div class="col-6 col-lg-3 p-0"><img src="./uploads/title/2.jpg" class="grades" alt=""></div>
        <div class="col-6 col-lg-3 p-0"><img src="./uploads/title/3.jpg" class="grades" alt=""></div>
        <div class="col-6 col-lg-3 p-0"><img src="./uploads/title/4.jpg" class="grades" alt=""></div>
    </div>
    <div class="bg-dark gradient text-center skillall" style="color:#D69F72;">
        <img class="rounded anchortop" src="./uploads/Anchor/ICON_旗子問號與箭頭-02.png" alt="">
        <h2 class="text-center">為何製造與模具成本<span class="spantext"> 這麼貴 ?</span></h2>
        <h2 class="text-center">什麼樣的<span class="spantext"> 外型 </span>是消費者喜愛的 ?</h2>
        <h2 class="text-center">消費者<span class="spantext"> 需要 </span>什麼功能的產品 ?</h2>
        <img class="rounded arrow " src="./uploads/Anchor/ICON_旗子問號與箭頭-03.png" alt="">
        <h2>十幾年的設計<span class="spantext"> 實戰 </span>經驗告訴我們</h2>
        <h2>只要抓住以下的設計<span class="spantext"> 三要素 </span></h2>
        <h2 class="skilltop">就大有機會打造出<span class="spantext"> 高銷售量 </span>爆款產品
        </h2>
        <div class="container">
            <div class="row ">
                <div class="col-4 text-center skilltext">
                    <img class="rounded skill" src="./uploads/Anchor/降低量產成本.png" alt=""><br>
                    <h3 class="skillimg">降低量產成本</h3>
                    <div>1.減少模具數量</div>
                    <div>2.保證量產</div>
                    <div>只有現有技術</div>
                    <div>3.增加模去使用壽命</div>
                    <div>4.提高產品良率</div>
                    <div>5.少模具</div>
                    <div>創造出多式樣產品</div>
                    <div>6.減少後加工段數</div>
                    <div>髮絲 . 噴砂 . 陽極</div>
                    <div>粉烤 . 液漆</div>
                </div>
                <div class="col-4 text-center skilltext">
                    <img class="rounded skill" src="./uploads/Anchor/優美獨特外型.png" alt=""><br>
                    <h3 class="skillimg">優美獨特外型</h3>
                    <div>1.美 = 熟悉 + 驚喜</div>
                    <div>2.目標族群定義</div>
                    <div>3.知名品牌設計語意</div>
                    <div>4.市場主流造型風格</div>
                    <div>5.材質搭配</div>
                    <div>6.色彩計畫</div>
                </div>
                <div class="col-4 text-center  skilltext">
                    <img class="rounded skill" src="./uploads/Anchor/洞察市場需求.png" alt=""><br>
                    <h3 class="skillimg">洞察市場需求</h3>
                    <div>1.定義：剛剛好的功能</div>
                    <div>2.使用體驗優化</div>
                    <div>3.使用場景定義</div>
                    <div>4.市場趨勢洞察</div>
                </div>
            </div>
        </div>
    </div>
    <div class="mainType">
        <div class="container mainTypePadding">
            <div class="row">
                <div class="col-3">
                    <img class="typeImage rounded mx-auto d-block" src="./uploads/type/3C_黑.png"
                        onmouseover="this.src='./uploads/type/3C_藍.png'" onmouseout="this.src='./uploads/type/3C_黑.png'" border="0"
                        alt="" />
                </div>
                <div class="col-3">
                    <img class="typeImage rounded mx-auto d-block" src="./uploads/type/生活_黑.png"
                        onmouseover="this.src='./uploads/type/生活_藍.png'" onmouseout="this.src='./uploads/type/生活_黑.png'" border="0"
                        alt="" />
                </div>
                <div class="col-3">
                    <img class="typeImage rounded mx-auto d-block" src="./uploads/type/奢華_黑.png"
                    onmouseover="this.src='./uploads/type/奢華_藍.png'" onmouseout="this.src='./uploads/type/奢華_黑.png'" border="0"
                    alt="" />
                </div>
                <div class="col-3">
                    <img class="typeImage rounded mx-auto d-block" src="./uploads/type/策略_黑.png"
                    onmouseover="this.src='./uploads/type/策略_藍.png'" onmouseout="this.src='./uploads/type/策略_黑.png'" border="0"
                    alt="" />

                </div>
            </div>
        </div>
    </div>
    <div class="3cType">
        <div class="container mt-4">
            <h2>3C產品</h2>
            <div class="row">
                <div class="col-6 col-lg-4 mb-2"><img class="img_3c rounded mx-auto d-block" src="./uploads/3C/手機保護殼.png"
                        alt=""></div>
                <div class="col-6 col-lg-4 mb-2"><img class="img_3c rounded mx-auto d-block" src="./uploads/3C/滑鼠.png" alt="">
                </div>
                <div class="col-6 col-lg-4 mb-2"><img class="img_3c rounded mx-auto d-block" src="./uploads/3C/空氣濾淨器.png"
                        alt=""></div>
                <div class="col-6 col-lg-4 mb-2"><img class="img_3c rounded mx-auto d-block" src="./uploads/3C/筋膜槍.png" alt="">
                </div>
                <div class="col-6 col-lg-4 mb-2"><img class="img_3c rounded mx-auto d-block" src="./uploads/3C/電腦機殼.png" alt="">
                </div>
                <div class="col-6 col-lg-4 mb-2"><img class="img_3c rounded mx-auto d-block"
                        src="./uploads/3C/頸戴360攝影機_icon.png" alt=""></div>
            </div>
        </div>
    </div>
    <div class="detial">
        <div class="container" style="padding-top: 100px;">
            <div class="row">
                <div class="col-12 text-center inputtop">若想要更進一步的免費諮詢，歡迎您留下資訊，我們會有專業的顧問，與您聯絡。</div>
                <div class="col-lg-2 inputText"><img src="./uploads/detail/Name.png" alt=""></div>
                <div class="inputPadding col-lg-4"><input type="text" class="form-control" name="Name" id="Name"></div>
                <div class="col-lg-2 inputText"><img src="./uploads/detail/Phone.png" alt=""></div>
                <div class="inputPadding col-lg-4"><input type="text" class="form-control" name="Phone" id="Phone">
                </div>
                <div class="col-lg-2 inputText"><img src="./uploads/detail/Country.png" alt=""></div>
                <div class="inputPadding col-lg-4"><input type="text" class="form-control" name="Country" id="Country">
                </div>
                <div class="col-lg-2 inputText"><img src="./uploads/detail/Mail.png" alt=""></div>
                <div class="inputPadding col-lg-4"><input type="text" class="form-control" name="Mail" id="Mail"></div>
                <div class="col-lg-2 inputText"><img src="./uploads/detail/Message.png" alt=""></div>
                <div class="inputPadding col-lg-10"><textarea class="form-control message" id="message"
                        rows="3"></textarea></div>
                <div class="col-12 text-center" style="padding-bottom: 75px;"><input type="submit" value="Submit"></div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3"><img src="./uploads/icon/icon-phone.png" class="icon" alt=""> 886 975 862
                    657</div>
                <div class="col-12 col-lg-4"><img src="./uploads/icon/icon-mail.png" class="icon" alt="">
                    iian@svplusdesign.com</div>
                <div class="col-12 col-lg-2"><img src="./uploads/icon/icon-line.png" class="icon" alt=""> iiandesign
                </div>
                <div class="col-12 col-lg-3"><img src="./uploads/icon/icon-chat.png" class="icon" alt=""> iiandesign
                </div>
                <div class="col-12 mt-3"><img src="./uploads/icon/icon-map.png" class="icon" alt="">
                    3F., No.46, Yixian Rd., Xinyi Dist., Taipei Dist., Taipei City 104, Taiwan ( R.O.C.)
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    // navbar背景
    $(window).scroll(function () {
      if ($(window).scrollTop() >= 30) {
        $('#navbarBg')
          .fadeIn()
          .addClass('navbarBg');
      } else {
        $('#navbarBg').fadeOut();
      }
    });
    // navbar button onclick open
    function openNav() {
      $("#navbarSupportedContent").addClass("sideNav");
      $("#navbarSupportedContent").removeClass("collapse", "navbar-collapse");
      setTimeout(function () {
        $("#navbarSupportedContent").width(180);
      }, 30);

      if ($("#navbarSupportedContent").hasClass('sideNav')) {
        $(document).click(function (e) {
          var _con = $('.sideNav'); // 设置目标区域
          if (!_con.is(e.target) && _con.has(e.target).length === 0) {
            $("#navbarSupportedContent").width(0);
          }
        });
      }
    }
    // navbar button onclick close
    function closeNav() {
      if ($(window).width() < 767) {}
      $("#navbarSupportedContent").width(0);

      setTimeout(function () {
        $("#navbarSupportedContent").removeClass("sideNav");
        $("#navbarSupportedContent").addClass("collapse", "navbar-collapse");
      }, 500);

    }
    // navbar screen chang class
    $(document).ready(function () {
      $(window).resize(function () {
        wdth = $(window).width();

        if (wdth < 992) {
          $("#navbarSupportedContent").removeClass("collapse", "navbar-collapse").addClass("sideNav");
        } else {
          closeNav();
        }
      });
    });
  </script>
</html>