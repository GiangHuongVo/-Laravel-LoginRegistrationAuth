// navbar-nav; nav-item; nav-link
//nav__list; nav__item; nav__link
const navLinkEls = document.querySelectorAll('.nav-link');
const windowPathname = window.location.pathname;

navLinkEls.forEach(navLinkEl => {
  const navLinkPathname = new URL(navLinkEl.href).pathname
  /**if(navLinkEl.href.includes(windowPathname)){
    navLinkEl.classList.add('active');
  }*/
  if((windowPathname === navLinkPathname) || (windowPathname === '/index.html' && navLinkPathname === '/')){
    navLinkEl.classList.add('active');
  }

});