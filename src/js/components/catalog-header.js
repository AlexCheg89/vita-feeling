document.addEventListener('DOMContentLoaded', function() {

    // элементы блока hero
    const heroTitle = document.querySelector('.hero__title');
    const heroTitleSpan = heroTitle.querySelector('span'); // Вложенный span
    const heroDescr = document.querySelector('.hero__descr');

    // Элементы каталога
    const assortmentTitle = document.querySelector('.assortment__title');
    const assortmentSubtitle = document.querySelector('.assortment__subtitle');

    const currentUrl = window.location.pathname;

    // Ассоциативный массив (объект) с соответствиями URL → { title, subtitle }
    const pageTexts = {
        '/index.html': {
          hero: {
            title: 'ПИЩЕВЫЕ ДОБАВКИ',
            span: 'ПОЛЕЗНЫ ДЛЯ ЗДОРОВЬЯ',
            descr: 'Натуральные биологически активные добавки к пище для вашего здоровья, красоты и активного долголетия'
          },
          assortment: {
            title: 'Весь Ассортимент',
            subtitle: 'Случайная выборка продукции из каталога'
          }

        },

        '/': {  // Главная страница (корень)
          hero: {
            title: 'ПИЩЕВЫЕ ДОБАВКИ',
            span: 'ПОЛЕЗНЫ ДЛЯ ЗДОРОВЬЯ',
            descr: 'Натуральные биологически активные добавки к пище для вашего здоровья, красоты и активного долголетия'
          },
          assortment: {
            title: 'Весь Ассортимент',
            subtitle: 'Случайная выборка продукции из каталога'
          }
        },

        '/catalog.html': {
          hero: {
            title: 'Каталог продукции',
            span: 'Разбивка по категориям',
            descr: 'Для вашего удобства навигация по каталогу осуществляется по категориям (витамины, минералы, назначение), каждая из которых подразделяется на соответствующие группы БАД'
          },
          assortment: {
            title: 'Весь Ассортимент',
            subtitle: 'Случайная выборка продукции из каталога'
          }
        },

        '/catalog-vitamini.html': {
          hero: {
            title: 'ВИТАМИНЫ',
            span: 'ПРИРОДНАЯ СИЛА ЖИЗНИ',
            descr: 'Витамины - это особенные вещества, необходимые организму для полноценного функционирования. Регулируют жизнедеятельность организма, являются антиоксидантами'
          },
          assortment: {
            title: 'Витамины',
            subtitle: 'Все витамины из нашего каталога'
          }
        },

        '/catalog-mineraly.html': {
          hero: {
            title: 'МИНЕРАЛЫ',
            span: 'НЕЗАМЕНИМЫЕ ВЕЩЕСТВА',
            descr: 'Минеральные элементы в вашем организме являются важными компонентами скелета, биологических жидкостей и энзимов, способствуют передаче нервных импульсов'
          },
          assortment: {
            title: 'Минералы отдельно',
            subtitle: 'Мономинералы для точечного устранения минеральной недостаточности'
          }
        },

        '/catalog-appointment.html': {
          hero: {
            title: 'НАЗНАЧЕНИЕ БАД',
            span: 'ПО ЦЕЛЕВОМУ ПРИМЕНЕНИЮ',
            descr: 'Классификация добавок в соответствии с конкретными потребностями в этой или иной сфере здоровья и жизнедеятельности (иммунитет, печень, органы дыхания...)'
          },
          assortment: {
            title: 'Антиоксиданты и Detox body',
            subtitle: 'Полезные вещества, останавливающие и нейтрализующие окислительные процессы свободных радикалов в организме'
          }
        }
    };

    // Текст по умолчанию (если URL не найден)
    const defaultText = {
      hero: {
        title: 'ПИЩЕВЫЕ ДОБАВКИ',
        span: 'ПОЛЕЗНЫ ДЛЯ ЗДОРОВЬЯ',
        descr: 'Натуральные биологически активные добавки к пище для вашего здоровья, красоты и активного долголетия'
      },
      assortment: {
        title: 'Каталог',
        subtitle: 'Товары из нашего ассортимента'
      }
    };

    // Проверяем URL и обновляем текст
    const currentPage = Object.keys(pageTexts).find(key => currentUrl.endsWith(key));
    const texts = pageTexts[currentPage] || defaultText;

    // Обновляем hero (если элементы есть на странице)
    if (heroTitle && heroTitleSpan && heroDescr) {
      heroTitle.firstChild.textContent = texts.hero.title + ' '; // Основной текст (без span)
      heroTitleSpan.textContent = texts.hero.span; // Вложенный span
      heroDescr.textContent = texts.hero.descr; // Описание
    }

    // Обновляем assortment
    if (assortmentTitle && assortmentSubtitle) {
      assortmentTitle.textContent = texts.assortment.title;
      assortmentSubtitle.textContent = texts.assortment.subtitle;
    }
});
