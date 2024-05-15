@extends('layouts.app')

@section('content')
    <section class="hero-heading-center-5">
        <div class="container-7">
            <h1 class="centered-heading-3 margin-bottom-32px">Особистий кабінет волонтера</h1>
        </div>
    </section>
    <section class="personalinfopart">
        <div class="container-14"></div>
        <div class="personalinfoblock">
            <form class="form-update-data" action="{{ route('updateUserData') }}" method="post">
                @csrf
                <div class="ms-list-container">
                    <div class="ms-input-row">
                        <div class="ms-input-label">Фото</div>
                        <div data-ms-action="profile-image" class="ms-image is-profile-image"><img
                                src="images\white-profile-empty-1.svg" loading="lazy" data-ms-member="profile-image"
                                alt="">
                            <div class="ms-upload">Upload</div>
                        </div>
                    </div>
                </div>
                <div class="w-form">
                    <form id="wf-form-Profile" name="wf-form-Profile" data-name="Profile" method="get"
                          data-ms-form="profile" class="ms-profile-form" data-wf-page-id="661961d36318c956b6d31104"
                          data-wf-element-id="5474bbeb-d3f4-5984-8d2d-00aa61a9d33f">
                        <div class="ms-list-container">
                            <div class="ms-input-row"><label for="Full-Name" class="ms-input-label">Ім&#x27;я та
                                    прізвище</label><input name="full-name" class="ms-input w-input" maxlength="256" name="Full-Name-2"
                                                           data-name="Full Name 2" placeholder="e.g. Howard Thurman"
                                                           type="text" id="Full-Name-2" data-ms-member="name"
                                                           value="{{ $name }} {{ $surname  }}" required="">
                            </div>
                            <div class="ms-input-row"><label for="Email" class="ms-input-label">Пошта</label><input
                                    class="ms-input w-input" maxlength="256" name="Email" data-name="Email"
                                    placeholder="e.g. howard.thurman@gmail.com" type="email" id="Email"
                                    data-ms-member="email" value="{{ $email }}" required="" readonly></div>
                            {{--                        <div class="ms-input-row"><label for="Phone" class="ms-input-label">Телефон</label><input--}}
                            {{--                                class="ms-input w-input" maxlength="256" name="Phone" data-name="Phone"--}}
                            {{--                                placeholder="e.g. 123-456-7890" type="tel" id="Phone" data-ms-member="phone"--}}
                            {{--                                required=""></div>--}}
                            {{--                        <div class="ms-input-row"><label for="DOB" class="ms-input-label">Дата народження</label><input--}}
                            {{--                                class="ms-input w-input" maxlength="256" name="DOB" data-name="DOB"--}}
                            {{--                                placeholder="e.g. 01/01/1991" type="text" id="DOB" data-ms-member="dob" required="">--}}
                            {{--                        </div>--}}
                            <div class="ms-input-row is-last"><label for="Occupation"
                                                                     class="ms-input-label">Місто</label><input
                                    class="ms-input w-input" maxlength="256" name="city" data-name="Occupation"
                                    placeholder="e.g. Lviv" type="text" id="Occupation" data-ms-member="Occupation"
                                    value="{{ $city }}"
                                    required=""></div>
                        </div>
                        <input type="submit" data-wait="Please wait..." class="ms-button w-button" value="Оновити дані">
                    </form>
                    <div class="w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </form>
        </div>
        <div class="statisticblock">
            <div class="w-form">
                <form id="wf-form-Profile" name="wf-form-Profile" data-name="Profile" method="get"
                      data-ms-form="profile" class="ms-profile-form" data-wf-page-id="661961d36318c956b6d31104"
                      data-wf-element-id="83c41cf0-1dc7-1bf9-1208-0cf699e55e1e">
                    <div class="ms-list-container">
                        <div class="ms-input-row"><label for="Full-Name-3" class="makedinitiationsstats">Проявив(ла)
                                ініціативу: ___ разів</label></div>
                        <div class="ms-input-row"><label for="Email-2" class="donatedstats">Задонатив(ла): ___
                                грн </label></div>
                        <div class="ms-input-row"><label for="Phone-2" class="createdinitiationsstats">Створених
                                іцініатив: </label></div>
                        <div class="ms-input-row"><label for="DOB-2" class="createdgatherstats">Створених
                                зборів: </label></div>
                    </div>
                </form>
                <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                    <div>Oops! Somethinb g went wrong while submitting the form.</div>
                </div>
            </div>
        </div>
        <a href="{{ route('forget.password') }}" class="resetpasswordbutton w-inline-block">
    <div style="color:rgb(0,0,0)" class="button2-text">
        Відновити пароль
    </div>
    <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
         class="button2-reveal-4"></div>
</a>

    </section>
    <section class="gathersheaderpart">
        <div class="container-8">
            <h1 class="gathersofminetext margin-bottom-32px">Мої збори</h1>
        </div>
        {{--        <a href="#" class="allgathersbutton w-button">Всі збори</a>--}}
        {{--        <a href="#" class="donatedbutton w-button">Задонатив(ла)</a>--}}
        {{--        <a href="#" class="mygathersbutton w-button">Мої збори</a>--}}
        <a data-w-id="9dc008b8-91d9-d267-3330-8b79ea84f1d8" href="/create-gather"
           class="creategather w-inline-block">
            <div data-w-id="9dc008b8-91d9-d267-3330-8b79ea84f1d9" style="color:rgb(0,0,0)" class="button2-text">Створити
                збір
            </div>
            <div data-w-id="9dc008b8-91d9-d267-3330-8b79ea84f1db"
                 style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                 class="button2-reveal"></div>
        </a>
    </section>
    <section class="gathers_selection userpage-gathers">
        @foreach ($gathers as $gather)
        <div class="gathersblock">
            @if(!empty($gather['image_path']))
                <div class="gather_img" style="background-image: url({{$gather['image_path']}});"></div>
            @endif
            {{-- <div class="hashtags">#Їжа #mono-банка #Закритий</div> --}}
            <div class="gathername">{{$gather['title']}}</div>
            <div class="gathergoal">Мета збору:{{$gather['goal_amount']}} грн<br></div>
            <div class="earnedmoneytext">{{$gather['description']}}</div>
            {{-- <div class="dividerline">---------------------------------------------------------</div> --}}
            <a data-w-id="feec79e7-73e0-3571-3973-1ae56652380f" style="background-color:rgb(230,230,230)"
   href="/gather/{{$gather['gather_id']}}" class="moreaboutgather w-inline-block">
    <div
        style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
        class="top-line"></div>
    <div class="button3-text-2">Більше про збір</div>
    <div
        style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
        class="bottom-line"></div>
    <div
        style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
        class="left-line"></div>
    <div
        style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
        class="right-line"></div>
</a>

        </div>
        @endforeach
 
    </section>
    {{-- <section class="initiationsheaderpart">
        <div class="container-9"></div>
        <h1 class="initiationsofminetext margin-bottom-32px">Ініціативи, що стосуються мене</h1>
        <a href="#" class="allinitiationsbutton w-button">Всі ініціативи</a>
        <a href="#" class="initiatedbutton w-button">Проявив(ла) ініціативу</a>
        <a href="#" class="myinitiationsbutton w-button">Мої ініціативи</a>
        <a data-w-id="9fdc8d8e-f3e7-bda1-fd40-bbbda0d66400" href="{{ route('createInitiation') }}"
           class="button2-3 w-inline-block">
            <div data-w-id="9fdc8d8e-f3e7-bda1-fd40-bbbda0d66401" style="color:rgb(0,0,0)" class="button2-text">Створити
                ініціативу
            </div>
            <div data-w-id="9fdc8d8e-f3e7-bda1-fd40-bbbda0d66403"
                 style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                 class="button2-reveal-2-copy"></div>
        </a>
    </section>
    <section class="initiations">
        <div class="initiationsblock">
            <div class="cityhashtag">#Львів</div>
            <div class="status">     Активна     </div>
            <div class="initiationname">Назва ініціативи</div>
            <div class="initiationdescription">Короткий опис:<br></div>
            <div class="dividerlineininitiations">---------------------------------------------------------</div>
            <img src="images/location.png" loading="lazy" width="28" sizes="28px" alt=""
                 srcset="images/location-p-500.png 500w, images/location-p-800.png 800w, images/location.png 980w"
                 class="location-image"><img src="images/data.png" loading="lazy" width="26" height="Auto" alt=""
                                             srcset="images/data-p-500.png 500w, images/data-p-800.png 800w, images/data.png 938w"
                                             sizes="(max-width: 767px) 26px, (max-width: 991px) 3vw, 26px"
                                             class="dataimage"><img src="images/time.png" loading="lazy" width="30"
                                                                    alt="" class="timeimage">
            <div class="text-block-6">Час</div>
            <div class="datatext">Дата</div>
            <div class="locationtext">Локація</div>
            <div class="locationtext">Локація</div>
            <a data-w-id="7337f46b-09df-2e59-77f4-9167de95c0e4" style="background-color:rgb(230,230,230)"
               href="gatherexample.html" class="moreaboutinitiation w-inline-block">
                <div
                    style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                    class="top-line"></div>
                <div class="button3-text-2">Більше про ініціативу</div>
                <div
                    style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                    class="bottom-line"></div>
                <div
                    style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                    class="left-line"></div>
                <div
                    style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                    class="right-line"></div>
            </a>
            <div class="locationtext">Локація</div>
            <div class="locationtext">Локація</div>
            <div class="locationtext">Локація</div>
        </div>
    </section> --}}
@stop
