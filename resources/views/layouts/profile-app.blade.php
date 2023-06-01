<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/css/app.css">
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}" type="image/x-icon">
    <title>@yield('title')</title>
</head>
<body>
    <header class="py-3 mb-4 border-bottom">
    <div class="container d-flex flex-wrap justify-content-center align-items-center">
      <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
         <img src="{{asset('img/logo-site.png')}}" alt="">     
      </a>
      <form class="col-12 col-lg-auto mb-3 mb-lg-0" role="search">
        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
      </form>
    </div>
  </header>
    <div class="container">

        @yield('content')
    </div>
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item">
          <a href="{{route('home')}}" class="nav-link px-2 text-body-secondary">Главная</a>
        </li>
        <li class="nav-item">
          <a href="{{route('specialists')}}" class="nav-link px-2 text-body-secondary">Специалисты</a>
        </li>
        <li class="nav-item">
          <a href="{{route('specialist')}}" class="nav-link px-2 text-body-secondary">Специалист</a>
        </li>
        <li class="nav-item">
          <a href="{{route('about')}}" class="nav-link px-2 text-body-secondary">О нас</a>
        </li>
        <li class="nav-item">
          <a href="{{route('contact')}}" class="nav-link px-2 text-body-secondary">Контакты</a>
        </li>
      </ul>
        <p class="text-center text-body-secondary">© 2023 Tymni, Inc</p>
  </footer>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>