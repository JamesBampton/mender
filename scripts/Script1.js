// JavaScript source code

	function existsFunction() {
		var x = document.getElementById('snackbar');
		x.className = "show";
		setTimeout(function(){ x.className = x.className.replace("show", ""); }, 6000);
	}

	function notexistsFunction() {
		var x = document.getElementById('snackbar2');
		x.className = "show";
		setTimeout(function(){ x.className = x.className.replace("show", ""); }, 6000);
	}

