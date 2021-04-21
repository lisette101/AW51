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
            console.log("Datos en consola...");
            document.write("Datos en navegador...");
            alert("Datos en ventana")

            //------------------------------------------------------------

            if(confirm("Precione Aceptar o Cancelar")){
                document.write("Si </br>");
            }else{
                document.write("No </br>");
            }
            
            /*
                var: Variables Siempre puede cambiar su valor
                let: Variables de bloque (Funciones y condiciones)
                const: Variables inmutables
            */
            let dattos = "dattosss";
            var x;
            var nombre = "Roberto";
            var edad = 38;
            var lista  = ["Hugo", "Paco", "Luis"];

            var res1 = 2+3;
            var res2 = edad-res1;

            //------------------------------------------------------------

            var y = 1;
            for(var x=1; x<=10;  x++){
                x++;
                console.log("for: " + x);
            }

            while(y<=10){
                y++;
                console.log("while:" + y);
            }

            do{
                console.log("do: " + y);
                y++;
            }while(y<=10);

            for(z in lista){
                console.log(lista[z]);
            }

            //------------------------------------------------------------
        //    var dato = prompt("Indica un valor");
        //        dato1 = parseInt(dato);
        //        console.log(dato+10);
        //        document.write(dato1+10);
        //        alert(dato1+10);

              //var dato1 = prompt("Indica el primer valor");
              //var dato2 = prompt("Indica el segundo valor");

              //dato3 = parseInt(dato1);
              //dato4 = parseInt(dato2);
              //
              //console.log(dato3 + dato4);
              //document.write(dato3 + dato4);
              //alert(dato3 + dato4);

              function cambio(){
                  var info = "2020-a";
                  document.getElementById("num1").value = info;
                  document.getElementsByClassName("num2")[0].innerHTML = "2020-b";
                  document.getElementsByName("num3")[0].innerHTML = "2020-c";
              }

              var dato = prompt("indica un valor");
                  alert(parseInt(dato)+10);

        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <h2>Laravel-JS</h2>

                <input type="text" id="num1"><br>
                <div class="num2"></div><br>
                <textarea name="num3"></textarea><br>
                <br>
                <button onclick="cambio()">Cambio de informacion</button>
                

                <div class="links">
                    <a href="{{ route('inicio') }}">Inicio</a>
                </div>
            </div>
        </div>
    </body>
</html>
