$(document).ready(function () {
	$('ul.tabs').tabs();
	$("#reg-link").click(function () {
		$('ul.tabs').tabs('select_tab', 'login');
	});
});
$("#regbtn").click(function () {
	var url = path + "/userRegProcess";
	var fname = $("#fName").val();
	var username = $("#usernamer").val();
	var phone = $("#phoner").val();
	var email = $("#emailr").val();
	var password = $("#passwordr").val();
	var cpassword = $("#passwordrc").val();
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
					username: username,
					phone:phone,
					email:email,
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
