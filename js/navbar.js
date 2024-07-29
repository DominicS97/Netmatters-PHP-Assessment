//
// NAVBAR
//
const navbar = document.getElementById("navbar");
const navbutt = document.getElementById("icon-nav");
navbar.style.display = "none";
// prettier-ignore not working
function navbarToggle() {
	if (navbar.style.display === "none") {
		navbar.style.display = "block";
		// 		navbutt.style.setProperty("--navCont", "\2716");
	} else {
		navbar.style.display = "none";
		// 		navbutt.style.setProperty("--navCont", "\e90d");
	}
}
