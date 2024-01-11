// burger menu 

var mobileNavOpen = false;

document.getElementById("burger-menu").addEventListener("click", function () {
    mobileNavOpen = !mobileNavOpen;

    // console.log(mobileNavOpen);
    // console.log(document.querySelector(".croix"));
    if (mobileNavOpen) {
        document.querySelector(".croix").classList.add("croix-visible");
        document.querySelector(".burger").classList.add("burger-invisible");
        document.querySelector(".containNav").classList.add("containNav-visible");
    } else {
        console.log("false");
        document.querySelector(".croix").classList.remove("croix-visible");
        document.querySelector(".burger").classList.remove("burger-invisible");
        document.querySelector(".containNav").classList.remove("containNav-visible");
    }
});