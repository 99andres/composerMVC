import * as variables from './valoresFijos/variablesIndex.js'
import {mensajes} from './valoresReutilizables/mensajes.js'

let {btnGuardar,nombre,apellido,formulario}=variables;

btnGuardar.addEventListener('click',validando)
function validando(e){
    let mensaje=new mensajes()
    e.preventDefault();
    if(nombre.value=="" || apellido.value==""){
        mensaje.mensajeError('todos los campos son obligatorios,desde index');

    }
    else{
        mensaje.mensajeExitoso('Se Guardaron Los Datos,desde index',formulario);
    }
    
}

