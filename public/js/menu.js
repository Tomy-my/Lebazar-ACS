$(document).ready(function () {

    $(".container_myAnnonce").show();
    $("#sn_annonce");
    $("#sn_annonce .fa-book-open").addClass("active");
    $("#hr_annonce").addClass("hr_active");
    $(".container_myFavoris").hide();
    $("#sn_favoris");
    $("#sn_favoris .fa-heart").addClass("notActive");
    $("#hr_favoris").addClass("hr_notActive");
  
    var show_speed = 900;
    var hide_speed = 0;
  
    var tab1_isvisible = true;
    var tab2_isvisible = false;
  
    $("#sn_annonce").click(function () {
      hideA(1);
    });
    $("#sn_favoris").click(function () {
      hideA(2);
    });
    
    function hideA(id) {
      switch (id) {
        case 1:
          if (tab2_isvisible) {
            $(".container_myFavoris").fadeOut(hide_speed);
            tab2_isvisible = false;
            $("#sn_favoris .fa-heart").removeClass("active");
            $("#sn_favoris .fa-heart").addClass("notActive");
            $("#hr_favoris").removeClass("hr_active");
            $("#hr_favoris").addClass("hr_notActive");
          }
          if (!tab1_isvisible) {
            $(".container_myAnnonce").fadeIn(show_speed);
            tab1_isvisible = true;
            $("#sn_annonce .fa-book-open").addClass("active");
            $("#sn_annonce .fa-book-open").removeClass("notActive");
            $("#hr_annonce").addClass("hr_active");
            $("#hr_annonce").removeClass("hr_notActive");
          }
          break;
        case 2:
          if (tab1_isvisible) {
            $(".container_myAnnonce").fadeOut(hide_speed);
            tab1_isvisible = false;
            $("#sn_annonce .fa-book-open").removeClass("active");
            $("#sn_annonce .fa-book-open").addClass("notActive");
            $("#hr_annonce").addClass("hr_notActive");
            $("#hr_annonce").removeClass("hr_active");
          }
          if (!tab2_isvisible) {
            $(".container_myFavoris").fadeIn(show_speed);
            $("#sn_favoris .fa-heart").addClass("active");
            $("#sn_favoris .fa-heart").removeClass("notActive");
            $("#hr_favoris").addClass("hr_active");
            $("#hr_favoris").removeClass("hr_notActive");
            tab2_isvisible = true;
          }
          break;
      }
    }
  }); 


  var iLongueur, iLongueurRestante;
  iLongueur = document.querySelector('.flm').textContent.length;
  if (iLongueur>120) {
     document.querySelector('.flm').textContent = document.querySelector('.flm').textContent.substring(0,120);
     iLongueurRestante = 0;
  }
  else {
     iLongueurRestante = 120 - iLongueur;
  }

  let allp = document.querySelectorAll('.flm');
  for (let i=0; i < allp.length; i++)
  {
      allp[i].textContent = allp[i].textContent.substring(0,120) + "...";
  };
