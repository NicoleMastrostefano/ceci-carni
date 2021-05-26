@extends('layouts.guest.main')

@section('content')
<div id="container_margin">
    <div id="cover">
        <img src="img/coverNoBorders.png" alt=""></div>
    <div id="wrapper-white">
        <p>Era l'anno 1960 quando Amedeo Ceci, 
            da un paesino dell'Abruzzo di nome Nerito,
            si trasferiva a Roma per aprire un negozio 
            di macelleria in via Norcia 11, 
            presto trasferito in Piazza 
            San Domenico Savio 5. 
        </p>    
    </div>
    <div class="section_square">
        <div class="square_text">
            <h4>non solo carne</h4>
            <p>Grazie alla qualità delle carni 
            abruzzesi e alla sua tenacia, 
            Amedeo, è riuscito a farsi 
            conoscere e conquistare il 
            quartiere. Oggi non è solo 
            una macelleria rinomata ma , 
            anche un negozio di generi 
            alimentari.
            </p>
        </div>
        <div class="square_image first"></div>
    </div>
    <div class="section_square reverse">
        <div class="square_image second"></div>
        <div class="square_text">
            <h4>al passo coi tempi</h4>
            <p>Nel 1987 si dedica al commercio 
            all'ingrosso e lascia la gestione al 
            nipote Ercole, il quale affianca alla 
            macelleria tradizionale i 
            "pronti a cuocere" e mette a disposizione 
            la consegna a domicilio.
            </p>
        </div>
    </div>
    {{-- <div class="section_square">
        <div class="square_text">
            <h4>lorem ipsum</h4>
            <p>Lorem ipsum dolor sit amet, 
            consectetur adipisicing elit.
            Pariatur, minus. Illo eos repellat 
            facere quis? Earum ipsum, iusto accusantium 
            iste rem reiciendis eligendi? Ea ut atque, 
            recusandae vero earum temporibus!
            </p>
        </div>
        <div class="square_image"></div>
    </div> --}}
</div>

@endsection


