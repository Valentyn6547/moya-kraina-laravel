@extends('layouts.app')
@extends('inc.gatherlayouts')


@section('content')
<section class="section_home-header">
    <div class="padding-global">
      <div class="container-large">
        <div class="home_header_component">
          <div class="max-width-medium">
            <h1 class="heading">Великі зміни <br>починаються з маленьких кроків</h1>
          </div>
          <div class="home_header_stats-row">
            <div class="home_header_stats-row-spacer"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="homebuttons">
    <div class="home-makeinitiationbutton">
        <a href="/activities" class="initbutton w-inline-block">
          <div class="donatebuttontext">Проявити ініціативу <i class="fa-light fa-location-dot"></i></div>
        </a>
        <a href="#" class="button3-background w-inline-block"></a>
      </div>
      <div class="home-donate">
        <a href="/gathers" class="donatebutt w-inline-block">
          <div class="makeinitiationbuttontext">Задонатити</div>
        </a>
        <a href="#" class="button3-background w-inline-block"></a>
      </div>
    </div>
  </section>
  <section class="hero-heading-center-10">
    <div class="container-9"></div>
    <div class="home_about_top-row">
      <div class="home_about_top-left">
        <div class="padding-left-title">
          <div class="section_title-wrapper">
            <div class="section_title-spacer"></div>
            <h3 id="w-node-a9b5a986-fb89-bb2f-8f95-87f0557b535a-557b5358" class="text-style-subheader">Вітаємо на volonter.ka – домівці сердець, що допомагають!</h3>
          </div>
          <h2 class="heading-12"><strong>Чому варто приєднатися до нас?</strong></h2>
          <div class="padding-bottom padding-medium"></div>
          <p class="paragraph-2"><strong>Знайди своє покликання.</strong> Від екологічних ініціатив до соціальної підтримки — у нас є проекти на будь-який смак.<br>‍<br>‍<strong>Стань частиною спільноти.</strong> Об&#x27;єднуйтесь з однодумцями, діліться досвідом, ідеями та енергією у створенні змін.<br>‍<br>‍<strong>Роби добрі справи легко.</strong> Ми надаємо всі необхідні інструменти та ресурси для зручної взаємодії між волонтерами та організаціями.<br>‍<br>‍<strong>Відчуй радість від допомоги.</strong> Дізнайся, як волонтерство збагачує життя, надає відчуття наповненості та щастя.</p>
        </div>
      </div>
      <a href="#" data-w-id="1ad8ce23-ea03-fd25-7a19-dd920c65f082" class="home_about_video w-inline-block w-lightbox"><img src="images/voluntary.jpg" loading="lazy" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="" class="home_about_video-thumbnail">
        <script type="application/json" class="w-json"></script>
      </a>
    </div>
  </section>
  
  @include('inc.activitieslayouts')
  @include('inc.gatherlayouts')


  <section class="hero-heading-center-12-home">
    <div class="container-9">
      <h1 class="centered-heading-5 margin-bottom-32px">Маєте запитання, скаргу чи пропозицію ? </h1>
    </div>
    <div class="text2">Не соромтеся контактувати з нами !</div>
    <a data-w-id="e7d7cdee-49a5-0544-1dd7-0d6470ef0424" href="#" class="sendmessage w-inline-block">
      <div data-w-id="e7d7cdee-49a5-0544-1dd7-0d6470ef0425" style="color:rgb(0,0,0)" class="button2-text">Написати повідомлення </div>
      <div data-w-id="e7d7cdee-49a5-0544-1dd7-0d6470ef0427" style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="button2-reveal-copy"></div>
    </a>
  </section>
@stop

