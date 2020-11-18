< script Language = "JavaScript" >
    var cadena = "";

function mostrar(boton) {
    alert('Ha hecho click sobre el boton: ' + boton.id + ', de valor:' + boton.value);
}

function concatenar(boton) {

    cadena = cadena.concat(boton.id);
    //alert(cadena);
    document.getElementById('cadena').value = cadena;
    window.load();

}

function comparar(boton) {
    alert(cadena);
}

<
/script>