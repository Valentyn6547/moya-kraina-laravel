@extends('layouts.app')

@section('content')
<div class="w-users-userformpagewrap">
    <div class="w-users-userresetpasswordformwrapper">
        @if (session('status'))
            <div tabindex="-1" class="w-users-userformsuccessstate w-form-success">
                <div class="w-users-userformheader">
                    <img src="https://d3e54v103j8qbb.cloudfront.net/img/email-72.67fa6be437.svg" loading="lazy" alt="">
                    <h2>Password Reset Email Sent</h2>
                </div>
                <p>{{ session('status') }}</p>
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="w-users-userformheader">
                <h2>Відновити пароль</h2>
            </div>
            <label for="email">Пошта</label>
            <input type="email" id="email" class="w-input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @if ($errors->has('email'))
                <span class="error">{{ $errors->first('email') }}</span>
            @endif
            <input type="submit" data-wait="Please wait..." class="w-users-userformbutton submit-button-3 w-button" value="Відновити пароль">
        </form>
    </div>
</div>
@stop