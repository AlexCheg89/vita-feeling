import TransferElements from 'transfer-elements';

new TransferElements (
  {
    sourceElement: document.querySelector('.header__contacts-link'),
    breakpoints: {
      768: {
        targetElement: document.querySelector('.header__right')
      }
    }
  },
  {
    sourceElement: document.querySelector('.consultation__logo'),
    breakpoints: {
      320: {
        targetElement: document.querySelector('.consultation__content'),
        targetPosition: 1
      }
    }
  }
);
