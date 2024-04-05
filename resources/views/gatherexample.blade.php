@extends('layouts.app')

@section('content')
<section class="hero-heading-center-18">
    <div class="container-12">
      <h1 class="gatherheader margin-bottom-32px">Назва збору</h1>
    </div>
    <h1 class="heading-16-copy">Мета збору:</h1>
    <div class="alreadyearned">На даний момент зібрано: </div>
    <div class="enddategather">Дата закінчення збору:</div>
    <a href="#" class="dodonationbutton w-button">        Задонатити    </a>
    <div data-collapse="medium" data-animation="default" data-duration="300" data-easing="ease" data-easing2="ease" role="banner" class="nav w-nav">
      <div class="padding-global">
        <div class="nav_container">
          <div class="text-block">VOLONTER.KA</div>
          <a href="#" class="nav_logo-link w-nav-brand"></a>
          <nav role="navigation" class="nav_menu w-nav-menu">
            <div class="nav_link-list">
              <a href="index.html" class="nav_link w-nav-link">Головна</a>
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
  </section>
  <section class="hero-heading-center-19">
    <div class="hashtags1">hashtag1 hashtag2 hashtag3</div>
    <h1 class="heading-17-copy">Name Surname</h1><img src="/images/Особистий-кабінет.png" loading="lazy" width="105" sizes="105px" alt="" srcset="images/Особистий-кабінет-p-500.png 500w, images/Особистий-кабінет.png 512w" class="userpicture">
    <div class="gatherdescription">
      <h1 class="gatheridesc">initiationDescription</h1>
    </div>
  </section>
@stop
