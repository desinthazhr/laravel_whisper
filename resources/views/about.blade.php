@extends('layouts.master')

@section('title', 'Admin - About')

@section('style')
<style>

	h4, p{
		color: white;
	}
</style>
@endsection
<div class="container">
	<div class="row mt-5 justify-content-center">
		<div class="col mt-5  mb-5 text-white">
			<h1 style="font-size: 3rem" class="text-white text-center"><i class="fas fa-user"></i> TENTANG KAMI</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md">
		
			<hr class="bg-warning mb-2 mt-3">
			<div class="media d-block media-custom text-center">
				<a href="adoption-single.html"><img src="../../img/desintha1.jpg" alt="Whisper's Cofe" class="img-fluid"></a>
				<div class="media-body">
				  <h3 class="mt-0 text-White">Desintha Zahara Azmi</h3>
				  <p class="lead">Front-end<br> ADMIN</p>
				</div>
			  </div>
		</div>
		<div class="col-md">
		
			<hr class="bg-warning mb-2 mt-3">
			<div class="media d-block media-custom text-center">
				<a href="adoption-single.html"><img src="../../img/intan1.jpg" alt="Intan Wahyuni" class="img-fluid"></a>
				<div class="media-body">
				  <h3 class="mt-0 text-white">Intan Wahyuni</h3>
				  <p class="lead">Back-end <br> ADMIN</p>
				</div>
			  </div>
		</div>
		<div class="col-md">
		
			<hr class="bg-warning mb-2 mt-3">
			<div class="media d-block media-custom text-center">
				<a href="adoption-single.html"><img src="../../img/Risma1.jpg" alt="Ingrit Tamara" class="img-fluid"></a>
				<div class="media-body">
				  <h3 class="mt-0 text-white">Risma Kurniawaty</h3>
				  <p class="lead">Front-end PENGUNJUNG</p>
				</div>
			  </div>
		</div>
		<div class="col-md">
			
			<hr class="bg-warning mb-2 mt-3">
			<div class="media d-block media-custom text-center">
				<a href="adoption-single.html"><img src="../../img/inggrit.jpg" alt="Ingrit Tamara" class="img-fluid"></a>
				<div class="media-body">
				  <h3 class="mt-0 text-white">Inggrit Tamara</h3>
				  <p class="lead">Back-end PENGUNJUNG</p>
				</div>
			  </div>
		</div>
	</div>
	<div class="row justify-content-center mt-5">
		<div class="col-md">
			<hr class="bg-warning mb-2 mt-3">
			<p class="text-center">&copy; Copyright Whisper's Cafe 2020 - All right reserved</p>
		</div>
	</div>
</div>

@section('content')

@endsection
