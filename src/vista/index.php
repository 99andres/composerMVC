<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../plugin/package/dist/sweetalert2.css">
        
    </head>
    <body>
        <?php 
            
        ?>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Eliminar</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($this->resultado as $item){ ?>
                <tr>
                    <td><?php echo $item->nombre; ?></td>
                    <td><?php echo $item->apellido; ?></td>
                    <td><a href="eliminarController.php?id=<?php echo $item->id;?>">Eliminar</a></td>
                    <td><a href="editarController.php?id=<?php echo $item->id;?>">editar</a></td>
                </tr>
                <?php }?>

            </tbody>    
        </table>
        <br>
        <br>
        <br>
        <br>
        <div>
            
            <?php include_once 'componentes/crear.php' ?>
        </div>
    
    
        <script src="../../plugin/package/dist/sweetalert2.js"></script>                
        <script type='module' src="../js/index.js"></script>
    </body>
    

</html>