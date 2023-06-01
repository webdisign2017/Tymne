<header class="header">
    <div class="container">
        <div class="row">
            <div class="header-logo">
               <a href="/">
                 <img src="{{asset('img/logo-site.png')}}" alt="">
               </a>
            </div>
            <a href="{{route('form-registration')}}" class="enter-login">Войти</a>
        </div>
    </div>
</header>


<nav class="top-navigation">
  <div class="container">
    <ul class="top-menu">
      <li>
        <a href="{{route('specialists')}}">Специалисты</a>
      </li>
      <li>
        <a href="{{route('specialist')}}">Специалист</a>
      </li>
      <li>
        <a href="{{route('about')}}">О нас</a>
      </li>
      <li>
        <a href="{{route('contact')}}">Контакты</a>
      </li>
      <li>
        <a href="{{route('profile-spec')}}">Кабинет специалиста</a>
      </li>
      <li>
        <a href="{{route('profile-users')}}">Кабинет пользователя</a>
      </li>
    </ul>
  </div>
</nav>
