$(document).ready(function () {

  $("#annonce_sn_annonce");  
  $("._annonce").show();

    $("#catCar");
    $("#catCar .fa-car-side").addClass("notActive");
    $("#hr_catCar").addClass("hr_Notactive");
    
    $("#catBike");
    $("#catBike .fa-motorcycle").addClass("notActive");
    $("#hr_catBike").addClass("hr_Notactive");

    $("#catBoat");
    $("#catBoat .fa-anchor").addClass("notActive");
    $("#hr_catBoat").addClass("hr_Notactive");

    $("#catHouse");
    $("#catHouse .fa-building").addClass("notActive");
    $("#hr_catHouse").addClass("hr_Notactive");

    $("#catOther");
    $("#catOther .fa-folder-open").addClass("notActive");
    $("#hr_catOther").addClass("hr_Notactive");

    $("._annonceCar").hide();
    $("._annonceBike").hide();
    $("._annonceBoat").hide();
    $("._annonceHouse").hide();
    $("._annonceOther").hide();
  
    var show_speed = 900;
    var hide_speed = 0;
  
    var tab1_isvisible = true;
    var tab2_isvisible = false;
    var tab3_isvisible = false;
    var tab4_isvisible = false;
    var tab5_isvisible = false;
    var tab6_isvisible = false;


  
    $("#annonce_sn_annonce").click(function () {
      hideA(1);
    });
    $("#catCar").click(function () {
      hideA(2);
    });
    $("#catBike").click(function () {
      hideA(3);
    });
    $("#catBoat").click(function () {
      hideA(4);
    });
    $("#catHouse").click(function () {
      hideA(5);
    });
    $("#catOther").click(function () {
      hideA(6);
    });
    
    function hideA(id) {
      switch (id) {
        case 1:
          if (tab2_isvisible) {
            $("._annonceCar").fadeOut(hide_speed);
            tab2_isvisible = false;
            $("#catCar .fa-car-side").removeClass("active");
            $("#catCar .fa-car-side").addClass("notActive");
            $("#hr_catCar").removeClass("hr_active");
            $("#hr_catCar").addClass("hr_notActive");
          }
          if (!tab1_isvisible) {
            $("._annonce").fadeIn(show_speed);
            tab1_isvisible = true;
            tab3_isvisible = true;
            tab4_isvisible = true;
            tab5_isvisible = true;

          }
          break;
        case 2:
          if (tab1_isvisible) {
            $("._annonce").fadeOut(hide_speed);
            tab1_isvisible = false;

          }
          if (!tab2_isvisible) {
            $("._annonceCar").fadeIn(show_speed);
            $("#catCar .fa-car-side").addClass("active");
            $("#catCar .fa-car-side").removeClass("notActive");
            $("#hr_catCar").addClass("hr_active");
            $("#hr_catCar").removeClass("hr_notActive");
            tab2_isvisible = true;
            tab3_isvisible = true;
            tab4_isvisible = true;
            tab5_isvisible = true;
          }
          break;
          case 3:
            if (tab3_isvisible) {
              $("._annonceBike").fadeOut(hide_speed);
              tab3_isvisible = false;
  
            }
            if (!tab3_isvisible) {
              $("._annonceBike").fadeIn(show_speed);
              $("#catCar .fa-motorcycle").addClass("active");
              $("#catCar .fa-motorcycle").removeClass("notActive");
              $("#hr_catBike").addClass("hr_active");
              $("#hr_catBike").removeClass("hr_notActive");
              tab1_isvisible = true;
              tab2_isvisible = true;
              tab4_isvisible = true;
              tab5_isvisible = true;
            }
            break;
      }
    }
  }); 