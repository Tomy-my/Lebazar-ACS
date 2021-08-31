// Selectionne les menus 
let annonceAll = document.querySelector("#annonce_sn_annonce");
let car = document.querySelector("#catCar");
let bike = document.querySelector("#catBike");
let boat = document.querySelector("#catBoat");
let house = document.querySelector("#catHouse");
let other = document.querySelector("#catOther");

// Selectionne les actifs des menus 
let icoCar = document.querySelector(".fa-car-side");
let hrCar = document.querySelector("#hr_catCar");

let icoBike = document.querySelector(".fa-motorcycle");
let hrBike = document.querySelector("#hr_catBike");

let icoBoat = document.querySelector(".fa-anchor");
let hrBoat = document.querySelector("#hr_catBoat");

let icoHouse = document.querySelector(".fa-building");
let hrHouse = document.querySelector("#hr_catHouse");

let icoOther = document.querySelector(".fa-folder-open");
let hrOther = document.querySelector("#hr_catOther");

// Selectionne les container des catégories 
let containerAnnonce = document.querySelector(".annonceAll");
let containerCar = document.querySelector(".ct_annonceCar");
let containerBike = document.querySelector(".ct_annonceBike");
let containerBoat = document.querySelector(".ct_annonceBoat");
let containerHouse = document.querySelector(".ct_annonceHouse");
let containerOther = document.querySelector(".ct_annonceOther");


//On affiche ceux appartenant à la catégorie Voiture
annonceAll.addEventListener("click", function(){

  //On fait disparaitre tous les autres actifs
  icoCar.style.color = "#575757";
  hrCar.style.backgroundColor = "rgba(255, 85, 0, 0)";

  icoBike.style.color = "#575757";
  hrBike.style.backgroundColor = "rgba(255, 85, 0, 0)";

  icoBoat.style.color = "#575757";
  hrBoat.style.backgroundColor = "rgba(255, 85, 0, 0)";

  icoHouse.style.color = "#575757";
  hrHouse.style.backgroundColor = "rgba(255, 85, 0, 0)";

  icoOther.style.color = "#575757";
  hrOther.style.backgroundColor = "rgba(255, 85, 0, 0)";


  //On fait disparaitre les container
  containerCar.style.opacity = "0";
  containerBike.style.opacity = "0";
  containerBoat.style.opacity = "0";
  containerHouse.style.opacity = "0";
  containerOther.style.opacity = "0";

  //On supprime 
  setTimeout(function (){
    containerCar.style.display = "none";
    containerBike.style.display = "none";
    containerBoat.style.display = "none";
    containerHouse.style.display = "none";
    containerOther.style.display = "none";
  },700);


  //Et on affiche
  setTimeout(function (){
    containerAnnonce.style.display = "flex";
  },750);

  setTimeout(function (){
    containerAnnonce.style.opacity = "1";

  },800);
})


//On affiche ceux appartenant à la catégorie Voiture
car.addEventListener("click", function(){
  //On active le bouton selectionner
  icoCar.style.color = "#f50";
  hrCar.style.backgroundColor = "#f50";


  //On fait disparaitre tous les autres actifs
  icoBike.style.color = "#575757";
  hrBike.style.backgroundColor = "rgba(255, 85, 0, 0)";

  icoBoat.style.color = "#575757";
  hrBoat.style.backgroundColor = "rgba(255, 85, 0, 0)";

  icoHouse.style.color = "#575757";
  hrHouse.style.backgroundColor = "rgba(255, 85, 0, 0)";

  icoOther.style.color = "#575757";
  hrOther.style.backgroundColor = "rgba(255, 85, 0, 0)";


  //On fait disparaitre les container
  containerAnnonce.style.opacity = "0";
  containerBike.style.opacity = "0";
  containerBoat.style.opacity = "0";
  containerHouse.style.opacity = "0";
  containerOther.style.opacity = "0";

  //On supprime 
  setTimeout(function (){
    containerAnnonce.style.display = "none";
    containerBike.style.display = "none";
    containerBoat.style.display = "none";
    containerHouse.style.display = "none";
    containerOther.style.display = "none";
  },700);


  //Et on affiche
  setTimeout(function (){
    containerCar.style.display = "flex";
  },750);

  setTimeout(function (){
    containerCar.style.opacity = "1";

  },800);
})


//On affiche ceux appartenant à la catégorie Moto
bike.addEventListener("click", function(){
  //On active le bouton selectionner
  icoBike.style.color = "#f50";
  hrBike.style.backgroundColor = "#f50";


  //On fait disparaitre tous les autres actifs
  icoCar.style.color = "#575757";
  hrCar.style.backgroundColor = "rgba(255, 85, 0, 0)";

  icoBoat.style.color = "#575757";
  hrBoat.style.backgroundColor = "rgba(255, 85, 0, 0)";

  icoHouse.style.color = "#575757";
  hrHouse.style.backgroundColor = "rgba(255, 85, 0, 0)";

  icoOther.style.color = "#575757";
  hrOther.style.backgroundColor = "rgba(255, 85, 0, 0)";


  //On fait disparaitre les container
  containerAnnonce.style.opacity = "0";
  containerCar.style.opacity = "0";
  containerBoat.style.opacity = "0";
  containerHouse.style.opacity = "0";
  containerOther.style.opacity = "0";

  //On supprime 
  setTimeout(function (){
    containerAnnonce.style.display = "none";
    containerCar.style.display = "none";
    containerBoat.style.display = "none";
    containerHouse.style.display = "none";
    containerOther.style.display = "none";
  },700);


  //Et on affiche
  setTimeout(function (){
    containerBike.style.display = "flex";
  },750);

  setTimeout(function (){
    containerBike.style.opacity = "1";

  },800);
})


//On affiche ceux appartenant à la catégorie Nautique
boat.addEventListener("click", function(){
  //On active le bouton selectionner
  icoBoat.style.color = "#f50";
  hrBoat.style.backgroundColor = "#f50";


  //On fait disparaitre tous les autres actifs
  icoCar.style.color = "#575757";
  hrCar.style.backgroundColor = "rgba(255, 85, 0, 0)";

  icoBike.style.color = "#575757";
  hrBike.style.backgroundColor = "rgba(255, 85, 0, 0)";

  icoHouse.style.color = "#575757";
  hrHouse.style.backgroundColor = "rgba(255, 85, 0, 0)";

  icoOther.style.color = "#575757";
  hrOther.style.backgroundColor = "rgba(255, 85, 0, 0)";


  //On fait disparaitre les container
  containerAnnonce.style.opacity = "0";
  containerCar.style.opacity = "0";
  containerBike.style.opacity = "0";
  containerHouse.style.opacity = "0";
  containerOther.style.opacity = "0";

  //On supprime 
  setTimeout(function (){
    containerAnnonce.style.display = "none";
    containerCar.style.display = "none";
    containerBike.style.display = "none";
    containerHouse.style.display = "none";
    containerOther.style.display = "none";
  },700);


  //Et on affiche
  setTimeout(function (){
    containerBoat.style.display = "flex";
  },750);

  setTimeout(function (){
    containerBoat.style.opacity = "1";

  },800);
})


//On affiche ceux appartenant à la catégorie House
house.addEventListener("click", function(){
  //On active le bouton selectionner
  icoHouse.style.color = "#f50";
  hrHouse.style.backgroundColor = "#f50";


  //On fait disparaitre tous les autres actifs
  icoCar.style.color = "#575757";
  hrCar.style.backgroundColor = "rgba(255, 85, 0, 0)";

  icoBike.style.color = "#575757";
  hrBike.style.backgroundColor = "rgba(255, 85, 0, 0)";

  icoBoat.style.color = "#575757";
  hrBoat.style.backgroundColor = "rgba(255, 85, 0, 0)";

  icoOther.style.color = "#575757";
  hrOther.style.backgroundColor = "rgba(255, 85, 0, 0)";


  //On fait disparaitre les container
  containerAnnonce.style.opacity = "0";
  containerCar.style.opacity = "0";
  containerBike.style.opacity = "0";
  containerBoat.style.opacity = "0";
  containerOther.style.opacity = "0";

  //On supprime 
  setTimeout(function (){
    containerAnnonce.style.display = "none";
    containerCar.style.display = "none";
    containerBike.style.display = "none";
    containerBoat.style.display = "none";
    containerOther.style.display = "none";
  },700);


  //Et on affiche
  setTimeout(function (){
    containerHouse.style.display = "flex";
  },750);

  setTimeout(function (){
    containerHouse.style.opacity = "1";

  },800);
})


//On affiche ceux appartenant à la catégorie Other
other.addEventListener("click", function(){
  //On active le bouton selectionner
  icoOther.style.color = "#f50";
  hrOther.style.backgroundColor = "#f50";


  //On fait disparaitre tous les autres actifs
  icoCar.style.color = "#575757";
  hrCar.style.backgroundColor = "rgba(255, 85, 0, 0)";

  icoBike.style.color = "#575757";
  hrBike.style.backgroundColor = "rgba(255, 85, 0, 0)";

  icoBoat.style.color = "#575757";
  hrBoat.style.backgroundColor = "rgba(255, 85, 0, 0)";

  icoHouse.style.color = "#575757";
  hrHouse.style.backgroundColor = "rgba(255, 85, 0, 0)";


  //On fait disparaitre les container
  containerAnnonce.style.opacity = "0";
  containerCar.style.opacity = "0";
  containerBike.style.opacity = "0";
  containerBoat.style.opacity = "0";
  containerHouse.style.opacity = "0";

  //On supprime 
  setTimeout(function (){
    containerAnnonce.style.display = "none";
    containerCar.style.display = "none";
    containerBike.style.display = "none";
    containerBoat.style.display = "none";
    containerHouse.style.display = "none";
  },700);


  //Et on affiche
  setTimeout(function (){
    containerOther.style.display = "flex";
  },750);

  setTimeout(function (){
    containerOther.style.opacity = "1";

  },800);
})