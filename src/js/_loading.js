function loading() {
  document.getElementById("js-loading").classList.remove("js-loading__active");
}
window.addEventListener("load", function() {
  setTimeout(loading, 500)
})
setTimeout(loading, 5000)
