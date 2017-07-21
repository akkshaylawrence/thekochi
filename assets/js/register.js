$("#tabreg").click(function () {
	$('#formhead').text("Join Us!");
});
$("#tablog").click(function () {
	$('#formhead').text("Login");
});
$("#reg-link").click(function () {
	$('ul.tabs').tabs('select_tab', 'login');
});
$("#regbtn").on('click', function (event) {
	var url = path + "/userRegProcess";
	var fname = $("#fName").val();
	var username = $("#usernamer").val();
	var phone = $("#phoner").val();
	var email = $("#emailr").val();
	var password = $("#passwordr").val();
	var cpassword = $("#passwordrc").val();
	if (password.length < 5) {
		$('#passwordr').focus();
		$('#passwordr').addClass('invalid');
		event.preventDefault();
	} else {
		if (password !== cpassword) {
			$('#passwordrc').focus();
			$('#passwordrc').addClass('invalid');
			event.preventDefault();
		} else {
			$.ajax({
				type: 'post',
				url: url,
				data: {
					fname: fname,
					username: username,
					phone: phone,
					email: email,
					password: password
				},
				success: function (data) {
					var res = data.split(",");
					status = res[0];
					message = res[1];
					if (status == false) {
						$(".card").effect("shake", {
							distance: 10
						});
						$("#message").css("color", "red");
						$('#message').html(message);
					}
					else if(status == true){
						$("#message").css("color", "green");
						$('#message').html(message);
						$('#regform')[0].reset();
						$('ul.tabs').tabs('select_tab', 'login');
					}
				}
			});
		}
	}
});
