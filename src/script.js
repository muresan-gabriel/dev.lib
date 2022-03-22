function changeImage() {
  if (document.getElementById("favouriteIcon").src == "src/img/heart.svg") {
    document.getElementById("favouriteIcon").src = "src/img/heart-fill.svg";
  } else {
    document.getElementById("favouriteIcon").src = "src/img/heart.svg";
  }
}
