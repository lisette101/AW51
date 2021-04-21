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
                <h2>Laravel-JS</h2>

                <center>
                    <hr>
                    Contraseña: <input type="text" id="pass1" onkeyup="evaluar(this);"><br>
                    <b id="nivel"></b><br>
                    <b id="error"></b><br>
                    Contraseña: <input type="text" id="pass2"  onkeyup="evaluarcon(this);"><br>
                    <b id="nocontrasena"></b><br>
                    <button type="submit" id="login" class="btn btn-primary">Confirmar</button>
                    <hr>
                </center>

                <div class="links">
                    <a href="{{ route('inicio') }}">Inicio</a>
                </div>
            </div>
        </div>
        <script type="text/javascript">

            function evaluar(obj){
                var pass = obj.value;               //recibe variable de input
                var conteo = obj.value.length;      //cuenta la cadena string-contraseña
                var cadena = pass.split("");        //divide la cadena string -contraseña
                var cont = 0;                       //cuenta los caracteres especiales-errores
                var let_a = 0;                      //cuenta las letras minusculas
                var let_b = 0;                      //cuenta las letras mayusculas
                var let_c = 0;                      //cuenta los numeros
                var let_d = 0;

                if(conteo > 3){
                    if(cadena[0].search(/[A-Z]/g)+1 > 0){
                        var let_a = 0;                      
                        var let_b = 0;                     
                        var let_c = 0;
                        var let_d = 0;
                        cont = 0;
                        //--------------- Evaluar caracter x caracter -----------------------------------
                        for(var i=0; i < cadena.length; i++){
                            var letra = cadena[i];
                            if(letra.search(/[a-z]/g)+1 > 0){ let_a = let_a+1;}
                            else{
                                if(letra.search(/[A-Z]/g)+1 > 0){let_b = let_b+1;}
                                else{
                                    if(letra.search(/[0-9]/g)+1 > 0){let_c = let_c+1;}
                                    else{
                                        if(letra.search(/[@,-,_,.,#]/)+1 > 0){let_d = let_d+1;}
                                            else{cont = cont+1;}
                                    } 
                                }  
                            }
                        }
                        //---------------------------- Evaluar: cantidad de caracteres -----------------------------
                           if(conteo >= 8){
                                        document.getElementById("nivel").style.cssText = 'color: #fff; background-color: #0d8e1a;';
                                        document.getElementById("nivel").innerHTML = "Segura";
                               }
                           else{
                                    if(conteo >= 6){
                                        document.getElementById("nivel").style.cssText = 'color: #fff; background-color: #EFDD0F;';
                                        document.getElementById("nivel").innerHTML = "Poco segura";
                                        }
                                    else{
                                        document.getElementById("nivel").style.cssText = 'color: #fff; background-color: #f00;';
                                        document.getElementById("nivel").innerHTML = "Insegura";
                                    }
                               }
                        //----------------------------------------------------------------------------------------------------------
                        //---------------------------Indicar errores: si existen letras y numeros-----------------------------------
                        if(let_a < 1 || let_b < 1 || let_c < 1 || let_d < 1){
                            if(let_a < 1){let_a = "una letra minuscula ,";}else{let_a = " ";}
                            if(let_b < 1){let_b = "una letra mayuscula ,";}else{let_b = " ";}
                            if(let_c < 1){let_c = "un numero.";}else{let_c = " ";}
                            if(let_c < 1){let_c = "un caracter especial .";}else{let_d = " ";}
                            document.getElementById("error").innerHTML = "Error: la contraseña debe de contener al menos: " + let_a + let_b + let_c + let_d;
                        }
                        else{
                            document.getElementById("error").innerHTML = " ";
                        }
                            //-----------------------------------Indica errores: si existen caracteres especiales--------------------
                            if(cont > 0){
                                document.getElementById("error").innerHTML = "Error la contraseña solo debe contener letras, numeros y caracteres permitidos";
                                document.getElementById("pass1").style.cssText = 'color: #F00; border: solid 1px #F00;';
                                document.getElementById("nivel").innerHTML = " ";
                            }
                            else{
                                document.getElementById("pass1").style.cssText = 'color: #000; border: solid 1px #000;';
                            }
                        }
                    else{
                            document.getElementById("pass1").style.cssText = 'color: #f00; border: solid 1px #f00';
                            document.getElementById("nivel").style.cssText = 'border-style: none;';
                            document.getElementById("nivel").innerHTML = " ";
                            document.getElementById("error").innerHTML = "Error: La primera letra debe de ser mayuscula !!!";
                        }

                    }
                else{
                            document.getElementById("pass1").style.cssText = 'color: #000; border: solid 1px #000';
                            document.getElementById("nivel").innerHTML = " ";
                            document.getElementById("error").innerHTML = " ";
                }

            }
//----------------Comparar contraseñas------------------------------
            function evaluarcon(){
                var pass1 = document.getElementById('pass1').value;  
                var pass2 = document.getElementById('pass2').value;  
                if (pass1 == pass2){
                    document.getElementById("nocontrasena").style.cssText = 'color: #fff; background-color: #0d8e1a;';
                    document.getElementById("nocontrasena").innerHTML = "Las contraseñas coinciden";
                    document.getElementById("login").disabled = false;
                }
                else{
                    document.getElementById("nocontrasena").style.cssText = 'color: #fff; background-color: #f00;';
                    document.getElementById("nocontrasena").innerHTML = "Las contraseñas no coinciden";
                    document.getElementById("login").disabled = true;

                }
            }

        
        </script>
    </body>
</html>
