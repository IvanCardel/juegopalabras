<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/juego.css">
    <title>Document</title>
</head>
<body>


<body>
<div class="card-columns">
    <div class="card-body">
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  <div class="card p-3">
    <blockquote class="blockquote mb-0 card-body">
    <p>¿Cómo se llama este animal?.</p>
      
    </blockquote>
  </div>
  <div class="card">
  <img class="card-img-top im" src="./img/rana.jpg" alt="Card image cap">
   
  </div>
  
  <div class="card-body">
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  
  
</div>



  <video id="repa" width="0" height="0"><source src="img/rana.ogg"></video> <!--Referencia del audio-->
  <video id="repb" width="0" height="0"><source src="img/pez.ogg"></video><!--Referencia de la audio-->
  <video id="repc" width="0" height="0"><source src="img/queso.ogg"></video><!--Referencia de la audio-->
  <video id="repd" width="0" height="0"><source src="img/arbol.ogg"></video><!--Referencia de la audio-->

<script>
// Sorpresa y fallo
function indicarSorpresa() {
        Swal.fire({
            title: "¡Acertaste!",
            
            imageUrl: 'https://reygif.com/media/russell-81105.gif?fbclid=IwAR3spwwPnvIl77Dd_QHm79bzcSIBcGuTXnacjz4stf9LHWUox9aHytpb5ek',
            imageWidth: '800 px',
            confirmButtonText: "Seguir jugando",
            allowOutsideClick: false,
            allowEscapeKey: false,
            width: '23rem',
        })
    }


    function indicarFallo() {
        Swal.fire({
            title: "Inténtalo nuevamente!",
            
            imageUrl: './img/intento.png',
            imageWidth: '800 px',
            confirmButtonText: "Seguir jugando",
            allowOutsideClick: false,
            allowEscapeKey: false,
            width: '23rem',
        })
    }



//Puto


function accionPlay() {
            if (!repa.paused && !repa.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repa.play();
                play.value = '||';
            }
        }

        function iniciar() {
            play = document.getElementById('a');
            play.addEventListener('click', accionPlay);
        }
        window.addEventListener('load', iniciar, false);


        function accionPlayb() {
            if (!repb.paused && !repb.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repb.play();
                play.value = '||';
            }
        }

        function iniciarCasa() {
            play = document.getElementById('b');
            play.addEventListener('click', accionPlayb);
        }
        window.addEventListener('load', iniciarCasa, false);




        function accionPlayc() {
            if (!repc.paused && !repc.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repc.play();
                play.value = '||';
            }
        }

        function iniciarMesa() {
            play = document.getElementById('c');
            play.addEventListener('click', accionPlayc);
        }
        window.addEventListener('load', iniciarMesa, false);

    
        function accionPlayd() {
            if (!repd.paused && !repd.ended) {

                play.value = '\u25BA'; //\u25BA
            } else {
                repd.play();
                play.value = '||';
            }
        }

        function iniciarArbol() {
            play = document.getElementById('d');
            play.addEventListener('click', accionPlayd);
        }
        window.addEventListener('load', iniciarArbol, false);




   

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.7.0/sweetalert2.all.js"></script>


</body>
</html>