@extends('layouts.app')

@section('content')
<section class="hero-heading-center-14">
    <div class="container-10">
        <h1 class="centered-heading-6-copy margin-bottom-32px">Створення ініціативи</h1>
    </div>
</section>
<section class="hero-heading-center-20"><img src="images/pictures.png" loading="lazy" width="58" alt="" class="addwraper">
    <div class="container-13">
        <h1 class="centered-heading-9 margin-bottom-32px">Додати обкладинку</h1>
    </div>
</section>
<section class="hero-heading-center-15">
    <div class="form-block-3 w-form">
        <form id="email-form-3" name="email-form-3" data-name="Email Form 3" method="get" class="form-3" data-wf-page-id="66094bac1447875e7497e029" data-wf-element-id="4796af12-540c-4b41-cb6b-982c8287e44e">
            <input class="text-field-9 w-input" maxlength="256" name="address" data-name="address" placeholder="Адреса" type="text" id="address">
        </form>
        <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
        </div>
    </div>
    <div class="form-block w-form">
        <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="get" class="descriptionform" data-wf-page-id="66094bac1447875e7497e029" data-wf-element-id="3879b398-fd00-280b-0328-ea7fd4683f64">
            <textarea placeholder="Опис ініціативи" maxlength="5000" id="field" name="field" data-name="Field" class="textarea w-input"></textarea>
        </form>
        <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
        </div>
    </div>
    <a href="{{ route('home') }}" class="publishbutton w-button">Створити ініціативу</a>
    <div class="creategather-inputfields">
        <div class="w-form">
            <form id="email-form" name="email-form" data-name="Email Form" method="get" data-wf-page-id="66094bac1447875e7497e029" data-wf-element-id="e50b4c61-ca6c-049a-7c85-2687ff96d7ef">
                <input class="text-field-3-copy w-input" maxlength="256" name="gatherName" data-name="gatherName" placeholder="Назва ініціативи" type="text" id="gatherName">
                <input class="text-field-5-copy w-input" maxlength="256" name="endDate" data-name="endDate" placeholder="Дата проведення" type="text" id="endDate" required="">
                <input class="text-field-6-copy w-input" maxlength="256" name="details" data-name="details" placeholder="Час проведення" type="text" id="details" required="">
                <input class="text-field-7 w-input" maxlength="256" name="hashTags" data-name="hashTags" placeholder="Додайте хеш-теги" type="text" id="hashTags" required="">
                <select id="status" name="status" data-name="status" class="select-field w-select">
                    <option value="">Активний</option>
                    <option value="First">Закритий</option>
                    <option value="Second">Призупинений</option>
                </select>
            </form>
            <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
            </div>
        </div>
    </div>
</section>
@stop
