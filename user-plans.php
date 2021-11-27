<?php include 'header2.php' ?>
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
        </tbody>
      </table>
    </div>
  </section>
  <div class="d-flex flex-row-reverse">
    <button id="top" class="btnTop fas fa fa-chevron-up"></button>
  </div>

</body>
<?php
require_once "scripts.php";
?>
<script src="js/user-plans.js"></script>
<script src="js/menu.js"></script>

<script>
  (function(){
    var ar = {
      id_menu: 1
    }
    $.post("php/plans/load-plans.php",{
      data: JSON.stringify(ar)
    },function(data){
      var ret = JSON.parse(data);
      //console.log(ret);
      if (data < 0) {
        toastr.options.closeButton = true;
        toastr.error("Ha ocurrido un error");
        return;
      }
      for(i = 0; i< ret.length; i++){
        var dia = ret[i]["dia"];
        var desayuno = ret[i]["desayuno"];
        var colacion1 = ret[i]["colacion1"];
        var comida = ret[i]["comida"];
        var colacion2 = ret[i]["colacion2"];
        var cena = ret[i]["cena"];
        loadRow(i+1);
        cargarMenus(i+1, dia, desayuno, colacion1, comida, colacion2, cena);
      }
    }
    );
  }());

  function loadRow(i) {
    let menu = $("<tr>");
    $(menu).append($("<td>").addClass("dia").attr("id", i));
    $(menu).append($("<td>").addClass("desayuno").attr("id", i));
    $(menu).append($("<td>").addClass("colacion1").attr("id", i));
    $(menu).append($("<td>").addClass("comida").attr("id", i));
    $(menu).append($("<td>").addClass("colacion2").attr("id", i));
    $(menu).append($("<td>").addClass("cena").attr("id", i));
    $(menu).addClass("menu_dia").attr("id",i);
    $("#contenido").append(menu);
  }

  function cargarMenus(i, dia, desayuno, colacion1, comida, colacion2, cena) {   
    var menu_dia = document.getElementById(i),
    dia_td = menu_dia.getElementsByClassName("dia"),
    desayuno_td = menu_dia.getElementsByClassName("desayuno"),
    colacion1_td = menu_dia.getElementsByClassName("colacion1"),
    comida_td = menu_dia.getElementsByClassName("comida"),
    colacion2_td = menu_dia.getElementsByClassName("colacion2"),
    cena_td = menu_dia.getElementsByClassName("cena");

    $(dia_td).text(dia);
    $(desayuno_td).text(desayuno);
    $(colacion1_td).text(colacion1);
    $(comida_td).text(comida);
    $(colacion2_td).text(colacion2);
    $(cena_td).text(cena);
      
  }
</script>

</html>