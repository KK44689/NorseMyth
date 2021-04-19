@extends('Layouts.app')
@include('inc.navbarOthers')
@section('content')
    @if (count($others) > 0)
        @foreach ($others as $other)
            <br><br>
            <div class='row'>
                <a class="btn btn-outline-light" href="/NorseMyth/public/others" role="button">Back</a>
            </div>
            <br><br>
            <div class='row'>
                <h1 class='Titlefont'>{{ $other->title }}</h1>
            </div>
            <br>
            <div class='row'>
                <img class="pic" src={{ $other->pic }} alt={{ $other->title }}>
                <p class="ref">By {{ $other->picRef }}</p>
            </div>
            <br><br>
            <div class='row'>
                <p class='pararaphFont'>{{ $other->body }}</p>
                <p class='ref'>{{ $other->ref }}</p>
            </div>
        @endforeach
    @else
        <br><br>
        <div class='row'>
            <a class="btn btn-outline-light" href="/NorseMyth/public/others" role="button">Back</a>
        </div>
        <br><br>
        <div class='row' id="not_found">
            <h1 class='Titlefont'>Sorry We don't have that datas :(</h1>
        </div>
    @endif
@endsection
