$("#form_inscripcion").submit(function (e) {
  e.preventDefault();
  mostrarCargador();
  registrar();
});

$('input[type=radio][name=interes]').change(function() {
  const carrera = document.getElementById('carrera')
  const curso = document.getElementById('curso')
  if (this.value == 'carrera') {
    carrera.removeAttribute('disabled');
    curso.setAttribute('disabled', 'true');
    curso.value = ""
  }
  else if (this.value == 'curso') {
    curso.removeAttribute('disabled');
    carrera.setAttribute('disabled','true');
    carrera.value = ""
  }
});

function mostrarCargador() {
  $("#btn-submit").val("ENVIANDO...");
}

function enviado() {
  $("#btn-submit").val("¡ENVIADO!");            
}

function registrar() {
  var nombres = $("#nombres").val().trim();
  var apellidos = $("#apellidos").val().trim();
  var dni = $("#dni").val().trim();
  var celular = $("#celular").val().trim();
  var correo = $("#correo").val().trim();
  var carrera = $("#carrera").val();
  var curso = $("#curso").val();
  var chbx_confirmarcion = $("#chbx_confirmarcion").prop("checked");
  var rpsta = true;

  if (nombres == "") {
    alert("Ingrese sus nombres para continuar con el registro");
    rpsta = false;
  } else if (apellidos == "") {
    alert("Ingrese sus apellidos para continuar con el registro");
    rpsta = false;
  } else if (dni == "") {
    alert("Ingrese su DNI para continuar con el registro");
    rpsta = false;
  } else if (celular == "") {
    alert("Ingrese su número celular para continuar con el registro");
    rpsta = false;
  } else if (
    correo == "" ||
    correo.indexOf("@", 0) == -1 ||
    correo.indexOf(".", 0) == -1
  ) {
    if (correo != "") {
      alert(
        "Ingrese un correo electrónico válido para continuar con el registro"
      );
    } else {
      alert("Ingrese su correo electrónico para continuar con el registro");
    }
    rpsta = false;
  } else if (curso == "" && carregar == "") {
    alert("Seleccione un curso o una carrera de su interés para continuar");
    rpsta = false;
  } else if (!chbx_confirmarcion) {
    alert("Marque las casilla para continuar con el registro");
    rpsta = false;
  }

  if (rpsta) {
    var form = $("#form_inscripcion").serializeArray();

    $.ajax({
      type: "POST",
      url: "enviar.php",
      data: $.param(form),
      contentType: "application/x-www-form-urlencoded;charset=utf-8",

      beforeSend: function () {
        mostrarCargador();
      },

      error: function () {
        alert("Ha ocurrido un error cierra la pagina y vuelve a intentarlo");
      },

      success: function (data) {

        setTimeout(() => {
          if (data == "cerrada") {
            alert("El registro esta cerrado, gracias por la comprensión.");
            $("#btn-submit").val("ENVIAR");            
          } else if (data == "true") {
            alert("Gracias por registrarte, pronto nos comunicaremos contigo.");
            enviado();
          } else if (data == "error") {
            alert(
              "Ha habido inconvenientes en el registro, recargue la pagina y vuelva a intentarlo."
            );
            $("#btn-submit").val("ENVIAR");            
          } else if (data == "exists") {
            alert(
              "Usted ya se encuentra registrado. Pronto nos comunicaremos contigo, tambien puedes escribirnos entrando a nuestra web ial.edu.pe, gracias."
            );
            enviado();
          }
        }, 1000);
      },
    });
  }
}
