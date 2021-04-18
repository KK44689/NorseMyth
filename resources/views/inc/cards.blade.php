<div class="card w-100" style="width: 18rem;">
    <img class="card-img-top"
        src={{$pic}}
        alt="Ymir – The Ancestor of Giants">
    <div class="card-body">
        <h5 id="cardTitle" class="card-title">{{$title}}</h5>
        <p id="cardbody" class="card-text">{{$bodySum}}</p>

        <!-- Button trigger modal -->
        <button id="godsButton" type="button" class="btn" data-toggle="modal" data-target="#cardModal">
            Continue Reading...
        </button>

        <!-- Modal -->
        <div class="modal fade" id="cardModal" tabindex="-1" role="dialog"
            aria-labelledby="cardModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="cardTitle">{{$title}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div id="cardbody" class="modal-body">
                        {{$body}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div><br>