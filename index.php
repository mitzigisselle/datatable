<?php

    $conexion = mysqli_connect('localhost','root','','expedientemedico');

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br>

    <table border="1">
        <tr>
            <td>Nombre</td>
            <td>Apellido Paterno</td>
            <td>Apellido Materno</td>
            <td>Telefono</td>
            <td>Email</td>
            <td>Fecha de nacimiento</td>
            <td>Sexo</td>
            <td>Nacionalidad</td>
        </tr>

        <?php
            $sql="SELECT * from t_personas";
            $result = mysqli_query($conexion,$sql);

            while($mostrar = mysqli_fetch_array($result)){
                
           
        ?>

        <tr>
            <td><?php echo $mostrar['Nombre'] ?></td>
            <td><?php echo $mostrar['Apellido_Materno'] ?></td>
            <td><?php echo $mostrar['Apellido_Paterno'] ?></td>
            <td><?php echo $mostrar['telefono'] ?></td>
            <td><?php echo $mostrar['email'] ?></td>
            <td><?php echo $mostrar['fecha'] ?></td>
            <td><?php echo $mostrar['sexo'] ?></td>
            <td><?php echo $mostrar['nacionalidad'] ?></td>
        </tr>
        <?php
             }
        ?>

    </table>

</body>
</html>