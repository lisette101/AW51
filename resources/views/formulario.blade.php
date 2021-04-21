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

            span.sname{
                position: relative;
                left: -140px;
                top: -30px;
                width: 140;
                padding: 6px;
                background: #e00;
                color: #fff;
                text-align: center;
                visibility: hidden;
                border-radius: 5px;
                opacity: 0.8;
                z-index: 999;
            }
            span.sname::after{
                content: '';
                position: absolute;
                left: 50%;
                top: 100%;
                width: 0;
                margin-left: -8px;
                height: 0;
                border-top: 8px solid #e00;
                border-right: 8px solid transparent;
                border-left: 8px solid transparent;
            }

        </style>

        <script src=" {{ asset('js/jquery-3.3.1.js') }}"></script>
        <script src=" {{ asset('js/jquery-ui.js') }}"></script>

        <script type="text/javascript">
            
            $(document).ready(function(){
                $("#nombre").keyup(function(){
                    var textname =$("#nombre").val();
                    var formato = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
                    
                    if(formato.test(textname)){ $("span.sname").css({"visibility": "hidden"}); }
                    else{ $("span.sname").css({"visibility": "visible" }); }
                });
                //------------------------------------------------------------
                $("#app").keyup(function(){
                    var txtapp =$("#app").val();
                    var formato = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
                    
                    if(formato.test(txtapp)){ $("#sapp").text("Es correcto !!"); }
                    else{ $("#sapp").text("Error !!"); }
                });
                //------------------------------------------------------------
                $("#apm").keyup(function(){
                    var txtapm =$("#apm").val();
                    var formato = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
                    
                    if(formato.test(txtapm)){ $("#apm").css({"border": "1px solid #0f0"}).fadeIn(2000); }
                    else{ $("#apm").css({"border": "1px solid #f00"}).fadeIn(2000); }
                });
                 //------------------------------------------------------------
                 $("#fn").blur(function(){
                    var f = new Date();
                    var year = f.getFullYear();
                    var mond = f.getMonth();
                    var day = f.getDate();

                    var fecha = $("#fn").val();

                    if(fecha != ''){
                        var fecha2 = fecha.split("-");

                        var edad = year - fecha2[0];
                        if(edad > 17){ $("#sfecha").text("Es mayor de edad con " + edad);}
                        else{ $("#sfecha").text("Es menor de edad con " + edad); }
                    }
                    else{ $("#sfecha").text("Indique una fecha"); }
                 });

                 //-------------------------------------------------------
                 $("#mail").blur(function(){
                    var txtmail = $("#mail").val();
                    var valmail = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

                    if(valmail.test(txtmail)){ $("#smail").text("Valido"); }
                    else{ $("#smail").text("Incorrecto"); }
                 });
                //---------------------validacion de contraseña-----------------------------------------------

                $(function(){
                    var primayus = new RegExp(/^[A-Z\s\xF1\xD1]+/);
                    var mayus    = new RegExp("^(?=.*[A-Z].*[A-Z].*[A-Z])");
                    var special  = new RegExp("^(?=.*[!@#$%&*].*[!@#$%&*].*[!@#$%&*])");
                    var numbers  = new RegExp("^(?=.*[0-9])");
                    var lower    = new RegExp("^(?=.*[a-z])");
                    var len      = new RegExp("^(?=.{8,})");

                    var regExp = [primayus, mayus, special, numbers, lower, len];
                    var elementos = [$("#primayus"), $("#mayus"), $("#special"), $("#numbers"), $("#lower"), $("#len")];
                    

                    $("#pass1").on("keyup", function(){
                        var pass = $("#pass1").val();
                        var check = 0;

                        for(var i = 0; i < 6; i++){
                            if(regExp[i].test(pass)){
                                elementos[i].hide().css({"border": "1px solid #f00"});
                                check++;
                            }
                            else{
                                elementos[i].show();
                            }
                        }
                        if(check >= 0 && check <= 2 ){
                            $("#mensaje").text("Contraseña insegura").css({"border": "1px solid #f00"});
                        }else if(check >= 3 && check <= 4){
                            $("#mensaje").text("Contraseña poco segura").css({"border": "1px solid #ff8000"});
                        }else if(check == 6){
                            $("#mensaje").text("Contraseña muy segura").css({"border": "1px solid #0f0"});
                        }
                    });
                });
                  //-----------------------------------------------------------------
                  $("#pass2").keyup(function(){
                    var txtpass1 = $("#pass1").val();
                    var txtpass2 = $("#pass2").val();

                    if(txtpass1 == txtpass2){
                        $("#spass2").text("Correcto");
                        $("#spass2").css({ "border": "1px solid #0f0" }).fadeIn(2000);
                    }
                    else{
                        $("#spass2").text("Incorrecto");
                        $("#spass2").css({ "border": "1px solid #f00" }).fadeIn(2000);
                    }
                });

                //--------------------------------------------------------------------
                $("#guardar").prop("disabled", true);
                
                //--------------------------------------------------------------------
                //--------------------------------------------------------------------
                const $input = document.querySelector("#evaluacion");
                const patro = /[0-9a-zA-Z_@]+/;

                $input.addEventListener("Keydown", event =>{
                    console.log(event.key);
                    if(patron.test(event.key)){
                        $('#evaluacion').css({ "border": "1px solid #0c0" })
                    }
                    else{
                        if(event.keyCode==8){ console.log("backspace"); }
                        else{ event.preventDefault(); }
                    }
                });

            });

        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <h2>Laravel-JQuery | formularios</h2>

                <center>
                    <form action="" name="">
                        <table>
                            <tr>
                                <td>Nombre:</td>
                                <td><input type="text" id="nombre" class="nombre" name="nombre"></td>
                                <td><span id="sname" class="sname">Error en el nombre</span></td>
                            </tr>
                            <tr>
                                <td>Ap. Paterno</td>
                                <td><input type="text" id="app" class="app" name="app"></td>
                                <td><span id="sapp" class="sapp"></span></td>
                            </tr>
                            <tr>
                                <td>Ap. Materno</td>
                                <td><input type="text" id="apm" class="apm" name="apm"></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>E-mail</td>
                                <td><input type="text" id="mail" class="mail" name="mail"></td>
                                <td><span id="smail" class="smail"></span></td>
                            </tr>
                            <tr>
                                <td>fecha de nacimiento</td>
                                <td><input type="date" id="fn" class="fn" name="fn"></td>
                                <td><span id="sfecha" class="sfecha"></span></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="text" id="pass1" class="pass1" name="pass1"></td>
                                <td><span id="mensaje"></span></td>
                            </tr>
                            <tr>
                                <td>
                                    <ul>
                                        <li id="primayus"> Primera letra mayuscula       </li>
                                        <li id="mayus">    Minimo 3 mayusculas           </li>
                                        <li id="special">  Minimo 3 caracteres especiales</li>
                                        <li id="numbers">  Numeros                       </li>   
                                        <li id="lower">    Minusculas                    </li>   
                                        <li id="len">      Minimo 8 caracteres           </li>   
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Confirmar Password</td>
                                <td><input type="text" id="pass2" class="pass2" name="pass2"></td>
                                <td><span id="spass2" class="spass2"></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <input type="subnit" id="guardar" class="guardar" name="guardar" value="guardar">
                                </td>
                            </tr>
                        </table>
                        </form>

                        <hr><hr>
                        <h4>Evaluacion 4 (impide escritura):</h4>
                        <input type="text" id="evaluacion" name="evaluacion" class="evaluacion">
                        <br><br>

                </center>

                <div class="links">
                    <a href="{{ route('inicio') }}">Inicio</a>
                </div>
            </div>
        </div>
    </body>
</html>