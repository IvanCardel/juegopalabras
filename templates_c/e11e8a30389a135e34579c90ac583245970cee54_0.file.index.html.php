<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-31 04:48:07
  from 'C:\xampp\htdocs\palabrassaltarinas\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f9cec87b4f515_63268592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e11e8a30389a135e34579c90ac583245970cee54' => 
    array (
      0 => 'C:\\xampp\\htdocs\\palabrassaltarinas\\index.html',
      1 => 1604118486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9cec87b4f515_63268592 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>"Las Palabras Saltarinas</title>

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="javascript" type="text/javascript" href="./js/cerrar_ventana.js">
    <link rel="stylesheet" type="text/css" href="./css/wtf.css">

</head>

<body>
    <h1>"Las Palabras Saltarinas"</h1>

    <div class="box">
        <ul class="minbox">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <ol class="maxbox">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ol>
    </div>

    <div class="div-btn">
        <a href="index.php?c=nivel1&action=mostrar"><button type="button">Comenzar</button><br><br><br></a>
        <a href="index.php?c=nivel2&action=mostrar/"><button type="button" >Avanzado</button><br><br><br></a>
        <input type="button" name="salir" onclick="closeCurrentWindow();" value="Salir" class="btn-salir">
    </div>
    <br><br><br>

    <?php echo '<script'; ?>
 type="text/javascript">
        function closeCurrentWindow() {
            window.close();
        }
    <?php echo '</script'; ?>
>
</body>

</html><?php }
}
