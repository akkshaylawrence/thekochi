$(document).ready(function() {
	$('ul.tabs').tabs();
	$("#reg-link").click(function() {
		$('ul.tabs').tabs('select_tab', 'login');
	});
});
$("#regbtn").click(function(){
	var url = path+"/userRegisterProcess";
	var username = $("#usernamer").val();
	var username = $("#usernamer").val();
	var password = $("#passwordr").val();
	var cpassword = $("#passwordrc").val();
$.post(url,
	{username: username, password: password},
	function (data) {
		if (data.indexOf(',') > -1) {
		var res = data.split(",");
		status = res[0];
		message = res[1];
		$( ".card" ).effect( "shake",{distance:15} );
		$('#message').html(message);
		} else {
		window.location = base+'main';
		}
	});
});
