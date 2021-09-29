

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
<div id="ordini_flex">
  <div class="fb-page ml-20px" >
    <h2 class="text-center">Le nostre specialità</h2>
  {{-- data-href="https://www.facebook.com/Ceci-carni-1462900410684286" 
  data-tabs="timeline" data-width="500px" data-height="790px" 
  data-small-header="false" data-adapt-container-width="true" 
  data-hide-cover="false" data-show-facepile="true">
  <blockquote cite="https://www.facebook.com/Ceci-carni-1462900410684286" 
  class="fb-xfbml-parse-ignore">
  <a href="https://www.facebook.com/Ceci-carni-1462900410684286">Ceci carni</a></blockquote> --}}
  <ul class="img-list">
    <li>fagottini di pollo<img src=img/IMG_5586.webp alt=""></li>
    <li>granata di pollo<img src=img/IMG_5585.webp alt=""></li>
    <li>tagliata al pepe<img src=img/IMG_5602.webp alt=""></li>
    <li>polpette allo speck<img src=img/IMG_5605.webp alt=""></li>
    <li>polpette al limone<img src=img/IMG_5606def.webp alt=""></li>
    <li>polpette di pollo<img src=img/IMG_5601.webp alt=""></li>
    <li>polpette di vitella<img src=img/IMG_5603.webp alt=""></li>
    <li>svizzera di scottona<img src=img/IMG_5610.webp alt=""></li>
    <li>hamburgher (rossi, vitella, pollo, speck e provola)<img src=img/IMG_5611.webp alt=""></li>
    <li>pollo alla zingara<img src=img/IMG_5634.webp alt=""></li>
    <li>polpettone classico<img src=img/IMG_5613.webp alt=""></li>
    <li>tagliate di pollo (rapa rossa/pepe 4 stagioni)<img src=img/IMG_5629.webp alt=""></li>
    <li>rustichelle<img src=img/IMG_5620.webp alt=""></li>
    <li>pollo zucchine e pomodorini<img src="img/IMG_5655.jpg" alt=""></li>
    <li>tagliata di pollo con panatura croccante<img src=img/IMG_5622.webp alt=""></li>
    <li>fettina panata bovino adulto<img src=img/IMG_5625.webp alt=""></li>
    <li>bistecca di pollo<img src=img/IMG_5631.webp alt=""></li>
    <li>pollo ai carciofi<img src=img/IMG_5633.webp alt=""></li>
    <li>cotoletta di pollo<img src=img/IMG_5626.webp alt=""></li>
    <li>polpette rosse<img src=img/IMG_5652.webp alt=""></li>
    <li>straccetti bovino adulto con carciofi<img src=img/IMG_5643.webp alt=""></li>
    <li>straccetti di pollo bella napoli<img src=img/IMG_5635.webp alt=""></li>
    <li>straccetti bovino adulto gratinati<img src=img/IMG_5646.webp alt=""></li>
    <li>straccetti di vitella funghi porcini<img src=img/IMG_5648.webp alt=""></li>
    <li>spiedini misti di carne bianca<img src=img/IMG_5654.webp alt=""></li>
    <li>arrosto di tacchino cotto a bassa temperatura<img src=img/IMG_5658.webp alt=""></li>
    <li>coniglio olive e pomodoro<img src=img/IMG_5640.webp alt=""></li>
    <li>salsicce di pollo e tacchino<img src="img/IMG_5656.jpg" alt=""></li>
    {{-- <li><img src=img/IMG_5661.webp alt=""></li>
    <li><img src=img/IMG_5666.webp alt=""></li> --}}


  




</div>
    <div id="form-bg">
      <p class="text-center mt-5">N.B. Gli ordini effettuati entro le 13:30 saranno evasi nel pomeriggio,<br>
      gli ordini effettuati nel pomeriggio saranno evasi la mattina seguente. </p>
     
      <form action="/ordinaonline" id="order-form" method="POST">
          @method('POST')
          @csrf
        <div class="container">
          <h2 style="text-align:center">Inviaci un ordine</h2>
          <div class="form-group">
            <label class="label">Data di consegna</label>
            <input class="datepicker form-control" type="text" id="consegna" name="consegna" placeholder="inserisci una data di consegna">
          </div>
          <div class="form-group">
            <label class="label">Nome e Cognome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Inserisci nome e cognome" value="{{ old('nome') }}" required>
          </div>
          <div class="form-group">  
            <label class="label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Inserisci una e-mail" value="{{ old('email') }}" required>
          </div>
          <div class="form-group">
            <label class="label">Telefono</label>
            <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Inserisci un n. di telefono" value="{{ old('telefono') }}" required>
          </div>
          <div class="form-group">
            <label class="label">Messaggio</label>
            <textarea name="messaggio" class="form-control" id="messaggio" placeholder="Inserisci il tuo ordine" rows="6">{{ old('messaggio') }}</textarea>
          </div>  
          <div id="checkbox"><input name="ctrlDatiPersonali" id="ctrlDatiPersonali" type="checkbox">
            Dichiaro di aver letto l'<a target="_blank" href="{{ route('informativa') }}">informativa sulla privacy</a> ai sensi del GDPR n. 679/2016 e do il consenso al trattamento dei dati personali.</div>
          <div class="text-right my-3">
            <input type="submit" value="Invia"name="privacy" class="btn btn-primary">
          </div>
          <input type="hidden" name="recaptcha_response" id="recaptchaResponse">  
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('script')


<script src="https://www.google.com/recaptcha/api.js?render=6LdO5T8bAAAAAFkoNLu10T4Q7Uty-23kUVLvvrG0"> </script>      

<script>grecaptcha.ready(function () {              
grecaptcha.execute('6LdO5T8bAAAAAFkoNLu10T4Q7Uty-23kUVLvvrG0', 
{ action: 'contact' }).then(function (token) {                  
var recaptchaResponse = document.getElementById('recaptchaResponse');                  
recaptchaResponse.value = token;  
          
  });          
});      
</script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
  $(function() {
      $("input[name='privacy']").click(
        function(){
          if ($("#ctrlDatiPersonali").is(":not(:checked)")){
              alert("Attenzione! Non hai dato il tuo assenso per il trattamento dei dati personali.");
              return;
            } else {  
              document.forms['order-form'].submit();  
              }
        });
  });
</script>
@endsection 
<?php 
// Controlla se il form è stato inviato:  
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {        
      
// Costruire il POST request:      
       
       $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';      
       $recaptcha_secret = '6LdO5T8bAAAAAOyzerryqTDZBhfC5myKtqlyvsJo';      
       $recaptcha_response = $_POST['recaptcha_response'];        
       
// Istanziare e decidoficare la richiesta POST:      
        
       $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);      
       $recaptcha = json_decode($recaptcha);        
      
// Azioni da compiere basate sul punteggio ottenuto:      
       
       if ($recaptcha->score >= 0.5) {  
        
     
   
       } else {  
        
       // Non verificato - mostra errore   
   
       }    
} 
?>


	

