@extends('Layouts.app')
@include('inc.navbarGods')
@section('content')
    <br><br>
    <div class='row'>
        <a class="btn btn-outline-light" href="/NorseMyth/public/posts" role="button">Back</a>
    </div>
    <br><br>
    <div class='row'>
        <h1 class='Titlefont'>{{ $post->title }}</h1>
    </div>
    <br>
    <div class='row'>
        <img class="pic" src={{ $post->pic }} alt={{ $post->title }}>
    </div>
    <br><br>
    <div class='row'>
        <p class='pararaphFont'>{{ $post->body }}</p>
    </div>
    
@endsection
