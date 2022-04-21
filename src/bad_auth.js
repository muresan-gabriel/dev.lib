let loginInputContainer = document.getElementById("loginInputContainer");
let errorMessageContainer = document.createElement("p");
let errorMessage = "Email or password is incorrect. Please try again.";

loginInputContainer.appendChild(errorMessageContainer);
errorMessageContainer.innerHTML = errorMessage;
