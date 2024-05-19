@extends('layouts.app')

@section('content')
<section class="hero-heading-center-188 gather_big_img" style="background-image: url({{$gather['image_path']}})">
    <div class="container-12">
      <h1 class="gatherheader margin-bottom-32px">{{$gather['title']}}</h1>
    </div>
    <div class="enddategather">Дата закінчення збору: {{$gather['publish_date']}}</div>
    <a href="{{$gather['donation_link']}}" target="_blank" class="dodonationbutton w-button">        Задонатити    </a>
      <div class="padding-global">
        <div class="nav_container">
          <div class="nav_menu-button w-nav-button">
            <div class="nav_menu-button-icon w-embed"><svg width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 16H27" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M5 8H27" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M5 24H27" stroke="currentcolor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg></div>
          </div>
      </div>
    </div>
  </section>
  <section class="hero-heading-center-19">
    {{-- <h1 class="heading-17-copy">Name Surname</h1><img src="/images/Особистий-кабінет.png" loading="lazy" width="105" sizes="105px" alt="" srcset="images/Особистий-кабінет-p-500.png 500w, images/Особистий-кабінет.png 512w" class="userpicture"> --}}
    <div class="gatherdescription">
      <h1 class="gatheridesc">{{$gather['description']}}</h1>
    </div>
  </section>
@stop
