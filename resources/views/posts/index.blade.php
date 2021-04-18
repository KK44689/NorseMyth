@extends('Layouts.app')
@include('inc.navbarGods')
@section('content')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <div id="gods">
        <div class="jumbotron p-3 p-md-5 text-white rounded">
            <div class="col px-0">
                <h1 class="text-center Titlefont text-dark">Norse Mythology Gods & Goddesses</h1>
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
