<?php
  $autorizated = Session::get('autorizated');
  $user_type = Session::get('user_type');
  $user_id = Session::get('user_id');

?>


<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Tue Apr 02 2024 11:17:50 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="66059665ce806ac3b6e3a855" data-wf-site="6600170ebaf6f29ff2cf9fda" lang="en">
<head>
  <meta charset="utf-8">
  <title>HomePage</title>
  <meta content="HomePage" property="og:title">
  <meta content="HomePage" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="/css/normalize.css" rel="stylesheet" type="text/css">
  <link href="/css/webflow.css" rel="stylesheet" type="text/css">
  <link href="/css/voluntarysite-b56eb6.webflow.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Oswald:200,300,400,500,600,700","Roboto:100,300,regular,500,700,900"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="/images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="/images/webclip.png" rel="apple-touch-icon"><!--  Please keep this css code to improve the font quality -->
  <style>
  * {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>
</head>
<body>
  <div data-collapse="medium" data-animation="default" data-duration="300" data-easing="ease" data-easing2="ease" role="banner" class="nav w-nav">
    <div class="padding-global">
      <div class="nav_container">

        <a href="/" class="w-nav-brand">
            <div class="text-block">Moya Kraina</div>
        </a>
        <nav role="navigation" class="nav_menu w-nav-menu">
          <div class="nav_link-list">
            <a href="/" aria-current="page" class="nav_link w-nav-link w--current">Головна</a>
            <a href="/gathers" class="nav_link w-nav-link">Збори</a>
            <a href="/activities" class="nav_link w-nav-link">Ініціативи</a>
            @if (!empty($autorizated) && $user_type == 'volunteer')
              <a href="/cabinet/" class="nav_link w-nav-link">Кабінет</a>

            @else
              <a href="/register" class="nav_link w-nav-link">Реєстрація</a>
              <a href="/login" class="nav_link w-nav-link">Вхід</a>
            @endif

            <a href="/contacts" class="nav_link w-nav-link">Контакти</a>
          </div>
        </nav>
        <div class="nav_menu-button w-nav-button">
          <div class="nav_menu-button-icon w-embed"><svg width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M5 16H27" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M5 8H27" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              <path d="M5 24H27" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg></div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-top-margin">
  </div>
  @yield('content')
  <section class="footer-dark">
    <div class="container-4">
      <div class="footer-wrapper">
        <a href="#" class="footer-brand w-inline-block"><img src="images/company_logo01.jpg" loading="lazy" width="153" sizes="153px" alt="" srcset="images/company_logo01-p-500.jpg 500w, images/company_logo01.jpg 640w"></a>
        <div class="footer-content">
          <div id="w-node-ff1cf910-fbba-36ad-6426-84cb9b8d1032-b6e3a855" class="footer-block">
            <div class="title-small">Про нас</div>
            <a href="#" class="footer-link">Terms &amp; Conditions</a>
            <a href="#" class="footer-link">Privacy policy</a>
            <div class="text-block-8">Наші соціальні мережі</div>
            <div class="footer-social-block">
              <a href="#" class="footer-social-link w-inline-block"><img src="images/Instagram.png" loading="lazy" width="36" alt=""></a>
              <a href="#" class="footer-social-link w-inline-block"><img src="images/Telegram.png" loading="lazy" width="49" sizes="49px" alt="" srcset="images/Telegram-p-500.png 500w, images/Telegram-p-800.png 800w, images/Telegram.png 1600w"></a>
              <a href="#" class="footer-social-link w-inline-block"><img src="images/Facebook.png" loading="lazy" width="33" sizes="33px" alt="" srcset="images/Facebook-p-500.png 500w, images/Facebook.png 626w"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-divider"></div>
    <div class="footer-copyright-center">© 2024 Усі права захищені. Зроблено командою Кубик</div>
  </section>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6600170ebaf6f29ff2cf9fda" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="/js/webflow.js" type="text/javascript"></script>
  <script src="{{ asset('js/dist/js/simple-notif.js') }}"></script>
  <script src="{{ asset('js/global.js') }}"></script>
  <script src="/js/bootstrap.bundle.min.js"></script>
  <link href="/css/bootstrap.css" rel="stylesheet">
</body>
</html>
