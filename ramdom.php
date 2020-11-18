<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./css/estmemo.css" rel="stylesheet">
</head>

<body class="fondoram">
    <script>
        function imagenAleatoria() {
            var elemento = document.body
            var cantidadImágenes = 11
            var aleatorio = Math.floor(Math.random() * cantidadImágenes)
            console.log(aleatorio)
            elemento.innerHTML = "<div class='centro'><img class='photo' src='img/" + aleatorio + ".jpg' alt='No disponible'></img></div><div class='ram'><img class='photo' src='img/" + aleatorio + ".gif' alt='No disponible'></img></div><div class='div2'></div><div class='audio'><audio id='demo' controls autoplay loop> <source  src='img/" + aleatorio + ".ogg' type='audio/ogg' ></audio></div>"
        }
        imagenAleatoria()
    </script>
</body>

</html>