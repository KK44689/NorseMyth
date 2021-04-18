@extends('Layouts.app')
@include('inc.navbarGods')
@section('content')
    <div id="godShow">
        <div class='row'>
            <h1>{{$post->title}}</h1>
        </div>
        <div class='row'>
            <img src={{$post->pic}} alt={{$post->title}}>
        </div>
        <div class='row'>
            <p class='pararaphFont'>{{$post->body}}</p>
        </div>

    </div>
@endsection
