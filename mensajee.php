<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feliz Cumpleaños</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="tarjeta">
        <h1>🎉 ¡Feliz Cumpleaños! 🎉</h1>
        <img src="pastel.png" alt="Pastel de cumpleaños" class="pastel">
        <p>Que este día esté lleno de alegría y sorpresas.</p>
        
        <!-- Botón para mostrar el mensaje de celebración -->
        <button onclick="mostrarMensaje()">¡Haz clic para celebrar!</button>
        
        <!-- Mensaje oculto al cargar la página -->
        <div id="mensaje-cumpleanos" class="mensaje-cumpleanos" style="display: none;">
            🎂 ¡Que tus deseos se hagan realidad y tengas un día maravilloso! 🎂<br><br>
            <p>🎶 Estas son las mañanitas que cantaba el rey David,<br>
            hoy por ser día de tu santo te las cantamos a ti.<br>
            Despierta, mi bien, despierta, mira que ya amaneció,<br>
            ya los pajarillos cantan, la luna ya se metió.<br><br>
            Qué linda está la mañana en que vengo a saludarte,<br>
            venimos todos con gusto y placer a felicitarte.<br>
            El día en que tú naciste, nacieron todas las flores,<br>
            y en la pila del bautismo cantaron los ruiseñores.<br><br>
            Ya viene amaneciendo, ya la luz del día nos dio.<br>
            Levántate de mañana, mira que ya amaneció. 🎶</p>
        </div>
    </div>

    <script>
        // Función para mostrar el mensaje al hacer clic
        function mostrarMensaje() {
            document.getElementById("mensaje-cumpleanos").style.display = "block";
        }
    </script>
</body>
</html>