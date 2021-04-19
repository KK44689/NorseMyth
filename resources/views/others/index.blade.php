@extends('Layouts.app')
@include('inc.navbarOthers')
@section('content')
    <div id="other">
        <div class="jumbotron p-3 p-md-5 text-white rounded">
            <div class="col px-0">
                <h1 class="text-center Titlefont text-dark">Norse Mythology : <br>Other Creatures</h1>
            </div>
        </div>
    </div>
    <div>
        <h1 class='Titlefont'>Choose What You Want To Learn.</h1><br><br>
        <div class="row">
            @foreach($others as $other)
                <div class="col-12">
                    <div class="card w-100" style="width: 18rem;">
                        <img class="card-img-top"
                            src={{$other->pic}}
                            alt={{$other->title}}>
                        <div class="card-body">
                            <h5 id="cardTitle" class="card-title">{{$other->title}}</h5>
                            <p id="cardbody" class="card-text">{{$other->bodySum}}</p>
                    
                            <a id='othersButton' class="btn" href="others/{{$other->id}}" role="button">Continue Reading...</a>
                    
                        </div>
                    </div><br>
                </div>
            @endforeach
        </div>
    </div>
@endsection
