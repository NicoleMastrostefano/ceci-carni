@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/b-1.7.0/cr-1.5.3/r-2.2.7/rr-1.2.7/sc-2.0.3/sb-1.0.1/sp-1.2.2/sl-1.3.3/datatables.min.css"/>
@endsection

@section('content')


<div class="container">
  <h1 class="text-center">Archivio ordini</h1>
  <table id="orders_table" class="table table-light table-striped table-bordered">
    <thead>
      <tr>
        <th>Nome cliente</th>
        <th>E-mail</th>
        <th>Telefono</th>
        <th>Stato</th>
        <th>Data di consegna</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($orders as $order)
      <tr>
        <td> {{ $order->nome }}</td>
        <td> {{ $order->email }}</td>
        <td> {{ $order->telefono  }}</td>
        <td> {{ $order->order_status->stato }}</td>
        <td> {{ $order->consegna->format('d/m/Y') }}</td>
        <td>
          <a href="{{ route('admin.orders.show',$order->id) }}" class="btn btn-info">Mostra</a>
          <a href="" class="btn btn-success">Stampa</a>
        </td>     
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection




@section('scripts')

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/b-1.7.0/cr-1.5.3/r-2.2.7/rg-1.1.2/rr-1.2.7/sc-2.0.3/sb-1.0.1/sp-1.2.2/sl-1.3.3/datatables.min.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>$(document).ready( function () {
      $('#orders_table').DataTable();
  } );
  </script>
@endsection