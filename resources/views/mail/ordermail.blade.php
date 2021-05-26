<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        .mail-container {
            max-width: 1140px;
            padding: 0 30px;
            margin: auto;
        }

        .wrapper {
            width: 100%;
            padding: 50px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }

        .title-container {
            display: flex;
            justify-content: center;
            padding-bottom: 30px;
            border-bottom: 1px solid #ccc;
        }

        .title-container #logo {
                width: 200px;
                fill: #23CAD3;
                text-align: center;
            }
   
        h1 {
            margin: 30px 0;
            text-align: center;
        }


        .confirm-container h4 {
            margin-bottom: 20px;
        }

        .customer {
            line-height: 1.5;
        }

        .customer h3 {
            margin-bottom: 15px;
        }

        @media screen and (max-width: 500px) {
            .mail-container {
                padding: 0;
            }
            .wrapper {
                padding: 20px;
                box-shadow: none;
            }
            .title-container #logo {
                width: 150px;
            }
        }
    </style>
</head>

<body>
    <div class="mail-container">
        <div class="wrapper">
            <div class="title-container"> 
            </div>
            <div class="confirm-container">
                <h4>ORDINE CONFERMATO</h4>
            </div>
            <div class="customer">
                <h3>Dati del cliente</h3>
                <p><strong>Nome e Cognome</strong></p>
                <p>{{ $order->nome }}</p>
                <p><strong>Email</strong></p>
                <p>{{ $order->email }}</p>
                <p><strong>Numero di telefono</strong></p>
                <p>{{ $order->telefono }}</p>
                <p><strong>Messaggio</strong></p>
                <p>{{ $order->messaggio }}</p>
                <p><strong>Consegna prevista il :</strong></p>
                <p>{{ $order->consegna}}</p>
            </div>
        </div>
    </div>
</body>

</html>
