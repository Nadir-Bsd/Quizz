const userPopup = document.querySelector('.userPopup');
const home = document.querySelector('.home');
const navbar = document.querySelector('.navbar');
const addUserButton = document.getElementById('addUserButton');
const pseudo = document.getElementById('pseudo');

userPopup.classList.add("active");
home.classList.add("active");
navbar.classList.add("active");
    
addUserButton.addEventListener("click", function() {
       const userPseudo = pseudo.value; 

    userPopup.classList.remove("active");
    home.classList.remove("active");
    navbar.classList.remove("active");
});


