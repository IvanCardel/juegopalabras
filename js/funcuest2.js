$(document).ready(function() {
    var direcciones = new Array("juegos1.php", "juegos2.php", "juegos3.php", "juegos4.php", "juegos5.php", "juegos6.php", "juegos7.php", "juegos8.php", "juegos9.php", "juegos10.php", "juegos11.php")

    function enlaceAleatorio() {
        aleat = Math.random() * direcciones.length
        aleat = Math.floor(aleat)
        window.location = direcciones[aleat]
    }

    var ra = self.location.href;
    var pb = ra.lastIndexOf("/") + 1;
    var tema = ra.substring(pb, ra.length - 5);
    var contador = 0;
    tema = tema.replace(/%20/g, " ");
    var x1 = "Fin del Memorama... Emmonuel, ¿por qué te dicen piña? o.O";
    document.getElementById("h2s").innerHTML = "Aprendiendo con mi memorama";
    var element = document.getElementById("imagenes");
    for (var i = 1; i < 21; i++) {
        var div = document.createElement('div');
        div.id = 'img' + i;
        element.appendChild(div);
        var x = document.createElement("IMG");
        if (i < 10) {
            var w = 0;
        } else {
            w = ""
        };
        x.setAttribute("src", "imágenes/" + w + i + ".jpg");
        div.appendChild(x);
    }
    $("img").hide();
    var d = "";
    var e = "";
    var l = x1;
    var end = 0;
    $("#imagenes div").click(oi);
    var imagenes = $("#imagenes").children();
    var imagen = $("#imagenes div:first-child");
    var ar = new Array();
    for (i = 0; i < imagenes.length; i++) {
        ar[i] = $("#" + imagen.attr("id") + " img").attr("src");
        imagen = imagen.next();
    }
    var imagen = $("#imagenes div:first-child");
    for (y = 0; y < imagenes.length; y++) {
        ri = Math.floor(Math.random() * ((ar.length - 1) + 1));
        $("#" + imagen.attr("id") + " img").attr("src", ar[ri]);
        ar.splice(ri, 1);
        imagen = imagen.next();
    }

    function instrucciones() {
        Swal.fire({
            title: "Selecciona las letras necesarias para formar la palabra, tienes 2 pistas, la primera es la letra con la que empieza y la segunda es la imágen del objeto a encontar",
            icon: "question",
            html: `
        <style>
    button{
        width: 10rem;
        height: 5rem;          
    }
</style>

        `,
            imageWidth: '200 px',
            confirmButtonText: "Regresar",
            allowOutsideClick: false,
            allowEscapeKey: false,
        })
    }



    function indicarSorpresa() {

        aleat = Math.random() * direcciones.length
        aleat = Math.floor(aleat)


        let link = direcciones[aleat]
        Swal.fire({
            title: "",
            html: `
            <style>
        h1 {
            color: #000;
        },
        p{
            color: #000;
        },
    </style>
    <h1>Descubre tu sorpresa aquí</h1>
                <p> ↓↓↓ <br>

            <a href="ramdom.php" target="_blank">Presiona</a>
            <a id="random" target="_blank" href="${link}">aquí</a>

            `,
            imageUrl: 'https://paraenamorados.shop/imagenes/sorpresas-para-enamorados.jpg',
            imageWidth: '200 px',
            confirmButtonText: "Seguir jugando",
            allowOutsideClick: false,
            allowEscapeKey: false,

        })

    }
    var el = document.getElementById('random');
    el.onclick = enlaceAleatorio;

    function indicarFinal() {
        Swal.fire({
            title: "",
            icon: "succes",
            html: `
            <style>
        h1 {
            color: #000;
        },
        p{
            color: #000;
        },
    </style>
    <h1>¡Felicidades, has ganado!</h1>
    <br>
    <a class='button mediano azul' href='javascript:location.reload()'><span>Reiniciar<br/></span></a>
            `,
            imageUrl: 'https://m.gifmania.com.mx/Gifs-Animados-Objetos/Gif-Animadas-Juguetes/Imagenes-Animadas-Globos/Globos-Up-84844.gif',
            imageWidth: '200 px',
            showCancelButton: false, // There won't be any cancel button 
            showConfirmButton: false


        })
    }

    var direcciones = new Array("juegos1.php", "juegos2.php", "juegos3.php", "juegos4.php", "juegos5.php", "juegos6.php", "juegos7.php", "juegos8.php", "juegos9.php", "juegos10.php", "juegos11.php")

    function enlaceAleatorio() {
        aleat = Math.random() * direcciones.length
        aleat = Math.floor(aleat)
        window.location = direcciones[aleat]
    }




    function oi() {
        id = $(this).attr("id");
        if ($("#" + id + " img").is(":hidden")) {
            $("#imagenes div").unbind("click", oi);
            $("#" + id + " img").slideDown('fast');
            if (e == "") {
                d = id;
                e = $("#" + id + " img").attr("src");
                setTimeout(function() { $("#imagenes div").bind("click", oi) }, 300);
            } else {
                a = $("#" + id + " img").attr("src");
                var g = parseInt(e.substr(9, 2));
                var h = parseInt(a.substr(9, 2));
                if (g > 10) { g = g - 10; }
                if (h > 10) { h = h - 10; }
                e = g;
                a = h;
                if (e != a) {
                    setTimeout(function() {
                        $("#" + id + " img").slideUp('fast');
                        $("#" + d + " img").slideUp('fast');
                        d = "";
                        e = "";
                    }, 400);
                } else {
                    end++;
                    contador++;
                    d = "";
                    e = "";
                }
                setTimeout(function() { $("#imagenes div").bind("click", oi) }, 400);
            }
            if ((end == 10) && (l = 29)) {
                indicarFinal();
            } else if ((contador == 3)) {
                indicarSorpresa();
                contador = 0;
            }

        }
    }
});