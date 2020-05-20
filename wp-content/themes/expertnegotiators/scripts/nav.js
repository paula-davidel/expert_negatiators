const navbarToggle = document.getElementById("navbar-mobile-toggle");
const navbarToggle_1 = document.getElementById("navbar-line-1");
const navbarToggle_2 = document.getElementById("navbar-line-2");
const navbar = Array.from(document.getElementsByClassName("mobile-hide"));

navbarToggle.addEventListener("click", () => {

    if (navbarToggle_1.classList.contains("line_1_animation_1")) {
        navbarToggle_1.classList.add("line_1_animation_2");
        navbarToggle_2.classList.add("line_2_animation_2");
        navbarToggle_1.classList.remove("line_1_animation_1");
        navbarToggle_2.classList.remove("line_2_animation_1");
    } else if (navbarToggle_1.classList.contains("line_1_animation_2")) {
        navbarToggle_1.classList.remove("line_1_animation_2");
        navbarToggle_2.classList.remove("line_2_animation_2");
        navbarToggle_1.classList.add("line_1_animation_1");
        navbarToggle_2.classList.add("line_2_animation_1");
    } else {
        navbarToggle_1.classList.add("line_1_animation_1");
        navbarToggle_2.classList.add("line_2_animation_1");
    }

    
    console.log(navbar);
    navbar.forEach( elem => elem.classList.toggle("mobile-hide"))
   // navigationContent.classList.toggle("hide");
})



