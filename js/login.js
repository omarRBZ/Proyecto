$(document).ready(function() {
  var contrasenaAdmin = $("#admin").val();
  var contrasenaUsuario = $("usuario1").val();
  var usuario = $("#usuario1").val();
  var administrador = $("#Guadalupe").val();
  $('#enviar').click(function() {
    $.ajax({
      type: "POST",
      url: "PHP/usuario.php",
      success: function(response) {
        contrasenaAdmin.html(response).fadeIn();
        administrador.html(response).fadeIn();
      }
    });
    $.post("PHP/usuario.php", {
      contrasenaAdmin: contrasenaAdmin
    }, function(data) {});
    $.post("PHP/usuario.php", {
      administrador: administrador
    }, function(data) {});
  });
  $('#enviar2').click(function() {
    $.ajax({
      type: "POST",
      url: "PHP/usuario.php",
      success: function(response) {
        contrasenaUsuario.html(response).fadeIn();
        usuario.html(response).fadeIn();
      }
    });
    contrasena2 = $("#usuario1").val();
    $.post("PHP/usuario.php", {
      contrasenaUsuario: contrasenaUsuario
    }, function(data) {});
    $.post("PHP/usuario.php", {
      usuario1: usuario1
    }, function(data) {});
  });
});
