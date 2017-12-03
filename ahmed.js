function loadDoccher() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("maincontent").innerHTML =
        this.responseText;
    }
  };
  xhttp.open("GET", "blog.html", true);
  xhttp.send();
}