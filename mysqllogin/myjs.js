function baloo() {
	var username = $("#namebox").val();
	var pass = $("#pass").val();
	
	var params = "usr=" + username + "&pass=" + pass;
	
	var xmlhttp = new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			if (xmlhttp.responseText.charAt(0) != "f") {
				$("#wellcon").html(xmlhttp.responseText);
			} else {
				$("#alert").removeClass("hidden");
				$("#alert").html(xmlhttp.responseText);
			};
		};
	};
	
	xmlhttp.open("POST", "login.php", true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.send(params);
};

$(document).ready(function() {
	$('.form-control').keydown(function(e) {
		var key = e.which;
		if (key == 13) {
			$("#subbtn").click(); 
		}
	});
});
