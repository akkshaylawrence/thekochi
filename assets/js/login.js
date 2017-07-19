$("#loginbtn").click(function(){
	var url = path+"/userLoginProcess";
	console.log('------------------------------------');
	console.log(path);
	console.log('------------------------------------');
  var username = $("#login-name").val();
  var password = $("#login-pass").val();
$.post(url,{username: username, password: password});
});
