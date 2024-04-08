@extends('layouts.app')

@section('content')
<section class="hero-heading-center-13">
    <div class="container-9"></div>
    <div class="form-wrapper">
      @if ($errors->any())
          <div class="alert alert-danger" style="margin-bottom: 5vh;">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      <h2 class="heading-2">Почнемо !</h2>
      <div class="form-box">
        <div class="w-form">
          <form id="email-form" action="/register/submit" name="email-form" data-name="Email Form" method="post" class="form-5" data-wf-page-id="66001fcf2a32edee7a17db6b" data-wf-element-id="0adb11b8-46b6-be34-ba44-9a9028e8d650">
            @csrf
            <div class="form-field-wrapper">
              <div class="text-field-box"><label for="Name-2" class="field-label-2">Ім&#x27;я</label><input class="namefield w-input" maxlength="256" name="first-name" data-name="Name" placeholder="Name" type="text" id="Name-2" required=""></div>
              <div class="text-field-box"><label for="Name" class="field-label-2">Прізвище</label><input class="surnamefield w-input" maxlength="256" name="last-name" data-name="Name" placeholder="Last Name" type="text" id="Name" required=""></div>
              <div class="text-field-box _2"><label for="Email" class="field-label-2">Пошта</label><input class="emailfield w-input" maxlength="256" type="email" name="email" data-name="Email" placeholder="you@email.com" type="email" id="Email" required=""></div>
              <div class="text-field-box _2"><label for="Password" class="field-label-2">Пароль</label><input class="passwordfield w-input" maxlength="256" type="password" name="password" data-name="Password" placeholder="Password" type="text" id="Password" required=""></div><label for="Password-3" class="city">Місто</label><input class="cityfield w-input" maxlength="256" name="city" data-name="Password 3" placeholder="Місто" type="text" id="Password-3" required=""><label for="date-birsday" class="birthday">Дата народження</label><input class="birthdayfield w-input" maxlength="256" name="date" data-name="Password 2" placeholder="01/01/2021" type="date" id="Password-2" required="">
            </div><label class="w-checkbox checkbox-field">
              <div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox"></div><input type="checkbox" id="Checkbox" name="privacy-policy" data-name="Checkbox" required="" style="opacity:0;position:absolute;z-index:-1"><span for="Checkbox" class="checkbox-label w-form-label">Я погоджуюсь із <a href="#" class="link-4">Terms &amp; Conditions</a> and <a href="#" class="link-4">Privacy Policy</a></span>
            </label>
            <button data-w-id="017c4cb9-9585-1ef8-90c0-699de0b67657" type='submit' class="registerbutton1 w-inline-block">
              <div data-w-id="017c4cb9-9585-1ef8-90c0-699de0b67658" style="color:rgb(0,0,0)" class="button2-text">Зареєструватись</div>
              <div data-w-id="017c4cb9-9585-1ef8-90c0-699de0b6765a" style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="button2-reveal-3"></div>
            </button>
          </form>
          <div class="success-message w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
        <div class="div-block-41">
          <div class="text-block-9">Вже маєте акаунт? </div>
          <a href="log-in.html" class="link-3">Увійти</a>
        </div>
      </div>
    </div>
  </section>
@stop