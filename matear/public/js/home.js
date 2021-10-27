function ConfirmDelete() {
    const respuesta = confirm("¿Estas seguro que desea eliminar la cuenta?");

    if (respuesta === true) {
        return true;
    } else {
        return false;
    }
}

$(".star.glyphicon").click(function() {
    $(this).toggleClass("glyphicon-star glyphicon-star-empty");
  });
  
  $(".heart.fa").click(function() {
    $(this).toggleClass("fa-heart fa-heart-o");
  });
  
  