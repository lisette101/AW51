<!doctype html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="viewport-fit=cover, width=device-width,
initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 <style>
 table {
 width: 150px;
 height: 200px;
 }
 button {
 width: 100%;
 font-size: 150%;
 background: black;
 color:white;
 }
 .ac {
 color: red;
 }
 </style>
 <title>Calculadora</title>
 </head>
 <body>
 <center>
 <table border="3">
 <tr>
 <td colspan="4"><button id="result">0</button></td>
 </tr>
 <tr>
    <td colspan="4"> <button id="res">0</button></td>
    </tr>
        <tr>
               <td><button onclick="add('1')">1</button></td>
               <td><button onclick="add('2')">2</button></td>
               <td><button onclick="add('3')">3</button></td>
               <td><button onclick="add('+')">+</button></td>
        </tr>
    <tr>
                <td><button onclick="add('4')">4</button></td>
                <td><button onclick="add('5')">5</button></td>
                <td><button onclick="add('6')">6</button></td>
                <td><button onclick="add('-')">-</button></td>
    </tr>
        <tr>
                <td><button onclick="add('7')">7</button></td>
                <td><button onclick="add('8')">8</button></td>
                <td><button onclick="add('9')">9</button></td>
                <td><button onclick="add('')"></button></td>
        </tr>
        <tr>
                <td colspan="3"><button onclick="add('0')">0</button></td>
                <td colspan="3"><button onclick="add('/')">/</button></td>
        </tr>
        <tr>
                <td colspan="2"><button onclick="del()" class="ac">C</button></td>
                <td><button onclick="add('.')">.</button></td>
                <td><button onclick="calc()">=</button></td>
        </tr>
    </table>

    <div class="links">
        <a href="{{ route('inicio') }}">Inicio</a>
    </div>
    </center>
</body>
</html>
    <script>
        function setResult(value) {
                document.getElementById('result').innerHTML = value;
        }

        function setRes(value) {
                document.getElementById('res').innerHTML = value;
        }
        function getResult() {
            return(document.getElementById('result').innerHTML);
        }
        function add(key) {
            var result = getResult();
                if (result!='0' || isNaN(key)) setResult(result + key);
                else setResult(key);
                }
        function calc() {
                var result = eval(getResult());
                setRes(result);
                }
        function del() {
            setResult(0);
            setRes(0);
            }
    </script>
