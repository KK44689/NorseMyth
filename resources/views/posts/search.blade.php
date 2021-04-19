@extends('Layouts.app')
@include('inc.navbarGods')
@section('content')
    @if(count($posts) > 0)
        @foreach ($posts as $post)
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
                <p class="ref">By {{$post->picRef}}</p>
            </div>
            <br><br>
            <div class='row'>
                <p class='pararaphFont'>{{ $post->body }}</p>
                <p class='ref'>{{ $post->ref }}</p>
            </div>
        @endforeach
    @else
        <br><br>
        <div class='row'>
            <a class="btn btn-outline-light" href="/NorseMyth/public/posts" role="button">Back</a>
        </div>
        <br><br>
        <div class='row' id="not_found">
            <h1 class='Titlefont'>Sorry We don't have that datas :(</h1>
        </div>
    @endif 
@endsection
