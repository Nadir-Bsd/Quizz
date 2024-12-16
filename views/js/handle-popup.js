const startBtn = document.querySelector('.start-btn');
const popupInfo = document.querySelector('.popup-info');
const exitBtn = document.querySelector('.exit-btn');
// const home = document.querySelector('.home');
// const navbar = document.querySelector('.navbar');

startBtn.addEventListener("click", handleShowPopup);
exitBtn.addEventListener("click", handleClosePopup);

function handleShowPopup() {
    popupInfo.classList.add("active");
    home.classList.add("active");
    navbar.classList.add("active");
}

function handleClosePopup() {
    popupInfo.classList.remove("active");
    home.classList.remove("active");
    navbar.classList.remove("active");
}