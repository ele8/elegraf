//MOBILE MENU
function openNav() {
    document.getElementById("menu-mobile").style.width = "250px";
  }

  function closeNav() {
    document.getElementById("menu-mobile").style.width = "0";

  }

let elem = document.querySelector('.blog-carousel');
let flkty = new Flickity( elem, {
  // options
  cellAlign: 'center',
  contain: true
});
