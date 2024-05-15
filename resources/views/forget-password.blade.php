@extends('layouts.app')

@section('content')
<section class="section_big">
    <div class="checkemailmodal w-form">
        <form action="{{ route('reset.password.post') }}" method="post" class="checkemailform" data-wf-page-id="664260aa8f1dc90265240c56" data-wf-element-id="f0e6b0ee-06e7-173f-4bf9-f99e3b6c89ab">
            @csrf
            <div class="emailmodaltop">
                <div class="emailiconwrapper">
                    <div class="emailicon w-embed">
                    <svg width="420" height="420" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.243 6.85399L11.49 1.30999C11.6454 1.21674 11.8233 1.16748 12.0045 1.16748C12.1857 1.16748 12.3636 1.21674 12.519 1.30999L21.757 6.85499C21.8311 6.8994 21.8925 6.96227 21.9351 7.03746C21.9776 7.11264 22 7.19758 22 7.28399V20C22 20.2652 21.8946 20.5196 21.7071 20.7071C21.5196 20.8946 21.2652 21 21 21H3C2.73478 21 2.48043 20.8946 2.29289 20.7071C2.10536 20.5196 2 20.2652 2 20V7.28299C1.99998 7.19658 2.02236 7.11164 2.06495 7.03646C2.10753 6.96127 2.16888 6.8984 2.243 6.85399ZM4 8.13299V19H20V8.13199L12.004 3.33199L4 8.13199V8.13299ZM12.06 13.698L17.356 9.23499L18.644 10.765L12.074 16.302L5.364 10.772L6.636 9.22799L12.06 13.698V13.698Z" fill="currentColor"></path>
                        </svg>
                    </div>
                </div>
                <h1 class="checkemailtext">Перевірте свою пошту</h1>
                <div class="newpasswordinfo">Будь ласка, введіть свій новий пароль у поле нижче. Переконайтеся, що ви не використовуєте поточний пароль.<br></div>
                <div class="spacer-20"></div>
                <div class="passwordinputwrapper"></div>
                <div class="inputpasswrapper">
                <input type="text" name="token" hidden value="{{$token}}">
                <div class="mb-3">
<label class="form-label"> Пошта</label>
<input type="email" class="form-control" name="email">
</div>
                    <label for="password" class="newpasswordlabel">Новий пароль</label>
                    <input class="newpasswordinput w-input" maxlength="256" name="password" data-name="New Password" placeholder="" minlength="8" type="password" id="password" data-ms-member="password" required="">
                </div>
                <div class="inputpasswrapper">
                    <label for="password" class="newpasswordlabel">Підтвердіть новий пароль</label>
                    <input class="newpasswordinput w-input" maxlength="256" name="password_confirmation" data-name="New Password Confirmed" placeholder="" minlength="8" type="password" id="passwordConfirm" data-ms-member="passwordConfirmed" required="">
                </div>
            </div>
            <div class="modal-bottom">
                <input type="submit" data-wait="Please wait..." class="getnewpasswordbutton w-button" value="Скинути пароль">
            </div>
        </form>
        <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
        </div>
    </div>
</section>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=664260aa8f1dc90265240be9" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/webflow.js" type="text/javascript"></script>
@stop

