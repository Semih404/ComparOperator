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

let dots = document.querySelectorAll(".dots span");
        let images = ["./images/tunis.jpeg" , "./images/tunis-1.jpeg", "images/tunis-2.jpeg" , "images/tunis-3.jpeg" , "images/tunis-4.jpeg" , "images/tunis-5.jpeg" , "images/tunis-6.jpeg" ];
        let myimage = document.querySelector("#image");
        let righticon = document.querySelector(".right");
        let lefticon = document.querySelector(".left");


        let count = 0;
        function next(a) {
            slide(count +=a);
        }
        function prev (a) {
            slide(count +=a);
        }

        function slide (e) {
            count = e;
            if(count > images.length -1) count = 0;
            if(count < 0) count = images.length -1;
            
            dots.forEach((n) => n.classList.remove("active"));
            dots[count].classList.add("active");
            myimage.setAttribute("src", images[count]);
        }
