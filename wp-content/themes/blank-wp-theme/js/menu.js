document.addEventListener('DOMContentLoaded', () =>{
  const hamburger= document.querySelector(".hamburger__lines a");
  const menu = document.querySelector('.menu');

  function toggleMenu() {

    if(this.classList.contains('active-menu')){
      this.classList.remove('active-menu')
        menu.style.opacity = '0';
        menu.style.visibility = 'hidden';
        menu.style.transition = 'visibility 0.2s, opacity 0.2s linear';
      }
      else{
      this.classList.add('active-menu')
        menu.style.opacity = '1';
        menu.style.visibility = 'visible';
      }

  }

hamburger.addEventListener("click", toggleMenu);

})