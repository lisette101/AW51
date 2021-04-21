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
         <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
         <script src="{{asset('js/jquery-ui.js')}}"></script>
   
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           

            <div class="content">
                <div class="title m-b-md">
                    Colores con JQuery
                </div>
                <h2> Elejir Color</h2>
                
                <select id="colores">
                    <option value="0">- Selecciona un Color-</option>
                    <option value="1">Azul</option>
                    <option value="2">Naranja</option>
                    <option value="3">Verde</option>
                    <option value="4">Amarillo</option>
                    <option value="5">Morado</option>
                </select>
                    <br>
                    <br>

                    <button id="setcolor">Mostrar color</button>
                    <br><br> 
                    <hr>
                    <h3 id="vercolor"> Color Seleccionado !!!</h3>
                    
                    <hr>         
                <div class="links">
                    <a href="{{ route('inicio') }}">Basico</a>
                    
                </div>
                <br><br>
            </div>
        </div>
        <script type="text/javascript">
            $('#setcolor').click(function(e){
                e.preventDefault();
                var color = $('#colores').val();
                    if(color == 0){
                        $('#vercolor')[0].style.cssText = 'color: #FF0000; border: solid 1px #FF0000';
                        $('#vercolor')[0].innerHTML = "Error: Seleccione un color antes !!";
                    }
                    else if(color == 1 ){
                        $('#vercolor')[0].style.cssText = 'color: #334BFF; border: solid 1px #334BFF';
                        $('#vercolor')[0].innerHTML = "Color: Azul";
                    }
                    else if(color == 2){
                        $('#vercolor')[0].style.cssText = 'color: #FF9C33; border: solid 1px #FF9C33';
                        $('#vercolor')[0].innerHTML = "Color: Naranja";
                    }
                    else if(color == 3){
                        $('#vercolor')[0].style.cssText = 'color: #33FF95; border: solid 1px #33FF95';
                        $('#vercolor')[0].innerHTML = "Color: Verde";
                    }
                    else if(color == 4){
                        $('#vercolor')[0].style.cssText = 'color: #FFE333; border: solid 1px #FFE333';
                        $('#vercolor')[0].innerHTML = "Color: Amarillo";
                    }
                    else{
                        $('#vercolor')[0].style.cssText = 'color: #7833FF; border: solid 1px #7833FF';
                        $('#vercolor')[0].innerHTML = "Color: Morado";
                    }

            });
        </script>
    </body>
</html>
