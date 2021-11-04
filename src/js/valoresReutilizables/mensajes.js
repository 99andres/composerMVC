export class mensajes{

    mensajeError(title){
        Swal.fire({
            position:'center',
            icon:'error',
            title:title,
            showConfirmButton:true
        })
    }
    mensajeExitoso(title,formulario){
        Swal.fire(
            'Excelente',
            title,
            'success'
        )
        .then((result)=>{
                if(result.isConfirmed){
                    formulario.submit();
                }
            })
        
    }
}