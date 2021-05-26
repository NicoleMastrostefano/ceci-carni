@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="mt-5 text-center">Dettaglio ordine</h1>
<div class="text-right">
  <button class="btnprn btn btn-success" id="btnstampa">STAMPA</button>
</div>
    <table id="orders_table" class=" table table-light table-striped table-bordered">
      <thead>
        <tr>
          <th>Nome cliente</th>
          <th>Telefono</th>
          <th>Messaggio</th>
          <th>Data di consegna</th>
        </tr>
      </thead>
      <tbody>   
        <tr>
          <td> {{ $order->nome }}</td>
          <td> {{ $order->telefono }}</td>
          <td> {{ $order->messaggio }}</td>
          <td> {{ $order->consegna->format('d/m/Y') }}</td>
        </tr>
      </tbody>
    </table>
  
    
    <div class="text-right">
      <a href="{{ route('admin.orders.index') }}"class="btn btn-lg btn-dark">Torna all'elenco</a>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
  $('#btnstampa').on('click',()=>{
    window.print();
  })
});
</script>
@endsection