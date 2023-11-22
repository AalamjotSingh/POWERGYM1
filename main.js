function validate() {

  var name = document.getElementById("firsts").value
  var last = document.getElementById("lasts").value
  var email = document.getElementById("emails").value;
  if (name == "") {
    window.alert("Name required");
    return
  }
  else if (ValidateEmail(email)) {
    Window.alert("You are Subscribed to our news and promotions");

  }
  else {
    Window.alert("Please enter Valid Email address");

  }
}
function ValidateEmail(mail) {
  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)) {
    return (true)
  }
  alert(" Invalid email address was entered!")
  return (false)
}
function loaded() {
  var x = document.lastModified;
  document.getElementById("date").innerHTML = x;
  startTime();
}
function btclick() {
  var name = document.getElementById("fname").value
  var last = document.getElementById("lname").value
  var review = document.getElementById("subject").value;
  if (name == "") {
    window.alert("Name is required");

    return
  }
}
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('time').innerHTML =
    h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) { i = "0" + i };  // add zero in front of numbers < 10
  return i;
}
