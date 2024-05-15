@extends('layouts.app')

@section('content')
<div class="w-users-userformpagewrap">
    <div class="w-users-userresetpasswordformwrapper">
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
        @if (session('status'))
            <p class="w-users-userformsuccessmessage">Лист з посиланням для скидання паролю було успішно надіслано на вашу електронну адресу.</p>
        @endif
    </div>
</div>
@stop