function ConfirmDelete() {
    const respuesta = confirm("¿Estas seguro que desea eliminar la cuenta?");

    if (respuesta === true) {
        return true;
    } else {
        return false;
    }
}
/* 
$(".star.glyphicon").click(function() {
    $(this).toggleClass("glyphicon-star glyphicon-star-empty");
  });
  
  $(".heart.fa").click(function() {
    $(this).toggleClass("fa-heart fa-heart-o");
  }); */



/*tener tabla favoritos intermedia columnas (user_id , product_id)

modelo y controlador

tener ruta, que si agregarlo o borrarlo ... 
*/


function prueba(valor) {
    let token = document.querySelector('meta[name="csrf-token"]').content;
    fetch("http://localhost/favorite", {
            headers: {
                'X-CSRF-TOKEN': token,
                'Content-Type': 'application/json',
                "Accept": "application/json"
            },
            method: "POST",
            body: JSON.stringify({
                id: valor
            })
        })
        .then(respuesta => {
            /* debugger */
            console.log(respuesta)
        })
        .then(data => console.log(data))

}
