<html>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Recuperar datos del formulario
        $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
        $correo = isset($_POST["correo"]) ? $_POST["correo"] : "";
        $satis = isset($_POST["satis"]) ? $_POST["satis"] : "";
        $asunto = isset($_POST["asunto"]) ? $_POST["asunto"] : "";
        $comentario = isset($_POST["comentario"]) ? $_POST["comentario"] : "";

        echo "------- INFORMACIÓN RECIBIDA ------------<br><br>";
        echo "Nombre: " . $nombre . "<br>";
        echo "Email: " . $correo. "<br>";
        echo "Nivel de satisfacción: ". $satis. "<br>";
        echo "Asunto: ". $asunto. "<br>";
        echo "Comentario: ". $comentario. "<br>";
    }

    ?>
</body>

</html>