<?php
require_once("../lib/connect.php");
$consulta = "SELECT * from alumnos";
$resultado = mysqli_query($connect, $consulta);

$array = mysqli_fetch_array($resultado);
// se tiene que ciclar este solo consiguie un registro a la vez, (loop)


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos | Escuela BD</title>
</head>
<body>
    <h1>Alumnos</h1>
        <table>
            <thead>
                <tr>
                    <th> ID
                    </th>
                    <th> Nombre
                    </th>
                    <th> Apellido
                    </th>
                    <th> Telefono
                    </th>
                    <th> Email
                    </th>
                    <th> Licenciatura
                    </th>
                    <th> Cuatrimestre
                    </th>
                    <th> Estatus
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $array['id']; ?></td>
                    <td><?php echo $array['nombre']; ?></td>
                    <td><?php echo $array['apellido']; ?></td>
                    <td><a href =tell:<?php echo $array['telefono']; ?>><?php echo $array['telefono']?></a></td>
                    <td><a href =mailto:<?php echo $array['email']; ?>><?php echo $array['email']?></a></td>
                    <td><?php echo $array['licenciatura']; ?></td>
                    <td><?php echo $array['cuatrimestre']; ?></td>
                    <td><?php echo $array['estatus']; ?></td>
                </tr>
            <?php
                    
                while($row = mysqli_fetch_array($resultado)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['apellido']; ?></td>
                        <td><a href =tel:<?php echo $row['telefono']; ?>><?php echo $row['telefono']?></a></td>
                        <td><a href =mailto:<?php echo $row['email']; ?>><?php echo $row['email']?></a></td>
                        <td><?php echo $row['licenciatura']; ?></td>
                        <td><?php echo $row['cuatrimestre']; ?></td>
                        <td><?php echo $row['estatus']; ?></td>
                    </tr>
                     <?php
                }
                ?>
            </tbody>
        </table>
        
</body>
</html>
