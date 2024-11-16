<html>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EA20 RelojDigital INDEX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="py-5 text-center container">
    <h1 id="reloj" class="display-4"></h1> <!--Les puse clases de boostrap q me encontre, pueden cambiarlas si quieren para darle otro formato--> 
    <p id="mensaje" class="lead"></p> <!--Tmb pueden cambiar esa clase--> 
</div>

<script src="https://code.jquery.com/jquery-2.2.4.js"></script>

<script>
    function actualizarReloj() {
        const ahora = new Date(); //objeto tipo date para la fecha y hr actual

        const horas = String(ahora.getHours()).padStart(2, '0'); //obt las hrs del obj date, y convertirl a string, aseg q tenga 2 digits
        const minutos = String(ahora.getMinutes()).padStart(2, '0'); 
        const segundos = String(ahora.getSeconds()).padStart(2, '0');
        
        const tiempo = `${horas}:${minutos}:${segundos}`; //string con formato horas:min:sec
        document.getElementById('reloj').textContent = tiempo; //actualizar reloj con el tiempo

        var mensaje;
        if (horas >= 19 || horas < 5) {
            mensaje = "BUENAS NOCHES";
        } else if (horas >= 5 && horas < 12) {
            mensaje = "BUENOS DIAS";
        } else {
            mensaje = "BUENAS TARDES";
        }

        document.getElementById('mensaje').textContent = mensaje;
    }

    setInterval(actualizarReloj, 1000); //para ejec la funcion cada segundo
    actualizarReloj(); //para que llame a la funcion desde un inicio y comience a mostrar la hr
</script>

</body>

</html>