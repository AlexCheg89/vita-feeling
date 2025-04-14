<?php
defined("_JEXEC") or die;


// Получение данных о продукте
$product = $this->product;

// Заголовок страницы
$this->document->setTitle($product->name);
?>

<div class="jshopping-product">
  <h2><?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?></h2>
  <div class="jshopping-image">
    <?php if ($product->image) : ?>
      <img src="<?php echo $product->image; ?>" alt="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>" />
    <?php else: ?>
      <img src="<?php echo JURI::base() . 'template/' . $this->template . '/images/no-image.png'; ?>" alt="No Image" />

    <?php endif; ?>
  </div>

  <div class="jshopping-description">
    <h3><?php JText::_('DESCRIPTION'); ?></h3>
    <p><?php echo $product->description; ?></p>
  </div>

  <div class="jshopping-price">
    Цена
  </div>
  <div class="jshopping-add-to-cart">
    Добавить в корзину
  </div>
</div>
