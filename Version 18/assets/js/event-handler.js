// JavaScript Document
var elUsername = document.getElementById('username');
var elunGroup = document.getElementById('unGroup');
var elunMsg = document.getElementById('unfeedback');

var elPwd = document.getElementById('password');
var elpwGroup = document.getElementById('pwGroup');
var elpwMsg = document.getElementById('pwfeedback');

function checkInput(elInput, minLength, elGroup, elFeedback) {
	if (elInput.value.length < minLength) {
		elGroup.classList.add('has-error');
		elGroup.classList.remove('has-success');
		elFeedback.innerHTML = elInput.name + ' must be ' + minLength + ' characters or more';
	} 
	else {
		elGroup.classList.remove('has-error');
		elGroup.classList.add('has-success');
		elFeedback.innerHTML = '';
	}
}

// Attach event listeners for each input
elUsername.addEventListener('blur', function() {
	checkInput(elUsername, 5, elunGroup, elunMsg);
}, false);

elPwd.addEventListener('blur', function() {
	checkInput(elPwd, 5, elpwGroup, elpwMsg);
}, false);
