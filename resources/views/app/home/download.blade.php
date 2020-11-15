@extends('layouts.default')
@section('title','Download materi')

@section('styles')

@endsection

@section('content')
	<div class="container">
		<div class="jumbotron mt-4" align="center">
		  	<h1 class="font2 nama_materi">Materi 1</h1>
		  	<p class="font2 nama_matkul mb-5">Logika Informatka</p>
		 	<a href="#" class="download-button font2">
				Download
			</a>
		</div>	

		<div class="row">
		 	<div class="col-md-8">
		 		<h2 class="font2 d-flex justify-content-center sub_judul2">MATERI LAIN</h2>
		 	</div>
		 	<div class="col-md-4 images">
		 		<img src="{{asset('img/Notes-amico.png')}}" alt="">
		 	</div>
		</div>

		<div class="row mt-5">
			<div class="col-md-3 mb-5">
				<a href="#">
				    <div class="File py-4" align="center">
						<div class="circle col-md-4" >
			        		<h2 class="mt-4 font2">PDF</h2>
						</div>
						<h4 class="mt-5 font2 materi">Materi</h4>
				    </div>
				</a>
			</div>
			<div class="col-md-3 mb-5">
				<a href="#">
				    <div class="File py-4" align="center">
						<div class="circle col-md-4" >
			        		<h2 class="mt-4 font2">PDF</h2>
						</div>
						<h4 class="mt-5 font2 materi">Materi</h4>
				    </div>
				</a>
			</div>
			<div class="col-md-3 mb-5">
				<a href="#">
				    <div class="File py-4" align="center">
						<div class="circle col-md-4" >
			        		<h2 class="mt-4 font2">PDF</h2>
						</div>
						<h4 class="mt-5 font2 materi">Materi</h4>
				    </div>
				</a>
			</div>
			<div class="col-md-3 mb-5">
				<a href="#">
				    <div class="File py-4" align="center">
						<div class="circle col-md-4" >
			        		<h2 class="mt-4 font2">PDF</h2>
						</div>
						<h4 class="mt-5 font2 materi">Materi</h4>
				    </div>
				</a>
			</div>
		</div>

		
		
	</div>
	

@endsection


@section('scripts')

@endsection
