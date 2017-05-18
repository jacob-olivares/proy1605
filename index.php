<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php session_start(); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php if(isset($_SESSION['USR'])) { ?>
        <a href="cerrar.php">Cerrar Sesion</a>
        <?php } ?> 
        <a href="revision.php">Revision</a>
        <?php if(!isset($_SESSION['USR'])) { ?>
        <form action="revision.php" method="post">
            <div>Usuario: <input type="text" name="usuario"></div>
            <div>Clave: <input type="password" name="clave"></div>
            <input type="submit" value="Enviar">
        </form>
        <?php } ?>
    </body>
</html>
