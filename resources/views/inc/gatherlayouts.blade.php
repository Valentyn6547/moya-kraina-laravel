@section('gatherlayouts')
<form class="form_get_gathers" action="{{ route('getGathers') }}" method="post">
    @csrf
  <section class="home-gatherheader">
    <div class="container-9">
      <h1 class="recomendedgathertext margin-bottom-32px">Рекомендовані збори</h1>
    </div>
  </section>
  <section class="home-gatherbuttons">
    <div class="container-9"></div>
    <input id="gather_filter_input" name="gather_filter_input" value="" hidden />
    <ul class="w-layout-blockcontainer gathersbuttons w-container gather_filters">
      <li class="button-3 w-button option" value="all">Всі збори</li>
      <li class="button-3 w-button option" filter_name="status" value="active">Актуальні</li>
      <li class="button-3 w-button option" filter_name="status" value="inactive">Закриті</li>
      <li class="button-3 w-button">Місто: <input id="city_input" name="city_input" class="city_input home_city_input" value="Львів"></input> </li>
    </ul>
  </section>
  <section class="home-gathers gathers_selection">
  </section>
  <input type="submit" hidden>
</form>

