@extends('layouts.app')

@section('content')
<div class="w-users-userformpagewrap">
    @if ($errors->any())
    <div class="alert alert-danger" style="margin-bottom: 5vh;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="w-users-userloginformwrapper">
      <form action="/login" method="post">
        @csrf
        <div class="w-users-userformheader">
          <h2>Авторизація</h2>
        </div><label for="Email">Пошта</label><input maxlength="256" placeholder="" name="email" id="wf-log-in-email" class="w-input" type="email" autocomplete="username" required="" data-wf-user-form-input-type="email"><label for="Password">Пароль</label><input maxlength="256" placeholder="" name="password" id="wf-log-in-password" class="w-input" type="password" required="" data-wf-user-form-input-type="password"><input type="submit" data-wait="Please wait..." class="w-users-userformbutton submit-button w-button" value="Увійти">
        <div class="w-users-userformfooter"><span>Ще не маєте акаутнта ?</span>
          <a href="sign-up.html" class="w-inline-block">Sign Up</a>
        </div>
      </form>
      <div style="display:none" data-wf-user-form-error="true" class="w-users-userformerrorstate w-form-fail">
        <div class="user-form-error-msg" wf-login-form-general-error-error="We&#x27;re having trouble logging you in. Please try again, or contact us if you continue to have problems." wf-login-form-invalid-email_or_password-error="Invalid email or password. Please try again.">We&#x27;re having trouble logging you in. Please try again, or contact us if you continue to have problems.</div>
      </div>
    </div>
    <div class="w-users-userformfooter form-footer-2"><span class="fgpass">Забули пароль ?</span>
      <a href="reset-password.html" class="w-inline-block">
        <h1 class="rspass">Reset Password</h1>
      </a>
    </div>
  </div>
@stop