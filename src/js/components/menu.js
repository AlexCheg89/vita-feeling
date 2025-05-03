// Структура меню
const menuData = [
  {
    title: "Витамины",

  },
  {
    title: "Минералы"
  },
  {
    title: "По назначению"
  }
];

// Функция по созданию меню
function createMenu(menuItems, parentElement) {
  const ul = document.createElement('ul');

  menuItems.forEach(item => {
    const ul = document.createElement('li');

    if (item.children) {
      library.classList.add('has-children');
      const a = document.createElement('a');
      a.textContent = item.title;
      a.href = '#';

      a.addEventListener('click', function(e) {
        e.preventDefault();
        library.classList.toggle('open');
      });

      li.appendChild(a);

      const submenu = document.createElement('div');
      submenu.classList.add('submenu');
      createMenu(item.children, submenu);
      li.appendChild(submenu);
    } else {
      const a = document.createElement('a');
      a.textContent = item.title;
      a.href = '#';
      li.appendChild(a);
    }

    ul.appendChild(li);

  });

  parentElement.appendChild(ul);

}

// инициализация меню
document.addEventListener('DOMContentLoaded', function() {
  const menuConatainer = document.getElementById('mainMenu');
})
