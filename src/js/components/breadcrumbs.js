document.addEventListener('DOMContentLoaded', function() {
  const breadcrumbsContainer = document.querySelector('.breadcrumbs__list');
  if (!breadcrumbsContainer) return; // Если контейнера нет, выходим

  const currentUrl = window.location.pathname;
  const breadcrumbs = generateBreadcrumbs(currentUrl);

  // Очищаем стандартные пункты (кроме "Главной")
  const defaultItems = breadcrumbsContainer.querySelectorAll('.breadcrumbs__item:not(:first-child)');
  defaultItems.forEach(item => item.remove());

  // Добавляем новые пункты
  breadcrumbs.forEach(crumb => {
      const li = document.createElement('li');
      li.className = 'breadcrumbs__item';

      if (crumb.href) {
          const a = document.createElement('a');
          a.className = 'breadcrumbs__link';
          a.href = crumb.href;
          a.textContent = crumb.title;
          li.appendChild(a);
      } else {
          li.textContent = crumb.title; // Текущая страница (без ссылки)
          li.classList.add('breadcrumbs__item--current');
      }

      breadcrumbsContainer.appendChild(li);
  });
});

/**
* Генерирует массив хлебных крошек на основе URL
* @param {string} url - Текущий URL (например, "/catalog/vitamins.html")
* @returns {Array<{title: string, href?: string}>} - Массив объектов {title, href}
*/
function generateBreadcrumbs(url) {
  const crumbs = [];
  const pathParts = url.split('/').filter(part => part && !part.endsWith('.html'));

  // Добавляем "Главную" (уже есть в HTML, но можно перезаписать)
  crumbs.push({ title: 'Главная', href: '/' });

  // Обрабатываем остальные части URL
  let accumulatedPath = '';
  pathParts.forEach(part => {
      accumulatedPath += `/${part}`;
      const title = getPageTitle(part); // Преобразуем часть URL в читаемый формат
      crumbs.push({ title, href: `${accumulatedPath}.html` });
  });

  // Последний элемент делаем без ссылки (текущая страница)
  if (crumbs.length > 1) {
      crumbs[crumbs.length - 1].href = undefined;
  }

  return crumbs;
}

/**
* Преобразует часть URL в читаемый заголовок
* @param {string} pathPart - Часть URL (например, "catalog-vitamins")
* @returns {string} - Красивый заголовок (например, "Витамины")
*/
function getPageTitle(pathPart) {
  const titles = {
      'catalog': 'Каталог',
      'vitamins': 'Витамины',
      'minerals': 'Минералы',
      'protein': 'Протеины',
      'contacts': 'Контакты',
      'about': 'О нас'
      // Добавьте другие соответствия по необходимости
  };

  // Убираем префиксы (например, "catalog-")
  const cleanPath = pathPart.replace(/^catalog-/, '');
  return titles[cleanPath] || cleanPath.replace(/-/g, ' ').toUpperCase();
}
