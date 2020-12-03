@extends('layouts.default')
@section('title','Login')

@section('styles')
<style>
.container .col-md-6 .h1
{
color: #eecb2d;
    font-size: 47px;
}
</style>
@endsection

@section('content')
	<div class="container">
		<div class="row my-5">
		 	<div class="col-md-7">
		 		<img class="img_login" src="{{asset('img/Programming.png')}}" alt=""  style ="width :584px; height:400px; left:22px; top:110px">
		 	</div>
		 	<div class="col-md-5">
		 		<h1 class="d-flex justify-content-center font2 mt-5" style="color : #eecb2d;text-align: center; font-size: 47px;border-radius: 10px; text-align: ">Login</h1>
		 		<form method="POST" action="/result">
					<div class="form-group mt-5">
			  			<label class="font1 labelForm" for="user"></label>
			  			<input type="text" class="form-control" id="user" placeholder="Masukkan Username" name="username">
					</div>
					<div class="form-group">
			  			<label class="font1 labelForm" for="npm"></label>
			  			<input type="text" class="form-control" id="npm" placeholder="Masukkan Kata Sandi" name="sandi">
					</div>
					<button type="submit" class="btn btn-primary btn-block btn-large border border-light mt-5 mb-4" style="background-color: #EECB2D; color:#FFFFFF">Masuk</button>
					<div class="mb-4" align="center"><a  href="#" style="color: #EECB2D;" align="center">Forgot Password?</a></div>
				</form>
		 	</div>
		</div>
	</div>

@endsection


@section('scripts')

@endsection
