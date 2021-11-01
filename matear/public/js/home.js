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


async function prueba(valor) {
    //pegar api en js en laravel.... 

    //
    /* $(".star.glyphicon").click(function() {
        $(this).toggleClass("glyphicon-star glyphicon-star-empty");
      });
      
      $(".heart.fa").click(function() {
        $(this).toggleClass("fa-heart fa-heart-o");
      }); */

    /* let icon = document.getElementById('icon-favorite')
    icon.classList.remove('fa-heart-o');
    icon.classList.add('fa-heart'); */
    /* fetch('/favorite',{
        method: 'post',
        body: JSON.stringify(valor)
    }).then(response => {
        return response.text()
    }).then(text => {
        return console.log(text);
    }) */

    const res = await fetch('http://127.0.0.1:8080/favorite', {
        method: 'POST',
        mode: 'no-cors',
        body: JSON.stringify(valor)
    });

    const data = await res.json();

    console.log(data)


    console.log(valor)
}
