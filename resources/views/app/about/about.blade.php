@extends('layouts.default')
@section('title','About')

@section('styles')

@endsection

@section('content')
{{-- masukin html nya disini --}}
	<div class = "container">
		<div class="row mb-3">
			<div class="col-md-3">
				<h1 class="judul mb-2 font1">About Us</h1>
				<hr style="border: 1px solid #EECB2D">
			</div>
			<div class="col-md-9" align="right">
		 		<img src="{{asset('img/About us page-amico.png')}}" alt="Image" height="406" width="423">
		 	</div>
		</div>
		<div class="card">
			<div class="ml-4 mt-4">
			<div class="ContacInfo">
				<a class="nama">Junia Adhani Juzar </a>
		        <p class="npm">140810170015</p>
		        	<div class="row" style="margin-left: 8px" >
    						<img class="contact-icon" src="{{asset('img/whatsapp.png')}}" alt="wa" height="37" width="41" style ="margin-right: 10px"> 	
    						<p class="d-flex align-content-around flex-wrap">085668929509</p>
					</div>
		         	<div class="row"  style="margin-left: 10px; padding-right: 20px">
    						<img class="contact-icon" src="{{asset('img/line.png')}}" alt="line" height="37" width="41" style="margin-right: 10px"> 	
    						<p class="d-flex align-content-around flex-wrap">juniaadhani</p>
				    </div>
		         	<div class="row"  style="margin-left: 10px">
		        	
		        		<img src="{{asset('img/ig.png')}}" alt="ig" height="37" width="41" style ="margin-right: 10px"> 
		        	
  						<p class="d-flex align-content-around flex-wrap">juniaadhani</p>
		        	</div>

					
			</div>
			<br>
		    <div class="ContacInfo">
				<a class="nama">Rifaa' Zalfaa' Fakhriyyah </a>
		        <p class="npm">140810170031</p>
		        	<div class="row" style="margin-left: 8px" >
    						<img class="contact-icon" src="{{asset('img/whatsapp.png')}}" alt="wa" height="37" width="41" style ="margin-right: 10px"> 	
    						<p class="d-flex align-content-around flex-wrap">082121635387</p>
					</div>
		         	<div class="row"  style="margin-left: 10px; padding-right: 20px">
    						<img class="contact-icon" src="{{asset('img/line.png')}}" alt="line" height="37" width="41" style="margin-right: 10px"> 	
    						<p class="d-flex align-content-around flex-wrap">rifaazalfaa</p>
				    </div>
		         	<div class="row"  style="margin-left: 10px">
		        	
		        		<img src="{{asset('img/ig.png')}}" alt="ig" height="37" width="41" style ="margin-right: 10px"> 
		        	
  						<p class="d-flex align-content-around flex-wrap">rifaazalfaaf</p>
		        	</div>

					
			</div>
			<br>
			<div class="ContacInfo">
				<a class="nama">Muhammad Fadhiillah </a>
		        <p class="npm">140810170049</p>
		        	<div class="row" style="margin-left: 8px" >
    						<img class="contact-icon" src="{{asset('img/whatsapp.png')}}" alt="wa" height="37" width="41" style ="margin-right: 10px"> 	
    						<p class="d-flex align-content-around flex-wrap">081288822790</p>
					</div>
		         	<div class="row"  style="margin-left: 10px; padding-right: 20px">
    						<img class="contact-icon" src="{{asset('img/line.png')}}" alt="line" height="37" width="41" style="margin-right: 10px"> 	
    						<p class="d-flex align-content-around flex-wrap">mfadiilah</p>
				    </div>
		         	<div class="row"  style="margin-left: 10px">
		        	
		        		<img src="{{asset('img/ig.png')}}" alt="ig" height="37" width="41" style ="margin-right: 10px"> 
		        	
  						<p class="d-flex align-content-around flex-wrap">mfadiilah</p>
		        	</div>	
			</div>
		    </br>
			</div>
			</div>	
		</div>
		</div>


@endsection


@section('scripts')

@endsection
