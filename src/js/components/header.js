import TransferElements from 'transfer-elements';

new TransferElements (
  {
    sourceElement: document.querySelector('.header__contacts-link'),
    breakpoints: {
      908: {
        targetElement: document.querySelector('.header__actions'),
      }
    }
  },
  {
    sourceElement: document.querySelector('.consultation__logo'),
    breakpoints: {
      768: {
        targetElement: document.querySelector('.consultation__tittle-block'),
        targetPosition: 1
      },
      320: {
        targetElement: document.querySelector('.consultation__content'),
        targetPosition: 1
      }
    }
  },
);
