var lis = document.getElementsByTagName("");

for (var i = 0; i < lis.length; i++) {
  document.getElementById(lis[i].id).addEventListener("click", redireccionar);
}
