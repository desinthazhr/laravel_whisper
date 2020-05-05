@extends('layouts.master')

@section('title', 'Admin - Dashboard')

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
			<h4>Disclaimer</h4>
			<hr class="bg-warning mb-2 mt-3">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est necessitatibus iure perferendis eaque ex autem, aperiam maxime animi quasi error? Perferendis unde numquam ex animi, magnam modi pariatur suscipit sit.</p>
		</div>
		<div class="col-md">
			<h4>Privacy Policy</h4>
			<hr class="bg-warning mb-2 mt-3">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est necessitatibus iure perferendis eaque ex autem, aperiam maxime animi quasi error? Perferendis unde numquam ex animi, magnam modi pariatur suscipit sit.</p>
		</div>
		<div class="col-md">
			<h4>About Us</h4>
			<hr class="bg-warning mb-2 mt-3">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est necessitatibus iure perferendis eaque ex autem, aperiam maxime animi quasi error? Perferendis unde numquam ex animi, magnam modi pariatur suscipit sit.</p>
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
