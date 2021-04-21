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

        <script src=" {{ asset('js/jquery-3.3.1.js') }}"></script>
        <script src=" {{ asset('js/jquery-ui.js') }}"></script>

        <script type="text/javascript">
            
        $(document).ready(function(){
            console.log("salida de informacion a consola");
            $("#porid").html("<b>campo por id</b>");
            $(".porclase").html("<i>campo por clase</i>");
            $("span").text("campo por objeto|tag-html");
            $("span#texto").text("campo especifico de un tag-html");

            //---------------------------------------------------------

            $("#porid").css({
                "position":"absolute",
                "background-color":"#ffa070",
                "font-size":"200%",
                "height":"100px",
                "width":"100px" 
            });

            //---------------------------------------------------------
            num1 = 10.5;
            num2 = 100;

            for(x=0; x<10; x++){
                console.log(x+1+" dato");
            }

            if(num1 != num2){
                alert(num1+num2);
            }

            //-------------------------------------------------------
            $("#calcular").click(function(e){
                e.preventDefault();
                var num1 = $('#num1').val();
                var num2 = $('#num2').val();
                    var res = parseFloat(num1)+parseFloat(num2);
                    alert(res);
                    $('#calcular').html(res);
            });

            //-------------------------------------------------------
            $("#mostrar1").click(function(){
                if($("#porid").is(":hidden")){
                    $("#porid").show(500);
                    $("#mostrar1").html("Ocultar");
                }
                else{
                    $("#porid").hide(500);
                    $("#mostrar1").html("Mostrar");
                }
            });
            
            //-------------------------------------------------------
            $("#mostrar2").click(function(){
                $("#porid").animate({
                    backgroundColor: "#08c",
                    color: "#fff"
                });
            });

             //--------------------Cambio de colores----------Contadores-------------------------
            var contador = 0;
             document.getElementById("colores").onclick = function(){
                 contador ++;
                 if(contador == 0){ }
                 else if(contador == 4){ }
                 else if(contador == 5){
                     contador = 0;
                     alert("los colores se repetiran");
                 }
             }

             $("#colores").click(function(){
                    if(contador == 0){
                        $("#porid").click().animate({
                            backgroundColor: "#08c",
                            color: "#fff"
                        });
                        $("#mostrarcolor").html("siguiente color Violeta");
                    }
                    else if(contador == 1){
                        $("#porid").click().animate({
                            backgroundColor: "#f0f",
                            color: "#fff"
                        });
                        $("#mostrarcolor").html("siguiente color Verde");
                    }
                    else if(contador == 2){
                        $("#porid").click().animate({
                            backgroundColor: "#0f0",
                            color: "#fff"
                        });
                        $("#mostrarcolor").html("siguiente color Amarillo");
                    }
                    else if(contador == 3){
                        $("#porid").click().animate({
                            backgroundColor: "#ff0",
                            color: "#fff"
                        });
                        $("#mostrarcolor").html("siguiente color Cian");
                    }
                    else if(contador == 4){
                        $("#porid").click().animate({
                            backgroundColor: "#0ff",
                            color: "#fff"
                        });
                        $("#mostrarcolor").html("Siguiente color azul");
                    }
            });
             //-------------------------------------------------------
             $("#mostrar3").click(function(){
                 if($("#porid").position().left > 0){
                     $("#porid").animate({ left: '0px' },700);
                     $("#mostrar3").html("Derecha");
                    }
                 else{
                        $("#porid").animate({ left: '250px' },700);
                        $("#mostrar3").html("Izquierda");
                 }
             });

             //-------------------------------------------------------
             $("#btn1").click(function(){
                 $("p").append("<i>-- Texto extra --</i>");
             });
             $("#btn2").click(function(){
                $("ol").append("<li>Lista - Extra </li>");
            });

        });

        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <h2>Laravel-jquery</h2>
                <hr>
                <center>
                    <div id="porid">Campo-01</div>
                    <div class="porclase">Campo-02</div>
                    <span>Campo-03</span><br>
                    <span id="texto">Campo-04</span><br>
                    <span>Campo-05</span><br>
                    <div id="texto">Campo-06</div>
                    <br><hr>

                    Primer valor: <input type="text" id="num1"><br>
                    Segundo valor: <input type="text" id="num2"><br>
                    <button id="calcular">Calcular</button>
                    <br><hr>

                    <button id="mostrar1">Mostrar 01</button>
                    <p id="mostrar1">Mostrar 02</p>
                    <i id="mostrar1">Mostrar 03</i>
                    <hr>
                    <button id="mostrar2">Color</button>
                    <button id="mostrar3">Mover</button>
                    <br><hr>

                    <p>Tag de tipo parrafo|p No.1</p>
                    <p id="parrafo">Tag de tipo parrafo|p No.2</p>

                    <ol>
                        <li>Lista - elemento 1</li>
                        <li>Lista - elemento 2</li>
                        <li>Lista - elemento 3</li>
                    </ol>
                    <button id="btn1">Adjuntar texto al parrafo</button>
                    <button id="btn2">Adjuntar elemento de la lista</button>
                    <br><br>
                    <hr><br>

                    //-------------------------------------------------------
                    <br>
                    <button  id="colores">Cambia de color</button>
                    <button id="mostrarcolor">El siguiente color es violeta</button>
                </center>

                <div class="links">
                    <a href="{{ route('inicio') }}">Inicio</a>
                </div>
            </div>
        </div>
    </body>
</html>