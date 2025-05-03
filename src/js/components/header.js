import TransferElements from 'transfer-elements';

new TransferElements (
  {
    sourceElement: document.querySelector('.header__contacts-link'),
    breakpoints: {
      768: {
        targetElement: document.querySelector('.header__right')
      }
    }
  }
);
