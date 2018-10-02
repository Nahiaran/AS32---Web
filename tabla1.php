

    <?php
        while($datos=$resultado->fetch_array()){
        ?>
            <tr>
                <td><?php echo $datos["idMedico"]?></td>
                <td><?php echo $datos["medIdentificacion"]?></td>
                <td><?php echo $datos["medNombres"]?></td>
                <td><?php echo $datos["medApellidos"]?></td>
                <td><?php echo $datos["medEspecialidad"]?></td>
                <td><?php echo $datos["medTelefono"]?></td>
                <td><?php echo $datos["medCorreo"]?></td>
            </tr>
    
