@extends('layouts.default')
@section('title','Tambah Materi')

@section('styles')

@endsection

@section('content')
	<div class="container">
		<div class="col-md-5 pl-0 mb-5">
			<h1 class="judul font1">Tambah Materi</h1>
			<hr style="border: 1px solid #EECB2D">	
		</div>
		<form method="POST" action="/result">
			<div class="form-group mt-5">
		  		<label class="labelForm	font1" for="matkul">Mata Kuliah:</label>
			  	<select class="form-control" id="matkul">
			    	<option>Logika Informatika</option>
			    	<option>Pengantar Teknologi Komputer Informatika</option>
			    	<option>Kalkulus I</option>
			    	<option>Aljabar Linier</option>
			  		</select>
			</div>
			<div class="form-group">
			  	<label class="font1 labelForm" for="materi">Judul Materi:</label>
			  	<input type="text" class="form-control" id="materi" placeholder="Masukkan Judul Materi" name="materi">
			</div>
			<div class="form-group">
			    <label class="font1 labelForm" for="link">Link Materi:</label>
			    <input type="email" class="form-control" id="link" placeholder="Masukkan Link Materi" name="link">
			</div>
	        <button type="submit" class="btn btn-primary btn-block btn-large border border-light mt-5" style="background-color: #EECB2D; color:#FFFFFF">Save</button>
        </form>
	</div>
@endsection


@section('scripts')

@endsection
