// window.location.reload(false)
setInterval(() => {
	var display = document.getElementById("content");
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open("GET", "value.php");
	xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xmlhttp.send();
	xmlhttp.onreadystatechange = function() {
	    if (this.readyState === 4 && this.status === 200) {
	        display.innerHTML = this.responseText;
	    } else {
	        display.innerHTML = "Loading...";
	    };
	}
}, 1000);