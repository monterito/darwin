<?php
/* Smarty version 3.1.28, created on 2016-04-07 03:40:19
  from "C:\xampp2\htdocs\darwin-php\estilos\templates\public\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5705ba83d621c0_57616103',
  'file_dependency' => 
  array (
    'b02712c9d9f74acf39ace7522975d058f52e5fa0' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\darwin-php\\estilos\\templates\\public\\index.tpl',
      1 => 1459992255,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5705ba83d621c0_57616103 ($_smarty_tpl) {
?>
<html>
<head><title>Äcceso de usuarios:</title></head>
    <body>
    <h1>Login </h1>
    <form action="index.php?modo=login" method="post">
        <label>User:</label>
        <input type="text" name="user"/>
        <br/>
        <label>Password:</label>
        <input type="text" name="password"/>
        <input type="hidden" name="login" value="1"/>
        <input type="submit" value="Iniciar Session"/>
    </form>
    </body>
</html><?php }
}
