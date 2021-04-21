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
                margin: 0;
            }

            .full-height {
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
                font-size: 40px;
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
                    <h2>Laravel-JS: Validar</h2>
                </div>
                <hr>

                   <h4>Evaluacion 1:</h4>
                   <input type="text" required pattern="[A-L\/]+" placeholder="MAYUSCULAS">

                   <h4>Evaluacion 2:</h4>
                   <input type="text" id="pass1" onkeyup="validar1(this);">

                   <h4>Evaluacion 3:</h4>
                   <input type="text" id="pass2" onkeyup="validar2(this);"><br>
                   <b id="mostrar">-----</b><br>
                   <b id="error">*****</b>

                <hr>
                <div class="links">
                    <a href="{{ route('inicio') }}">Inicio</a>
                </div>
            </div>
        </div>
        
        <script type="text/javascript">

           function validar1(obj){
                var pass = obj.value;
                if (pass.search(/[a-z]/i) < 0){
                    alert("Error: la contaseña no contiene letras");
                }
                else{
                    alert("Correcto: la contaseña si contiene letras");
                }
        
                if (pass.search(/[0-9]/) < 0){
                    alert("Error: la contaseña no contiene numeros");
                }
            }
//---------------------------------------------------------------------------------------

            function validar2(obj){
                var pass = obj.value;
                var cadena = pass.split("");    
                for(var i=0; i < cadena.length; i++){
                    document.getElementById("mostrar").innerHTML = cadena[i].search(/[A-Z]/g);
                }

                var cont = 0;
                if (pass.search(/[A-Z]/g)+1 > 0){
                        document.getElementById("pass2").style.cssText = "color: #0f0; border: solid 1px #0f0";
                        document.getElementById("error").innerHTML = "*-----*";
                    for(var i=0; i < cadena.length; i++){
                        var letra = cadena[i];
                        if(letra.search(/[a-zA-Z0-9]/g)+1 > 0){
                            cont = cont+0;
                        }
                        else{
                            cont = cont+1;
                        }
                    }
                    /*if (pass.search(/[a-zA-Z0-9]/g)+1 > 0){
                        document.getElementById("pass2").style.cssText = "color: #0f0; border: solid 1px #0f0";
                        document.getElementById("error").innerHTML = "*-----*";
                    }
                    else{
                        document.getElementById("pass2").style.cssText = "color: #f00; border: solid 1px #f00";
                        document.getElementById("error").innerHTML = "Error: la contraseña debe de tener letras y numeros";
                        } */
                    }
                else{
                        document.getElementById("pass2").style.cssText = "color: #f00; border: solid 1px #f00";
                        document.getElementById("error").innerHTML = "Error: la primera letra debe de ser mayuscula";
                    }

                    if(cont >0){
                        document.getElementById("pass2").style.cssText = "color: #f00; border: solid 1px #f00";
                        document.getElementById("error").innerHTML = "Error: la contraseña debe de tener letras y numeros " + cont;
                        cont = 0;
                    }
            }

        </script>
    </body>
</html>
