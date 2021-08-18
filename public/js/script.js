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



function EffectMail(){

    let IconMail = document.querySelector(".container_login i.fa-user");

    IconMail.style.transform = "rotate(0deg)";
    IconMail.style.transition = "0.4s";

    setTimeout(function() {
        IconMail.style.transform = "rotate(30deg)";

        }, 100);
    
    setTimeout(function() {
        IconMail.style.transform = "rotate(-20deg)";
    
        }, 200);

    setTimeout(function() {
        IconMail.style.transform = "rotate(20deg)";

        }, 300);

    setTimeout(function() {
        IconMail.style.transform = "rotate(-20deg)";

        }, 400);

        setTimeout(function() {
        IconMail.style.transform = "rotate(20deg)";

        }, 500);
        
        setTimeout(function() {
        IconMail.style.transform = "rotate(0deg)";
        
        }, 600);
}

function EffectPassword(){

    let IconPassword = document.querySelector(".container_login i.fa-lock");

    IconPassword.style.transform = "rotate(0deg)";
    IconPassword.style.transition = "0.4s";

    setTimeout(function() {
        IconPassword.style.transform = "rotate(20deg)";

        }, 100);
    
    setTimeout(function() {
        IconPassword.style.transform = "rotate(-20deg)";
    
        }, 200);

    setTimeout(function() {
        IconPassword.style.transform = "rotate(20deg)";

        }, 300);

    setTimeout(function() {
        IconPassword.style.transform = "rotate(-20deg)";

        }, 400);

        setTimeout(function() {
        IconPassword.style.transform = "rotate(20deg)";

        }, 500);
        
        setTimeout(function() {
        IconPassword.style.transform = "rotate(0deg)";
        
        }, 600);
}