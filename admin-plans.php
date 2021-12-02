<?php
include 'headerAdmin.php';
require_once "php/private/autoloader.php";
require_once "php/private/validate-logged.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Open+Sans:wght@400;600&family=Satisfy&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style-plans.css">
  <title>Planes</title>
</head>

<body>
  <section class="main">
    <div class="d-flex justify-content-between">
      <select class="form-control me-2" id="clientes" data-offset="0">
        <option>
          --Usuarios--
        </option>
      </select>
      <input type="text" id="name_menu" class=" form-control">
    </div>

    <div class="table-responsive">
      <table class="table align-middle">
        <thead>
          <tr>
            <th scope="col" class="w-16">Dia</th>
            <th scope="col" class="w-16">Desayuno</th>
            <th scope="col" class="w-16">Colación</th>
            <th scope="col" class="w-16">Comida</th>
            <th scope="col" class="w-16">Colación</th>
            <th scope="col" class="w-16">Cena</th>
          </tr>
        </thead>
        <tbody id="contenido">
          <tr class="align-bottom row_lunes">
            <td class="align-middle dia">Lunes</td>
            <td class="desayuno"><textarea name="" id="desayuno_lunes" cols="17" rows="3"></textarea></td>
            <td class="colacion1"><textarea name="" id="colacion1_lunes" cols="17" rows="3"></textarea></td>
            <td class="comida"><textarea name="" id="comida_lunes" cols="17" rows="3"></textarea></td>
            <td class="colacion2"><textarea name="" id="colacion2_lunes" cols="17" rows="3"></textarea></td>
            <td class="cena"><textarea name="" id="cena_lunes" cols="17" rows="3"></textarea></td>
            <td><button id="btn-lunes" class="form-control btn fas fa-check"></button></td>
          </tr>
          <tr class="align-bottom row_martes">
            <td class="align-middle dia">Martes</td>
            <td class="desayuno"><textarea name="" id="desayuno_martes" cols="17" rows="3"></textarea></td>
            <td class="colacion1"><textarea name="" id="colacion1_martes" cols="17" rows="3"></textarea></td>
            <td class="comida"><textarea name="" id="comida_martes" cols="17" rows="3"></textarea></td>
            <td class="colacion2"><textarea name="" id="colacion2_martes" cols="17" rows="3"></textarea></td>
            <td class="cena"><textarea name="" id="cena_martes" cols="17" rows="3"></textarea></td>
            <td><button id="btn-martes" class="form-control btn fas fa-check"></button></td>
          </tr>
          <tr class="align-bottom row_miercoles">
            <td class="align-middle dia">Miercoles</td>
            <td class="desayuno"><textarea name="" id="desayuno_miercoles" cols="17" rows="3"></textarea></td>
            <td class="colacion1"><textarea name="" id="colacion1_miercoles" cols="17" rows="3"></textarea></td>
            <td class="comida"><textarea name="" id="comida_miercoles" cols="17" rows="3"></textarea></td>
            <td class="colacion2"><textarea name="" id="colacion2_miercoles" cols="17" rows="3"></textarea></td>
            <td class="cena"><textarea name="" id="cena_miercoles" cols="17" rows="3"></textarea></td>
            <td><button id="btn-miercoles" class="form-control btn fas fa-check"></button></td>
          </tr>
          <tr class="align-bottom row_jueves">
            <td class="align-middle dia">Jueves</td>
            <td class="desayuno"><textarea name="" id="desayuno_jueves" cols="17" rows="3"></textarea></td>
            <td class="colacion1"><textarea name="" id="colacion1_jueves" cols="17" rows="3"></textarea></td>
            <td class="comida"><textarea name="" id="comida_jueves" cols="17" rows="3"></textarea></td>
            <td class="colacion2"><textarea name="" id="colacion2_jueves" cols="17" rows="3"></textarea></td>
            <td class="cena"><textarea name="" id="cena_jueves" cols="17" rows="3"></textarea></td>
            <td><button id="btn-jueves" class="form-control btn fas fa-check"></button></td>
          </tr>
          <tr class="align-bottom row_viernes">
            <td class="align-middle dia">Viernes</td>
            <td class="desayuno"><textarea name="" id="desayuno_viernes" cols="17" rows="3"></textarea></td>
            <td class="colacion1"><textarea name="" id="colacion1_viernes" cols="17" rows="3"></textarea></td>
            <td class="comida"><textarea name="" id="comida_viernes" cols="17" rows="3"></textarea></td>
            <td class="colacion2"><textarea name="" id="colacion2_viernes" cols="17" rows="3"></textarea></td>
            <td class="cena"><textarea name="" id="cena_viernes" cols="17" rows="3"></textarea></td>
            <td><button id="btn-viernes" class="form-control btn fas fa-check"></button></td>
          </tr>
          <tr class="align-bottom row_sabado">
            <td class="align-middle dia">Sabado</td>
            <td class="desayuno"><textarea name="" id="desayuno_sabado" cols="17" rows="3"></textarea></td>
            <td class="colacion1"><textarea name="" id="colacion1_sabado" cols="17" rows="3"></textarea></td>
            <td class="comida"><textarea name="" id="comida_sabado" cols="17" rows="3"></textarea></td>
            <td class="colacion2"><textarea name="" id="colacion2_sabado" cols="17" rows="3"></textarea></td>
            <td class="cena"><textarea name="" id="cena_sabado" cols="17" rows="3"></textarea></td>
            <td><button id="btn-sabado" class="form-control btn fas fa-check"></button></td>
          </tr>
        </tbody>
      </table>
    </div>
    <button id="btn-save" class="form-control">Guardar</button>
  </section>
  <div class="d-flex flex-row-reverse">
    <button id="top" class="btnTop fas fa fa-chevron-up"></button>
  </div>

</body>
<?php
require_once "scripts.php";
?>
<script src="js/menu.js"></script>
<script src="js/user-plans.js"></script>

<script>
  $(document).ready(function() {
    loadClientes();
  });
  var idDesayuno, idColacion1, idColacion2, idCena, idComida, id_cliente, name_menu, id_menuPlans, idDia;

  $("#name_menu").on("keyup", function(e) {
    if (e.keyCode == 13) {
      id_cliente = $("#clientes").val();
      name_menu = $("#name_menu").val();
      createMenuPlans(name_menu, id_cliente);
    }
  });

  $("#btn-save").click(function() {
    var ar = {
      id_user: $("#clientes").val()
    }
    $.post("php/users/changePay0.php", {
        data: JSON.stringify(ar)
      },
      function(data) {
        //console.log(data);
        ret = JSON.parse(data);
        //console.log(ret);
        if (data == 1) {
          toastr.success("Todo Listo");
        } else
          toastr.error("Opss algo salio mal");
      });

  });

  $("#btn-lunes").click(function() {
    //creando el menu al cual se le agregaran despues todas las comidas
    getIdMenuPlans($("#name_menu").val());

    $(".row_lunes").each(function() {
      createDesayunos($(this).children(".desayuno").children().val());
      createColacion1($(this).children(".colacion1").children().val());
      createColacion2($(this).children(".colacion2").children().val());
      createComidas($(this).children(".comida").children().val());
      createCenas($(this).children(".cena").children().val());

      setTimeout(() => {
        createMenuDia(1, idDesayuno, idColacion1, idColacion2, idComida, idCena, id_menuPlans);
      }, 1000);

      getIdDesayuno($(this).children(".desayuno").children().val());
      getIdColacion1($(this).children(".colacion1").children().val());
      getIdColacion2($(this).children(".colacion2").children().val());
      getIdComida($(this).children(".comida").children().val());
      getIdCena($(this).children(".cena").children().val());

    });
  });

  $("#btn-martes").click(function() {
    //creando el menu al cual se le agregaran despues todas las comidas
    getIdMenuPlans($("#name_menu").val());

    $(".row_martes").each(function() {
      createDesayunos($(this).children(".desayuno").children().val());
      createColacion1($(this).children(".colacion1").children().val());
      createColacion2($(this).children(".colacion2").children().val());
      createComidas($(this).children(".comida").children().val());
      createCenas($(this).children(".cena").children().val());

      setTimeout(() => {
        createMenuDia(2, idDesayuno, idColacion1, idColacion2, idComida, idCena, id_menuPlans);
      }, 1000);

      getIdDesayuno($(this).children(".desayuno").children().val());
      getIdColacion1($(this).children(".colacion1").children().val());
      getIdColacion2($(this).children(".colacion2").children().val());
      getIdComida($(this).children(".comida").children().val());
      getIdCena($(this).children(".cena").children().val());

    });
  });

  $("#btn-miercoles").click(function() {
    //creando el menu al cual se le agregaran despues todas las comidas
    getIdMenuPlans($("#name_menu").val());

    $(".row_miercoles").each(function() {
      createDesayunos($(this).children(".desayuno").children().val());
      createColacion1($(this).children(".colacion1").children().val());
      createColacion2($(this).children(".colacion2").children().val());
      createComidas($(this).children(".comida").children().val());
      createCenas($(this).children(".cena").children().val());

      setTimeout(() => {
        createMenuDia(3, idDesayuno, idColacion1, idColacion2, idComida, idCena, id_menuPlans);
      }, 1000);

      getIdDesayuno($(this).children(".desayuno").children().val());
      getIdColacion1($(this).children(".colacion1").children().val());
      getIdColacion2($(this).children(".colacion2").children().val());
      getIdComida($(this).children(".comida").children().val());
      getIdCena($(this).children(".cena").children().val());

    });
  });

  $("#btn-jueves").click(function() {
    //creando el menu al cual se le agregaran despues todas las comidas
    getIdMenuPlans($("#name_menu").val());

    $(".row_jueves").each(function() {
      createDesayunos($(this).children(".desayuno").children().val());
      createColacion1($(this).children(".colacion1").children().val());
      createColacion2($(this).children(".colacion2").children().val());
      createComidas($(this).children(".comida").children().val());
      createCenas($(this).children(".cena").children().val());

      setTimeout(() => {
        createMenuDia(4, idDesayuno, idColacion1, idColacion2, idComida, idCena, id_menuPlans);
      }, 1000);

      getIdDesayuno($(this).children(".desayuno").children().val());
      getIdColacion1($(this).children(".colacion1").children().val());
      getIdColacion2($(this).children(".colacion2").children().val());
      getIdComida($(this).children(".comida").children().val());
      getIdCena($(this).children(".cena").children().val());

    });
  });

  $("#btn-viernes").click(function() {
    //creando el menu al cual se le agregaran despues todas las comidas
    getIdMenuPlans($("#name_menu").val());

    $(".row_viernes").each(function() {
      createDesayunos($(this).children(".desayuno").children().val());
      createColacion1($(this).children(".colacion1").children().val());
      createColacion2($(this).children(".colacion2").children().val());
      createComidas($(this).children(".comida").children().val());
      createCenas($(this).children(".cena").children().val());

      setTimeout(() => {
        createMenuDia(5, idDesayuno, idColacion1, idColacion2, idComida, idCena, id_menuPlans);
      }, 1000);

      getIdDesayuno($(this).children(".desayuno").children().val());
      getIdColacion1($(this).children(".colacion1").children().val());
      getIdColacion2($(this).children(".colacion2").children().val());
      getIdComida($(this).children(".comida").children().val());
      getIdCena($(this).children(".cena").children().val());

    });
  });

  $("#btn-sabado").click(function() {
    //creando el menu al cual se le agregaran despues todas las comidas
    getIdMenuPlans($("#name_menu").val());

    $(".row_sabado").each(function() {
      createDesayunos($(this).children(".desayuno").children().val());
      createColacion1($(this).children(".colacion1").children().val());
      createColacion2($(this).children(".colacion2").children().val());
      createComidas($(this).children(".comida").children().val());
      createCenas($(this).children(".cena").children().val());

      setTimeout(() => {
        createMenuDia(6, idDesayuno, idColacion1, idColacion2, idComida, idCena, id_menuPlans);
      }, 1000);

      getIdDesayuno($(this).children(".desayuno").children().val());
      getIdColacion1($(this).children(".colacion1").children().val());
      getIdColacion2($(this).children(".colacion2").children().val());
      getIdComida($(this).children(".comida").children().val());
      getIdCena($(this).children(".cena").children().val());

    });
  });

  //creando los platillos en sus respectivas tablas 
  function createDesayunos(textArea) {
    var $desayuno = textArea;
    var ar = {
      info: $desayuno
    }
    $.post("php/plans/createDesayunos.php", {
        data: JSON.stringify(ar)
      },
      function(data) {
        //console.log(data);
        ret = JSON.parse(data);
        //console.log(ret);
        toastr.options.closeButton = true;
        if (data == 1) {
          toastr.success("Desayuno Agregado");
        } else {
          console.log("Hubo un error al registrar el desayuno");
          toastr.error("Hubo un error al registrar el desayuno");
        }
      });
  }

  function createColacion1(textArea) {
    var $colacion = textArea;
    var ar = {
      info: $colacion
    }
    $.post("php/plans/createColacion1.php", {
        data: JSON.stringify(ar)
      },
      function(data) {
        //console.log(data);
        ret = JSON.parse(data);
        //console.log(ret);
        toastr.options.closeButton = true;
        if (data == 1) {
          toastr.success("Colacion Agregada");
        } else {
          console.log("Hubo un error al registrar la colacion");
          toastr.error("Hubo un error al registrar la colacion");
        }
      });
  }

  function createComidas(textArea) {
    var $comida = textArea;
    var ar = {
      info: $comida
    }
    $.post("php/plans/createComidas.php", {
        data: JSON.stringify(ar)
      },
      function(data) {
        //console.log(data);
        ret = JSON.parse(data);
        //console.log(ret);
        toastr.options.closeButton = true;
        if (data == 1) {
          toastr.success("Comida Agregada");
        } else {
          console.log("Hubo un error al registrar la comida");
          toastr.error("Hubo un error al registrar la Comida");
        }
      });
  }

  function createColacion2(textArea) {
    var $colacion = textArea;
    var ar = {
      info: $colacion
    }
    $.post("php/plans/createColacion2.php", {
        data: JSON.stringify(ar)
      },
      function(data) {
        //console.log(data);
        ret = JSON.parse(data);
        //console.log(ret);
        toastr.options.closeButton = true;
        if (data == 1) {
          toastr.success("Colacion Agregada");
        } else {
          console.log("Hubo un error al registrar la colacion2");
          toastr.error("Hubo un error al registrar la Colacion");
        }
      });
  }

  function createCenas(textArea) {
    var $cena = textArea;
    var ar = {
      info: $cena
    }
    $.post("php/plans/createCenas.php", {
        data: JSON.stringify(ar)
      },
      function(data) {
        //console.log(data);
        ret = JSON.parse(data);
        //console.log(ret);
        toastr.options.closeButton = true;
        if (data == 1) {
          toastr.success("Cena Agregada");
        } else {
          toastr.error("Hubo un error al registrar la Cena");
        }
      });
  }

  function createMenuPlans(name, id) {
    var $name = name,
      $id = id;
    var ar = {
      name_menu: $name,
      id_user: $id
    }
    $.post("php/plans/createMenuPlans.php", {
        data: JSON.stringify(ar)
      },
      function(data) {
        console.log(data);
        ret = JSON.parse(data);
        //console.log(ret);
        toastr.options.closeButton = true;
        if (data == 1) {
          toastr.success("MenuPlans creado");
        } else {
          toastr.error("Hubo un error al registrar el MenuPlans");
        }
      });
  }

  //obteniendo los id de los platillos para luego ingresarilos en menu_dias
  function getIdDesayuno(textArea) {
    var $text = textArea
    var ar = {
      info: $text
    }
    $.post("php/plans/getIdDesayuno.php", {
        data: JSON.stringify(ar)
      },
      function(data) {
        var ret = JSON.parse(data);
        if (ret < 0) {
          toastr.options.closeButton = true;
          toastr.error("Ha ocurrido un error");
          return;
        }
        ret = ret[0];
        idDesayuno = ret["id_desayuno"];
        console.log("Last desayubo: " + idDesayuno);
      }
    ).fail(function(error) {
      toastr.options.closeButton = true;
      toastr.error("Ha ocurrido un error");
      return;
    });
  }

  function getIdColacion1(textArea) {
    var $text = textArea
    var ar = {
      info: $text
    }
    $.post("php/plans/getIdColacion1.php", {
        data: JSON.stringify(ar)
      },
      function(data) {
        var ret = JSON.parse(data);
        if (ret < 0) {
          toastr.options.closeButton = true;
          toastr.error("Ha ocurrido un error");
          return;
        }
        ret = ret[0];
        idColacion1 = ret["id_colacion1"];
        console.log("Last colacion1: " + idColacion1);
      }
    ).fail(function(error) {
      toastr.options.closeButton = true;
      toastr.error("Ha ocurrido un error");
      return;
    });
  }

  function getIdColacion2(textArea) {
    var $text = textArea
    var ar = {
      info: $text
    }
    $.post("php/plans/getIdColacion2.php", {
        data: JSON.stringify(ar)
      },
      function(data) {
        var ret = JSON.parse(data);
        if (ret < 0) {
          toastr.options.closeButton = true;
          toastr.error("Ha ocurrido un error");
          return;
        }
        ret = ret[0];
        idColacion2 = ret["id_colacion2"];
        console.log("Last colacion2: " + idColacion2);
      }
    ).fail(function(error) {
      toastr.options.closeButton = true;
      toastr.error("Ha ocurrido un error");
      return;
    });
  }

  function getIdCena(textArea) {
    var $text = textArea
    var ar = {
      info: $text
    }
    $.post("php/plans/getIdCena.php", {
        data: JSON.stringify(ar)
      },
      function(data) {
        var ret = JSON.parse(data);
        if (ret < 0) {
          toastr.options.closeButton = true;
          toastr.error("Ha ocurrido un error");
          return;
        }
        ret = ret[0];
        idCena = ret["id_cena"];
        console.log("Last cena: " + idCena);
      }
    ).fail(function(error) {
      toastr.options.closeButton = true;
      toastr.error("Ha ocurrido un error");
      return;
    });
  }

  function getIdComida(textArea) {
    var $text = textArea
    var ar = {
      info: $text
    }
    $.post("php/plans/getIdComida.php", {
        data: JSON.stringify(ar)
      },
      function(data) {
        var ret = JSON.parse(data);
        if (ret < 0) {
          toastr.options.closeButton = true;
          toastr.error("Ha ocurrido un error");
          return;
        }
        ret = ret[0];
        idComida = ret["id_comida"];
        console.log("Last comida: " + idComida);
      }
    ).fail(function(error) {
      toastr.options.closeButton = true;
      toastr.error("Ha ocurrido un error");
      return;
    });
  }

  function getIdMenuPlans(text) {
    var $text = text
    var ar = {
      menu_name: $text
    }
    //console.log(ar);
    $.post("php/plans/getIdMenuPlans.php", {
        data: JSON.stringify(ar)
      },
      function(data) {
        //console.log(data);
        var ret = JSON.parse(data);
        //console.log(ret);
        if (ret < 0) {
          toastr.options.closeButton = true;
          toastr.error("Ha ocurrido un error");
          return;
        }
        ret = ret[0];
        id_menuPlans = ret["id_menu"];
        //console.log("Last index: " + id_menuPlans);
      }
    ).fail(function(error) {
      toastr.options.closeButton = true;
      toastr.error("Ha ocurrido un error");
      return;
    });
  }

  //Cargando la lista de clientes en el select
  function loadClientes() {
    var ar = {
      offset: $("#clientes").data("offset")
    };
    $.post(
      "php/users/load.php", {
        data: JSON.stringify(ar)
      },
      function(data) {
        //console.log(data);
        var ret = JSON.parse(data);
        if (data < 0) {
          toastr.options.closeButton = true;
          toastr.error("Ha ocurrido un error");
          return;
        }

        $.each(ret, function(key, registro) {
          $("#clientes").append('<option value=' + registro.id_user + '>' + registro.user + '</option>');
        });


      }

    ).fail(function(error) {
      toastr.options.closeButton = true;
      toastr.error("Ha ocurrido un error");
      return;
    });
  }

  //guardarndo los id de los platillos en su respectivo dia
  function createMenuDia(id_dia, id_desayuno, id_colacion1, id_colacion2, id_comida, id_cena, id_menu) {
    var $id_dia = id_dia,
      $id_desayuno = id_desayuno,
      $id_colacion1 = id_colacion1,
      $id_colacion2 = id_colacion2,
      $id_cena = id_cena,
      $id_comida = id_comida,
      $id_menu = id_menu;
    var ar = {
      id_dia: $id_dia,
      id_desayuno: $id_desayuno,
      id_colacion1: $id_colacion1,
      id_colacion2: $id_colacion2,
      id_cena: $id_cena,
      id_comida: $id_comida,
      id_menu: $id_menu
    }
    console.log(ar);
    $.post("php/plans/createMenuDias.php", {
        data: JSON.stringify(ar)
      },
      function(data) {
        console.log(data);
        ret = JSON.parse(data);
        console.log(ret);
        toastr.options.closeButton = true;
        if (data == 1) {
          toastr.success("Menu Dia creado");
        } else {
          console.log("Hubo un error al registrar el Menu Dia");
          toastr.error("Hubo un error al registrar el Menu Dia");
        }
      });
  }
</script>

</html>