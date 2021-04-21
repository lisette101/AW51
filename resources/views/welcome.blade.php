<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="{{ route('basico') }}">Basico</a>
                    <a href="{{ route('campos') }}">Campos</a>
                    <a href="{{ route('colores') }}">Colores</a>
                    <a href="{{ route('evaluar') }}">Evaluar</a>
                    <a href="{{ route('validar') }}">Validar</a>
                    <a href="{{ route('comprobar') }}">Comprobar</a>
                    <a href="{{ route('valor') }}">valor</a>
                    <hr>
                    <a href="{{ route('jquery') }}">jquery</a>
                    <a href="{{ route('formulario') }}">Formulario</a>
                    <a href="{{ route('combos') }}">combos-dinamicos</a>
                    <a href="{{ route('calculadora') }}">calculadora</a>
                    <hr>
                    <a href="{{ route('jqueryboton') }}">jquery-boton</a>
                    <a href="{{ route('coloresjquery') }}">colores-jquery</a>
                    <a href="{{ route('examen') }}">examen</a>
                </div>
            </div>
        </div>
    </body>
</html>
