<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EA20 RelojDigital INDEX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
    <style>
        body.noche {
            background-color: #2c3e50;
            color: #ecf0f1;
        }

        body.dia {
            background-color: #f1c40f;
            color: #2c3e50;
        }

        body.tarde {
            background-color: #e67e22;
            color: #fff;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="left-container">
            <h1 id="reloj"></h1>
            <p id="fecha"></p>
        </div>

        <div class="right-container">
            <img id="imagen" src="path/to/your/image.jpg" alt="Image">
            <p id="mensaje"></p>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>

    <script>
        function actualizarReloj() {
            const ahora = new Date();
            const horas = String(ahora.getHours()).padStart(2, '0');
            const minutos = String(ahora.getMinutes()).padStart(2, '0');
            const segundos = String(ahora.getSeconds()).padStart(2, '0');

            const tiempo = `${horas}:${minutos}:${segundos}`;
            document.getElementById('reloj').textContent = tiempo;

            // Saludo de acuerdoo a la hora
            let mensaje;
            let imagenSrc;
            let claseFondo;

            if (horas >= 19 || horas < 5) {
                mensaje = "BUENAS NOCHES";
                imagenSrc = "https://media.istockphoto.com/id/162515751/es/foto/moon-en-las-montañas.jpg?s=612x612&w=0&k=20&c=P_x1etxWDvwdawJjTKi7ssw0QOsopOBFlgPOotR9Bww=";
                claseFondo = "noche";
            } else if (horas >= 5 && horas < 12) {
                mensaje = "BUENOS DÍAS";
                imagenSrc = "https://img.freepik.com/fotos-premium/amanecer-hermoso-paisaje-manana-naturaleza-amanecer_506085-374.jpg";
                claseFondo = "dia";
            } else {
                mensaje = "BUENAS TARDES";
                imagenSrc = "https://media.istockphoto.com/id/917178010/es/foto/panorama-de-primavera-soleado-carretera-en-día.jpg?s=612x612&w=0&k=20&c=R2VoBx1MkGBUIKHH-65wH-0XQqERNbiSYk5iAhZvNkM=";
                claseFondo = "tarde";
            }

            document.getElementById('mensaje').textContent = mensaje;
            const imagen = document.getElementById('imagen');
            imagen.src = imagenSrc;
            imagen.style.display = "block";

            // Cambiar el fondo de auerdo a la hora
            document.body.className = claseFondo;

            // Mostrar la fecha actual
            const diasSemana = ["Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"];
            const meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
            const diaSemana = diasSemana[ahora.getDay()];
            const dia = ahora.getDate();
            const mes = meses[ahora.getMonth()];
            const año = ahora.getFullYear();
            const fechaActual = `${diaSemana}, ${dia} de ${mes} de ${año}`;
            document.getElementById('fecha').textContent = fechaActual;
        }

        setInterval(actualizarReloj, 1000);
        actualizarReloj();
    </script>

</body>

</html>