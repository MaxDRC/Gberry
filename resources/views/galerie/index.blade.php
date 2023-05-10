@extends('layouts.layouthf')

@section('content')
<head>
     
    <title>Galerie Photos</title>
</head>
     
@vite(['resources/css/galerie.css', 'resources/js/app.js', 'resources/js/caroussel.js'])

<div id="new-carousel">
  <img src="img/GBC.jpg">
  <img src="img/GB3.jpg">
  <img src="img/GB4.jpg">
  <img src="img/photo2.jpg">
  <img src="img/photo3.jpg">
  <div id="new-carousel__ctrl">
    <div id="new-carousel__ctrl__gch">
      <span class="material-symbols-outlined">keyboard_double_arrow_left</span>
    </div>
    <h1>Revivez tout nos événements</h1>
    <div id="new-carousel__ctrl__drt">
      <span class="material-symbols-outlined">keyboard_double_arrow_right</span>
    </div>
  </div>
</div>
<div class="gallery">
    <img src="img/gallery/photo1.jpg" alt="photo 1">
    <img src="img/gallery/photo2.jpg" alt="photo 2">
    <img src="img/gallery/photo3.jpg" alt="photo 3">
    <img src="img/gallery/photo4.jpg" alt="photo 4">
    <img src="img/gallery/photo5.jpg" alt="photo 5">
    <img src="img/gallery/photo6.jpg" alt="photo 6">
    <img src="img/gallery/photo7.jpg" alt="photo 7">
    <img src="img/gallery/photo8.jpg" alt="photo 8">
    <img src="img/gallery/photo9.jpg" alt="photo 9">
    <img src="img/gallery/photo10.jpg" alt="photo 10">
    <img src="img/gallery/photo11.jpg" alt="photo 11">
    <img src="img/gallery/photo12.jpg" alt="photo 12">
</div> 
@endsection


