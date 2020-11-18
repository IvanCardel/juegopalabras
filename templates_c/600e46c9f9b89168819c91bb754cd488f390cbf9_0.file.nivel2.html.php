<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-30 17:17:59
  from 'C:\xampp\htdocs\palabrassaltarinas\templates\nivel2.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f9c4ac7d6fe20_60569181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '600e46c9f9b89168819c91bb754cd488f390cbf9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\palabrassaltarinas\\templates\\nivel2.html',
      1 => 1604078273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9c4ac7d6fe20_60569181 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Memorama</title>
    <link rel="stylesheet" type="text/css" media="all" href="./css/estmemo.css" title="Normal">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?php echo '<script'; ?>
 language="JavaScript" src="./js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/funcuest2.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/sweetalert2.all.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        function instrucciones() {
            Swal.fire({
                title: "Deberás seleccionar correctamente los pares del memorama, recuerda  que debe ser una imágen y el otro el nombre del objeto",
                type: "question",
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
    <?php echo '</script'; ?>
>


</head>

<body background="./imágenes/fondo1.gif">
    <div class="container">
        <footer class="page-footer font-medium blue pt-4 al">
            <a class="button mediano azul" onclick="instrucciones();"><span>Instrucciones<br/></span></a>
            <a class="button mediano azul rojo" href="index.php"><span>Regresar<br/></span></a>
        </footer>
        <section>
            <h2 class="text-white"><span id="h2s"></span></h2>
            <div id="imagenes"></div>
            <p style="margin:0.1%"><br> </p>
            <a class="button mediano azul" href="javascript:location.reload()"><span>Reiniciar<br/></span></a>
        </section>
    </div>

</body>

</html><?php }
}
