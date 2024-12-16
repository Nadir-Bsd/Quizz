const userPopup = document.querySelector(".userPopup");
const navbar = document.querySelector(".navbar");
const addUserButton = document.querySelector(".addUserButton");
const pseudo = document.getElementById("pseudo");
const home = document.querySelector(".home");

userPopup?.classList.add("active");
navbar?.classList.add("active");
home?.classList.add("active");

addUserButton?.addEventListener("click", function () {
  const userPseudo = pseudo.value;
  home?.classList.remove("active");
  userPopup.classList.remove("active");
  navbar.classList.remove("active");
});
