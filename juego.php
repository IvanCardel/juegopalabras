<html>
<head>
    <title>Juego</title>
<script>
    var direcciones = new Array("juegos1.php","juegos2.php","juegos3.php","juegos4.php","juegos5.php","juegos6.php","juegos7.php","juegos8.php","juegos9.php","juegos10.php","juegos11.php")
    function enlaceAleatorio(){
       aleat = Math.random() * direcciones.length
       aleat = Math.floor(aleat)
       window.location=direcciones[aleat]
    }
</script>
</head>

<body>
<a href="javascript:enlaceAleatorio()">Enlace Aleatorio</a>
</body>
</html>
