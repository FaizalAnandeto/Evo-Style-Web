//Navbar
const tb = document.querySelector('.tb')
const tbIcon = document.querySelector('.tb i')
const dm = document.querySelector('.dm')

tb.onclick = function () {
    dm.classList.toggle('open')
    const isOpen = dm.classList.contains('open')

    tbIcon.classList = isOpen
    ? 'fa-solid fa-xmark'
    : 'fa-solid fa-bars'
}
//navbar akhir

//Textjln
const txt = document.querySelector(".txt").cloneNode(true);

document.querySelector('.txtjln').appendChild(txt);
//Textjln akhir

//About Us kecil besar
const abs = document.getElementById('abs');

  window.addEventListener('resize', () => {
      const width = window.innerWidth;
      const height = window.innerHeight;

      abs.style.width = `${Math.min(width * 0.8, 620)}px`;
      abs.style.height = `${Math.min(height * 0.8, 200)}px`;
  });

  window.dispatchEvent(new Event('resize'));
  //About us kecil besar akhir

  
 
