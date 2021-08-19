let password = document.getElementById("inputPassword") ;
let checkPassword = document.getElementById("inputPasswordCheck") ;

let msg = document.getElementById("message") ;


let slider = document.querySelector(".int_slider");
let style = window.getComputedStyle(slider, null).width;
let s = window.getComputedStyle(slider);

password.addEventListener('keyup', function(){   // Merci Nina !!
    let matches = [];
    
    let nombreMinuscule = /[a-z]/g;
    if(password.value.match(nombreMinuscule)) { 
        matches.push(true);
            console.log(this.value);
    }

    let nombreMajuscule = /[A-Z]/g;
    if(password.value.match(nombreMajuscule)) {  
        matches.push(true);
    } 

    let nombres = /[0-9]/g;
    if(password.value.match(nombres)) {  
        matches.push(true);
    } 
    
    if(password.value.length >= 8) {
        matches.push(true);
    } 

    console.log(matches);
    //nombre de quart a mettre: 
    let quarts = matches.length;
    let px = 62.5 * quarts + 'px';
    console.log(px);

    slider.style.width = px == "0px" ? "15%" : px;

    let bgColor = 'red';
    if(matches.length == 1) {
        bgColor = 'orange';
    }
    else if(matches.length == 2) {
        bgColor = 'blue';
    }
    else if(matches.length == 3) {
        bgColor = 'green';
    }
    else if(matches.length == 4) {
        bgColor = 'brown';
    }
    slider.style.backgroundColor = bgColor;


})

checkPassword.addEventListener('keyup', function() {
    

    if (password.value === checkPassword.value) {
        msg.style.color="green";
        msg.innerHTML="Le mot de passe correspond";
    }

    else{
        msg.style.color="red";
        msg.innerHTML="Le mot de passe ne correspond pas";
    }


})