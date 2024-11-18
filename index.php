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

<div class="text-center container">
    <h1 id="reloj" class="display-4"></h1>
    <p id="mensaje" class="lead"></p>
    <img id="imagen" src="" alt="Imagen del momento del día" >
</div> 

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
            imagenSrc = "https://media.istockphoto.com/id/162515751/es/foto/moon-en-las-montañas.jpg?s=612x612&w=0&k=20&c=P_x1etxWDvwdawJjTKi7ssw0QOsopOBFlgPOotR9Bww="; 
        } else if (horas >= 5 && horas < 12) {
            mensaje = "BUENOS DIAS";
            imagenSrc = "https://img.freepik.com/fotos-premium/amanecer-hermoso-paisaje-manana-naturaleza-amanecer_506085-374.jpg"; 
        } else {
            mensaje = "BUENAS TARDES";
            imagenSrc = "https://media.istockphoto.com/id/917178010/es/foto/panorama-de-primavera-soleado-carretera-en-día.jpg?s=612x612&w=0&k=20&c=R2VoBx1MkGBUIKHH-65wH-0XQqERNbiSYk5iAhZvNkM="; 
        }

        document.getElementById('mensaje').textContent = mensaje;
        const imagen = document.getElementById('imagen');
        imagen.src = imagenSrc;
        imagen.style.display = "block";
    }

    setInterval(actualizarReloj, 1000); //para ejec la funcion cada segundo
    actualizarReloj(); //para que llame a la funcion desde un inicio y comience a mostrar la hr
</script>

</body>

</html>