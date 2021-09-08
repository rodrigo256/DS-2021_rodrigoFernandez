
function ConfirmDelete(){
    const respuesta = confirm("¿Estas seguro que desea eliminar la cuenta?");

    if(respuesta === true){
        return true;
    }else{
        return false;
    }
}