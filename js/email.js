// Email validation
const ALERT = document.getElementById("email-validation");
function validateEmail() {
	// Regex copied from portfolio project
	const email = document.getElementById("email");
	let regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
	let s = email.value;
	if (regex.test(s)) {
		ALERT.innerHTML = "Email is valid";
		ALERT.style.display = "block";
		ALERT.style.color = "green";
	} else {
		// Regex not passed
		ALERT.innerHTML = "Email is not valid";
		ALERT.style.display = "block";
		ALERT.style.color = "red";
	}
}

// Accordion

const ACC = document.getElementById("accordion");
const PANEL = document.getElementById("panel");

function accordion() {
	ACC.classList.toggle("accordion-active");
	if (PANEL.style.display === "block") {
		PANEL.style.display = "none";
	} else {
		PANEL.style.display = "block";
	}
}
