@extends('layouts.layouthf')

@section('content')
<head>
     
    <title>Galerie Photos</title>
</head>
     
@vite(['resources/css/galerie.css', 'resources/js/app.js'])

 <h1>Galerie Photos</h1>
     
     <div class="gallery">
         <img id="grandeimg" src="img/gallery/photo1.jpg" alt="photo 1">
         <img src="img/gallery/photo2.jpg" alt="photo 2">
         <img src="img/gallery/photo3.jpg" alt="photo 3">
     </div>
     <!-- <div class="gallery2">
        <img src="img/gallery/photo4.jpg" alt="photo 4">
         <img src="img/gallery/photo5.jpg" alt="photo 5">
         <img src="img/gallery/photo6.jpg" alt="photo 6">
         <img src="img/gallery/photo7.jpg" alt="photo 7">
     </div> -->
@endsection


