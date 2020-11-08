window.addEventListener('load',()=> {
  const grid = new Muuri(".grid", {
    layout: {
      rounding: false,
    },
  });
})
window.addEventListener('DOMContentLoaded',()=> {
  const searchBar = document.querySelector('')
  const pictures = document.querySelectorAll('.picture-wrapper');
  pictures.forEach(picture => {
    picture.addEventListener('click', clickOnPicture);
  });
  
  function clickOnPicture(e) {
    e.preventDefault();
    showOverlay(e.target);
  }
  
  function showOverlay(picture) {
    const pictureFullResDir = picture.parentNode.getAttribute('href');
    const div = document.createElement('div');
    div.setAttribute("class", "overlay");
    div.innerHTML = `
      <div class= "overlay__close-btn-wrapper content">
        <button class = "overlay__close-btn"><img src="img/btn-close.svg"></button>
      </div>
      <div class= "overlay__image-wrapper content">
        <img class= "overlay__image" src= "${pictureFullResDir}">
      </div>
    `;
    document.body.appendChild(div);
    const overlayCloseBtn = document.querySelector('.overlay__close-btn');
    overlayCloseBtn.addEventListener('click', closeOverlay);
  }
  
  function closeOverlay() {
    document.querySelector('.overlay').remove();
  }
})