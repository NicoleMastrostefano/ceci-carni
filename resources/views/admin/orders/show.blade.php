@extends('layouts.app')

@section('content')
<h1 class="mt-5 text-center">Dettaglio ordine</h1>
<table class="table table-light table-striped table-bordered">
    @foreach ($order->getAttributes() as $key => $value)
    <tr>
      <td> <strong>{{ $key }}</strong> </td>
      <td> {{ $value }}</td>
    </tr>
    @endforeach
</table> 

    
  <div class="text-right">
    <a href="{{ route('admin.orders.index') }}"class="btn btn-lg btn-dark">Torna all'elenco</a>
  </div>
    
@endsection