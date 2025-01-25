(function($) {
  $(document).ready(function() {

    $('.block_product').each(function() {
      // Скрываем блок с классом buttons внутри каждой карточки товара
      $(this).find('.buttons').hide();

      // Находим элементы с классами .description и .jshop_price внутри текущей карточки
      var descriptionElem = $(this).find('.description');
      var priceElem = $(this).find('.jshop_price');

      // Проверяем, существуют ли оба элемента
      if (descriptionElem.length > 0 && priceElem.length > 0) {
        // Создаем новый div и добавляем класс и инлайн стиль
        var product_price_block = $('<div></div>').addClass('my-block').css({
          'display': 'flex',
          'margin-bottom': '20px',
          'padding': '10px 0',
          'justify-content': 'space-between',
          'align-items:': 'center'
        });

        // Клонируем элементы и добавляем в новый div
        product_price_block.append(descriptionElem.clone());

        // Заменяем "руб" на знак рубля (₽) в элементе цены
        var priceText = priceElem.html().replace('руб', '₽');
        product_price_block.append(priceText);

        // Находим кнопку "Добавить в корзину" и удаляем все стили
         var buttonBuy = $(this).find('.button_buy');

        // Заменяем содержимое кнопки на изображение
        buttonBuy.html('<img src="/images/korzina.png" alt="korzina" width="26" height="28" style="margin: -7px 10px 0px 0px; float: right;">');

        // buttonBuy.on('click', function(e) {
        //   e.preventDefault();
        // });

        product_price_block.append(buttonBuy);
        buttonBuy.css({
          'display': 'inline-block',
          'width': '26px',
          'font-size': '0',
          'line-height': '0',
          'border': 'none',
          'background': 'none'
        })


        // Находим заголовок продукта и вставляем новый блок после него
        $(this).find('.name').after(product_price_block);

        // Удаляем оригинальные элементы, чтобы избежать дубликатов
        descriptionElem.remove();
        priceElem.remove();
      }
    });
  });

  // $(document).ready(function() {
  //   $('.product_title a').each(function() {
  //     var fullText = $(this).text(); // Получаем полный текст из атрибута title

  //     // Создаем тултип и добавляем его в DOM
  //     var tooltip = $('<div class="product_tooltip"></div>').text(fullText);
  //     $(this).parent().append(tooltip); // Добавляем тултип к родительскому элементу .product_title

  //     $(this).hover(function() {
  //       tooltip.css({
  //         display: 'block',
  //         top: $(this).position().top + $(this).outerHeight(), // Позиционирование тултипа
  //         left: $(this).position().left
  //       });
  //     }, function() {
  //       tooltip.css('display', 'none'); // Скрываем тултип
  //     });
  //   })
  // });
})(jQuery);
