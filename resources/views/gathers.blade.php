@extends('layouts.app')

@section('content')
  <section class="gather-gatherheader">
    <div class="container-9">
      <h1 class="centered-heading-5 margin-bottom-32px">Збори</h1>
    </div>
  </section>
  <section class="gather-gatherbuttons">
    <div class="container-9"></div>
    <div class="w-layout-blockcontainer gathersbuttons w-container">
      <a href="#" class="button-3 w-button">Всі збори</a>
      <a href="#" class="button-3 w-button">Актуальні</a>
      <a href="#" class="button-3 w-button">Закриті</a>
      <a href="#" class="button-3 w-button">privat-конверти</a>
      <a href="#" class="button-3 w-button">mono-банки</a>
    </div>
    <div class="w-layout-blockcontainer gathersbuttons2 w-container">
      <a href="#" class="button-3 w-button">Техніка</a>
      <a href="#" class="button-3 w-button">Їжа</a>
      <a href="#" class="button-3 w-button">Ліки</a>
      <a href="#" class="button-3 w-button">Одяг</a>
    </div>
  </section>
  <section class="gathers-gathers">
    <div class="gathersblock">
      <div class="hashtags">#Їжа #mono-банка #Закритий</div>
      <div class="gathername">Назва збору</div>
      <div class="gathergoal">Мета збору: ___ грн<br></div>
      <div class="earnedmoneytext">Вже зібрали ___ грн</div>
      <div class="dividerline">---------------------------------------------------------</div>
      <a data-w-id="c1e5c398-c893-d297-bfe5-4ead0d926a01" style="background-color:rgb(230,230,230)" href="{{ route('gatherExample') }}" class="moreaboutgather w-inline-block">
        <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="top-line.g"></div>
        <div class="button3-text-2">Більше про збір</div>
        <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="bottom-line.g"></div>
      <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="left-line.g"></div>
      <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="right-line.g"></div>
      </a>
    </div>
  </section>
@stop