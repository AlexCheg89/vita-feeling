<?php defined('_JEXEC') or die(); ?>
<?php echo $product->_tmp_var_start?>

<div class="product productitem_<?php echo $product->product_id?>">
  <div class="image">

    <?php if ($product->image){?>
      <div class="image_block">
        <?php print $product->_tmp_var_image_block;?>

        <?php if ($product->label_id){?>
          <div class="product_label">
            <?php if ($product->_label_image){?>
                <img class="product__img" src="<?php echo $product->_label_image?>" alt="<?php echo htmlspecialchars($product->_label_name)?>">
            <?php }else{?>
              <span class="label_name"><?php echo $product->_label_name;?></span>
            <?php }?>
          </div>
          <?php }?>
          <a href="<?php echo $product->product_link?>">
              <img class="jshop_img" src="<?php echo $product->image?>" alt="<?php echo htmlspecialchars($product->name);?>" title="<?php print htmlspecialchars($product->name);?>" />
          </a>
      </div>
    <?php }?>

    <?php if ($this->allow_review){?>
      <div class="review_mark"><?php echo showMarkStar($product->average_rating);?></div>
      <div class="count_commentar">
          <?php echo sprintf(_JSHOP_X_COMENTAR, $product->reviews_count);?>
      </div>
    <?php }?>
    <?php echo $product->_tmp_var_bottom_foto;?>
  </div>

  <p class="product__name">
    <a href="<?php echo $product->product_link?>"><?php echo $product->name?></a>
  </p>
  <?php if ($this->config->product_list_show_product_code){?><span class="jshop_code_prod">(<?php echo _JSHOP_EAN?>: <span><?php echo $product->product_ean;?></span>)</span><?php }?>
  <div class="product__description">

  </div>
  <?php if ($product->manufacturer->name) {?>
    <div class="manufacturer_name"><?php echo _JSHOP_MANUFACTURER?>: <span><?php echo $product->manufacturer->name?></span></div>
  <?php } ?>
  <?php if ($product->product_quantity <=0 && !$this->config->hide_text_product_not_available) {?>
    <div class="not_available"><?php echo _JSHOP_PRODUCT_NOT_AVAILABLE?></div>
  <?php } ?>
  <?php if ($product->product_old_price > 0) { ?>
    <div class="old_price"><?php if ($this->config->product_list_show_price_description) echo _JSHOP_OLD_PRICE.": ";?><span> <?php echo formatprice($product->product_old_price) ?></span></div>
  <?php } ?>


    <div class="product__info">
    <span class="product__formfact"><?php echo $product->short_description?></span>
    <span class="product__cost"><?php echo formatprice($product->product_price); ?></span>

    <?php echo $products->__tmp_var_top_buttons; ?>
    <?php if($product->buy_link){ ?>
    <a class="btn-reset product__cart" href="<?php echo $product->buy_link; ?>">
      <img src="<?php echo $templateUrl; ?>/images/icons/icon-cart.png" alt="Корзина">
    </a>
    <?php } ?>

    </div>
</div>

<?php echo $product->_tmp_var_end?>
