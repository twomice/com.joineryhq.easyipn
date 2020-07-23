function copyIPN() {
  var copyText = document.getElementById("easyipn-url");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Notification URL successfully copied");
}
