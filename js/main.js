
if(document.querySelector('.grid')) {
  const grid = new Muuri(".grid", {
    layout: {
      rounding: false,
    },
  });
  window.addEventListener('load',()=> {
    grid.refreshItems().layout();
    document.body.classList.add('images-loaded');
    setTimeout(() => {
      document.querySelector('.loading').remove();
    }, 1000);
  });
}

document.addEventListener('DOMContentLoaded',()=> {

  const pictures = document.querySelectorAll('.picture-wrapper');
  pictures.forEach(picture => {
    picture.addEventListener('click', clickOnPicture);
  });

  function clickOnPicture(e) {
    e.preventDefault();
    showOverlay(e.target);
  }
  
  function showOverlay(picture) {
    const pictureFullResDir = picture.parentNode.parentNode.getAttribute('href');
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

  const hamburgerBtn = document.querySelector('.hamburger-button'),
        siteNavegation = document.querySelector('.site-nav'),
        closeBtn = document.querySelector('.site-nav__close-btn'),
        header = document.querySelector('.site-header')
  let headerHeight = header.offsetHeight;
  
  if (hamburgerBtn) {
    hamburgerBtn.addEventListener('click', openNavegation);
  }
  function openNavegation(e) {
    siteNavegation.classList.add('show');
    closeBtn.addEventListener('click', closeNavegation);
  }

  function closeNavegation(e) {
    siteNavegation.classList.remove('show')
  }

  window.addEventListener('scroll',eventScroll);
  window.addEventListener('resize',eventResize);

  function eventResize() {
    headerHeight = header.offsetHeight;
  }
  function eventScroll(e) {
    headerFixed()
  }
  function headerFixed() {
    if (window.scrollY>0) {
      document.body.style.paddingTop = headerHeight + "px"
      header.classList.add('fixed');
    } else {
      document.body.style.paddingTop = 0;
      header.classList.remove('fixed');
    }
  }
})