@extends('layouts.app')
@section('title')Главная
@endsection
@section('content')
<section class="search">
	<div class="container">
		<div class="row">
			<h1 class="main-title">
				 Ищешь ответ на вопрос? <br>Спроси Как?
			</h1>
           <form action="#!" class="search-form">
				<input type="search" name="s" class='search-input' placeholder="Услуга или специалист">
				<input type="submit" value="НАЙТИ" class='search-btn'>
			</form>
		</div>
	</div>
</section>
@endsection