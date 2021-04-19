@extends('Layouts.app')
@include('inc.navbarOthers')
@section('content')
    <br><br><br><br><br><br>
    <div class='row'>
        <a class="btn btn-outline-light" href="/NorseMyth/public/others" role="button">Back</a>
    </div>
    <br><br>
    <div class='row'>
        <h1 class='Titlefont'>{{ $other->title }}</h1>
    </div>
    <br>
    <div class='row'>
        <img src={{ $other->pic }} alt={{ $other->title }}>
    </div>
    <br><br>
    <div class='row'>
        <p class='pararaphFont'>{{ $other->body }}</p>
    </div>
    
@endsection
