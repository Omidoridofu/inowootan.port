<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="inowootancopy.css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="background">
      <div class="title">
        <p class="title-word">Welcome to Channel of</p>


        <h1 display="block" class="title-word">Inowootan</h1>
        <div class="enter-container">
          <a href="#" class="enter">ENTER</a>
        </div>
      </div>
    </div>

    <div class="after-enter">
      <div class="inowootan" >
        <div class="left-up">
          <p>Channel</p>
          <h1>Inowootan</h1>
        </div>

        <div class="menus">
          <div class="contact menu">
            <a href="#jump-contact"><p>Contact</p></a>
          </div>
          <div class="profile menu">
            <a href="#jump-profile"><p>Profile</p></a>
          </div>
          <hr noshade>
        </div>
      </div>
      <div class="portfolio-title menu-title">
        <h1>Portfolio Sites</h1>
      </div>
      <div class="portfolio">
        <div class="osz">
          <a href="https://osz-onesevenzero.github.io/Home/" target=”_blank”><img src="osz-port.jpg" alt="#" class="chill"></a>
          <a href="https://osz-onesevenzero.github.io/Home/" target=”_blank”><h1 class="name">OSZ Bland Homepage</h1> </a>
          <p>依頼を受け、ホームページを作成した物です。</p>
          <p>作成期間：2日</p>
        </div>
        <div class="ganja">
            <a href="https://omidoridofu.github.io/"　target=”_blank”><img src="bestchill.jpg" alt="#" class="chill"></a>
            <a href="https://omidoridofu.github.io/"　target=”_blank”><h1 class="name">Sweat Berry Dispensary</h1></a>
            <p>大麻ショップのホームページをイメージしました</p>
            <p>※内容は全て架空のものです※</p>
        </div>
      </div>

      <div class="contact-container">
        <div class="contact-title menu-title">
          <h1 id="jump-contact">Contact</h1>
          <p>お問い合わせ</p>
        </div>
        <div class="contact-bottom">

          <div class="form">
            <form  action="inowootan-form.php" method="post">
            <p>お名前(必須)</p>
            <input type="text" class="input-write" name="name" value="">
            <p>メールアドレス(必須)</p>
            <input type="text" class="input-write" name="adress" value="">
            <p>題名</p>
            <input type="text" class="input-write" name="title" value="">
            <p>内容</p>
            <textarea  name="content"　rows="8" cols="80"></textarea>
            <div class="submit-btn">
              <input type="submit" class="input-submit" value="送信" >
            </div>
            </form>
          </div>
          <div class="e-mail-container">

            <p>E-Mail:yousk831inou3@icloud.com</p>
            <br>
            <p>Tell:090-3168-5069</p>
          </div>
        </div>
        <div class="profile-container">
          <div class="menu-title">
            <h1 id="jump-profile">Profile</h1>
            <p>プロフィール</p>
          </div>
          <div class="profile-container">
            <h1>Inowootan</h1>
            <img class="shin" src="81808473_220x220.jpg" alt="" >
            <a href="#"><p class="kochira">クラウドワークスのプロフィールはこちら</p></a>


            <p class="profile-p">2020年1月よりHTML&CSSを始めとしたWeb作成の学習をスタートしました。</p>
            <p>Web作成の依頼など、是非ご相談ください。</p>

            </div>
        </div>


      </div>
    </div>



    <script>

    $(".title").hide().fadeIn(2000);

    $(function(){
  $(".enter").on('click',function(){
    $('.title').fadeOut(200).queue(function(){
      $(".after-enter").fadeIn();
      $(this).removeClass(".title").dequeue();
    });
  });
});

$(function(){
        // #で始まるリンクをクリックしたら実行されます
        $('a[href^="#"]').click(function() {
          // スクロールの速度
          var speed = 400; // ミリ秒で記述
          var href= $(this).attr("href");
          var target = $(href == "#" || href == "" ? 'html' : href);
          var position = target.offset().top;
          $('body,html').animate({scrollTop:position}, speed, 'swing');
          return false;
        });
      });






    </script>

  </body>
</html>
