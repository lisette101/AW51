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

        <script type="text/javascript">

        var fecha1 = new Date();
        var fecha2 = String(fecha1);
              
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <h2>Laravel-JavaScript</h2>
                <hr>
                <br><br>

                <select id="colores">
                    <option value="0">---Seleccione un color---</option>
                    <option value="1">Rosa</option>
                    <option value="2">Turquesa</option>
                    <option value="3">Violeta</option>
                    <option value="4">Gris</option>
                    <option value="5">Magenta</option>
                </select>
                <br><br>

                <button onclick="mostrarColor()">El color seleccionado es</button>
                <br><br>

                <h3 id="mucolor">Color seleccionado</h3>
                <br><br>
                <hr>
                    <p id="fecha">-- -- -- -- --</p>

                </center>

                <div class="links">
                    <a href="{{ route('inicio') }}">Inicio</a>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            document.getElementById("fecha").innerHTML = fecha1;

            function mostrarColor(){

                var colores = document.getElementById('colores').value;

                if (colores == 0){
                    document.getElementById('mucolor').style.cssText = 'color: #ff0000; border: solid 1px #ff0000';
                    document.getElementById('mucolor').innerHTML = "No escogiste un color";
                }
                else if(colores == 1){
                    document.getElementById('mucolor').style.cssText = 'color: #FFC0CB;  border: solid 1px #FFC0CB';
                    document.getElementById('mucolor').innerHTML = "Rosa";
                }
                else if(colores == 2){
                    document.getElementById('mucolor').style.cssText = 'color: #40E0D0;  border: solid 1px #40E0D0';
                    document.getElementById('mucolor').innerHTML = "Turquesa";
                }
                else if(colores == 3){
                    document.getElementById('mucolor').style.cssText = 'color: #EE82EE;  border: solid 1px #EE82EE';
                    document.getElementById('mucolor').innerHTML = "Violeta";
                }
                else if(colores == 4){
                    document.getElementById('mucolor').style.cssText = 'color: #808080;  border: solid 1px #808080';
                    document.getElementById('mucolor').innerHTML = "Gris";
                }
                else{
                    document.getElementById('mucolor').style.cssText = 'color: #FF00FF;  border: solid 1px #FF00FF';
                    document.getElementById('mucolor').innerHTML = "Magenta";
                }
                }
                
            
        </script>
    </body>
</html>
