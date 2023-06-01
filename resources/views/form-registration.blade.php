@extends('layouts.profile-app')
@section('title')Форма регистрации
@endsection
@section('content')

<div class="row-flex">
    <div class="col-md-4">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Как пользователь</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Как консультант</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <form action="#!" method="post" class="p-2">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" name="name" placeholder="Введите Имя" id="name" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Введите эл.почту" id="email" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="subject" placeholder="Придумайте пароль" id="subject" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <input class="form-control" id="mess" name="message" rows="3" col="3" placeholder="Повторите пароль">
                    </div>
                    <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                </form>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <form action="#!" method="post" class="p-2">
                    @csrf

                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Введите эл.почту" id="email" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Введите пароль" id="subject" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Войти</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="form-bg" style="background-image: url({{asset('img/why-choose-us-img.png')}});"></div>
    </div>
</div>


@endsection
