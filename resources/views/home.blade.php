<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Tue Mar 26 2024 17:50:15 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6600170fbaf6f29ff2cfa059" data-wf-site="6600170ebaf6f29ff2cf9fda" lang="en">
<head>
  <meta charset="utf-8">
  <title>Client First Template 7</title>
  <meta content="Clean and fully customizable template built using the Client-first system for Webflow. It features 6 Static and 3 CMS Pages and can be used to build all types of NGO websites." name="description">
  <meta content="Client First Template 7" property="og:title">
  <meta content="Clean and fully customizable template built using the Client-first system for Webflow. It features 6 Static and 3 CMS Pages and can be used to build all types of NGO websites." property="og:description">
  <meta content="https://uploads-ssl.webflow.com/61026d0682c66e1b886e75fe/616d78e76c98192e43cca294_fs-template-7-og.jpg" property="og:image">
  <meta content="Client First Template 7" property="twitter:title">
  <meta content="Clean and fully customizable template built using the Client-first system for Webflow. It features 6 Static and 3 CMS Pages and can be used to build all types of NGO websites." property="twitter:description">
  <meta content="https://uploads-ssl.webflow.com/61026d0682c66e1b886e75fe/616d78e76c98192e43cca294_fs-template-7-og.jpg" property="twitter:image">
  <meta property="og:type" content="website">
  <meta content="summary_large_image" name="twitter:card">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/voluntarysite-b56eb6.webflow.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Oswald:200,300,400,500,600,700","Roboto:100,300,regular,500,700,900"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.webp" rel="apple-touch-icon"><!--  Please keep this css code to improve the font quality -->
  <style>
  * {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>
</head>
<body>
  <div class="page-wrapper">
    <div class="nav_component">
      <div data-collapse="medium" data-animation="default" data-duration="300" data-easing="ease" data-easing2="ease" role="banner" class="nav w-nav">
        <div class="padding-global">
          <div class="nav_container">
            <div class="text-block">VOLONTER.KA</div>
            <a href="index.html" aria-current="page" class="nav_logo-link w-nav-brand w--current"></a>
            <nav role="navigation" class="nav_menu w-nav-menu">
              <div class="nav_link-list">
                <a href="index.html" aria-current="page" class="nav_link w-nav-link w--current">Головна</a>
                <a href="gathers.html" class="nav_link w-nav-link">Збори</a>
                <a href="initiations.html" class="nav_link w-nav-link">Ініціативи</a>
                <a href="sign-up.html" class="nav_link w-nav-link">Реєстрація</a>
                <a href="contact.html" class="nav_link w-nav-link">Контакти</a>
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
      <div class="nav_blank-space"></div>
    </div>
    <div class="global-styles w-embed">
      <style>
/* Make text look crisper and more legible in all browsers */
body {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}
/* Focus state style for keyboard navigation for the focusable elements */
*[tabindex]:focus-visible,
  input[type="file"]:focus-visible {
   outline: 0.125rem solid #4d65ff;
   outline-offset: 0.125rem;
}
/* Get rid of top margin on first element in any rich text element */
.w-richtext > :not(div):first-child, .w-richtext > div:first-child > :first-child {
  margin-top: 0 !important;
}
/* Get rid of bottom margin on last element in any rich text element */
.w-richtext>:last-child, .w-richtext ol li:last-child, .w-richtext ul li:last-child {
	margin-bottom: 0 !important;
}
/* Prevent all click and hover interaction with an element */
.pointer-events-off {
	pointer-events: none;
}
/* Enables all click and hover interaction with an element */
.pointer-events-on {
  pointer-events: auto;
}
/* Create a class of .div-square which maintains a 1:1 dimension of a div */
.div-square::after {
	content: "";
	display: block;
	padding-bottom: 100%;
}
/* Make sure containers never lose their center alignment */
.container-medium,.container-small, .container-large {
	margin-right: auto !important;
  margin-left: auto !important;
}
/* 
Make the following elements inherit typography styles from the parent and not have hardcoded values. 
Important: You will not be able to style for example "All Links" in Designer with this CSS applied.
Uncomment this CSS to use it in the project. Leave this message for future hand-off.
*/
a,
.w-input,
.w-select,
.w-tab-link,
.w-nav-link,
.w-dropdown-btn,
.w-dropdown-toggle,
.w-dropdown-link {
  color: inherit;
  text-decoration: inherit;
  font-size: inherit;
}
/* Apply "..." after 3 lines of text */
.text-style-3lines {
	display: -webkit-box;
	overflow: hidden;
	-webkit-line-clamp: 3;
	-webkit-box-orient: vertical;
}
/* Apply "..." after 2 lines of text */
.text-style-2lines {
	display: -webkit-box;
	overflow: hidden;
	-webkit-line-clamp: 2;
	-webkit-box-orient: vertical;
}
/* Adds inline flex display */
.display-inlineflex {
  display: inline-flex;
}
/* These classes are never overwritten */
.hide {
  display: none !important;
}
@media screen and (max-width: 991px) {
    .hide, .hide-tablet {
        display: none !important;
    }
}
  @media screen and (max-width: 767px) {
    .hide-mobile-landscape{
      display: none !important;
    }
}
  @media screen and (max-width: 479px) {
    .hide-mobile{
      display: none !important;
    }
}
.margin-0 {
  margin: 0rem !important;
}
.padding-0 {
  padding: 0rem !important;
}
.spacing-clean {
padding: 0rem !important;
margin: 0rem !important;
}
.margin-top {
  margin-right: 0rem !important;
  margin-bottom: 0rem !important;
  margin-left: 0rem !important;
}
.padding-top {
  padding-right: 0rem !important;
  padding-bottom: 0rem !important;
  padding-left: 0rem !important;
}
.margin-right {
  margin-top: 0rem !important;
  margin-bottom: 0rem !important;
  margin-left: 0rem !important;
}
.padding-right {
  padding-top: 0rem !important;
  padding-bottom: 0rem !important;
  padding-left: 0rem !important;
}
.margin-bottom {
  margin-top: 0rem !important;
  margin-right: 0rem !important;
  margin-left: 0rem !important;
}
.padding-bottom {
  padding-top: 0rem !important;
  padding-right: 0rem !important;
  padding-left: 0rem !important;
}
.margin-left {
  margin-top: 0rem !important;
  margin-right: 0rem !important;
  margin-bottom: 0rem !important;
}
.padding-left {
  padding-top: 0rem !important;
  padding-right: 0rem !important;
  padding-bottom: 0rem !important;
}
.margin-horizontal {
  margin-top: 0rem !important;
  margin-bottom: 0rem !important;
}
.padding-horizontal {
  padding-top: 0rem !important;
  padding-bottom: 0rem !important;
}
.margin-vertical {
  margin-right: 0rem !important;
  margin-left: 0rem !important;
}
.padding-vertical {
  padding-right: 0rem !important;
  padding-left: 0rem !important;
}
</style>
    </div>
    <main class="main-wrapper">
      <section class="section_home-header">
        <div class="padding-global">
          <div class="container-large">
            <div class="home_header_component">
              <div class="max-width-medium">
                <h1 class="heading">Великі зміни починаються з маленьких кроків</h1>
              </div>
              <div class="home_header_button-row">
                <a href="#" class="buttonseemore is-white w-button">Проявити ініціативу</a>
                <a href="donate.html" class="buttonseemore is-white w-button">Задонатити</a>
              </div>
              <div class="home_header_stats-row">
                <div class="home_header_stats-row-spacer"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section_home-about">
        <div class="padding-global">
          <div class="container-large">
            <div class="home_about_component">
              <div class="padding-bottom padding-huge"></div>
              <div class="home_about_top-row">
                <div class="home_about_top-left">
                  <div class="section_title-wrapper">
                    <div class="section_title-spacer"></div>
                    <h3 id="w-node-a9b5a986-fb89-bb2f-8f95-87f0557b535a-557b5358" class="text-style-subheader">Вітаємо на volonter.ka – домівці сердець, що допомагають!</h3>
                  </div>
                  <div class="padding-left-title">
                    <h2><strong>Чому варто приєднатися до нас?</strong></h2>
                    <div class="padding-bottom padding-medium"></div>
                    <p><strong>Знайди своє покликання.</strong> Від екологічних ініціатив до соціальної підтримки — у нас є проекти на будь-який смак.<br>‍<br>‍<strong>Стань частиною спільноти.</strong> Об&#x27;єднуйтесь з однодумцями, діліться досвідом, ідеями та енергією у створенні змін<br>.<br>‍<strong>Роби добрі справи легко.</strong> Ми надаємо всі необхідні інструменти та ресурси для зручної взаємодії між волонтерами та організаціями.<br>‍<br>‍<strong>Відчуй радість від допомоги.</strong> Дізнайся, як волонтерство збагачує життя, надає відчуття наповненості та щастя.</p>
                    <div class="padding-bottom padding-large"></div>
                    <a href="#" class="buttonseemore w-button">Дізнатись більше</a>
                  </div>
                </div>
                <a href="#" data-w-id="1c310518-fe2a-8faa-1eb0-9f0b397dd115" class="home_about_video w-inline-block w-lightbox"><img src="images/home_2.jpg" loading="lazy" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="Kids playing" class="home_about_video-thumbnail"><img src="images/play-icon.svg" loading="lazy" alt="Play button" class="home_about_play-icon">
                  <script type="application/json" class="w-json">{
  "items": [
    {
      "url": "https://www.youtube.com/watch?v=Qt2yAW6zN_U",
      "originalUrl": "https://www.youtube.com/watch?v=Qt2yAW6zN_U",
      "width": 940,
      "height": 528,
      "thumbnailUrl": "http://i.ytimg.com/vi/Qt2yAW6zN_U/hqdefault.jpg",
      "html": "<iframe class=\"embedly-embed\" src=\"//cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2FQt2yAW6zN_U&display_name=YouTube&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DQt2yAW6zN_U&image=http%3A%2F%2Fi.ytimg.com%2Fvi%2FQt2yAW6zN_U%2Fhqdefault.jpg&key=96f1f04c5f4143bcb0f2e68c87d65feb&type=text%2Fhtml&schema=youtube\" width=\"940\" height=\"528\" scrolling=\"no\" title=\"YouTube embed\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen=\"true\"></iframe>",
      "type": "video"
    }
  ],
  "group": ""
}</script>
                </a>
              </div>
              <div class="padding-bottom padding-huge"></div>
            </div>
          </div>
        </div>
      </section>
      <section class="section_home-process">
        <div class="padding-global midd">
          <div class="container-large">
            <div class="padding-section-large">
              <h1 class="heading2initiations">Рекомендовані збори</h1>
              <div class="w-layout-blockcontainer container-3 w-container">
                <a href="#" class="button-3 w-button">Всі збори</a>
                <a href="#" class="button-3 w-button">Актуальні</a>
                <a href="#" class="button-3 w-button">Закриті</a>
                <a href="#" class="button-3 w-button">privat-конверти</a>
                <a href="#" class="button-3 w-button">mono-банки</a>
              </div>
              <div class="w-layout-blockcontainer container-1 w-container">
                <a href="#" class="button-3 w-button">Техніка</a>
                <a href="#" class="button-3 w-button">Їжа</a>
                <a href="#" class="button-3 w-button">Ліки</a>
                <a href="#" class="button-3 w-button">Одяг</a>
              </div>
            </div>
          </div>
          <div class="padding-section-large">
            <div class="padding-section-large">
              <h1 class="heading2initiations">Рекомендовані ініціативи</h1>
              <div class="w-layout-blockcontainer container-3 w-container">
                <a href="#" class="button-3 w-button">Вся Україна</a>
                <a href="#" class="button-3 w-button">Київ</a>
                <a href="#" class="button-3 w-button">Львів</a>
                <a href="#" class="button-3 w-button">Одеса</a>
                <a href="#" class="button-3 w-button">Харків</a>
                <a href="#" class="button-3 w-button">Вінниця</a>
              </div>
              <div class="w-layout-blockcontainer container-1 w-container">
                <a href="#" class="button-3 w-button">Ужгород</a>
                <a href="#" class="button-3 w-button">Івано-Франківськ</a>
                <a href="#" class="button-3 w-button">Херсон</a>
              </div>
            </div>
            <div class="section_title-wrapper">
              <div class="section_title-spacer"></div>
              <h3 id="w-node-a9b5a986-fb89-bb2f-8f95-87f0557b535a-557b5358" class="text-style-subheader">Зв&#x27;яжіться з нами !</h3>
            </div>
            <div class="contact_header_component">
              <div class="padding-left padding-huge is-tablet-0">
                <h1 class="heading-8">Маєте запитання, скаргу чи пропозицію ?<br>Не соромтеся контактувати із нами !</h1>
                <div class="margin-top margin-small">
                  <p>Виникли якісь запитання? Будь ласка, не соромтеся зв’язатися з нами за допомогою форми або наведених нижче даних.</p>
                </div>
              </div>
              <div class="contact_header_details-wrapper">
                <div class="text-size-large text-weight-bold">Давайте поговоримо !</div>
                <div class="contact_header_link-row">
                  <a href="#" class="text-weight-normal">+1 23 456 789</a>
                  <a href="#" class="text-weight-normal">hello@finsweet.com</a>
                </div>
                <div class="margin-top margin-medium">
                  <div class="text-size-medium text-weight-bold">Head office</div>
                  <div class="margin-top margin-xsmall">
                    <p>8 Brewery Drive, Hudson, NH 03051<br>USA</p>
                  </div>
                </div>
                <div class="margin-top margin-medium">
                  <div class="text-size-medium text-weight-bold">Branch office</div>
                  <div class="margin-top margin-xsmall">
                    <p>178 Marconi St., Venice, 34293<br>Italy</p>
                  </div>
                </div>
                <div class="margin-top margin-medium">
                  <div class="social_wrapper">
                    <a aria-label="Facebook link" href="http://www.finsweet.com" target="_blank" class="social_link w-inline-block">
                      <div class="social_icon w-embed"><svg aria-hidden="true" width="100%" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M16 8C16 3.58172 12.4183 0 8 0C3.58172 0 0 3.58172 0 8C0 11.993 2.92547 15.3027 6.75 15.9028V10.3125H4.71875V8H6.75V6.2375C6.75 4.2325 7.94438 3.125 9.77172 3.125C10.6467 3.125 11.5625 3.28125 11.5625 3.28125V5.25H10.5538C9.56 5.25 9.25 5.86672 9.25 6.5V8H11.4688L11.1141 10.3125H9.25V15.9028C13.0745 15.3027 16 11.993 16 8Z" fill="currentcolor"></path>
                        </svg></div>
                    </a>
                    <a aria-label="Twitter link" href="http://www.finsweet.com" target="_blank" class="social_link w-inline-block">
                      <div class="social_icon w-embed"><svg aria-hidden="true" width="100%" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0)">
                            <path d="M5.03344 14.5C11.0697 14.5 14.3722 9.4978 14.3722 5.16124C14.3722 5.02062 14.3691 4.87687 14.3628 4.73624C15.0052 4.27164 15.5597 3.69617 16 3.03687C15.4017 3.30307 14.7664 3.47692 14.1159 3.55249C14.8009 3.14194 15.3137 2.49698 15.5594 1.73718C14.915 2.11904 14.2104 2.38841 13.4756 2.53374C12.9806 2.00771 12.326 1.65941 11.6131 1.5427C10.9003 1.42599 10.1688 1.54737 9.53183 1.88806C8.89486 2.22876 8.38787 2.7698 8.08923 3.42754C7.7906 4.08528 7.71695 4.82308 7.87969 5.52687C6.575 5.46139 5.29862 5.12247 4.13332 4.53207C2.96802 3.94166 1.9398 3.11296 1.11531 2.09968C0.696266 2.82216 0.568038 3.6771 0.756687 4.49073C0.945337 5.30436 1.43671 6.01563 2.13094 6.47999C1.60975 6.46344 1.09998 6.32312 0.64375 6.07062V6.11124C0.643283 6.86943 0.905399 7.60439 1.38554 8.19118C1.86568 8.77797 2.53422 9.18037 3.2775 9.32999C2.7947 9.46209 2.28799 9.48133 1.79656 9.38624C2.0063 10.0383 2.41438 10.6086 2.96385 11.0176C3.51331 11.4265 4.17675 11.6537 4.86156 11.6675C3.69895 12.5807 2.26278 13.0761 0.784375 13.0737C0.522191 13.0733 0.260266 13.0573 0 13.0256C1.5019 13.9892 3.24902 14.5009 5.03344 14.5Z" fill="currentColor"></path>
                          </g>
                          <defs>
                            <clippath id="clip0">
                              <rect width="16" height="16" fill="white"></rect>
                            </clippath>
                          </defs>
                        </svg></div>
                    </a>
                    <a aria-label="Linkedin link" href="http://www.finsweet.com" target="_blank" class="social_link w-inline-block">
                      <div class="social_icon w-embed"><svg aria-hidden="true" width="100%" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M14.8156 0H1.18125C0.528125 0 0 0.515625 0 1.15313V14.8438C0 15.4813 0.528125 16 1.18125 16H14.8156C15.4688 16 16 15.4813 16 14.8469V1.15313C16 0.515625 15.4688 0 14.8156 0ZM4.74687 13.6344H2.37188V5.99687H4.74687V13.6344ZM3.55938 4.95625C2.79688 4.95625 2.18125 4.34062 2.18125 3.58125C2.18125 2.82188 2.79688 2.20625 3.55938 2.20625C4.31875 2.20625 4.93437 2.82188 4.93437 3.58125C4.93437 4.3375 4.31875 4.95625 3.55938 4.95625ZM13.6344 13.6344H11.2625V9.92188C11.2625 9.0375 11.2469 7.89687 10.0281 7.89687C8.79375 7.89687 8.60625 8.8625 8.60625 9.85938V13.6344H6.2375V5.99687H8.5125V7.04063H8.54375C8.85938 6.44063 9.63438 5.80625 10.7875 5.80625C13.1906 5.80625 13.6344 7.3875 13.6344 9.44375V13.6344Z" fill="currentColor"></path>
                        </svg></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <section class="end">
            <div class="padding-section-medium">
              <div class="contact_form-wrapper w-form">
                <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get" class="contact_form" data-wf-page-id="6600170fbaf6f29ff2cfa059" data-wf-element-id="c194b233-9dd3-79ef-35ae-0afdf0966c2c">
                  <div class="contact_form-grid">
                    <div class="form_field-wrapper"><label for="name-4">Ім&#x27;я</label><input class="form_input w-input" maxlength="256" name="name-3" data-name="Name 3" placeholder="" type="text" id="name-3"></div>
                    <div class="form_field-wrapper"><label for="name-4">Прізвище</label><input class="form_input w-input" maxlength="256" name="name-3" data-name="Name 3" placeholder="" type="text" id="name-3"></div>
                    <div class="form_field-wrapper"><label for="name-4">Пошта</label><input class="form_input w-input" maxlength="256" name="name-3" data-name="Name 3" placeholder="" type="text" id="name-3"></div>
                    <div class="form_field-wrapper"><label for="name-4">Тема</label><input class="form_input w-input" maxlength="256" name="name-3" data-name="Name 3" placeholder="" type="text" id="name-3"></div>
                    <div id="w-node-c194b233-9dd3-79ef-35ae-0afdf0966c3e-f2cfa059" class="form_field-wrapper"><label for="field-2">Повідомлення</label><textarea placeholder="Ваше повідомлення..." maxlength="5000" id="field-2" name="field-2" data-name="Field 2" class="form_input is-text-area w-input"></textarea></div>
                  </div>
                  <div class="contact_form-button-wrapper">
                    <a href="#" class="sendbutton w-button">Надіслати</a>
                  </div>
                </form>
                <div class="form_message-success w-form-done">
                  <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="form_message-error w-form-fail">
                  <div>Oops! Something went wrong while submitting the form.</div>
                </div>
              </div>
            </div>
          </section>
          <section class="footer-dark">
            <div class="container-4">
              <div class="footer-wrapper">
                <a href="#" class="footer-brand w-inline-block"><img src="images/company_logo01.jpg" loading="lazy" width="153" sizes="(max-width: 479px) 153px, (max-width: 767px) 32vw, 1vw" alt="" srcset="images/company_logo01-p-500.jpg 500w, images/company_logo01.jpg 640w"></a>
                <div class="footer-content">
                  <div id="w-node-_3c4e82ae-a958-892b-98e9-ee2233c17aa4-f2cfa059" class="footer-block">
                    <div class="title-small">Company</div>
                    <a href="#" class="footer-link">How it works</a>
                    <a href="#" class="footer-link">Pricing</a>
                    <a href="#" class="footer-link">Docs</a>
                  </div>
                  <div id="w-node-_3c4e82ae-a958-892b-98e9-ee2233c17aad-f2cfa059" class="footer-block">
                    <div class="title-small">Resources</div>
                    <a href="#" class="footer-link">Blog post name list goes here</a>
                    <a href="#" class="footer-link">Blog post name list goes here</a>
                    <a href="#" class="footer-link">Blog post name list goes here</a>
                    <a href="#" class="footer-link">See all resources &gt;</a>
                  </div>
                  <div id="w-node-_3c4e82ae-a958-892b-98e9-ee2233c17ab8-f2cfa059" class="footer-block">
                    <div class="title-small">About</div>
                    <a href="#" class="footer-link">Terms &amp; Conditions</a>
                    <a href="#" class="footer-link">Privacy policy</a>
                    <div class="footer-social-block">
                      <a href="#" class="footer-social-link w-inline-block"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124ac15112aad5_twitter%20small.svg" loading="lazy" alt=""></a>
                      <a href="#" class="footer-social-link w-inline-block"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a389912aad8_linkedin%20small.svg" loading="lazy" alt=""></a>
                      <a href="#" class="footer-social-link w-inline-block"><img src="https://uploads-ssl.webflow.com/62434fa732124a0fb112aab4/62434fa732124a51bf12aae9_facebook%20small.svg" loading="lazy" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer-divider"></div>
            <div class="footer-copyright-center">© 2024 Усі права захищені. Зроблено командою Кубик</div>
          </section>
        </div>
      </section>
      <section class="section_home-project">
        <div class="padding-global">
          <div class="container-large"></div>
        </div>
      </section>
    </main>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6600170ebaf6f29ff2cf9fda" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
</body>
</html>