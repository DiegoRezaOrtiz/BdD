<?php
require_once("../lib/connect.php");
$consulta = "SELECT * from materias";
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
    <title>Materias | Escuela BD</title>
</head>
<body>
    <h1>Materias</h1>
        <table>
            <thead>
                <tr>
                    <th> ID
                    </th>
                    <th> Nombre
                    </th>
                    <th> Licenciatura
                    </th>
                    <th> Cuatrimestre
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $array['id']; ?></td>
                    <td><?php echo $array['nombre']; ?></td>
                    <td><?php echo $array['licenciatura']; ?></td>
                    <td><?php echo $array['cuatrimestre']; ?></td>
                </tr>
            <?php
                    
                while($row = mysqli_fetch_array($resultado)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['licenciatura']; ?></td>
                        <td><?php echo $row['cuatrimestre']; ?></td>
                    </tr>
                     <?php
                }
                ?>
            </tbody>
        </table>
        
</body>
</html>
