$(document).ready(function () {
	$('ul.tabs').tabs();
});
$("#loginbtn").click(function () {
	var url = path + "/userLoginProcess";
	var username = $("#login-name").val();
	var password = $("#login-pass").val();
	$.ajax({
		type: 'post',
		url: url,
		data: {
			username: username,
			password: password
		},
		success: function (data) {
			if (data.indexOf(',') > -1) {
				var res = data.split(",");
				status = res[0];
				message = res[1];
				$(".card").effect("shake", {
					distance: 10
				});
				$("#message").css("color", "red");
				$('#message').html(message);
			} else {
				window.location = base + 'main';
			}
		}
	});
});
