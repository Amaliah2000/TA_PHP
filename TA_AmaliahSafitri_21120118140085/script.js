function preventnumberinput(e) {
	let keyCode = (e.keyCode ? e.keyCode : e.which);
	if (keyCode > 47 && keyCode < 58) {
		e.preventDefault();
	}
}

$(document).ready(function() {
	$('#nama').keypress(function(e) {
		preventnumberinput(e);
	});
})