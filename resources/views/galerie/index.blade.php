@extends('layouts.layouthf')

@section('content')
<head>
    <title>Galerie Photos</title>
</head>

@vite(['resources/css/galerie.css', 'resources/js/app.js', 'resources/js/caroussel.js'])

<div class="contenu_carou_auto">
  <div class="caroussel-image">
    <img src="img/1.webp" alt="">
    <img src="img/2.webp" alt="">
    <img src="img/3.webp" alt="">
    <img src="img/4.webp" alt="">
    <img src="img/5.webp" alt="">
    <img src="img/6.webp" alt="">
    <img src="img/7.webp" alt="">
    <img src="img/8.webp" alt="">
  </div>
</div>
<h1>Revivez tous nos événements</h1>
<div class="gallery">
  <img src="img/gallery/photo1.webp" alt="photo 1">
  <img src="img/gallery/photo2.webp" alt="photo 2">
  <img src="img/gallery/photo3.webp" alt="photo 3">
  <img src="img/gallery/photo4.webp" alt="photo 4">
  <img src="img/gallery/photo5.webp" alt="photo 5">
  <img src="img/gallery/photo6.webp" alt="photo 6">
  <img src="img/gallery/photo7.webp" alt="photo 7">
  <img src="img/gallery/photo8.webp" alt="photo 8">
  <img src="img/gallery/photo9.webp" alt="photo 9">
  <img src="img/gallery/photo10.webp" alt="photo 10">
  <img src="img/gallery/photo11.webp" alt="photo 11">
  <img src="img/gallery/photo12.webp" alt="photo 12">
</div>

@endsection


