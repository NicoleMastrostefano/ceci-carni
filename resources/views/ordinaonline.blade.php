@extends('layouts.guest.main')


@section('content')


  {{-- Form Dati User --}}
  <div id="container_margin">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('message'))
<div class="alert alert-success">
  {{ session('message') }}
</div>
@endif
    <div id="form-bg">
      <form action="/ordinaonline" id="order-form" method="POST">
          @method('POST')
          @csrf
        <div class="container">
          <h2 style="text-align:center"class="mt-5">Inviaci un ordine</h2>
          <div class="form-group">
            <label class="label">Data di consegna</label>
            <input class="datepicker form-control" type="text" id="consegna" name="consegna" placeholder="inserisci una data di consegna">
          </div>
          <div class="form-group">
            <label class="label">Nome e Cognome</label>
            <input type="text" class="form-control" name="nome" placeholder="Inserisci nome e cognome" value="{{ old('nome') }}" required>
          </div>
          <div class="form-group">  
            <label class="label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Inserisci una e-mail" value="{{ old('email') }}" required>
          </div>
          <div class="form-group">
            <label class="label">Telefono</label>
            <input type="number" class="form-control" name="telefono" placeholder="Inserisci un n. di telefono" value="{{ old('telefono') }}" required>
          </div>
          <div class="form-group">
            <label class="label">Messaggio</label>
            <textarea name="messaggio" class="form-control" placeholder="Inserisci il tuo ordine" rows="6">{{ old('messaggio') }}</textarea>
          </div>
          <div class="text-right my-3">
            <input type="submit" value="Invia"class="btn btn-primary">
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
          