"use strict";

// const heartIconContainer = document.querySelectorAll("#favouriteIconContainer");
// const heartIcon = document.querySelectorAll("#favouriteIcon");

// console.log(heartIcon, heartIconContainer);

// function addToFavourites() {
//   for (let i = 0; i <= heartIcon.length - 1; i++) {
//     if (heartIcon[i].getAttribute("src") == "src/img/heart.svg") {
//       heartIcon[i].src = "src/img/heart-fill.svg";
//     } else {
//       heartIcon[i].src = "src/img/heart.svg";
//     }
//   }
// }

// for (let i = 0; i <= heartIcon.length - 1; i++)
//   heartIconContainer[i].addEventListener("click", addToFavourites);

//   FIX FAVOURITE ICON
// LOOP NOT PROPERLY WORKING, FAVOURITING ONE ASSET TURNS ON OTHER ASSET ASWELL

// NAVBAR EXPLORATION

const note = document.querySelector(".navbar-exploration");

document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("scroll", function () {
    if (window.scrollY > 50) {
      document.getElementById("navExplore").classList.add("sticky-top");
      // add padding top to show content behind navbar
      document.getElementById("navExplore").style.cssText +=
        "backdrop-filter: blur(15px) saturate(160%) contrast(45%) brightness(90%);border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;box-shadow: 10px 5px 20px #000000 0.3;";
    } else {
      document.getElementById("navExplore").classList.remove("sticky-top");
      // remove padding top from body
      document.body.style.paddingTop = "0";
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("scroll", function () {
    if (window.scrollY < 50) {
      document.getElementById("navExplore").classList.remove("sticky-top");
      // add padding top to show content behind navbar
      document.getElementById("navExplore").style.cssText -=
        "backdrop-filter: blur(15px) saturate(160%) contrast(45%) brightness(90%);border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;box-shadow: 10px 5px 20px #000000 0.3;";
    } else {
      document.getElementById("navExplore").classList.add("sticky-top");
      // remove padding top from body
      document.body.style.paddingTop = "0";
    }
  });
});
