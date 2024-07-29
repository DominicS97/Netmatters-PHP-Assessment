const SAVE_COOKIE = "cookie"; // save key for local storage of cookies

//
// COOKIES
//

const popup = document.getElementById("cookie-popup");
let cookie = localStorage.getItem(SAVE_COOKIE);
popup.style.display = "grid";

if (!cookie) {
	cookie = false;
	localStorage.setItem(SAVE_COOKIE, cookie);
}

function acceptCookie() {
	cookie = true;
	localStorage.setItem(SAVE_COOKIE, cookie);
	popup.style.display = "none";
}

function popupCookie() {
	popup.style.display = "grid";
}

if (cookie === "true") {
	popup.style.display = "none";
}
