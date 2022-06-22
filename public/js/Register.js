
// function check() {
// 	if (document.getElementById('password').value ==
// 		document.getElementById('cfrmpassword').value) {
// 		document.getElementById('message').style.color = '#3ae374';
// 		document.getElementById('message').innerHTML = 'Mot de passe conforme';
// 	} else {
// 		document.getElementById('message').style.color = '#ff4d4d';
// 		document.getElementById('message').innerHTML = 'Mot de passe non conforme';
// 	}
// }
var password = document.getElementById("password")
	, confirm_password = document.getElementById("cfrmpassword");


function validatePassword() {
	if (password.value != confirm_password.value) {
		confirm_password.setCustomValidity("Passwords Don't Match");
		return false;
	} else {
		confirm_password.setCustomValidity('');
		return true;
	}
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

function enableSubmitButton() {
	document.getElementById('submitButton').disabled = false;
}

function disableSubmitButton() {
	document.getElementById('submitButton').disabled = true;
}