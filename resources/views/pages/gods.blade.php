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
                @include('inc.cards',[
                    'title' => 'Ymir',
                    'bodySum' => 'Like with most mythologies, 
                                including Mesopotamian and Egyptian, 
                                the Norse pantheon had its primeval entity in the form of Ymir, 
                                the ancestor of all jötnar (mythic entities that ranged from giants 
                                to other fantastical creatures).',
                    'body' => 'Like with most mythologies, including Mesopotamian and Egyptian, 
                    the Norse pantheon had its primeval entity in the form of Ymir, the ancestor 
                    of all jötnar (mythic entities that ranged from giants to other fantastical creatures). 
                    Now as opposed to a strict categorization as one of the Norse gods, Ymir was perceived 
                    more as the ‘first being’ who was created by the ice of Niflheim combined with the heat 
                    of Muspelheim, long before the existence of the Earth. And after his own genesis, Ymir, 
                    with his hermaphroditic body, was responsible for birthing male, female, and other mythical 
                    beings, who in turn would go on to bear future generations. And mirroring other primeval deities 
                    of ancient mythologies, the narrative of Ymir took a turn, with the entity being given a tragic 
                    ending due to his apparent evil machinations. To that end, Buri (created after Ymir), often 
                    acknowledged as the first of the Norse gods, had a son named Bor, who finally married one of 
                    Ymir’s descendants Bestla, and their union produced three sons – Ve, Vili, and Odin. But the 
                    angry Ymir confronted these ascending young Norse gods, which eventually led to his own death 
                    at the hands of the three brothers. The three Norse gods, including Odin, then proceeded on to 
                    create the entire earth (much like the Mesopotamian Marduk) from Ymir’s fallen body, with his blood 
                    accounting for the seas and oceans, while his bones made up the rocks and mountains. Furthermore,
                    his hair was used for the trees, his skull was transformed into the sky and heavens, and his brains 
                    were made into clouds. And finally, his eyebrows were fashioned into the Midgard – the ‘middle realm’ 
                    of mankind.'
                 ])
            </div>
        </div>
    </div>
@endsection
