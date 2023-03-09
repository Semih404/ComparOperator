let searchBtn = document.querySelector("#search-btn");
let searchForm = document.querySelector(".search-from");
let loginForm = document.querySelector(".login-form");
let menuBar = document.querySelector("#menu-bar");
let lienMenu = document.querySelector(".voyage-lien");
let videoBtn = document.querySelectorAll(".video-btn");

function showbar() {
    searchBtn.classList.toggle("fa-times");//toggle Càd changer

    searchForm.classList.toggle("active");
}

function showform() {
    loginForm.classList.add("active");
}

function hideform() {
    loginForm.classList.remove("active");
}

function showmenu() {
    menuBar.classList.toggle("fa-times");
    lienMenu.classList.toggle("active");
}

videoBtn.forEach (slide =>{
    slide.addEventListener("click" , function(){
        document.querySelector(".controls .blue").classList.remove("blue")
        slide.classList.add("blue")
        let videoSrc = slide.getAttribute("data-src");
        document.querySelector("#video-slider").src = videoSrc
    })
})
