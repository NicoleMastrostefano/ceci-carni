@extends('layouts.guest.main')

@section('content')


<section id="success">
    <div id="container_margin">
        <div id="wrapper">
            <h1 class="text-center">ORDINE INVIATO CON SUCCESSO</h1>
            <a class="button" href="{{ route('welcome') }}">Torna alla home</a>
        </div>
    </div>
</section>
@endsection