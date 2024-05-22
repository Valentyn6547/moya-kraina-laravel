@section('activitieslayouts')
<form class="form_get_activities" action="{{ route('getActivities') }}" method="post">
    @csrf
  <section class="home-gatherheader">
    <div class="container-9">
      <h1 class="recomendedgathertext margin-bottom-32px">Рекомендовані ініціативи</h1>
    </div>
  </section>
  <section class="home-gatherbuttons">
    <div class="container-9"></div>
    <input id="activities_filter_input" name="activities_filter_input" value="" hidden />
    <ul class="w-layout-blockcontainer gathersbuttons w-container activities_filters">
      <li class="button-3 w-button option" value="all">Всі Ініціативи</li>
      <li class="button-3 w-button option" filter_name="status" value="active">Актуальні</li>
      <li class="button-3 w-button option" filter_name="status" value="inactive">Закриті</li>
      <li class="button-3 w-button">Місто: <input id="city_input" name="city_input" class="city_input home_filters_input" value="Львів"></input> </li>
      {{-- <li class="button-3 w-button">Містить хештег: <input id="hash_tag" name="hash_tag" class="home_filters_input" value=""></input> </li> --}}
      <li class="button-3 w-button">Назва містить: <input id="search_text" name="search_text" class="home_filters_input" value=""></input> </li>
    </ul>
  </section>
  <section class="home-activities home-gathers gathers_selection">
  </section>
  <input type="submit" hidden>
</form>