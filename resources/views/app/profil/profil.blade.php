@extends('layouts.default')
@section('title','Profil')

@section('styles')

@endsection

@section('content')
	<div class="container">
		<div class="col-md-2 pl-0 mb-5">
			<h1 class="judul font1">Profil</h1>
			<hr style="border: 1px solid #EECB2D">	
		</div>
		<form method="POST" action="/result">
			<div class="form-group mt-5">
			  	<label class="font1 labelForm" for="user">Nama:</label>
			  	<input type="text" class="form-control" id="user" placeholder="Masukkan Nama" name="user">
			</div>
			<div class="form-group">
			  	<label class="font1 labelForm" for="npm">NPM:</label>
			  	<input type="text" class="form-control" id="npm" placeholder="Masukkan NPM" name="npm">
			</div>
			<div class="form-group">
			    <label class="font1 labelForm" for="email">Email:</label>
			    <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email">
			</div>
			<div class="form-group">
			  	<label class="font1 labelForm" for="no_hp">No Hp:</label>
			  	<input type="text" class="form-control" id="no_hp" placeholder="Masukkan No Hp" name="no_hp">
			</div>
			<div class="form-group">
			    <label class="font1 labelForm" for="pwd">Password:</label>
			    <input type="password" class="form-control" id="pwd" placeholder="Masukkan Password" name="pswd">
			</div>
	        <button type="submit" class="btn btn-primary btn-block btn-large border border-light mt-5" style="background-color: #EECB2D; color:#FFFFFF">Save</button>
        </form>
	</div>
@endsection


@section('scripts')

@endsection
