@extends('layouts.default')
@section('title','Contact')

@section('styles')

@endsection

@section('content')
{{-- masukin html nya disini --}}
	<div class = "container">
		<div class="row">
			<div class="col-md-6">
				<h1 class="judul mb-2 font1">Contact Us</h1>
				<div class="col-md-7 p-0" >
					<hr style="border: 1px solid #EECB2D">
				</div>
				<p class="sub-judul">apabila teman-teman memiliki materi terbaru silahkan hubungi kontak dibawah ini sesuai dengan angkatan masing-masing.</p>
			</div>
			<div class="col-md-6">
		 		<img src="{{asset('img/Conversation-rafiki.png')}}" alt="Image" height="406" width="423" align="right">
		 	</div>
		</div>
		<div class="card">
			<div class="ml-4 mt-4">
			<div class="ContacInfo">
				<a class="nama">Koordinator Angkatan 2017 </a>
		        <p class="npm">Muhammad Fakhri Rahman</p>
		        	<div class="row" style="margin-left: 8px" >
    						<img class="contact-icon" src="{{asset('img/whatsapp.png')}}" alt="wa" height="37" width="41" style ="margin-right: 10px"> 	
    						<p class="d-flex align-content-around flex-wrap">085668929509</p>
					</div>
		         	<div class="row"  style="margin-left: 10px; padding-right: 20px">
    						<img class="contact-icon" src="{{asset('img/line.png')}}" alt="line" height="37" width="41" style="margin-right: 10px"> 	
    						<p class="d-flex align-content-around flex-wrap">fakhrixx</p>
				    </div>
		         	<div class="row"  style="margin-left: 10px">
		        	
		        		<img src="{{asset('img/ig.png')}}" alt="ig" height="37" width="41" style ="margin-right: 10px"> 
		        	
  						<p class="d-flex align-content-around flex-wrap">fakhrixx</p>
		        	</div>

					
			</div>
			<br>
		    <div class="ContacInfo">
				<a class="nama">Koordinator Angkatan 2018 </a>
		        <p class="npm">Muhammad Fakhri Rahman</p>
		        	<div class="row" style="margin-left: 8px" >
    						<img class="contact-icon" src="{{asset('img/whatsapp.png')}}" alt="wa" height="37" width="41" style ="margin-right: 10px"> 	
    						<p class="d-flex align-content-around flex-wrap">082121635387</p>
					</div>
		         	<div class="row"  style="margin-left: 10px; padding-right: 20px">
    						<img class="contact-icon" src="{{asset('img/line.png')}}" alt="line" height="37" width="41" style="margin-right: 10px"> 	
    						<p class="d-flex align-content-around flex-wrap">fakhrixx</p>
				    </div>
		         	<div class="row"  style="margin-left: 10px">
		        	
		        		<img src="{{asset('img/ig.png')}}" alt="ig" height="37" width="41" style ="margin-right: 10px"> 
		        	
  						<p class="d-flex align-content-around flex-wrap">fakhrixx</p>
		        	</div>

					
			</div>
			<br>
			
		    </br>
			</div>
			</div>	
		</div>
		</div>


@endsection


@section('scripts')

@endsection
