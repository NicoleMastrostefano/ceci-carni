
@extends('layouts.guest.main')


@section('content')
    
<div id="app">
	<div id="container_margin">
                <div class="slide">  
                        <img v-bind:src="images[imageIndex]" alt="">
                        <div id="text-image">
                                <h1>dal 1960</h1>
                                <h3>Da più di 60 anni selezioniamo e 
                                lavoriamo
                                solo le migliori carni 
                                del territorio scegliendo 
                                materie prime sane, fresche, 
                                di qualità.</h3>
                        </div>
                        <div id="overlay"></div>               
                </div>
        </div>
        <div class="container">
                <div id="about">
                        <h2>macelleria ceci</h2>
                        <p> La carne è un alimento prezioso, <br>
                        offrire alta qualità è la nostra passione.
                        </p>
                        <a class="button" href="{{ route('chisiamo') }}">CHI SIAMO</a>             
                </div>
        </div>
        <div id="booking">
                <div id="left-text">
                        <h2>esperienza <br>
                        professionalità <br>
                        passione
                        </h2>
                        <p>Qualità, tradizione, fiducia e autenticità
                        ogni giorno.</p>
                        <a class="button" href="{{ route('ordinaonline') }}">ORDINA ONLINE</a>
                </div>
                <div id="image-right"></div>
         </div>
</div>


@endsection

@section('script')
	<script src="{{ asset('js/app.js') }}"></script>
       
@endsection