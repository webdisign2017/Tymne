@extends('layouts.profile-app')
@section('title')
Иван Московский
@endsection
@section('content')
<h1> Иван Московский</h1>
<div class="d-flex align-items-start">
    <div class="col-md-3 border border-bottom-0 rounded">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Мониторинг</button>
            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Профиль</button>
            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Расписание</button>
            <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Журнал
                встреч</button>
            <button class="nav-link" id="v-pills-vallet-tab" data-bs-toggle="pill" data-bs-target="#v-pills-vallet" type="button" role="tab" aria-controls="v-pills-vallet" aria-selected="false">Кошелек</button>
            <button class="nav-link" id="v-pills-exit-tab" data-bs-toggle="pill" data-bs-target="#v-pills-exit" type="button" role="tab" aria-controls="v-pills-exit" aria-selected="false">Выход</button>
        </div>
    </div>
    <div class="ms-3 col-md-8">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="content-section first-section mb-5">
                    <div class="row justify-content-between gap-4">
                        <div class="col-12 mb-5">
                            <div class="card card-intro border-0 p-4">
                                <div class="row">
                                    <div class="col-md-4 d-flex justify-content-center flex-column align-items-center">
                                        <div class="img-wrap rounded-circle">
                                            <img src="https://timny.ru/assets/mentorProfile/1665840649_splash_logo.png" alt="profile-img" class="rounded-circle">
                                        </div>
                                    </div>
                                    <div class="col ms-4">
                                        <div class="d-flex flex-column h-100 justify-content-center">
                                            <h6 class="text-dark mt-md-0 mt-3">
                                                Доброе утро,
                                                <span class="text-primary fw-bold">Иван Московский</span>
                                            </h6>
                                            <p class="mb-0">
                                                Добро пожаловать на вашу панель мониторинга, вы можете просмотреть общее
                                                количество, отмененные и сегодняшние встречи.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col d-flex">
                            <div class="card card-total-appointment border-0 py-lg-4 py-5 px-4 h-100 mt-lg-0 mt-4">
                                <h6 class="text-white">Всего встреч</h6>
                                <label class="h1 mb-0 mt-2 text-white">112</label>
                            </div>
                        </div>
                        <div class="col d-flex">
                            <div class="card card-cancel-appointment border-0 py-lg-4 py-5 px-4 h-100 mt-lg-0 mt-sm-4 mt-5">
                                <h6 class="text-dark fw-bold">Отмененных встреч</h6>
                                <label class="h1 mb-0 mt-2 fw-bold">16</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-9 mt-md-0 mt-5">
                            <div class="head-bg bg__head py-3 px-4 mt-5 me-3">
                                <div class="row">
                                    <div class="col d-flex align-items-center">
                                        <h6 class="text-dark fw-bold mb-0">Встречи сегодня</h6>
                                    </div>
                                    <div class="col d-flex align-items-center justify-content-end">
                                        <a href="" class="text-success mt-md-0 mt-2 fw-bold">
                                            Просмотреть Все
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive mt-md-5 mt-4 me-3">
                                        <table class="table table-borderless">
                                            <thead class="text-dark fw-bold border-bottom">
                                                <tr>
                                                    <td>Вопросы </td>
                                                    <td>Дата</td>
                                                    <td>Время</td>
                                                    <td>Тип</td>
                                                    <td>Цена</td>
                                                    <td>Платеж</td>
                                                    <td>Действие</td>
                                                </tr>
                                            </thead>
                                            <tbody class="text-dark">
                                                <tr>
                                                    <td colspan="9" class="text-center">
                                                        Записей не найдено
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="head-bg py-3 px-4 mt-5">
                                <div class="row">
                                    <div class="col-12 d-flex align-items-center">
                                        <h6 class="text-dark fw-bold mb-0">Рейтинг И Отзывы</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card border-0 shadow-c mt-md-5 mt-4 py-3 px-5 rating">
                                        <div class="row">
                                            <div class="col-md-12 ps-0">
                                                <h1 class="text-dark">N/A<span>/5</span></h1>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 ps-0">
                                                <div class="rating-stars d-inline-block position-relative w-star">
                                                    <img src="https://timny.ru/assets/images/grey-star.svg" alt="">
                                                    <div class="filled-star">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 ps-0 mb-3">
                                                <span class="rating-count mt-2 ">Всего: 0</span>
                                            </div>
                                        </div>
                                        <div class="rating-bar">
                                            <div class="row d-flex align-items-center justify-content-between">
                                                <div class=" d-inline-block position-relative col-xl-5 col-lg-2 col-md-2 col-5 pe-0 ps-0 me-3">
                                                    <div class="rating-stars">
                                                        <img src="https://timny.ru/assets/images/grey-star.svg" alt="">
                                                        <div class="filled-star">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-4 col-md-5 col-5">
                                                    <div class="progress mt-1">
                                                        <div role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" class="progress-bar w-0"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-3 col-2">
                                                    <span class="rating-count">5</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rating-bar">
                                            <div class="row d-flex align-items-center justify-content-between">
                                                <div class="col-xl-5 col-lg-2 col-md-2 col-5 pe-0 me-3 ps-0 rating-stars d-inline-block position-relative">
                                                    <img src="https://timny.ru/assets/images/grey-star.svg" alt="">
                                                    <div class="filled-star"></div>
                                                </div>
                                                <div class="col-xl-5 col-lg-4 col-md-5 col-5">
                                                    <div class="progress mt-1">
                                                        <div role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" class="progress-bar w-0"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-3 col-2">
                                                    <span class="rating-count">4</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rating-bar">
                                            <div class="row d-flex align-items-center justify-content-between">
                                                <div class="col-xl-5 col-lg-2 col-md-2 col-5 pe-0 ps-0 me-3 rating-stars d-inline-block position-relative">
                                                    <img src="https://timny.ru/assets/images/grey-star.svg" alt="">
                                                    <div class="filled-star"></div>
                                                </div>
                                                <div class="col-xl-5 col-lg-4 col-md-5 col-5">
                                                    <div class="progress mt-1">
                                                        <div role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" class="progress-bar w-0"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-3 col-2">
                                                    <span class="rating-count">3</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rating-bar">
                                            <div class="row d-flex align-items-center justify-content-between">
                                                <div class="col-xl-5 col-lg-2 col-md-2 col-5 pe-0 ps-0 me-3 rating-stars d-inline-block position-relative">
                                                    <img src="https://timny.ru/assets/images/grey-star.svg" alt="">
                                                    <div class="filled-star"></div>
                                                </div>
                                                <div class="col-xl-5 col-lg-4 col-md-5 col-5">
                                                    <div class="progress mt-1">
                                                        <div role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" class="progress-bar w-0"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-3 col-2">
                                                    <span class="rating-count">2</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rating-bar">
                                            <div class="row d-flex align-items-center justify-content-between">
                                                <div class="col-xl-5 col-lg-2 col-md-2 col-5 pe-0 ps-0 me-3 rating-stars d-inline-block position-relative">
                                                    <img src="https://timny.ru/assets/images/grey-star.svg" alt="">
                                                    <div class="filled-star"></div>
                                                </div>
                                                <div class="col-xl-5 col-lg-4 col-md-5 col-5">
                                                    <div class="progress mt-1">
                                                        <div role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" class="progress-bar w-0"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-3 col-2">
                                                    <span class="rating-count">1</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
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
                    <button type="submit" class="btn btn-primary">Редактировать</button>
                </form>
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">По расписанию
                            чата</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">По живым
                            консультациям</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="video-tab" data-bs-toggle="tab" data-bs-target="#video" type="button" role="tab" aria-controls="video" aria-selected="false">Видео
                            консультации</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="audio-tab" data-bs-toggle="tab" data-bs-target="#audio" type="button" role="tab" aria-controls="audio" aria-selected="false">Аудио
                            консультации</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="consult-site-tab" data-bs-toggle="tab" data-bs-target="#consult-site" type="button" role="tab" aria-controls="consult" aria-selected="false">Консультации

                            на сайте
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="consult-home-tab" data-bs-toggle="tab" data-bs-target="#consult-home" type="button" role="tab" aria-controls="consult-home" aria-selected="false">Консультации
                            на дому
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div id="v-pills-chat" role="tabpanel" aria-labelledby="v-pills-chat-tab" class="tab-pane fade active show">
                            <h5 class="text-secondary"><i class="fa-solid fa-comment me-2 text-primary"></i>
                                Расписание консультаций в Чате
                            </h5>
                            <p class="schedule-desc">
                                Вы можете установить свою плату за консультацию для режима чата.
                            </p>
                            <h6 class="text-primary mt-3 mb-3 fw-bold">
                                Выберите Плату за чат
                            </h6>
                            <div class="schedule-border p-3"><input type="number" placeholder="Введите сумму" class="form-control border">
                                <div class="position-relative mt-4"><button type="button" class="
                                        btn btn-secondary
                                        text-white text-capitalize
                                        fw-bold
                                        position-absolute
                                        end-0
                                      ">
                                        Обновить стоимость
                                    </button></div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div id="v-pills-live" role="tabpanel" aria-labelledby="v-pills-live-tab" class="tab-pane fade show active">
                            <h5 class="text-secondary"><i class="fa-solid fa-comment me-2 text-primary"></i>
                                Расписание консультаций в режиме реального времени
                            </h5>
                            <p class="schedule-desc">
                                Вы можете установить плату за консультацию в режиме реального времени.
                            </p>
                            <h6 class="text-primary mt-3 mb-3 fw-bold">
                                Выберите плату за консультацию
                            </h6>
                            <div class="schedule-border p-3"><input type="number" placeholder="Введите сумму" class="form-control border">
                                <div class="position-relative mt-4"><button type="button" class="
                                        btn btn-secondary
                                        text-white text-capitalize
                                        fw-bold
                                        position-absolute
                                        end-0
                                      ">
                                        Обновить стоимость
                                    </button></div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">

                        <div class="col-xxl-10 col-lg-9 ps-lg-0">
                            <div class="bg-white schedule-tabs p-4 pb-5 h-100 d-flex justify-content-center align-items-center">
                                <div id="v-pills-tabContent" class="tab-content w-100">
                                    <div id="v-pills-video" role="tabpanel" aria-labelledby="v-pills-profile-video" class="tab-pane fade active show">
                                        <h5 class="text-secondary">
                                            <i class="fa-solid fa-video me-2 text-primary"></i>
                                            Расписание Видеоконсультаций
                                        </h5>
                                        <p class="schedule-desc">
                                            Вы можете создать расписание независимо от того, на сколько дней вы будете
                                            доступны через неделю или через месяц. Вы можете установить свои
                                            комиссионные
                                            сборы и время, доступное для видеоконсультации в течение дня.
                                        </p>
                                        <h6 class="text-primary mt-3 mb-3 fw-bold">
                                            Выберите день для своего расписания
                                        </h6>
                                        <div class="schedule-border p-3">
                                            <div class="row row-cols-7">
                                                <div class="col">
                                                    <label>Понедельник</label>
                                                    <div class="custom-select mb-md-0 mb-3">
                                                        <select name="" id="" class="form-select mt-2 border">
                                                            <option value="1" selected="selected">Выходной
                                                            </option>
                                                            <option value="0">Доступен</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col"><label>Вторник</label>
                                                    <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                            <option value="1" selected="selected">Выходной
                                                            </option>
                                                            <option value="0">Доступен</option>
                                                        </select></div>
                                                </div>
                                                <div class="col"><label>Среда</label>
                                                    <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                            <option value="1" selected="selected">Выходной
                                                            </option>
                                                            <option value="0">Доступен</option>
                                                        </select></div>
                                                </div>
                                                <div class="col"><label>Четверг</label>
                                                    <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                            <option value="1" selected="selected">Выходной
                                                            </option>
                                                            <option value="0">Доступен</option>
                                                        </select></div>
                                                </div>
                                                <div class="col"><label>Пятница</label>
                                                    <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                            <option value="1" selected="selected">Выходной
                                                            </option>
                                                            <option value="0">Доступен</option>
                                                        </select></div>
                                                </div>
                                                <div class="col"><label>Суббота</label>
                                                    <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                            <option value="1" selected="selected">Выходной
                                                            </option>
                                                            <option value="0">Доступен</option>
                                                        </select></div>
                                                </div>
                                                <div class="col"><label>Воскресенье</label>
                                                    <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                            <option value="1" selected="selected">Выходной
                                                            </option>
                                                            <option value="0">Доступен</option>
                                                        </select></div>
                                                </div>
                                            </div>
                                            <div class="position-relative mt-4">
                                                <button href="" type="button" class="btn btn-secondary text-white text-capitalize fw-bold position-absolute end-0">
                                                    Обновить
                                                </button>
                                            </div>
                                        </div>
                                        <!---->
                                        <!---->
                                        <!---->
                                        <!---->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="audio" role="tabpanel" aria-labelledby="audio-tab">
                        <div id="v-pills-audio" role="tabpanel" aria-labelledby="v-pills-audio-tab" class="tab-pane fade active show">
                            <h5 class="text-secondary"><i class="fa-solid fa-volume-high me-2 text-primary"></i>
                                Расписание аудиоконсультаций
                            </h5>
                            <p class="schedule-desc">
                                Вы можете создать расписание независимо от того, на сколько дней вы будете
                                доступны через неделю или через месяц. Вы можете установить свои комиссионные
                                сборы и время, доступное для аудиоконсультаций в течение дня.
                            </p>
                            <h6 class="text-primary mt-3 mb-3 fw-bold">
                                Выберите дни
                            </h6>
                            <div class="schedule-border p-3">
                                <div class="row row-cols-7">
                                    <div class="col"><label>Понедельник</label>
                                        <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                <option value="1" selected="selected">Выходной</option>
                                                <option value="0">Доступен</option>
                                            </select></div>
                                    </div>
                                    <div class="col"><label>Вторник</label>
                                        <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                <option value="1" selected="selected">Выходной</option>
                                                <option value="0">Доступен</option>
                                            </select></div>
                                    </div>
                                    <div class="col"><label>Среда</label>
                                        <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                <option value="1" selected="selected">Выходной</option>
                                                <option value="0">Доступен</option>
                                            </select></div>
                                    </div>
                                    <div class="col"><label>Четверг</label>
                                        <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                <option value="1" selected="selected">Выходной</option>
                                                <option value="0">Доступен</option>
                                            </select></div>
                                    </div>
                                    <div class="col"><label>Пятница</label>
                                        <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                <option value="1" selected="selected">Выходной</option>
                                                <option value="0">Доступен</option>
                                            </select></div>
                                    </div>
                                    <div class="col"><label>Суббота</label>
                                        <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                <option value="1" selected="selected">Выходной</option>
                                                <option value="0">Доступен</option>
                                            </select></div>
                                    </div>
                                    <div class="col"><label>Воскресенье</label>
                                        <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                <option value="1" selected="selected">Выходной</option>
                                                <option value="0">Доступен</option>
                                            </select></div>
                                    </div>
                                </div>
                                <div class="position-relative mt-4"><button href="" type="button" class="
                    btn btn-secondary
                    text-white text-capitalize
                    fw-bold
                    position-absolute
                    end-0
                  ">
                                        Обновить
                                    </button></div>
                            </div>
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                        </div>

                    </div>

                    <div class="tab-pane fade" id="consult-site" role="tabpanel" aria-labelledby="consult-site-tab">
                        <div id="v-pills-visit" role="tabpanel" aria-labelledby="v-pills-visit-tab" class="tab-pane fade active show">
                            <h5 class="text-secondary"><i class="fa-solid fa-laptop-house me-2 text-primary"></i>
                                Расписание консультациф на сайте</h5>
                            <p class="schedule-desc">
                                Вы можете создать расписание независимо от того, на сколько дней вы будете
                                доступны через неделю или через месяц. Вы можете установить свои комиссионные
                                сборы и время, доступное для консультаций на сайте в течение дня.
                            </p>
                            <h6 class="text-primary mt-3 mb-3 fw-bold">
                                Выберите дни консультаций
                            </h6>
                            <div class="schedule-border p-3">
                                <div class="row row-cols-7">
                                    <div class="col"><label>Понедельник</label>
                                        <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                <option value="1" selected="selected">Выходной</option>
                                                <option value="0">Доступен</option>
                                            </select></div>
                                    </div>
                                    <div class="col"><label>Вторник</label>
                                        <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                <option value="1" selected="selected">Выходной</option>
                                                <option value="0">Доступен</option>
                                            </select></div>
                                    </div>
                                    <div class="col"><label>Среда</label>
                                        <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                <option value="1" selected="selected">Выходной</option>
                                                <option value="1">Доступен</option>
                                            </select></div>
                                    </div>
                                    <div class="col"><label>Четверг</label>
                                        <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                <option value="1" selected="selected">Выходной</option>
                                                <option value="0">Доступен</option>
                                            </select></div>
                                    </div>
                                    <div class="col"><label>Пятница</label>
                                        <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                <option value="1" selected="selected">Выходной</option>
                                                <option value="0">Доступен</option>
                                            </select></div>
                                    </div>
                                    <div class="col"><label>Суббота</label>
                                        <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                <option value="1" selected="selected">Выходной</option>
                                                <option value="0">Доступен</option>
                                            </select></div>
                                    </div>
                                    <div class="col"><label>Воскресенье</label>
                                        <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                <option value="1" selected="selected">Выходной</option>
                                                <option value="0">Доступен</option>
                                            </select></div>
                                    </div>
                                </div>
                                <div class="position-relative mt-4"><button type="button" class="
                    btn btn-secondary
                    text-white text-capitalize
                    fw-bold
                    position-absolute
                    end-0
                  ">
                                        Update
                                    </button></div>
                            </div>
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                        </div>

                    </div>
                    <div class="tab-pane fade" id="consult-home" role="tabpanel" aria-labelledby="consult-home-tab">
                        <div id="v-pills-hvisit" role="tabpanel" aria-labelledby="v-pills-hvisit-tab" class="tab-pane fade active show">
                            <h5 class="text-secondary"><i class="fa-solid fa-home me-2 text-primary"></i>
                                Расписание консультаций дома</h5>
                            <p class="schedule-desc">
                                Вы можете создать расписание независимо от того, на сколько дней вы будете
                                доступны через неделю или через месяц. Вы можете установить свои комиссионные
                                сборы и время, доступное для консультаций дома в течение дня.
                            </p>
                            <h6 class="text-primary mt-3 mb-3 fw-bold">
                                Выберите дни консультаций
                            </h6>
                            <div class="schedule-border p-3">
                                <div class="row row-cols-7">
                                    <div class="col"><label>Понедельник</label>
                                        <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                <option value="1" selected="selected">Выходной</option>
                                                <option value="0">Доступен</option>
                                            </select></div>
                                    </div>
                                    <div class="col"><label>Вторник</label>
                                        <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                <option value="1" selected="selected">Выходной</option>
                                                <option value="0">Доступен</option>
                                            </select></div>
                                    </div>
                                    <div class="col"><label>Среда</label>
                                        <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                <option value="1" selected="selected">Выходной</option>
                                                <option value="1">Доступен</option>
                                            </select></div>
                                    </div>
                                    <div class="col"><label>Четверг</label>
                                        <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                <option value="1" selected="selected">Выходной</option>
                                                <option value="0">Доступен</option>
                                            </select></div>
                                    </div>
                                    <div class="col"><label>Пятница</label>
                                        <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                <option value="1" selected="selected">Выходной</option>
                                                <option value="0">Доступен</option>
                                            </select></div>
                                    </div>
                                    <div class="col"><label>Суббота</label>
                                        <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                <option value="1" selected="selected">Выходной</option>
                                                <option value="0">Доступен</option>
                                            </select></div>
                                    </div>
                                    <div class="col"><label>Воскресенье</label>
                                        <div class="custom-select mb-md-0 mb-3"><select name="" id="" class="form-select mt-2 border">
                                                <option value="1" selected="selected">Выходной</option>
                                                <option value="0">Доступен</option>
                                            </select></div>
                                    </div>
                                </div>
                                <div class="position-relative mt-4"><button type="button" class="
                    btn btn-secondary
                    text-white text-capitalize
                    fw-bold
                    position-absolute
                    end-0
                  ">
                                        Обновить
                                    </button></div>
                            </div>
                            <!---->
                            <!---->
                            <h6 class="text-primary mt-md-4 mt-5 fw-bold" style="display: none;">
                                Создать расписание
                            </h6>
                            <div style="display: none;">
                                <div class="row"></div> <button href="" type="button" class="
                  btn btn-secondary
                  text-white text-capitalize
                  fw-bold
                  mt-4
                ">
                                    Сохранить расписание
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="bg-white generate-schedule border-0 mt-5 pb-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="text-primary py-4 px-5 fw-bold">Сохраненные расписания</h4>
                                </div>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <section class="appointment-log">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="text-secondary fw-bold text-center mb-5">
                                    Журнал встреч
                                </h1>
                            </div>
                        </div>
                        <ul id="pills-tab" role="tablist" class="nav nav-pills mentor-profile-tabs mt-4">
                            <li role="presentation" class="nav-item mb-md-0 mb-4 w-20"><button id="pills-pending-tab" data-bs-toggle="pill" data-bs-target="#pills-pending" type="button" role="tab" aria-controls="pills-pending" aria-selected="true" class="nav-link w-100 p-md-0 active">
                                    <div class="border-top-nav position-relative mb-3"><i class="fas fa-circle position-absolute"></i></div>
                                    <div class="text-dark mentor-head">
                                        Ожидающие
                                    </div>
                                </button></li>
                            <li role="presentation" class="nav-item mb-md-0 mb-4 w-20"><button id="pills-acceptapp-tab" data-bs-toggle="pill" data-bs-target="#pills-acceptapp" type="button" role="tab" aria-controls="pills-acceptapp" aria-selected="false" class="nav-link w-100 p-md-0">
                                    <div class="border-top-nav position-relative mb-3"><i class="fas fa-circle position-absolute"></i></div>
                                    <div class="text-dark mentor-head">
                                        Принятые

                                    </div>
                                </button></li>
                            <li role="presentation" class="nav-item mb-md-0 mb-4 w-20"><button id="pills-cancelapp-tab" data-bs-toggle="pill" data-bs-target="#pills-cancelapp" type="button" role="tab" aria-controls="pills-cancelapp" aria-selected="false" class="nav-link w-100 p-md-0">
                                    <div class="border-top-nav position-relative mb-3"><i class="fas fa-circle position-absolute"></i></div>
                                    <div class="text-dark mentor-head">
                                        Отмененные

                                    </div>
                                </button></li>
                            <li role="presentation" class="nav-item mb-md-0 mb-4 w-20"><button id="pills-compapp-tab" data-bs-toggle="pill" data-bs-target="#pills-compapp" type="button" role="tab" aria-controls="pills-compapp" aria-selected="false" class="nav-link w-100 p-md-0">
                                    <div class="border-top-nav position-relative mb-3"><i class="fas fa-circle position-absolute"></i></div>
                                    <div class="text-dark mentor-head">
                                        Завершенные

                                    </div>
                                </button></li>
                            <li role="presentation" class="nav-item mb-md-0 mb-4 w-20"><button id="pills-archievedapp-tab" data-bs-toggle="pill" data-bs-target="#pills-archievedapp" type="button" role="tab" aria-controls="pills-archievedapp" aria-selected="false" class="nav-link w-100 p-md-0">
                                    <div class="border-top-nav position-relative mb-3"><i class="fas fa-circle position-absolute"></i></div>
                                    <div class="text-dark mentor-head">
                                        Архивированные

                                    </div>
                                </button></li>
                        </ul>
                        <div id="pills-tabContent" class="tab-content">
                            <div id="pills-pending" role="tabpanel" aria-labelledby="pills-pending-tab" class="tab-pane fade active show">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="bg-white mt-4">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-borderless align-middle mb-0">
                                                    <thead class="align-middle">
                                                        <tr class="bg-primary text-white fw-bold">
                                                            <td class="p-3">
                                                                Вопрос
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Имя
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Дата
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Время
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Тип
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Цена
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Платеж
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Статус
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Дейсвтие
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="text-dark">
                                                        <tr>
                                                            <td>
                                                                <div class="wrap-ques ps-2
                      ">
                                                                    э
                                                                    жл
                                                                    х</div>
                                                            </td>
                                                            <td>
                                                                Alexey
                                                                Bubnov
                                                            </td>
                                                            <td>31.10.2022</td>
                                                            <td>09:47 pm</td>
                                                            <td>video</td>
                                                            <td><span class="text-success fw-400">руб 100</span></td>
                                                            <td><span class="text-primary me-2"><i class="fas fa-check"></i></span>
                                                                Оплачено
                                                            </td>
                                                            <!---->
                                                            <td>
                                                                Ожидаемый
                                                            </td>
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <td class="w-275"><a href="https://timny.ru/mentor/appointment-log-detail/621" class="btn btn-primary mb-md-0 mb-2 btn-sm mt-1">Просмотр деталей</a> <button type="button" class="btn btn-primary mb-md-0 mb-2 btn-sm mt-1">
                                                                    Принять
                                                                </button> <button type="button" class="btn btn-danger mb-md-0 mb-2 btn-sm mt-1">
                                                                    Отклонить
                                                                </button></td>
                                                        </tr>
                                                        <!---->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="
              btn-load-more
              d-flex
              justify-content-center
              align-items-center
            ">
                                            <div class="v-pagination">
                                                <ul>
                                                    <li class="v-pagination__list"><a><span>На странице </span><select>
                                                                <option value="10">10</option>
                                                                <option value="20">20</option>
                                                                <option value="30">30</option>
                                                            </select></a></li>
                                                    <li class="v-pagination__info"><a>1 / 1 （всего 1）строк</a></li>
                                                    <li class="v-pagination__first disabled"><a href="javascript:void(0)">Первая</a></li>
                                                    <li class="v-pagination__previous disabled"><a href="javascript:void(0)">&lt;</a></li>
                                                    <li class="active"><a href="javascript:void(0)">1</a></li>
                                                    <li class="v-pagination__next disabled"><a href="javascript:void(0)">&gt;</a></li>
                                                    <li class="v-pagination__last disabled"><a href="javascript:void(0)">Последняя</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="pills-acceptapp" role="tabpanel" aria-labelledby="pills-acceptapp-tab" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="bg-white px-2 py-lg-0 py-3">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="p-3 py-2 d-flex align-items-center h-100"></div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4">
                                                    <div class="p-3 py-2">
                                                        <div class="d-flex align-items-center h-100">
                                                            <div class="w-25"><label for="filter" class="pe-2 text-primary fw-bold">Найти:</label></div>
                                                            <div class="w-100"><input type="text" name="" id="" placeholder="Поиск" class="form-control border">
                                                                <div class="search-icon position-relative"><i class="fa-solid fa-magnifying-glass text-primary"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="bg-white mt-4">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-borderless align-middle mb-0">
                                                    <thead class="align-middle">
                                                        <tr class="bg-primary text-white fw-bold">
                                                            <td class="p-3">
                                                                Вопрос
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Имя
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Дата
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Время
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Тип
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Цена
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Платеж
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Статус
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Дейсвтие
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="text-dark">
                                                        <tr>
                                                            <td>
                                                                <div class="wrap-ques ps-2
                      ">
                                                                    текст вопроса</div>
                                                            </td>
                                                            <td>User</td>
                                                            <td>19.12.2022</td>
                                                            <td>10:00 am</td>
                                                            <td>audio</td>
                                                            <td><span class="text-success fw-400">руб 1000</span></td>
                                                            <td><span class="text-primary me-2"><i class="fas fa-check"></i></span>
                                                                Оплачено
                                                            </td>
                                                            <!---->
                                                            <!---->
                                                            <td>
                                                                Принято
                                                            </td>
                                                            <!---->
                                                            <!---->
                                                            <td class="w-275"><a href="https://timny.ru/mentor/appointment-log-detail/665" class="btn btn-primary mb-md-0 mb-2 btn-sm mt-1">Просмотр деталей</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="wrap-ques ps-2
                      ">
                                                                    Тестим</div>
                                                            </td>
                                                            <td>
                                                                Пользователь
                                                                московский
                                                            </td>
                                                            <td>19.12.2022</td>
                                                            <td>10:00 pm</td>
                                                            <td>audio</td>
                                                            <td><span class="text-success fw-400">руб 100</span></td>
                                                            <td><span class="text-primary me-2"><i class="fas fa-check"></i></span>
                                                                Оплачено
                                                            </td>
                                                            <!---->
                                                            <!---->
                                                            <td>
                                                                Принято
                                                            </td>
                                                            <!---->
                                                            <!---->
                                                            <td class="w-275"><a href="https://timny.ru/mentor/appointment-log-detail/656" class="btn btn-primary mb-md-0 mb-2 btn-sm mt-1">Просмотр деталей</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="wrap-ques ps-2
                      ">
                                                                    123123123</div>
                                                            </td>
                                                            <td>
                                                                Пользователь
                                                                московский
                                                            </td>
                                                            <td>28.09.2022</td>
                                                            <td>10:00 am</td>
                                                            <td>video</td>
                                                            <td><span class="text-success fw-400">руб 100</span></td>
                                                            <td><span class="text-primary me-2"><i class="fas fa-check"></i></span>
                                                                Оплачено
                                                            </td>
                                                            <!---->
                                                            <!---->
                                                            <td>
                                                                Принято
                                                            </td>
                                                            <!---->
                                                            <!---->
                                                            <td class="w-275"><a href="https://timny.ru/mentor/appointment-log-detail/582" class="btn btn-primary mb-md-0 mb-2 btn-sm mt-1">Просмотр деталей</a></td>
                                                        </tr>
                                                        <!---->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="
              btn-load-more
              d-flex
              justify-content-center
              align-items-center
            ">
                                            <div class="v-pagination">
                                                <ul>
                                                    <li class="v-pagination__list"><a><span>На странице </span><select>
                                                                <option value="10">10</option>
                                                                <option value="20">20</option>
                                                                <option value="30">30</option>
                                                            </select></a></li>
                                                    <li class="v-pagination__info"><a>1 / 1 （всего 3）строк</a></li>
                                                    <li class="v-pagination__first disabled"><a href="javascript:void(0)">Первая</a></li>
                                                    <li class="v-pagination__previous disabled"><a href="javascript:void(0)">&lt;</a></li>
                                                    <li class="active"><a href="javascript:void(0)">1</a></li>
                                                    <li class="v-pagination__next disabled"><a href="javascript:void(0)">&gt;</a></li>
                                                    <li class="v-pagination__last disabled"><a href="javascript:void(0)">Последняя</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="pills-cancelapp" role="tabpanel" aria-labelledby="pills-cancelapp-tab" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="bg-white px-2 py-lg-0 py-3">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="p-3 py-2 d-flex align-items-center h-100"></div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4">
                                                    <div class="p-3 py-2">
                                                        <div class="d-flex align-items-center h-100">
                                                            <div class="w-25"><label for="filter" class="pe-2 text-primary fw-bold">Найти:</label></div>
                                                            <div class="w-100"><input type="text" name="" id="" placeholder="Поиск" class="form-control border">
                                                                <div class="search-icon position-relative"><i class="fa-solid fa-magnifying-glass text-primary"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="bg-white mt-4">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-borderless align-middle mb-0">
                                                    <thead class="align-middle">
                                                        <tr class="bg-primary text-white fw-bold">
                                                            <td class="p-3">
                                                                Вопрос
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Имя
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Дата
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Время
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Тип
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Цена
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Платеж
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Статус
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Дейсвтие
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="text-dark">
                                                        <tr>
                                                            <td>
                                                                <div class="wrap-ques ps-2
                      ">
                                                                    ggghgggg</div>
                                                            </td>
                                                            <td>
                                                                Пользователь
                                                                московский
                                                            </td>
                                                            <td>21.10.2022</td>
                                                            <td>02:43 pm</td>
                                                            <td>video</td>
                                                            <td><span class="text-success fw-400">руб100</span></td>
                                                            <td><span class="text-primary me-2"><i class="fas fa-check"></i></span>
                                                                Оплачено
                                                            </td>
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <td>
                                                                Отмененный
                                                            </td>
                                                            <td class="w-275"><a href="https://timny.ru/mentor/appointment-log-detail/655" class="btn btn-primary mb-md-0 mb-2 btn-sm mt-1">Просмотр деталей</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="wrap-ques ps-2
                      ">
                                                                    ц45ц345</div>
                                                            </td>
                                                            <td>
                                                                Alexey
                                                                Bubnov
                                                            </td>
                                                            <td>10.10.2022</td>
                                                            <td>11:16 pm</td>
                                                            <td>on-site</td>
                                                            <td><span class="text-success fw-400">руб100</span></td>
                                                            <td><span class="text-primary me-2"><i class="fas fa-check"></i></span>
                                                                Оплачено
                                                            </td>
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <td>
                                                                Отмененный
                                                            </td>
                                                            <td class="w-275"><a href="https://timny.ru/mentor/appointment-log-detail/623" class="btn btn-primary mb-md-0 mb-2 btn-sm mt-1">Просмотр деталей</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="wrap-ques ps-2
                      ">
                                                                    qweq weq wee</div>
                                                            </td>
                                                            <td>
                                                                Alexey
                                                                Bubnov
                                                            </td>
                                                            <td>24.10.2022</td>
                                                            <td>10:17 pm</td>
                                                            <td>video</td>
                                                            <td><span class="text-success fw-400">руб100</span></td>
                                                            <td><span class="text-primary me-2"><i class="fas fa-check"></i></span>
                                                                Оплачено
                                                            </td>
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <td>
                                                                Отмененный
                                                            </td>
                                                            <td class="w-275"><a href="https://timny.ru/mentor/appointment-log-detail/620" class="btn btn-primary mb-md-0 mb-2 btn-sm mt-1">Просмотр деталей</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="wrap-ques ps-2
                      ">
                                                                    12312 3123 1233 123</div>
                                                            </td>
                                                            <td>
                                                                Alexey
                                                                Bubnov
                                                            </td>
                                                            <td>31.10.2022</td>
                                                            <td>10:17 pm</td>
                                                            <td>video</td>
                                                            <td><span class="text-success fw-400">руб100</span></td>
                                                            <td><span class="text-primary me-2"><i class="fas fa-check"></i></span>
                                                                Оплачено
                                                            </td>
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <td>
                                                                Отмененный
                                                            </td>
                                                            <td class="w-275"><a href="https://timny.ru/mentor/appointment-log-detail/619" class="btn btn-primary mb-md-0 mb-2 btn-sm mt-1">Просмотр деталей</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="wrap-ques ps-2
                      ">
                                                                    123 123 123 12</div>
                                                            </td>
                                                            <td>
                                                                Alexey
                                                                Bubnov
                                                            </td>
                                                            <td>31.10.2022</td>
                                                            <td>10:17 pm</td>
                                                            <td>video</td>
                                                            <td><span class="text-success fw-400">руб100</span></td>
                                                            <td><span class="text-primary me-2"><i class="fas fa-check"></i></span>
                                                                Оплачено
                                                            </td>
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <td>
                                                                Отмененный
                                                            </td>
                                                            <td class="w-275"><a href="https://timny.ru/mentor/appointment-log-detail/618" class="btn btn-primary mb-md-0 mb-2 btn-sm mt-1">Просмотр деталей</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="wrap-ques ps-2
                      ">
                                                                    123 3123 123 123 12</div>
                                                            </td>
                                                            <td>
                                                                Alexey
                                                                Bubnov
                                                            </td>
                                                            <td>31.10.2022</td>
                                                            <td>11:16 pm</td>
                                                            <td>on-site</td>
                                                            <td><span class="text-success fw-400">руб100</span></td>
                                                            <td><span class="text-primary me-2"><i class="fas fa-check"></i></span>
                                                                Оплачено
                                                            </td>
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <td>
                                                                Отмененный
                                                            </td>
                                                            <td class="w-275"><a href="https://timny.ru/mentor/appointment-log-detail/617" class="btn btn-primary mb-md-0 mb-2 btn-sm mt-1">Просмотр деталей</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="wrap-ques ps-2
                      ">
                                                                    ert ert ert</div>
                                                            </td>
                                                            <td>
                                                                Alexey
                                                                Bubnov
                                                            </td>
                                                            <td>24.10.2022</td>
                                                            <td>11:16 pm</td>
                                                            <td>on-site</td>
                                                            <td><span class="text-success fw-400">руб100</span></td>
                                                            <td><span class="text-primary me-2"><i class="fas fa-check"></i></span>
                                                                Оплачено
                                                            </td>
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <td>
                                                                Отмененный
                                                            </td>
                                                            <td class="w-275"><a href="https://timny.ru/mentor/appointment-log-detail/616" class="btn btn-primary mb-md-0 mb-2 btn-sm mt-1">Просмотр деталей</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="wrap-ques ps-2
                      ">
                                                                    123 123 123 123</div>
                                                            </td>
                                                            <td>
                                                                Alexey
                                                                Bubnov
                                                            </td>
                                                            <td>24.10.2022</td>
                                                            <td>11:16 pm</td>
                                                            <td>on-site</td>
                                                            <td><span class="text-success fw-400">руб100</span></td>
                                                            <td><span class="text-primary me-2"><i class="fas fa-check"></i></span>
                                                                Оплачено
                                                            </td>
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <td>
                                                                Отмененный
                                                            </td>
                                                            <td class="w-275"><a href="https://timny.ru/mentor/appointment-log-detail/615" class="btn btn-primary mb-md-0 mb-2 btn-sm mt-1">Просмотр деталей</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="wrap-ques ps-2
                      ">
                                                                    qwe qwe qwew</div>
                                                            </td>
                                                            <td>
                                                                Alexey
                                                                Bubnov
                                                            </td>
                                                            <td>24.10.2022</td>
                                                            <td>11:16 pm</td>
                                                            <td>on-site</td>
                                                            <td><span class="text-success fw-400">руб100</span></td>
                                                            <td><span class="text-primary me-2"><i class="fas fa-check"></i></span>
                                                                Оплачено
                                                            </td>
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <td>
                                                                Отмененный
                                                            </td>
                                                            <td class="w-275"><a href="https://timny.ru/mentor/appointment-log-detail/614" class="btn btn-primary mb-md-0 mb-2 btn-sm mt-1">Просмотр деталей</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="wrap-ques ps-2
                      ">
                                                                    ret ert ert ert ertert er</div>
                                                            </td>
                                                            <td>
                                                                Alexey
                                                                Bubnov
                                                            </td>
                                                            <td>24.10.2022</td>
                                                            <td>10:17 pm</td>
                                                            <td>video</td>
                                                            <td><span class="text-success fw-400">руб100</span></td>
                                                            <td><span class="text-primary me-2"><i class="fas fa-check"></i></span>
                                                                Оплачено
                                                            </td>
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <td>
                                                                Отмененный
                                                            </td>
                                                            <td class="w-275"><a href="https://timny.ru/mentor/appointment-log-detail/613" class="btn btn-primary mb-md-0 mb-2 btn-sm mt-1">Просмотр деталей</a></td>
                                                        </tr>
                                                        <!---->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="
              btn-load-more
              d-flex
              justify-content-center
              align-items-center
            ">
                                            <div class="v-pagination">
                                                <ul>
                                                    <li class="v-pagination__list"><a><span>На странице </span><select>
                                                                <option value="10">10</option>
                                                                <option value="20">20</option>
                                                                <option value="30">30</option>
                                                            </select></a></li>
                                                    <li class="v-pagination__info"><a>1 / 2 （всего 16）строк</a></li>
                                                    <li class="v-pagination__first disabled"><a href="javascript:void(0)">Первая</a></li>
                                                    <li class="v-pagination__previous disabled"><a href="javascript:void(0)">&lt;</a></li>
                                                    <li class="active"><a href="javascript:void(0)">1</a></li>
                                                    <li class=""><a href="javascript:void(0)">2</a></li>
                                                    <li class="v-pagination__next"><a href="javascript:void(0)">&gt;</a></li>
                                                    <li class="v-pagination__last"><a href="javascript:void(0)">Последняя</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="pills-compapp" role="tabpanel" aria-labelledby="pills-compapp-tab" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="bg-white px-2 py-lg-0 py-3">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="p-3 py-2 d-flex align-items-center h-100"></div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4">
                                                    <div class="p-3 py-2">
                                                        <div class="d-flex align-items-center h-100">
                                                            <div class="w-25"><label for="filter" class="pe-2 text-primary fw-bold">Найти:</label></div>
                                                            <div class="w-100">
                                                                <form action=""><input type="text" name="" id="" placeholder="Поиск" class="form-control border">
                                                                    <div class="search-icon position-relative"><i class="fa-solid fa-magnifying-glass text-primary"></i></div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="bg-white mt-4">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-borderless align-middle mb-0">
                                                    <thead class="align-middle">
                                                        <tr class="bg-primary text-white fw-bold">
                                                            <td class="p-3">
                                                                Вопрос
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Имя
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Дата
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Время
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Тип
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Цена
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Платеж
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Статус
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Дейсвтие
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="text-dark">
                                                        <tr>
                                                            <td>
                                                                <div class="wrap-ques ps-2
                      ">
                                                                    test2</div>
                                                            </td>
                                                            <td>
                                                                Пользователь
                                                                московский
                                                            </td>
                                                            <td>28.09.2022</td>
                                                            <td>10:20 am</td>
                                                            <td>video</td>
                                                            <td><span class="text-success fw-400">руб 100</span></td>
                                                            <td><span class="text-primary me-2"><i class="fas fa-check"></i></span>
                                                                Оплачено
                                                            </td>
                                                            <!---->
                                                            <!---->
                                                            <!---->
                                                            <td>
                                                                Завершенный
                                                            </td>
                                                            <!---->
                                                            <td class="w-275"><a class="btn btn-primary mb-md-0 mb-2 btn-sm mt-1">Архивировать</a> <a href="https://timny.ru/mentor/appointment-log-detail/584" class="btn btn-primary mb-md-0 mb-2 btn-sm mt-1">Просмотр деталей</a></td>
                                                        </tr>
                                                        <!---->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="
              btn-load-more
              d-flex
              justify-content-center
              align-items-center
            ">
                                            <div class="v-pagination">
                                                <ul>
                                                    <li class="v-pagination__list"><a><span>На странице </span><select>
                                                                <option value="10">10</option>
                                                                <option value="20">20</option>
                                                                <option value="30">30</option>
                                                            </select></a></li>
                                                    <li class="v-pagination__info"><a>1 / 1 （всего 1）строк</a></li>
                                                    <li class="v-pagination__first disabled"><a href="javascript:void(0)">Первая</a></li>
                                                    <li class="v-pagination__previous disabled"><a href="javascript:void(0)">&lt;</a></li>
                                                    <li class="active"><a href="javascript:void(0)">1</a></li>
                                                    <li class="v-pagination__next disabled"><a href="javascript:void(0)">&gt;</a></li>
                                                    <li class="v-pagination__last disabled"><a href="javascript:void(0)">Последняя</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="pills-archievedapp" role="tabpanel" aria-labelledby="pills-archievedapp-tab" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="bg-white px-2 py-lg-0 py-3">
                                            <div class="row"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="bg-white mt-4">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-borderless align-middle mb-0">
                                                    <thead class="align-middle">
                                                        <tr class="bg-primary text-white fw-bold">
                                                            <td class="p-3">
                                                                Вопрос
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Имя
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Дата
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Время
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Тип
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Цена
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Платеж
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Статус
                                                            </td>
                                                            <td class="px-2 py-3">
                                                                Дейсвтие
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="text-dark">
                                                        <tr>
                                                            <td colspan="9" class="text-center">
                                                                Записей не найдено
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="
              btn-load-more
              d-flex
              justify-content-center
              align-items-center
            ">
                                            <div class="v-pagination">
                                                <ul>
                                                    <li class="v-pagination__list"><a><span>На странице </span><select>
                                                                <option value="10">10</option>
                                                                <option value="20">20</option>
                                                                <option value="30">30</option>
                                                            </select></a></li>
                                                    <li class="v-pagination__info"><a>1 / 0 （всего 0）строк</a></li>
                                                    <li class="v-pagination__first disabled"><a href="javascript:void(0)">Первая</a></li>
                                                    <li class="v-pagination__previous disabled"><a href="javascript:void(0)">&lt;</a></li>
                                                    <li class="v-pagination__next"><a href="javascript:void(0)">&gt;</a></li>
                                                    <li class="v-pagination__last"><a href="javascript:void(0)">Последняя</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
            <div class="tab-pane fade" id="v-pills-vallet" role="tabpanel" aria-labelledby="v-pills-vallet-tab">
                Кошелек</div>

        </div>
    </div>
</div>
@endsection
