<?php
defined('_JEXEC') or die;

/**
 * Template for Joomla! CMS, created with Artisteer.
 * See readme.txt for more details on how to use the template.
 */

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';

// Create alias for $this object reference:
$document = $this;

// Shortcut for template base url:
$templateUrl = $document->baseurl . '/templates/' . $document->template;

$app = JFactory::getApplication();



Artx::load("Artx_Page");

// Initialize $view:
$view = $this->artx = new ArtxPage($this);

// Decorate component with Artisteer style:
$view->componentWrapper();

JHtml::_('behavior.framework', true);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="page">

<head>
  <jdoc:include type="head" />
  <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/system.css" />
  <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/general.css" />

  <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">


  <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/vendor.css">
  <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/main.css" media="all">

</head>

<body class="page__body">
  <div class="site-container">
    <header class="header">
  <div class="container header__container">
    <a href="tel:88009502323" class="header__phone">
      <img src="<?php echo $templateUrl; ?>/images/icons/icon-tel.png" alt="phone">
      <span class="header__phone-text">8 (800) 950 23 23</span>
    </a>
    <a href="" class="header__contacts">Контакты</a>
    <a href="/" class="header__logo">
      <!-- <jdoc:include type="modules" name ="position-34"/> -->
      <?php echo $view->position('position-34', 'art-nostyle'); ?>
    </a>
    <a href="" class="header__login">Вход / Регистрация</a>
    <a href="" class="header__catalog">
      <!-- <jdoc:include type="modules" name ="position-1"/> -->

    </a>
    <div class="header__nav">
      <a href="" class="header__mark">Наша марка</a>
      <a href="" class="header__blog">Блог</a>
    </div>
    <a href="" class="header__program">Партнерская программа</a>
    <div class="header__btns">
      <a href="" class="header__cart">
        <img src="<?php echo $templateUrl; ?>/images/icons/icon-cart.png" alt="Cart">
        <span class="header__cart-quantity">10</span>
      </a>
      <form class="header__search" action="">
        <input class="input-reset header__search-input" type="search">
        <button class="btn-reset header__search-btn" type="submit">
          <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px" ><path d="M 10 2 C 5.5965257 2 2 5.5965291 2 10 C 2 14.403471 5.5965257 18 10 18 C 11.752132 18 13.370523 17.422074 14.691406 16.458984 L 19.845703 21.613281 A 1.250125 1.250125 0 1 0 21.613281 19.845703 L 16.458984 14.691406 C 17.422074 13.370523 18 11.75213 18 10 C 18 5.5965291 14.403474 2 10 2 z M 10 4.5 C 13.052375 4.5 15.5 6.947627 15.5 10 C 15.5 13.052373 13.052375 15.5 10 15.5 C 6.9476251 15.5 4.5 13.052373 4.5 10 C 4.5 6.947627 6.9476251 4.5 10 4.5 z"/></svg>

        </button>
      </form>

    </div>

  </div>
</header>

    <main class="main">
      <section class="section hero">
  <div class="container hero__container">
    <div class="hero__content">
      <div class="hero__main">
        <h1 class="hero__title">ПИЩЕВЫЕ ДОБАВКИ <span>ПОЛЕЗНЫ ДЛЯ ЗДОРОВЬЯ</span></h1>
        <p class="hero__descr">Натуральные биологически активные добавки к пище для вашего здоровья, красоты и активного долголетия</p>
      </div>
      <ul class="list-reset hero__list">
        <li class="hero__list-item">
          <a class="hero__list-link" href="">
            <img class="hero__list-img" src="<?php echo $templateUrl; ?>/images/icons/icon_vitamin.png" alt="Витамины">
            <h2 class="hero__list-title">Витамины</h2>
          </a>
        </li>
        <li class="hero__list-item">
          <a class="hero__list-link" href="">
            <img class="hero__list-img" src="<?php echo $templateUrl; ?>/images/icons/icon_mineral.png" alt="Минералы">
            <h2 class="hero__list-title">Минералы</h2>
          </a>
        </li>
        <li class="hero__list-item">
          <a class="hero__list-link" href="">
            <img class="hero__list-img" src="<?php echo $templateUrl; ?>/images/icons/icon_purpose.png" alt="Назначение">
            <h2 class="hero__list-title">Назначение</h2>
          </a>
        </li>
        <li class="hero__list-item">
          <a class="hero__list-link" href="">
            <img class="hero__list-img" src="<?php echo $templateUrl; ?>/images/icons/icon_mark.png" alt="Наша марка">
            <h2 class="hero__list-title">Наша марка</h2>
          </a>
        </li>
      </ul>
      <div class="hero__bg-img">
        <img src="<?php echo $templateUrl; ?>/images/hero-bg.png" alt="">
      </div>
    </div>
  </div>
</section>

      <section class="section about-product">
  <div class="container">
    <h2 class="title about-product__title">
      Наш Продукт
    </h2>
    <ul class="list-reset about-product__list product-content">
      <li class="about-product__item product-item">
        <div class="product-item__textbl">
          <h3 class="product-item__title">100% ОРГАНИЧЕСКИЙ</h3>
          <p class="product-item__decr">Мы производим наши продукты из свежих 100% — органических ингредиентов, полных витаминов и ценных питательных веществ</p>
        </div>
        <img class="product-item__img" src="<?php echo $templateUrl; ?>/images/icons/icon_organic.png" alt="Органический">
      </li>
      <li class="about-product__item product-item">
        <div class="product-item__textbl">
          <h3 class="product-item__title">ПОЛЕЗЕН ДЛЯ ЗДОРОВЬЯ</h3>
          <p class="product-item__decr">Наши добавки разработаны для обогащения организма полезными веществами, чтобы укрепить ваше здоровье на всех уровнях</p>
        </div>
        <img class="product-item__img" src="<?php echo $templateUrl; ?>/images/icons/icon_health.png" alt="Здоровье">
      </li>

      <li class="about-product__item product-item">
        <div class="product-item__textbl">
          <h3 class="product-item__title">БЕЗ ХИМИИ</h3>
          <p class="product-item__decr">Наши полезные добавки к пище не содержат искусственных веществ, а содержат только натуральные жизненно важные элементы</p>
        </div>
        <img class="product-item__img" src="<?php echo $templateUrl; ?>/images/icons/icon_chemistry.png" alt="Химия">
      </li>
      <li class="about-product__item product-item">
        <div class="product-item__textbl">
          <h3 class="product-item__title">ЗАРЯЖАЕТ ЭНЕРГИЕЙ</h3>
          <p class="product-item__decr">Наши продукты созданы как универсальные органические источники повышения уровня энергии для полноценной жизни</p>
        </div>
        <img class="product-item__img" src="<?php echo $templateUrl; ?>/images/icons/icon_energy.png" alt="Энергия">
      </li>
      <img class="about-product__bud about-product__img" src="<?php echo $templateUrl; ?>/images/bud.png" alt="Бад">
    </ul>
  </div>
</section>

      <section class="section about">
  <div class="container">
    <h2 class="title about__title">
      О КОМПАНИИ
      <img class="about__title-img" src="<?php echo $templateUrl; ?>/images/logo2.png" alt="Лого">
      VITAFEELING
    </h2>
    <p class="subtitle about__subtitle">Мы заботимся о Вашем здоровье</p>
    <ul class="list-reset about-list">
      <li class="about-list__item">
        <h3 class="about-list__title">НАША МИССИЯ</h3>
        <p class="about-list__desc">Vitafeeling — динамично развивающийся проект, цель которого — дарить радость от здорового образа жизни и сделать это доступным каждому. Мы помогаем людям заботиться о своём здоровье и здоровье своих близких, используя эффективные современные разработки в области нутрициологии из полезного и безопасного природного сырья.</p>
      </li>
      <li class="about-list__item">
        <h3 class="about-list__title">НАШЕ ПРОИЗВОДСТВО</h3>
        <p class="about-list__desc">Мы разрабатываем и производим биологически активные добавки, которые обеспечивают потребности организма в полезных питательных веществах для здоровья и красоты. Наша продукция производится только из натуральных ингредиентов: целебных растений, овощей и фруктов, без использования ГМО и вредной химии. Мы производим только то, что работает и даёт результаты.</p>
      </li>
      <li class="about-list__item">
        <h3 class="about-list__title">ПЕРСПЕКТИВНОСТЬ</h3>
        <p class="about-list__desc">Не останавливаясь в своём развитии, мы постоянно исследуем влияние различных натуральных веществ на организм человека, ищем новые безопасные средства для решения разнообразных проблем со здоровьем. В стремлении улучшить качество жизни людей, мы изучаем новейшие научные достижения и технологии, чтобы создавать наши БАДы в сбалансированной легкоусваиваемой форме.</p>
      </li>
    </ul>
  </div>
</section>

      <section class="section assortment">
  <div class="container assortment__container">
    <h2 class="title assortment__title">Весь Ассортимент</h2>
    <p class="subtitle assortment__subtitle">
      Случайная выборка продукции из каталога
    </p>
    <ul class="list-reset assortment__grid">
      <li class="assortment__grid-item">
        <article class="product">
          <img class="product__img" src="<?php echo $templateUrl; ?>/images/product1.jpg" alt="Тропи Фермент">
          <h3 class="product__name">Тропи Фермент</h3>
          <div class="product__info">
            <span class="product__formfact">60 таб</span>
            <span class="product__cost">1250 ₽</span>
            <button class="btn-reset product__cart">
              <img src="<?php echo $templateUrl; ?>/images/icons/icon-cart.png" alt="Корзина">
            </button>
          </div>
        </article>
      </li>
      <li class="assortment__grid-item">
        <article class="product">
          <img class="product__img" src="<?php echo $templateUrl; ?>/images/product2.jpg" alt="Морской йод из фикуса">
          <h3 class="product__name">Морской йод из фикуса</h3>
          <div class="product__info">
            <span class="product__formfact">60 таб</span>
            <span class="product__cost">1250 ₽</span>
            <button class="btn-reset product__cart">
              <img src="<?php echo $templateUrl; ?>/images/icons/icon-cart.png" alt="Корзина">
            </button>
          </div>
        </article>
      </li>
      <li class="assortment__grid-item">
        <article class="product">
          <img class="product__img" src="<?php echo $templateUrl; ?>/images/product1.jpg" alt="Тропи Фермент">
          <h3 class="product__name">Тропи Фермент</h3>
          <div class="product__info">
            <span class="product__formfact">60 таб</span>
            <span class="product__cost">1250 ₽</span>
            <button class="btn-reset product__cart">
              <img src="<?php echo $templateUrl; ?>/images/icons/icon-cart.png" alt="Корзина">
            </button>
          </div>
        </article>
      </li>
      <li class="assortment__grid-item">
        <article class="product">
          <img class="product__img" src="<?php echo $templateUrl; ?>/images/product2.jpg" alt="Морской йод из фикуса">
          <h3 class="product__name">Морской йод из фикуса</h3>
          <div class="product__info">
            <span class="product__formfact">60 таб</span>
            <span class="product__cost">1250 ₽</span>
            <button class="btn-reset product__cart">
              <img src="<?php echo $templateUrl; ?>/images/icons/icon-cart.png" alt="Корзина">
            </button>
          </div>
        </article>
      </li>
      <li class="assortment__grid-item">
        <article class="product">
          <img class="product__img" src="<?php echo $templateUrl; ?>/images/product1.jpg" alt="Тропи Фермент">
          <h3 class="product__name">Тропи Фермент</h3>
          <div class="product__info">
            <span class="product__formfact">60 таб</span>
            <span class="product__cost">1250 ₽</span>
            <button class="btn-reset product__cart">
              <img src="<?php echo $templateUrl; ?>/images/icons/icon-cart.png" alt="Корзина">
            </button>
          </div>
        </article>
      </li>
      <li class="assortment__grid-item">
        <article class="product">
          <img class="product__img" src="<?php echo $templateUrl; ?>/images/product2.jpg" alt="Морской йод из фикуса">
          <h3 class="product__name">Морской йод из фикуса</h3>
          <div class="product__info">
            <span class="product__formfact">60 таб</span>
            <span class="product__cost">1250 ₽</span>
            <button class="btn-reset product__cart">
              <img src="<?php echo $templateUrl; ?>/images/icons/icon-cart.png" alt="Корзина">
            </button>
          </div>
        </article>
      </li>
      <li class="assortment__grid-item">
        <article class="product">
          <img class="product__img" src="<?php echo $templateUrl; ?>/images/product1.jpg" alt="Тропи Фермент">
          <h3 class="product__name">Тропи Фермент</h3>
          <div class="product__info">
            <span class="product__formfact">60 таб</span>
            <span class="product__cost">1250 ₽</span>
            <button class="btn-reset product__cart">
              <img src="<?php echo $templateUrl; ?>/images/icons/icon-cart.png" alt="Корзина">
            </button>
          </div>
        </article>
      </li>
      <li class="assortment__grid-item">
        <article class="product">
          <img class="product__img" src="<?php echo $templateUrl; ?>/images/product2.jpg" alt="Морской йод из фикуса">
          <h3 class="product__name">Морской йод из фикуса</h3>
          <div class="product__info">
            <span class="product__formfact">60 таб</span>
            <span class="product__cost">1250 ₽</span>
            <button class="btn-reset product__cart">
              <img src="<?php echo $templateUrl; ?>/images/icons/icon-cart.png" alt="Корзина">
            </button>
          </div>
        </article>
      </li>
      <li class="assortment__grid-item">
        <article class="product">
          <img class="product__img" src="<?php echo $templateUrl; ?>/images/product1.jpg" alt="Тропи Фермент">
          <h3 class="product__name">Тропи Фермент</h3>
          <div class="product__info">
            <span class="product__formfact">60 таб</span>
            <span class="product__cost">1250 ₽</span>
            <button class="btn-reset product__cart">
              <img src="<?php echo $templateUrl; ?>/images/icons/icon-cart.png" alt="Корзина">
            </button>
          </div>
        </article>
      </li>
      <li class="assortment__grid-item">
        <article class="product">
          <img class="product__img" src="<?php echo $templateUrl; ?>/images/product2.jpg" alt="Морской йод из фикуса">
          <h3 class="product__name">Морской йод из фикуса</h3>
          <div class="product__info">
            <span class="product__formfact">60 таб</span>
            <span class="product__cost">1250 ₽</span>
            <button class="btn-reset product__cart">
              <img src="<?php echo $templateUrl; ?>/images/icons/icon-cart.png" alt="Корзина">
            </button>
          </div>
        </article>
      </li>
      <li class="assortment__grid-item">
        <article class="product">
          <img class="product__img" src="<?php echo $templateUrl; ?>/images/product1.jpg" alt="Тропи Фермент">
          <h3 class="product__name">Тропи Фермент</h3>
          <div class="product__info">
            <span class="product__formfact">60 таб</span>
            <span class="product__cost">1250 ₽</span>
            <button class="btn-reset product__cart">
              <img src="<?php echo $templateUrl; ?>/images/icons/icon-cart.png" alt="Корзина">
            </button>
          </div>
        </article>
      </li>
      <li class="assortment__grid-item">
        <article class="product">
          <img class="product__img" src="<?php echo $templateUrl; ?>/images/product2.jpg" alt="Морской йод из фикуса">
          <h3 class="product__name">Морской йод из фикуса</h3>
          <div class="product__info">
            <span class="product__formfact">60 таб</span>
            <span class="product__cost">1250 ₽</span>
            <button class="btn-reset product__cart">
              <img src="<?php echo $templateUrl; ?>/images/icons/icon-cart.png" alt="Корзина">
            </button>
          </div>
        </article>
      </li>
    </ul>
    <div class="assortment__btn-block">
      <button class="btn-reset btn btn__more">показать больше</button>
      <a class="btn-reset btn btn__catalog" href="#">перейти в каталог</a>
    </div>
  </div>
</section>

      <section class="section blog">
  <div class="container blog__container">
    <h2 class="title blog__title">Блог</h2>
    <p class="subtitle blog__subtitle">Интересные и полезные знания о здоровье</p>
    <ul class="list-reset blog__artical-list">
      <li class="blog__artical-item">
        <article class="blog__article">
          <img class="blog__article-img" src="<?php echo $templateUrl; ?>/images/blog1.jpg" alt="">
          <p class="blog__article-rublic">наша марка</p>
          <h3 class="blog__article-title">Наша исследовательская лаборатория</h3>
          <p class="blog__article-text">Краткая выдержка из начала статьи</p>
          <button class="btn-reset btn blog__btn" >Читать дальше</button>
        </article>
      </li>
      <li class="blog__artical-item">
        <article class="blog__article">
          <img class="blog__article-img" src="<?php echo $templateUrl; ?>/images/blog2.jpg" alt="">
          <p class="blog__article-rublic">Витамины</p>
          <h3 class="blog__article-title">Витамины для человеческого организма и их полезность…</h3>
          <p class="blog__article-text">Краткая выдержка из начала статьи</p>
          <button class="btn-reset btn blog__btn" >Читать дальше</button>
        </article>
      </li>
      <li class="blog__artical-item">
        <article class="blog__article">
          <img class="blog__article-img" src="<?php echo $templateUrl; ?>/images/blog3.jpg" alt="">
          <p class="blog__article-rublic">Целебные растения</p>
          <h3 class="blog__article-title">Фитостерины — исцеляющие свойства многих</h3>
          <p class="blog__article-text">Краткая выдержка из начала статьи</p>
          <button class="btn-reset btn blog__btn" >Читать дальше</button>
        </article>
      </li>
    </ul>
  </div>
</section>

      <section class="consultation">
  <div class="container consultation__container">
    <img src="<?php echo $templateUrl; ?>/images/doctor.png" alt="Доктор">
    <div class="consultation__content">
      <h2 class="title consultation__title">Консультация специалиста</h2>
      <p class="consultation__text">Если вы не знаете, что из продукции Vitafeeling лучше подойдёт для вашего здоровья, но наш специалист проконсультирует ва и поможет подобрать подходящий монопрепарат или курс препаратов, исходя из индивидуальных особенностей и потребностей вашего организма. Эта услуга совершенно бесплатна, просто заполните форму и мы свяжемся с вами:</p>
      <form class="consultation__form" action="">
        <input class="input-reset consultation__phone-input" type="tel" placeholder="Телефон">
        <button class="btn-reset btn consultation__btn">Получить консультацию</button>
      </form>
    </div>
  </div>
</section>
    <div class="container">
    <?php echo $view->position('position-2', 'art-nostyle'); ?>
    </div>
    </main>
    <footer class="footer">
  <div class="container footer__container">
    <ul class="list-reset footer__list footer__connect">
      <li class="footer__title">Присоединяйтесь</li>
      <li class="footer__item">Наши группы в соцсетях:</li>
      <li class="footer__item footer__social">
        <a href=""><img src="<?php echo $templateUrl; ?>/images/icons/icon_teleg.png" alt="Телеграмм"></a>
        <a href=""><img src="<?php echo $templateUrl; ?>/images/icons/icon_insta.png" alt="Истаграм"></a>
        <a href=""><img src="<?php echo $templateUrl; ?>/images/icons/icon_ok.png" alt="Одноклассники"></a>
        <a href=""><img src="<?php echo $templateUrl; ?>/images/icons/icon_gm.png" alt="GM"></a>
      </li>

    </ul>
    <ul class="list-reset footer__list">
      <li class="footer__title">Интернет-магазин</li>
      <li class="footer__item"><a class="footer__item-link" href="">Каталог продукции</a></li>
      <li class="footer__item"><a class="footer__item-link" href="">Способы доставки</a></li>
      <li class="footer__item"><a class="footer__item-link" href="">Условия возврата</a></li>
    </ul>
    <ul class="list-reset footer__list">
      <li class="footer__title">Дополнительно</li>
      <li class="footer__item"><a class="footer__item-link" href="">Партнерская программа</a></li>
      <li class="footer__item"><a class="footer__item-link" href="">Условия продажи</a></li>
      <li class="footer__item"><a class="footer__item-link" href="">Политика конфиденциальности</a></li>
    </ul>
    <ul class="list-reset footer__list footer__contacts">
      <li class="footer__title">Контакты</li>
      <li class="footer__item"><a class="footer__item-link" href="">Тел: 8 (800) 950 23 23</a></li>
      <li class="footer__item"><a class="footer__item-link" href="">Адрес: 125480, Москва, ул. Вилиса Лациса, 6К1</a></li>
    </ul>
  </div>
  <div class="container_fluid footer__copyright-block">
    <p class="footer__copyright">Компания VitaFeeling © Все права защищены</p>
  </div>
</footer>

  </div>
</body>

</html>
