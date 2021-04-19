@extends('Layouts.app')
@include('inc.navbarGods')
@section('content')
    <div id="gods">
        <div class="jumbotron p-3 p-md-5 text-white rounded">
            <div class="col px-0">
                <h1 class="text-center Titlefont text-dark">Norse Mythology : <br>Gods & Goddesses</h1>
            </div>
        </div>
    </div>
    <div>
        <h1 class='Titlefont'>Choose What You Want To Learn.</h1><br><br>
        <div class="row">
            @foreach($posts as $post)
                <div class="col-12">
                    <div class="card w-100" style="width: 18rem;">
                        <img class="card-img-top"
                            src={{$post->pic}}
                            alt={{$post->title}}>
                        <div class="card-body">
                            <h5 id="cardTitle" class="card-title">{{$post->title}}</h5>
                            <p id="cardbody" class="card-text">{{$post->bodySum}}</p>
                    
                            <a id='godsButton' class="btn" href="posts/{{$post->id}}" role="button">Continue Reading...</a>
                    
                        </div>
                    </div><br>
                </div>
            @endforeach
        </div>
    </div>
@endsection
