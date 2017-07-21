$(document).ready(function () {
	$('ul.tabs').tabs();
	$("#reg-link").click(function () {
		$('ul.tabs').tabs('select_tab', 'login');
	});
});
$("#regbtn").click(function () {
	var url = path + "/userRegisterProcess";
	var fname = $("#fName").val();
	var username = $("#usernamer").val();
	var password = $("#passwordr").val();
	var cpassword = $("#passwordrc").val();
	var email = $("#emailc").val();
	if (password.length < 5) {
		$('#passwordr').addClass('invalid');
		event.preventDefault();
	} else {
		if (password !== cpassword) {
			$('#passwordrc').addClass('invalid');
			event.preventDefault();
		} else {
			$.ajax({
				type: 'post',
				url: url,
				data: {
					fname:fname,
					email:email,
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
						$('#message').html(message);
					} else {
						window.location = base + 'main';
					}
				}
			});
		}
	}
});
