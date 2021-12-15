function validateForm() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  if (username == "") {
    document.getElementById("login").innerHTML="Enter your username properly";
    return false;
  }

  if ( password.length < 5) {
    document.getElementById("login").innerHTML="Enter your password properly";
    return false;
  }

}