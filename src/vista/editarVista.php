<form action="<?php echo $_SERVER['PHP_SELF'];?>" method='POST'>
    <table>
    <tbody>
        <?php foreach($this->resultado as $item){?>
        
        <tr>
            <td>Nombre</td>
            <td><input type="text" value="<?php echo $item->nombre?>" name='nombre' id="nombre"></td>
        </tr>   
        <tr>
            <td>Apellido</td>
            <td><input type="text" value="<?php echo $item->apellido?>" name='apellido' id="apellido"></td>
        </tr>   
        <tr>
            <td colspan="2">
                <input type="hidden" value="<?php echo $item->id;?>" name="id">
                <input type="submit" value="guardar" name="guardar" >
            </td>
        </tr>
            
        <?php } ?>
        
    </tbody>
    </table>
    
</form>
<script type='module' src="../js/editar.js"></script>