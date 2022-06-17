
function check() {
	if (document.getElementById('password').value ==
	  document.getElementById('cfrmpassword').value) {
	  document.getElementById('message').style.color = '#3ae374';
	  document.getElementById('message').innerHTML = 'Mot de passe conforme';
	} else {
	  document.getElementById('message').style.color = '#ff4d4d';
	  document.getElementById('message').innerHTML = 'Mot de passe non conforme';
	}
  }