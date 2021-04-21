<!DOCTYPE html>
<!-–Programa -->
<html lang="en-US">
<head>
<title>Aplicaciones de los Eventos: </title>
</head>
<body id="body">
      
      </table>
    <p>Selecciona una color:</p>
    <select id="colores" onchange="cambiarfondo(this)">
    <option value="red">rojo</option>
    <option value="blue">azul</option>
    <option value="yellow">amarillo</option>
    
    </select>
    <script>
    function cambiarfondo() {
        var f = document.getElementById("colores").value;
        var body = document.getElementById("body")
       body.style.backgroundColor = f
    }
    </script>
    </body>

</html>