<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Laravel</title>
 <!-- Fonts -->
 <link href="https://fonts.googleapis.com/css2?
family=Nunito:wght@200;600&display=swap" rel="stylesheet">
 <!-- Styles -->
 <style>

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
 div{
border-radius: 5px;
 }
 .contenedor{

 width:100%;
 height:100px;
 display:flex;
 justify-content: space-around;
 }
 .contenedor1{

 width:100%;
 height:50px;
 display:flex;
 justify-content: space-between;
 }
 .contenido{
 height:100%;
 width:50%;
 float:left;
 margin: 10px;
 }
 .contenido1{
 height:100%;
 width:50%;
 float:left;
 margin: 3px;
 }

 </style>
 <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
 <script src="{{asset('js/jquery-ui.js')}}"></script>

 </head>
 <body>
    <div class="flex-center">
        <img src="http://logos-vector.com/images/logo/xxl/9/2/9/92906/Farmacias_Guadalajara_1045e_450x450.png" alt="Farmacias"  width="25%">
    </div>

 <br>
 <P class="flex-center">TRABAJAMOS PARA TI</P>
 <div class="container">
 <div class="contenedor">
 <div class="contenido">

 <center><P><B>---------VENTA DE PRODUCTOS----------</B></P></center>
    <Label>EMPLEADO</Label>
        <select name="empleado" id="empleado"onclick="mostrar()">
            <option value="0">---Seleccione un empleado---</option>
            <option value="1">Lisette</option>
            <option value="2">Lis Nava</option>
        </select><br><br>


    <Label>PRODUCTO</Label>
        <select name="producto" id="producto" onclick="mostrarProducto()">
            <option value="0">---Seleccione un unproducto---</option>
            <option value="1">atun</option>
            <option value="2">pan blanco</option>
            <option value="3">refresco</option>
        </select><br><br>

    <label>CANTIDAD</label>
        <input type="text" name="cantidad" id="cantidad" class="solo-numero" onkeyup="pagar(this)";>
 <br><br><br>
        <center> <b>------------TOTAL A PAGAR-----------</b></center>
        <hr>
        <hr><p id="sub-total"></p>
        <div id="color"><b id="perfil1"></b></div>
        <hr>
    </div>
    <div class="contenido">
        <center> <b>------------DETALLE DEL EMPLEADO-----------</b></center>
    <div class="contenedor1">
    <div class="contenido1">FOTO</div>
    <div class="contenido1">

        <img src="https://www.mendozapost.com/files/image/7/7142/54b6f4c45797b.jpg" width="50px" height="50px" id="error" alt="empleado">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQekqy7y-A_zEaVgyJ-FykpGOtjpnoCFH3Ynw&usqp=CAU"width="50px" height="50px" id="empleado1" alt="empleado">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4IZRz3cBBSIykK6KAFx-7UMixfN-5EgdsHQ&usqp=CAU" width="50px"height="50px" id="empleado2" alt="foto empleado">
    </div>
    </div>

        <div class="contenedor1">
        <div class="contenido1">CLAVE</div>
        <div class="contenido1" id="clave"></div>
    </div>

                <div class="contenedor1">
                <div class="contenido1">NOMBRE</div>
                <div class="contenido1" id="name"></div>
 </div>
                <div class="contenedor1">
                <div class="contenido1">DESCUENTO DEL </div>
                <div class="contenido1" id="descuento"></div>
            </div>
        </div>
    </div>
 </div>
 <br><br><br><br><br>

    <div class="container">
    <div class= "contenedor">
    <div class="contenido"></div>
    <div class="contenido">

 <center> <b>------------DETALLE DEL PRODUCTO-----------</b></center>
    <div class="contenedor1">
    <div class="contenido1">FOTO</div>
    <div class="contenido1" id="fotoP">
        <img src="data:image/png;base64,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" width="50px" height="50px" id="error1" alt="error1">
        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAJ8AnwMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAAAgQFBgcDAf/EAEYQAAEDAwEEBQkDCAkFAAAAAAECAwQABREhBhIxQRNRYXGBFCIyUpGhscHRBxViI0JygpPS4fAWJDNjc4OSwvE0NVNVsv/EABkBAQADAQEAAAAAAAAAAAAAAAABAgMEBf/EAC8RAAICAQMDAgMHBQAAAAAAAAABAhEDBBIhEzFBUZFhcYEFFDJSsdHhFSNCcqH/2gAMAwEAAhEDEQA/ANxooooAooooAooooAooooAooooAooooAooooAooooAooooAooooAooooAooooAoopKlBIyogDtoBVFNHrnAY/tpsZH6TqRTF3aqwskhy7wxjqdB+FV3R9QTNFV1e2+zaON2aP6KVH4Ckf082a/9mPBlz92o6kfUmiy0VXE7cbOK4XIfsHP3a7I2wsC/RuKPFCx8qdSHqKZO0VEt7S2Vz0bkx4qx8acou1uc9CfFPc6n61O+PqRQ9orkiQy4Mtutr/RUDXTNTYPaKKKkBRRRQBTO4XSBbUb8+WzHB4dIsAnuHE1SvtD2ykWx4W22HceUnece4lI6h28dazhoSZ7qnnVqcWo+c4tWT7TWGTNt7FlGzV532h2polMNt+UofnAbifadfdUS5t5cZOkZhlkHsKz/AD4VUY8NtGqsuH2CpiPHkJSChpLae7WuOefJLsy6ikSK7nfJicmRI19U7nwxUVLiz3STIWT2uO5+Jp+hmSo4JP6yvlSlW7f1Ws9yQBWW3I3yTaK0/bSeLzQ8c/CmTts/vknuSfpV0TbGgc4BP4iTSxBbHqjuQn5irKEiraKCbYfXJ/UpabcRwK/BH8avoiIHBxwdxAr3yVHrO/tDVtshZSEQwka9Lp+AfWnTTUcemp4fqfxq3CIj1nf2hpSYyeRcOfxk06bG4rbDcNSsdO4O9FSTMOMoebNxn1kH6VJ+RH1VnvGflXhit8FNj/TWfSkTuGibWo6szGD36V1TFu0cZYeUf8J4iuojo4JynuNJ6FY4Oq/WANR05rsTaEi932Fop97A5OJC/iKfRduJSMCTGad7UEoPzpoUyQPMdPcdR76jpDoJIfYQojQlOhqVkzQ8iosvVv2rtsspS4tUdZ5OjT28KnEqCgCkgg8COdY2+lCkksEnHFJ4irP9nlzlOPLhuFS2OKc/mnU/z312YdRKT2yKSjXKEbc7ONTZwfJKHDqlXIjmD/POoKLY3QAlzcbSNMjXPdWgbYbyYKHE+klRxpVFRfWG1br6ugUeZ1Sf57avl02RrfFWiqmroewrciMsqUQtWfN04D608UBjJrg1PbdSFDcWOtB+lduljuDRbjZ7MK+lcqnGPDVF6bFAADThQa8SlAHmyEY/Ekj60vA5ONH9cD41ZZI+pFMTXlL3PxI/aJ+tHRqPBOe7WpUo+pFCK49MhCyHittA4rKdMU5LTnqK/wBNc343TNKadbUUqGDpRtBC5zclERL1mjNzlEalTo9w0B9tV53+m0pZSlCYKevAUfDB+dOkWl6KkiFOfj9iSMew5FcXndoGlANXkEZ/OWke3hWO5mvFAxbtsEHP326D1FGRToDbVIwmVDe/xmse/epum77Ssj/u9qWepxddGdpNoN7Eh2xqT1o6Qq/+anuLLFbmZSoifvdMUyefQA7o8TTk29hYzvbnbnHxqHa2hJbHSoZWv+7aVj3kU2N0jlZWmCz0h/OLYz86puY4Jh2ClJwh4Z5Z1qMfjbrikyENrVzI6qbO3d3d0KW09mlQ8u/xkHC5PSK9RvX+FbY45J8RVlJbUSEmDFKwUKUk54JPz5Vbdi4iGw86lKRgBAA5Z1PjwrOWLu5LcCGk9GnrzlVahsWjdtaj1r+Vd8dHLEt8zLqKTpDnahG/anOzWqPbhG+55BEJtT/ThsuLwd7IJHdgA6cPbWg3pG/bXx+GsyZdLcV9AGoktnPPUK+lduKO7HXxMcjqVkFerS7GaNxt2UtBWHA1kbn4h2dnLu4NIU699AH2HUuozukL457/AONXhlwS4TkWStK0KCkJJHAZ0BHYc9+a6bOQ5Ozlsv7K20Doz5RHJO8lSCnTj1YwatqJLpVKKteqvgtpNssnPP1opY2juzI/LW/fHWgn5ZpY2zSj/qIMhH89uKvsVMWbPaizrdFUXIipCnfJuiUMKAxjPDXjmmEtjZ0LUF2m6NpHFxLDoSO3XlXmOOJ94L6No9Po426Ta9n+xU07aW1WhS8jrygH4GuidrbQsflHCD/hK+lWmPsrs/dWOmhSHlo54KSQe0FOajrhshs1EXuyriyys6YdS3x9lV6OD8r9/wCCvRV7d/P+rIdW0tjWP7dPi0ofKkff9iPpPI8G1fSplr7P7RJb6SNMZcR1oZQR7jTc7EWFOqrpEA7W0fWo6GD0fugsN8b17MizfrAOLme5lR+Vc1bSWJPArP8AkkVPsfZ/aHkb7Upt1HrNsoNKZ2MsPlSoqJe8+gFSm0JQFADHZ2ipWHD6P3X7EdOPNz7fBlZXtbaU6Nx31dyUj51yO1SFD+r2x9fecfDNW2XZNnLY4GXlynHsZDLXnLx14SK9hf0XMpMdyDIZdVgJ8rStOc8NCflVunhX+Puy0cEZK1Jv5L+Smm/3Vwfkbe23nms/UiujI2luGAyopSf/AANEn3D51oEl2DDnot1ptsVycoZPmBKWwOJUoAn/AJHXXsK9TEXwWq5ssBavQWwTjhkcezu1q1xT4il9L/UlYoVai3Svl+PkjMr/AGm4Wxthy5OPKW+o7ocVyA10ycU/2WsEqVcoqpkVbcMrypTowFdQCTqoE4Ggq2bZuxm9pbF5WpKW0h1QK87oVjCckAka41xpUnAUiS6stSDJ6NQQsNkHgOCiM8ualAiu6GonDFVfU48mKE5KS4+BFTre7Iv7W7vFtSCOkX6WEqUDkdYyB4CtB2VRu2ds+sSqoNg9K5vKAO8VZVy1OTj3+FWq2gJhtgAAdlcy1DyLa/AnjUZWhc9O9DeH4DWQTHFMSXmx+fpjtBB+RHjWyLTvIUnrGKym62w/eEZ5ZCo7j6UuedjcUT6J78ca6tPJJSTMMi5TIuS5LYcEuA8UhacLQUbwKhwyOR5ZHUKn9j50eVMXCuzrbs52MemQ7jC95Q/J44aJCdO2q/KU7Gewhe+AoFORgnOoJ8ONR20USNb7VDfbfWq4yHzILmAFBJSd7GOKc7oGfxY51ef917fLEYrGlLxzz5NdTaIbcpuQylxp1tO4kodUBu5zu4zjGeyqtsmS5tRc3ConCV8T1uD6VV7H9o9wgJSzckiU0NN88R48fj4VM2mfYX3HH7beZ0B54YczuLHXx3SR7RXn5sU8cluVHp6dqWOaTu67ft3GrE1233q6qgEhHRPDA4Ab4APgTUtsDEZeYnTX20uvqe6IKWN4hISk416yo+6pSyWezsRJDcWQmaZKd151TiVKUOrTgNeVN7fZrrZC+1bH4r8d1W8EygpKknGM+aCDwHVwrGEWnZvqNTDJCUFw+O/mivJf+6tsHGYXmMLcWhTaeG7uEkY7CM+FRlkkQI5nquLKXitjcaQW97ziTr2ctatsXZh5ny2ZIkIkXJ5taWzgpbbKhgnmc9vVyplB2QfFtmx5q2A86pCmVtqKgkpB45A0841XZKzZazTuLTf5V7eTls0h+yWiZdpYwiQhHk7AUFFZ1wdOZ3gMcaj4PlNo2tj+XqCnVrCXVJ4HpB8lEeyncK3SgGbde4k/yZh1TjZjAqQrI4FSNQAdRw4nSnl12OTIebVbZHkyNzzi6px1W9nQgqVn31anSrwU6+OM5rI73Xz+hw2hedc2phwWnFIaLrW+hJwFEqBJOOOlJ24SZd3gxGQS+tIQMccqVgfM1IytnJD11+9HLmhp4EKTusAhJCcc1fKksrslpluTpl0EycrQurUFlHYEpGE/Hto03dmcM0YuMsatpV28jHYtfSX24PSFDpi2RlR11X53vApRU5L2hk3iOEmLEVuJdV6JVu7viBqfZTiSmFcXDLbs7TYXqZU3KEr7dwHK67MkOuR2GG+mUdGnHkBLSMeo2NAB16mtMeKUlx2RlqdVCMpSlw5Kq7spn2iXRq53CKqOlZbabKS4UEJUrngnjVu2V8kZsbIgklBTvKUU4JJOpPbkH2Cq5t2++5FQw8+txSJRSATpkBQ0HKrVbYCmIbUdoJDLIHmj0l44fz2VrrVswQgnzycWnmskpTql2JNsAPNNpJBTqB2D/mrdATuxGh+EVTYQWlIkOLSVrAJ548eqrpEGIzQ/APhXPgVIvlds6nhWY7YFlEa5sLKg8l0FCQRgp3gdRz4nhWn1S9v7EqY0JscDpEjdWOR6vpXbhlGM05djnyJtcGctvty4Uw4WJDDH5NThyCd3Ud+QrHWKq7zq3Vlbq1LWQBlRzpyFWm3PxLYmcm6NrDp3AGinJcGSDjlpnNRO0MSEw6JNumx3o753g0hwb7RIyQU8QBqP5Fephy41l218mckoy2kKs4qa2S2Z+/5SlPvKixGyEKfSPOLijhCE9udT1CkvbNXFENmTubxdYL3RJQorA3kBIwBqo76SB38MVaLNtHarXPtVrchJj2pgF0S5rSkOqfwoKWADj0vN4HGozWufIpQahyRjVSt8FZj2i8u3K5R7U869HgLcC5DqfNwg444PnfhGteWnaG+GS2z95IitnO87IeU2lAHHnqewDJqWYuiomxsp+23Rli4TrmXHk9PuuNoKsApTx1wCT1GrBNjM2uWzNddYctVgt+9GaS8FKdeVpvEA8zzPPWuGeHE3zE646vOl+P35Ke5t/eGHVoal9M2k+a5kDeHXhScjxpY+0e+Y1UP9KD/tqx2tMmHKs9p3GFXGWtV0urzrQV0SSeAz6Jx5ueXHnWfbST2rnfp02MgIZddJbCRgFI0B8cZ8aQ0eGbqn7ky1uVLx7Im3PtEvihovHggf7a4NbY3qXKYadlOIQ46lKilw6AkA4xiqxRryJB6xW39Pwlfv+bxS+iNQVa4Up9O9Iur6icBpTrevjuk+zFSUS3txJSmI0SPFU0nfcecJdU2nGc7yiceGK4bMrW/B+8XC20pEcKSp1QSgOKGmSeVTc8sdJPZXIZYdebbIU8oBJAz7eBriljxwnUYmf3jPljc5sZpWw8zMloQ+sNxzuuydStROhA5DT30/AQxJQXHOj3G2YrZ3ScqJ3lDxGNeVMZd6Z/rSy2h6Nutp6Vxzo2wUnOSTyyfGqlc9so++dxKrg5vFXnfk2ATzx6SuQ5aczV1inMopJdjhty+XLm23HO/+UdcSUHOcq0Ix3GrlCnPyIqJLQTh1rUFXnIVgZGO/ORx5Vn39JDKmOS5kdhC+hDSG47ZSkjJ4655nnS49yuMx1SbfvMN6ZIPDvVj+PfU6vTdSEbdbTXT5NjaruaCqRvuQ7XDUVyHt1HXj1lHwB99aWgbqQBwFUf7OLAIrCrm+S466N1ta+JTzPYDy/jV5rgjFRVI6G7dhSHW0OoUhxIUlQwQedLoqxBSdo9jxJQSw2l9vX8kr009xrOp+yOHVpjPKacHFmQnh48fdW901m2+JOTuymEOY4KI1HceIpCeXFzilXw8ESjGX4kYamRtVawd9tUxrKirI6Xe3grOo87840znbWOyIL8KdDWH3m0NOOqeOQkFO8QgjRRwo5zxWeOBWvy9kEElUGWto+o6neHt0PxqImbO3VKSl6EzLR+BQV7lYrRa+cXeTEn8jN4F4kZ29edmlpSlFqQMNFtJejjXRW6Tuq45UnJ44b046JlDY0tvPMI3l76nG2k9K2cbpAb5gZO6c/pdQzZZmzkPePldiW11kMKQPaNKjnNnNn1KxuqbVzAePwJq6+08C7qSK/d5/A5svbPNRFxo8uInKCgLXjIBBzgq/zCMniprPCodu2bOLmz1GeoRWnEtMNh5CVLyNV5UfR3uGM6anSpZWyNmV6EiQO5wH5VzOxdrOvlsofrI/dq0ftHSrtJ+xDwZPRFavzNoZEZFoW44o7/SrU4FAgHdScY0JwpWOQIqQ2T2VkXlHlhaLsZCyno0kZUodfUPjUoNkLQn0pUpXetH7tdG9mrEg+a48pR0x0+CfZV39q4FGot+xD002T8pow4aY9xmQoMYK3yl1wBSyOGnPHUKrt12utcUq8hS9c3yf7eSShoeHpK7tBT+NsvbM/wBVsr7x5no3F5+VS0TZecCDCsKWR6ykNt/HWuda+HiLf/CVpfVmaSnbxfnUuOoffSPQShshtv8ARA80U5jbMT1jefU1HTz3lbx9g+tau1sbepH/AFEqJGT+HedUPDQe+pSDsFbm1Bc9+RNVnO4tW4j2J19pNHrtRLiMVFGiwQXd2ZlY9kW5j3RxGnp7qThRPmto7+Q8TWmWLYeLEShdyKJC06hlKcNI8PzvHTsq1Ro7MVlLMZlDTSdEobSEpHgK61i903eR2zRJLhI8SkISEpAAAwAOVe0UVYBRRRQBRRRQBRRRQHmKStpDgw4hKh1KGaXRSgNFWy3qOVQYpPayn6Uj7ntmc/dsP9gn6U+oqKQGiLbAQcohRknsZSPlThDaEDCEJSOwYpdFKQPMV7RRUgKKKKAKKKKAKKKKAKKKKAKKKKAKKKKAKKKKAKKKKAKKKKAKKKKAKKKKAKKKKAKKKKA//9k=" width="50px" height="50px" id="atun" alt="atun">
        <img src="data:image/jpeg;base64,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" width="50px" height="50px" id="pan" alt="pan">
        <img src="data:image/jpeg;base64,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" width="50px" height="50px" id="refresco" alt="refresco">
    </div>
 </div>

                <div class="contenedor1">
                <div class="contenido1">CLAVE</div>
                <div class="contenido1" id="claveP"></div>
        </div>
                <div class="contenedor1">
                <div class="contenido1">NOMBRE</div>
                <div class="contenido1" id="nameP"></div>
        </div>
                <div class="contenedor1">
                <div class="contenido1">COSTO </div>
                <div class="contenido1" id="costo"></div>
            </div>
        </div>
    </div>
 </div>
 <script>
    $(document).ready(function(){

        //--------------------------------------------------------------------
        //--------------------------------------------------------------------
        const $input = document.querySelector("#cantidad");
        const patron = /[0-9]+/;

        $input.addEventListener("keydown", event =>{
            console.log(event.key);
            if(patron.test(event.key)){
                $('#cantidad').css({ "border": "1px solid #0c0" })
            }
            else{
                if(event.keyCode==8){ console.log("backspace"); }
                else{ event.preventDefault(); }
            }
        });

    });
 document.getElementById('empleado2').style.visibility='hidden';
 document.getElementById('empleado1').style.visibility='hidden';
 document.getElementById('error').style.visibility='hidden';
 document.getElementById('error1').style.visibility='hidden';
 document.getElementById('atun').style.visibility='hidden';
 document.getElementById('pan').style.visibility='hidden';
 document.getElementById('refresco').style.visibility='hidden';

 function mostrar(){
    var empleado1 =document.getElementById('empleado').value;

 if (empleado1 == 0){

    document.getElementById('empleado2').style.visibility='hidden';
    document.getElementById('empleado1').style.visibility='hidden';
    document.getElementById('error').style.visibility='visible';
    document.getElementById('clave').innerHTML = '----------------------';
    document.getElementById('name').innerHTML = '----------------------';
    document.getElementById('descuento').innerHTML ='----------------------';
    document.getElementById('sub-total').innerHTML ='Seleccione un empleado';

    document.getElementById("color").style.cssText = 'color: #ff0000; border: solid 1px #ff0000';
    document.getElementById("perfil1").innerHTML = "Elige un perfil";

 }
 else if (empleado1 == 1){

    document.getElementById('empleado2').style.visibility='hidden';
    document.getElementById('error').style.visibility='hidden';

     document.getElementById('empleado1').style.visibility='visible';
     document.getElementById('clave').innerHTML ='0001';
     document.getElementById('name').innerHTML ='Alan Mauricio';
     document.getElementById('descuento').innerHTML ='3';
     document.getElementById('sub-total').innerHTML ='';

     document.getElementById("color").style.cssText = 'color: #0f0; border: solid 1px #0f0';
    document.getElementById("perfil1").innerHTML = "Perfil Mauricio";
 }
 else if(empleado1 == 2){

    document.getElementById('error').style.visibility='hidden';

    document.getElementById('empleado1').style.visibility='hidden';

    document.getElementById('empleado2').style.visibility='visible';
    document.getElementById('clave').innerHTML ='0002';
    document.getElementById('name').innerHTML ='Alan Reyes';
    document.getElementById('descuento').innerHTML= '5';
    document.getElementById('sub-total').innerHTML= '';

    document.getElementById("color").style.cssText = 'color: #0f0; border: solid 1px #0f0';
    document.getElementById("perfil1").innerHTML = "Perfil Alan";

  }

 }


 function mostrarProducto(){
    document.getElementById('atun').style.visibility='hidden';
    document.getElementById('pan').style.visibility='hidden';
    document.getElementById('refresco').style.visibility='hidden';
    document.getElementById('error1').style.visibility='hidden';

     var producto= document.getElementById('producto').value;
     var cantidad = document.getElementById('cantidad').value;

    if (producto == 0){

        document.getElementById('atun').style.visibility='hidden';
        document.getElementById('pan').style.visibility='hidden';
        document.getElementById('refresco').style.visibility='hidden';

        document.getElementById('error1').style.visibility='visible';
        document.getElementById('claveP').innerHTML = '----------------------';
        document.getElementById('nameP').innerHTML = '----------------------';
        document.getElementById('costo').innerHTML = '----------------------';
        document.getElementById('sub-total').innerHTML ='Seleccione un producto';
 }
 else if (producto == 1){

    document.getElementById('error').style.visibility='hidden';
     document.getElementById('pan').style.visibility='hidden';
     document.getElementById('refresco').style.visibility='hidden';

     document.getElementById('atun').style.visibility='visible';
     document.getElementById('claveP').innerHTML ='0001';
     document.getElementById('nameP').innerHTML ='Atun';
     document.getElementById('costo').innerHTML ='20';
     document.getElementById('sub-total').innerHTML= '';
 }else if(producto == 2){
    document.getElementById('atun').style.visibility='hidden';
    document.getElementById('error').style.visibility='hidden';
        document.getElementById('refresco').style.visibility='hidden';

        document.getElementById('pan').style.visibility='visible';
        document.getElementById('claveP').innerHTML = '0002';
        document.getElementById('nameP').innerHTML ='Pan';
        document.getElementById('costo').innerHTML ='30';
        document.getElementById('sub-total').innerHTML= '';
  }
  else if(producto == 3){

        document.getElementById('error').style.visibility='hidden';
        document.getElementById('atun').style.visibility='hidden';
        document.getElementById('pan').style.visibility='hidden';

        document.getElementById('refresco').style.visibility='visible';
        document.getElementById('claveP').innerHTML = '0003';
        document.getElementById('nameP').innerHTML ='Refresco';
        document.getElementById('costo').innerHTML ='40';
        document.getElementById('sub-total').innerHTML= '';
  }
 }


        $(document).ready(function (){
        $('.solo-numero').keyup(function (){
        this.value = (this.value + '').replace(/[^0-9]/g,'');
    });
 });
    function pagar(obj){
        var producto= document.getElementById('producto').value;
        var cantidad =parseFloat(document.getElementById('cantidad').value);
        var empleado = document.getElementById('empleado').value;

        if(cantidad == 0){
            document.getElementById('sub-total').innerHTML = 'Debeser mayor a 0';
        }


        if (producto==1){

            var sub=cantida*16;
            var total=sub*0.05;

            document.getElementById('sub-total').innerHTML= 'total';
            }

        }
    }
 }

 </script>
 </body>
</html>
