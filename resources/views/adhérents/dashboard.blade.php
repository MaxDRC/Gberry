@extends('layouts.layoutdash')

@section('content')
@vite(['resources/css/dashboard.css' , 'resources/js/app.js'])

<div class="main">
    <div class="infoperso">
        <h3>{{ __('Votre profil') }}</h3>
        <p>{{ __('Nom ') }} </p>
        <p>{{ __('Prénom : ') }} </p>
        <p>{{ __('Email : ') }} </p>
    </div>
    <div class="cotisation">
        <h3>{{ __('Votre cotisation adhérents') }}</h3>
        <p>{{ __('Statut cotisation : ') }} </p>
        <p>{{ __('Date de fin de cotisation : ') }}</p>
    </div>
</div>
@endsection