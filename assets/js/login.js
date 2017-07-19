$("#loginbtn").click(function(){
  var url = path+"/userLoginProcess";
  var username = $("#login-name").val();
  var password = $("#login-pass").val();
$.post(url,{username: username, password: password});
});
