$("#loginbtn").click(function(){
  var url = path+"/userLoginProcess";
  var username = $("#login-name").val();
  var password = $("#login-pass").val();
$.post(url,
  {username: username, password: password},
  function (data) {
      if (data.indexOf(',') > -1) {
      var res = data.split(",");
      status = res[0];
      message = res[1];
      $('#message').html(message);
      } else {
      window.location = path;
    }
  });
});
