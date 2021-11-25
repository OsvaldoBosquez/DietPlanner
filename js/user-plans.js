var btnTop = document.getElementById("top");
function scrollTop(){
  window.scrollTo({ top: 0, behavior: 'smooth' });
}
btnTop.addEventListener('click', scrollTop);