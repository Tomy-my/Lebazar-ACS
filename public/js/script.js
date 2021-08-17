let body = document.querySelector("body");

//Menu burger MOBILE
let navigation = document.querySelector("nav");

let homeLogo = document.querySelector("#homeLogo");
let homeText = document.querySelector("#homeText");

let hrContainer = document.querySelector(".burger_menu");
let slideTop = document.querySelector("#burger_slide1");
let slideMid = document.querySelector("#burger_slide2");
let slideBot = document.querySelector("#burger_slide3");

let menuCl = document.querySelector(".burger_cl");
let exitBurger = document.querySelector("#exit_burger");

hrContainer.addEventListener("click", function() {

    slideTop.style.width = "0px";

    setTimeout(function() {
        slideMid.style.width = "0px";
        }, 200);

        setTimeout(function() {
            slideBot.style.width = "0px";
            }, 400);
            
            setTimeout(function() {
                hrContainer.style.display = "none";
                }, 1000);

                setTimeout(function() {
                    navigation.style.height = "100vh";

                    body.style.overflowY = "hidden";

                    scrollHaut = window.pageYOffset; 
                    scrollGauche = window.pageXOffset;
                        window.onscroll = function() 
                        { 
                        window.scrollTo(scrollGauche, scrollHaut); 
                        }; 
                    }, 1100);

                    setTimeout(function() {
                        exitBurger.style.display = "block";
                        exitBurger.style.opacity = "0";
                        
                        menuCl.style.display = "flex";
                        menuCl.style.opacity = "0";
                        }, 1400);

                        setTimeout(function() {
                            exitBurger.style.opacity = "1";
                            
                            menuCl.style.opacity ="1";
                            }, 1600);
})

exitBurger.addEventListener("click", function() {
    
    exitBurger.style.opacity = "0";
    menuCl.style.opacity = "0";

    setTimeout(function() {
        exitBurger.style.display = "none";
        menuCl.style.display = "none";

        navigation.style.height = "110px";
        }, 400);
            
            setTimeout(function() {
                hrContainer.style.display = "flex";
                }, 700);

                setTimeout(function() {
                    slideTop.style.width = "63px";
                    }, 900);

                    setTimeout(function() {
                        slideMid.style.width = "63px";
                        }, 1100);
            
                        setTimeout(function() {
                            slideBot.style.width = "63px";
                            }, 1300);
                        
                            setTimeout(function() {
                                body.style.overflowY = "scroll"

                                window.onscroll = function() {};
                                }, 1500);
})