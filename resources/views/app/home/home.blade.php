@extends('layouts.default')
@section('title','Home')

@section('styles')

@endsection

@section('content')
	<div class="container">
		 <div class="row">
		 	<div class="col-md-6">
		 		<h1 class="judul mb-2 font1">Selamat datang di TIHope</h1>
		 		<p class="sub-judul mt-4 font2">TIHope adalah sebuah website kumpulan materi-materi Teknik Informatika Unpad yang telah diberikan oleh dosen maupun asisten praktikum</p>
		 		
		 	</div>
		 	<div class="col-md-6">
		 		<img class="img_home1" src="{{asset('img/Questions.gif')}}" alt="">
		 	</div>
		</div>
		<div class="row">
		 	<div class="col-md-4 col-sm-6 images">
		 		<img class="img_home2" src="{{asset('img/Notes.gif')}}" alt="">
		 	</div>
		 	<div class="col-md-8 col-sm-6">
		 		<h2 class="font2 d-flex justify-content-center sub_judul2">MASA PERKULIAHAN</h2>
		 	</div>
		</div>
		<div id="accordion" class="row">
		    <div class="col-md-6  mt-3 font2" align="center">
		      <div class="card">
		        <div class="card-header">
		          <a class="card-link" data-toggle="collapse" href="#collapseOne">
		            Semester 1
		          </a>
		        </div>
		        <div id="collapseOne" class="collapse show" data-parent="#accordion">
		          <div class="card-body">
		            <a href="{{url('/home/materi')}}">Logika informatika</a>
		          </div>
		          <div class="card-body">
		            <a href="#">Pengantar Teknologi Komputer dan Informatika</a>
		          </div>
		          <div class="card-body">
		            <a href="#">Algoritma dan Pemrograman</a>
		          </div>
		          <div class="card-body">
		            <a href="#">Kalkulus I</a>
		          </div>
		        </div>
		      </div>
		    </div>
		    <div class="col-md-6  mt-3 font2" align="center">
		      <div class="card">
		        <div class="card-header">
		          <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
		          Semester 2
		        </a>
		        </div>
		        <div id="collapseTwo" class="collapse" data-parent="#accordion">
		          <div class="card-body">
		            <a href="#">Bahasa Inggris I</a>
		          </div>
		          <div class="card-body">
		            <a href="#">Kewarganegaraan</a>
		          </div>
		          <div class="card-body">
		            <a href="#">Kalkulus II</a>
		          </div>
		          <div class="card-body">
		            <a href="#">Statistika</a>
		          </div>
		          <div class="card-body">
		            <a href="#">Struktur Data</a>
		          </div>
		          <div class="card-body">
		            <a href="#">Arsitektur dan Organisasi Komputer</a>
		          </div>
		          <div class="card-body">
		            <a href="#">Sistem Database</a>
		          </div>
		          <div class="card-body">
		            <a href="#">Fisika Informatika</a>
		          </div>
		        </div>
		      </div>
		    </div>
		    <div class="col-md-6 mt-3 font2" align="center">
		      <div class="card">
		        <div class="card-header">
		          <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
		            Semester 3
		          </a>
		        </div>
		        <div id="collapseThree" class="collapse" data-parent="#accordion">
		          <div class="card-body">
		            <a href="#">Entrepreneurship</a>
		          </div>
		          <div class="card-body">
		            <a href="#">Aljabar Linier</a>
		          </div>
		          <div class="card-body">
		            <a href="#">Metode Numerik</a>
		          </div>
		          <div class="card-body">
		            <a href="#">Matematika Diskrit</a>
		          </div>
		          <div class="card-body">
		            <a href="#">Sistem Operasi</a>
		          </div>
		          <div class="card-body">
		            <a href="#">Pemrograman Web</a>
		          </div>
		          <div class="card-body">
		            <a href="#">Pemrograman Beroriantasi Objek</a>
		          </div>
		          <div class="card-body">
		            <a href="#">Sistem Database II</a>
		          </div>
		        </div>
		      </div>
		    </div>
		    <div class="col-md-6 mt-3 font2" align="center">
		      <div class="card">
		        <div class="card-header">
		          <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
		            Semester 4
		          </a>
		        </div>
		        <div id="collapseFour" class="collapse" data-parent="#accordion">
		          <div class="card-body">
		            <a href="#">Etika Profesi</a>
		          </div>
		          <div class="card-body">
		            <a href="#">Artificial Intelligence</a>
		          </div>
		          <div class="card-body">
		            <a href="#">Jaringan Komputer</a>
		          </div>
		          <div class="card-body">
		            <a href="#">Sistem Informasi</a>
		          </div>
		          <div class="card-body">
		            <a href="#">Kecakapan Antar Personal</a>
		          </div>
		          <div class="card-body">
		            <a href="#">Analisis Algoritma</a>
		          </div>
		          <div class="card-body">
		            <a href="#">Operasional Riset</a>
		          </div>
		          <div class="card-body">
		            <a href="#">Teori Bahasa & Automata</a>
		          </div>
		          <div class="card-body">
		            <a href="#">Bahasa Inggris II</a>
		          </div>
		        </div>
		      </div>
		    </div>
		</div>

	</div>

@endsection


@section('scripts')

@endsection
