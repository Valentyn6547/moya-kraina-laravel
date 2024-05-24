@extends('layouts.app')

@section('content')
<script>
    function updateFileName(input) {
        var fileName = input.files[0].name;
        document.getElementById('file-name-display').innerText = "Додано файл: " + fileName;
    }
    </script>
<section class="hero-heading-center-14">
    <div class="container-10">
        <h1 class="centered-heading-6-copy margin-bottom-32px">Створення ініціативи</h1>
    </div>
</section>
<form class="form-create-activities" action="{{ route('createActivitiesPost') }}" data-method='serialize' method="post" enctype="multipart/form-data">
<section class="hero-heading-center-20"><img src="images/pictures.png" loading="lazy" width="58" alt="" class="addwraper">
    <div class="container-13">
        <h1 class="centered-heading-9 margin-bottom-32px">Додати обкладинку</h1>
        <label for="avatar" class="custom-file-upload">
            <span>Вибрати зображення</span>
        </label>

        <input type="file" id="avatar" name="image" style="display: none;" onchange="updateFileName(this)">
    </div>
</section>
<section class="hero-heading-center-15">
   
        @csrf
    <div class="form-block-3 w-form">
       
            <input class="text-field-9 w-input" maxlength="256" name="address" data-name="address" placeholder="Адреса" type="text" id="address">

        <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
        </div>
    </div>
    <div class="form-block w-form">
       
            <textarea placeholder="Опис ініціативи" maxlength="5000" id="field" name="description" data-name="Field" class="textarea w-input" required></textarea>
    
        <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
        </div>
    </div>
   
    <div class="creategather-inputfields">
        <div class="w-form">
           
            <form id="email-form" name="email-form" data-name="Email Form" method="get" data-wf-page-id="66094bac1447875e7497e029" data-wf-element-id="e50b4c61-ca6c-049a-7c85-2687ff96d7ef">
                <input class="text-field-3-copy w-input" maxlength="256" name="title" data-name="gatherName" placeholder="Назва ініціативи" type="text" id="gatherName">
                <input class="text-field-5-copy w-input" maxlength="256" name="publish_date" data-name="endDate" placeholder="Дата проведення" type="date" id="endDate" required="">
                <input class="text-field-6-copy w-input" maxlength="256" name="time" data-name="details" placeholder="Час проведення" type="time" id="details" required="">
                <input class="text-field-7 w-input" maxlength="256" name="hashTags" data-name="hashTags" placeholder="Додайте хеш-теги" type="text" id="hashTags" required="">
                <select id="status"
                name="status"
                data-name="status"
                class="select-field w-select">
<option value="active">Активний</option>
<option value="inactive">Неактивний</option>
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
    <button class="publishbutton w-button" type="submit" style="top: -200px;">Створити ініціативу</button>


</section>
</form>
@stop
