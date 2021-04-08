let menuBarBtn = document.getElementById("menuBar");
let menuCloseBtn = document.getElementById("menuCancel");
let navWrap = document.getElementById("mobile-nav");

menuBar.addEventListener("click", menuOpen);
menuCloseBtn.addEventListener("click", menuClose);

function menuOpen() {
    if (navWrap.style.width = "0%") {
        
        navWrap.style.width = "85%";
        menuCloseBtn.style.display = "block";
        menuBarBtn.style.display = "none";
    }
}

function menuClose() {
    if (navWrap.style.width = "85%") {
        
        navWrap.style.width = "0%";
        menuCloseBtn.style.display = "none";
        menuBarBtn.style.display = "block";
        
    }
}

// Dropdown Menu for Services on the Navbar Destop View

// let desktopDropdown = document.getElementById("desktop-dropdown");
// let desktopDropdownWrap = document.querySelector('.sub-menu-wrap');

// desktopDropdown.addEventListener("click", desktopDropdownFunction);

// function desktopDropdownFunction() {
    
//     desktopDropdownWrap.classList.toggle('desktop-hide');
    
// }


// Dropdown Menu for Services on the Navbar Mobile View

 let mobileDropdown = document.getElementById("mobile-dropdown");
 let mobileDropdownWrap = document.querySelector('.mobile-sub-menu');

mobileDropdown.addEventListener("click", mobileDropdownFunction);

function mobileDropdownFunction() {

    mobileDropdownWrap.classList.toggle('mobile-hide');
    
}
