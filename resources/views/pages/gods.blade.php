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
            <div class="col-5">
                <div class="card w-100" style="width: 18rem;">
                    <img class="card-img-top"
                        src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/11007c0e-23f5-4d77-b795-bceb4e19b4e2/d8iovyv-6f33b3d9-c1cc-4c42-a752-6f9605470364.png/v1/fill/w_1024,h_576,q_80,strp/ymir_smite_by_spiritaj_d8iovyv-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3siaGVpZ2h0IjoiPD01NzYiLCJwYXRoIjoiXC9mXC8xMTAwN2MwZS0yM2Y1LTRkNzctYjc5NS1iY2ViNGUxOWI0ZTJcL2Q4aW92eXYtNmYzM2IzZDktYzFjYy00YzQyLWE3NTItNmY5NjA1NDcwMzY0LnBuZyIsIndpZHRoIjoiPD0xMDI0In1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.wtcfS7wK7Ys_5JVsn8ztz5cnv00EFO_vEdBl3a1MyOk"
                        alt="Ymir – The Ancestor of Giants">
                    <div class="card-body">
                        <h5 id="cardTitle" class="card-title">Ymir</h5>
                        <p id="cardbody" class="card-text">Like with most mythologies, including Mesopotamian and Egyptian,
                            the Norse pantheon had its primeval entity in the form of Ymir, the ancestor of all jötnar
                            (mythic entities that ranged from giants to other fantastical creatures).
                        </p>

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
                                        Like with most mythologies, including Mesopotamian and Egyptian, the Norse pantheon had its primeval entity in the form of Ymir, the ancestor of all jötnar (mythic entities that ranged from giants to other fantastical creatures). Now as opposed to a strict categorization as one of the Norse gods, Ymir was perceived more as the ‘first being’ who was created by the ice of Niflheim combined with the heat of Muspelheim, long before the existence of the Earth. And after his own genesis, Ymir, with his hermaphroditic body, was responsible for birthing male, female, and other mythical beings, who in turn would go on to bear future generations.
                                        And mirroring other primeval deities of ancient mythologies, the narrative of Ymir took a turn, with the entity being given a tragic ending due to his apparent evil machinations. To that end, Buri (created after Ymir), often acknowledged as the first of the Norse gods, had a son named Bor, who finally married one of Ymir’s descendants Bestla, and their union produced three sons – Ve, Vili, and Odin. But the angry Ymir confronted these ascending young Norse gods, which eventually led to his own death at the hands of the three brothers.
                                        The three Norse gods, including Odin, then proceeded on to create the entire earth (much like the Mesopotamian Marduk) from Ymir’s fallen body, with his blood accounting for the seas and oceans, while his bones made up the rocks and mountains. Furthermore, his hair was used for the trees, his skull was transformed into the sky and heavens, and his brains were made into clouds. And finally, his eyebrows were fashioned into the Midgard – the ‘middle realm’ of mankind.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><br>
            </div>
        </div>
    </div>
@endsection
