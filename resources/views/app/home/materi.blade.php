@extends('layouts.default')
@section('title','Materi')

@section('styles')

@endsection

@section('content')
	<div class="container">
		<div class="col-md-6 pl-0">
			<h1 class="judul font1">Logika Informatika</h1>
			<hr style="border: 1px solid #EECB2D">	
			<h4 class="font2 mb-5">Dosen : Ino Suryana</h4>
		</div>

		<div class="row mb-5">
			<div class="col-md-4" id="tabel">
		        <a href="{{url('/home/materi/download')}}">
		          <div class="type-containter type-ppt"><h5 class="mt-1">ppt</h5></div>
		          <div style="margin-top: 5px; text-indent: 20px;">
		              Materi 1
		          </div>
		        </a>
			</div>
			<div class="col-md-4" id="tabel">
		        <a href="#">
		          <div class="type-containter type-pdf"><h5 class="mt-1">pdf</h5></div>
		          <div style="margin-top: 5px; text-indent: 20px;">
		              Materi 2
		          </div>
		        </a>
			</div>	
			<div class="col-md-4" id="tabel">
		        <a href="#">
		          <div class="type-containter type-ppt"><h5 class="mt-1">ppt</h5></div>
		          <div style="margin-top: 5px; text-indent: 20px;">
		              Materi 3
		          </div>
		        </a>
			</div>
			<div class="col-md-4" id="tabel">
		        <a href="#">
		          <div class="type-containter type-pdf"><h5 class="mt-1">pdf</h5></div>
		          <div style="margin-top: 5px; text-indent: 20px;">
		              Materi 4
		          </div>
		        </a>
			</div>	
			<div class="col-md-4" id="tabel">
		        <a href="#">
		          <div class="type-containter type-ppt"><h5 class="mt-1">ppt</h5></div>
		          <div style="margin-top: 5px; text-indent: 20px;">
		              Materi 5
		          </div>
		        </a>
			</div>
			<div class="col-md-4" id="tabel">
		        <a href="#">
		          <div class="type-containter type-pdf"><h5 class="mt-1">pdf</h5></div>
		          <div style="margin-top: 5px; text-indent: 20px;">
		              Materi 6
		          </div>
		        </a>
			</div>	
			<div class="col-md-4" id="tabel">
		        <a href="#">
		          <div class="type-containter type-ppt"><h5 class="mt-1">ppt</h5></div>
		          <div style="margin-top: 5px; text-indent: 20px;">
		              Materi 7
		          </div>
		        </a>
			</div>
			<div class="col-md-4" id="tabel">
		        <a href="#">
		          <div class="type-containter type-pdf"><h5 class="mt-1">pdf</h5></div>
		          <div style="margin-top: 5px; text-indent: 20px;">
		              Materi 8
		          </div>
		        </a>
			</div>	
			<div class="col-md-4" id="tabel">
		        <a href="#">
		          <div class="type-containter type-ppt"><h5 class="mt-1">ppt</h5></div>
		          <div style="margin-top: 5px; text-indent: 20px;">
		              Materi 9
		          </div>
		        </a>
			</div>
		</div>
		

		
	</div>

@endsection


@section('scripts')

@endsection
