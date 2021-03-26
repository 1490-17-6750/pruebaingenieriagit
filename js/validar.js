function formulario() {
    let usuario = document.getElementById('usuario').value;
    let contra = document.getElementById('contra').value;
    if((usuario==null && contra==null) || (usuario.length==0 || contra.length==0)){
        alert("Ingrese datos");
        return false;
    }else{
        alert("Datos correctos");
    }
}

function codigo(){
    let numero=document.getElementById('buscar');
    if(numero.value==null || buscar.value==0){
        alert("Ingrese codigo a buscar")
        return false;
    }
    else{
        if(numero.value.length<5){
        if(numero.value.match(/^[0-9]+$/)){
            
                alert("El codigo de producto debe tener al menos 5 numeros");
                return false;
            }

        }else{
            alert("Datos validos");
        }
    }

}
function precio(){
    let numero=document.getElementById('buscar');
    if(numero.value==null || buscar.value==0){
        alert("Ingrese precio a buscar")
        return false;
    }
    else{
        if(numero.value.match(/^[0-9]+$/)){            
            if(numero.value.length>0){   

            }
        }
        else{
            alert("Solo se aceptan numeros");
            return false;
        }
    }

}

function descripcion(){
    let numero=document.getElementById('buscar');
    if(numero.value==null || buscar.value==0){
        alert("Ingrese descripcion a buscar")
        return false;
    }
    else{
        if(numero.value.length<3){
        if(numero.value.match(/^[a-z]+$/i)){
            
                alert("La descripcion de producto debe tener al menos 3 caracteres");
                return false;
            }

        }else{
            alert("Datos validos");
        }
    }

}