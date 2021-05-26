<div id="bg">
    <div id="header_top">
      <div id="top_left">
        <span> Piazza S. Domenico Savio 5, 
          00181 Roma 
        </span> 
      </div>
      <div id="top_center">
        <img src="img/Logo_Ceci.svg" alt="">
      </div>
      <div id="top_right">
        <span>
        Lun - ven: 8 - 13.30/ 17 - 20 
        Sab: 8 - 13.30
        </span>
      </div>
    </div>
    <div id="header_nav">
        <ul>
            <li>
              <a class="{{ Route::currentRouteName() == "welcome" ? 'active' : '' }}" href="{{ route('welcome') }}">home</a>
            </li>
            <li>
              <a class="{{ Route::currentRouteName() == "chisiamo" ? 'active' : '' }}" href="{{ route('chisiamo') }}">chi siamo</a>
            </li>
            <li>
              <a class="{{ Route::currentRouteName() == "ordinaonline" ? 'active' : '' }}" href="{{ route('ordinaonline') }}">ordina online</a>
            </li>
            <li>
              <a class="{{ Route::currentRouteName() == "contatti" ? 'active' : '' }}" href="{{ route('contatti') }}">contatti</a>
            </li>
        </ul>
    </div>
</div>


