$(document).ready(function() {
	$("#namebox").focus();
	$('.form-control').keydown(function(e) {
		var key = e.which;
		if (key == 13) {
			$("#subbtn").click(); 
		}
	});
});

var xmlhttp = new XMLHttpRequest();
var username = $("#anamebox").val();
var pass = $("#pass").val();
var params = "usr=" + username + "&pass=" + pass;

function baloo() {
	username = $("#namebox").val();
	pass = $("#pass").val();
	params = "usr=" + username + "&pass=" + pass;

	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			if (xmlhttp.responseText.charAt(0) != "f") {
				$("#wellcon").html(xmlhttp.responseText);
				$("#createdb").focus();
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

function dbquery() {
 	
	var dbname = $("#dbname").val();
	xmlhttp.open("POST", "login.php", true);
		
	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			alert(xmlhttp.responseText);
		}
	}
	
	if ($("#createdb").prop('checked')) {
		params += "&db=create";
	} else if ($("#existingdb").prop('checked')) {
		params += "&db=existing";
	}
	params += "&dbname=" + dbname;
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.send(params);
};

