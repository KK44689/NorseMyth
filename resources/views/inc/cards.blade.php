<div class="card w-100" style="width: 18rem;">
    <img class="card-img-top"
        src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/11007c0e-23f5-4d77-b795-bceb4e19b4e2/d8iovyv-6f33b3d9-c1cc-4c42-a752-6f9605470364.png/v1/fill/w_1024,h_576,q_80,strp/ymir_smite_by_spiritaj_d8iovyv-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD01NzYiLCJwYXRoIjoiXC9mXC8xMTAwN2MwZS0yM2Y1LTRkNzctYjc5NS1iY2ViNGUxOWI0ZTJcL2Q4aW92eXYtNmYzM2IzZDktYzFjYy00YzQyLWE3NTItNmY5NjA1NDcwMzY0LnBuZyIsIndpZHRoIjoiPD0xMDI0In1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.wtcfS7wK7Ys_5JVsn8ztz5cnv00EFO_vEdBl3a1MyOk"
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
                        <h5 class="modal-title" id="cardTitle">Ymir</h5>
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