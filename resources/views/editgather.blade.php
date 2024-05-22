@extends('layouts.app')

@section('content')
    <form class="form-create-gather" action="{{ route('updateGatherPost') }}" data-method='serialize' method="post" enctype="multipart/form-data">
        @csrf
        <input name="gather_id" value="{{$gather['gather_id']}}" hidden>
        <section class="hero-heading-center-14">
            <div class="container-10">
                <h1 class="centered-heading-6 margin-bottom-32px">Створення збору</h1>
            </div>
        </section>
        <section class="hero-heading-center-20 gahter_edit_img gather_big_img" style="background-image: url({{$gather['image_path']}});">
            <div class="container-10">
                <img src="images/pictures.png" loading="lazy" width="58" alt="" class="addwraper" style="margin-left: 70px;">
                <div class="container-13">
                    <h1 class="centered-heading-9 margin-bottom-32px">Додати обкладинку</h1>
        
                    <label for="avatar">Choose a profile picture:</label>
        
                    <input type="file" id="avatar" name="image">
                </div>
            </div>
        </section>
        <section class="hero-heading-center-15">
            <div class="form-block-copy w-form">
                <textarea placeholder="Опис збору" maxlength="5000" id="field" name="description" data-name="Field" 
                          class="textarea w-input">{{$gather['description']}}</textarea>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
            <button type="submit" class="publishbutton w-button">      Опублікувати      </button>
            <div class="creategather-inputfields">
                <div class="w-form">
                    <input class="text-field-3 w-input"
                           maxlength="256" name="title"
                           data-name="gatherName"
                           placeholder="Назва збору"
                           type="text"
                           id="gatherName"  value="{{$gather['title']}}">
                    <input
                        class="text-field-4 w-input" maxlength="256" name="goal_amount" data-name="moneyGoal"
                        placeholder="Грошова ціль" type="text" id="moneyGoal" required=""  value="{{$gather['goal_amount']}}">
                        <label for="endDate">Дата закінчення збору</label>
                        <input
                        class="text-field-5 w-input" maxlength="256" name="publish_date" data-name="endDate"
                        placeholder="Дата закінчення збору" type="date" id="endDate" required=""  value="{{$gather['publish_date']}}">
                    <input
                        class="text-field-6 w-input" maxlength="256" name="donation_link" data-name="details"
                        placeholder="Посилання на реквізити " type="text" id="details" required=""  value="{{$gather['donation_link']}}">
                        {{-- <input
                       class="text-field-7 w-input" maxlength="256" name="hashTags" data-name="hashTags"
                       placeholder="Додайте хеш-теги" type="text" id="hashTags" required=""> --}}
                    <select id="status"
                                                                                                     name="status"
                                                                                                     data-name="status"
                                                                                                     class="select-field w-select">
                        <option value="active" @selected($gather['status'] == 'active')>Активний</option>
                        <option value="inactive" @selected($gather['status'] == 'inactive')>Неактивний</option>
                    </select>
                    <div class="w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </div>
        </section>
    </form>
@stop