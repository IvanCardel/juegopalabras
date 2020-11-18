<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-29 20:45:51
  from 'C:\xampp\htdocs\palabrassaltarinas\memorama\nivel3.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f9b29ffce81e6_94783881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ca1a9bbc131a0e34fbc13af7ebaba3d657abada' => 
    array (
      0 => 'C:\\xampp\\htdocs\\palabrassaltarinas\\memorama\\nivel3.html',
      1 => 1604004350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9b29ffce81e6_94783881 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Memorama</title>
    <link rel="stylesheet" type="text/css" media="all" href="./css/estmemo.css" title="Normal">

    <?php echo '<script'; ?>
 language="JavaScript" src="../memorama/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../memorama/js/funcuest2.js"><?php echo '</script'; ?>
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

<body background="./imágenesq/fondo1.gif">
    <div class="container">
        <footer class="page-footer font-medium blue pt-4 al">
            <a class="button mediano azul" onclick="instrucciones();"><span>Instrucciones<br/></span></a>
        </footer>
        <section>
            <h2><span id="h3s"></span></h2>
            <div id="imagenes"></div>
            <p style="margin:0.1%"><br> </p>
            <a class="button mediano azul" href="javascript:location.reload()"><span>Reiniciar<br/></span></a>


        </section>
    </div>
    <br>
    <br>


</body>

</html><?php }
}
