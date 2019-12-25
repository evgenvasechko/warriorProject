<!DOCTYPE html>
<html lang="en">
  <head>
    <head>
      <title>DomainName</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="styles/app.css?stamp=1563222984">
      <!--link(rel='stylesheet' href="styles/hamburgers.css")-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <script src="js/app.js?stamp=1563222984"></script>
    </head>
  </head>
  <body>
  <?php include ('scripts/gallery_img.php') ?>
    <div class="page">
      <div class="page__header">
        <header class="header">
          <ul class="header-menu">
            <li class="header-menu__unit"><a href="index.php">Главная</a></li>
            <li class="header-menu__unit catalog"><a href="catalog.php">Каталог</a></li>
            <li class="header-menu__unit"><a href="about-us.html">О нас</a></li>
            <li class="header-menu__unit"><a href="gallery.php">Галерея</a></li>
            <li class="header-menu__unit"><a href="3d-design.html">3D-дизайн</a></li>
            <li class="header-menu__unit"><a href="contacts.html">Контакты</a></li>
            <li class="header-menu__unit"><a>Услуги</a></li>
          </ul>
          <ul class="header-submenu">
            <li class="header-submenu__unit"> <a>Памятники</a></li>
            <li class="header-submenu__unit"> <a>Лампады</a></li>
            <li class="header-submenu__unit"> <a>Бронза</a></li>
            <li class="header-submenu__unit"> <a>Ограды</a></li>
            <li class="header-submenu__unit"> <a>Надгробия</a></li>
          </ul>
        </header>
        <header class="header-mobile">
          <button class="hamburger hamburger--slider" type="button"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
          <ul class="header-menu">
            <li class="header-menu__unit"><a href="index.php">Главная</a></li>
            <ul class="header-menu__unit mobile-catalog">Каталог
              <li class="header-submenu__unit"> <a>Памятники</a></li>
              <li class="header-submenu__unit"> <a>Лампады</a></li>
              <li class="header-submenu__unit"> <a>Бронза</a></li>
              <li class="header-submenu__unit"> <a>Ограды</a></li>
              <li class="header-submenu__unit"> <a>Надгробия</a></li>
            </ul>
            <li class="header-menu__unit"><a href="about-us.html">О нас</a></li>
            <li class="header-menu__unit"><a href="gallery.php">Галерея</a></li>
            <li class="header-menu__unit"><a href="3d-design.html">3D-дизайн</a></li>
            <li class="header-menu__unit"><a href="contacts.html">Контакты</a></li>
            <li class="header-menu__unit"><a>Услуги</a></li>
          </ul>
        </header>
      </div>
      <div class="page__inner">
        <main class="page__content">
          <section class="main-hero">
            <div class="main-hero-desc">Изделия из натурального камня, вазы надгробные, лампады и др.</div>
            <div class="main-hero-logo"><img class="main-hero-logo__image" src="images/logo.svg" alt="logo must be here"></div>
            <div class="main-hero-contacts">
              <p class="main-hero-contacts__adress">ул. Аульская 33 (напротив ЗАО “Тайфун”)</p>
              <p class="main-hero-contacts__phones">+375 (33) 618-32-03, +375 (152) 68-83-49, +375 (29) 642-08-48</p>
              <p class="main-hero-contacts__email">realvotiva@mail.ru</p>
            </div>
          </section>
          <section class="categories-preview">
            <div class="container categories-preview-container">
              <div class="categories-preview-unit categories-preview__unit">
                <div class="categories-preview-unit__image"><img src="images/secondsection1.png" alt=""></div>
                <div class="categories-preview-unit__info">
                  <h2 class="categories-preview-unit__header">Памятники</h2>
                  <div class="categories-preview-unit__describe">Наша компания предлагает широкий выбор памятников, а также целых комплексов на любой вкус</div>
                </div>
              </div>
              <div class="categories-preview-unit categories-preview__unit_reverse">
                <div class="categories-preview-unit__image"><img src="images/secondsection2.png" alt=""></div>
                <div class="categories-preview-unit__info">
                  <h2 class="categories-preview-unit__header">Аксессуары</h2>
                  <div class="categories-preview-unit__describe">Множество лампад, крестов, статуй и прочих акссесуаров из различных материалов (гранит разных цветов, бронза и т.д.)</div>
                </div>
              </div>
              <div class="categories-preview-unit categories-preview__unit">
                <div class="categories-preview-unit__image"><img src="images/secondsection3.png" alt=""></div>
                <div class="categories-preview-unit__info">
                  <h2 class="categories-preview-unit__header">Надгробия</h2>
                  <div class="categories-preview-unit__describe">Качественные и красивые надгробия из гранита, мрамора с несколькими ярусами и комбинорованием плит разных цветов.</div>
                </div>
              </div>
            </div>
          </section>
          <section class="main-advantages">
            <div class="container">
              <h1 class="main-advantages__header">Наши преимущества</h1>
              <div class="main-advantages__list">
                <div class="main-advantages__unit main-advantages-unit">
                  <div class="main-advantages-unit__icon"><img src="images/like.png" alt=""></div>
                  <h1 class="main-advantages-unit__header">Качественно</h1>
                  <div class="main-advantages-unit__description">Предоставляем исключительно качественные материалы иностранного производства</div>
                </div>
                <div class="main-advantages__unit main-advantages-unit">
                  <div class="main-advantages-unit__icon"><img src="images/speed.png" alt=""></div>
                  <h1 class="main-advantages-unit__header">Быстро</h1>
                  <div class="main-advantages-unit__description">Благодаря наработанному алгоритму и оперативному изготовлению продукции</div>
                </div>
                <div class="main-advantages__unit main-advantages-unit">
                  <div class="main-advantages-unit__icon"><img src="images/economy.png" alt=""></div>
                  <h1 class="main-advantages-unit__header">Экономно</h1>
                  <div class="main-advantages-unit__description">Разные ценовые категории позволяют удовлетворить выбор любого покупателя</div>
                </div>
              </div>
            </div>
          </section>
          <section class="gallery">
            <div class="container">
              <h1 class="gallery__header">Галерея наших работ и изделий</h1>
              <div class="slider">
                <div class="slide-track">
                    <?php
                   while ($row = $img->fetch())
                    {
                       echo "<div class='slide'><img src='images/gallery-images/".$row['img_name']."' alt=''></div>";
                    }
                    ?>
                </div>
              </div>
              <div class="gallery__button"><a class="button gallery-button" href="gallery.php">Смотреть все изображения</a></div>
            </div>
          </section>
          <section class="afford">
            <div class="container">
              <h1 class="afford__header">Мы предлагаем</h1>
              <div class="afford__menu">
                <ul class="afford-categories afford__categories">
                  <li class="afford-categories__unit active">Памятники</li>
                  <li class="afford-categories__unit">Ограды</li>
                  <li class="afford-categories__unit">Комплексы</li>
                  <li class="afford-categories__unit">Лампады</li>
                  <li class="afford-categories__unit">Бронзовые изделия</li>
                </ul>
                <div class="afford-subcategories afford__subcategories monument">
                  <ul>
                    <li> <a>Эксклюзивные</a></li>
                    <li> <a>Одиночные</a></li>
                    <li> <a>Цветные</a></li>
                    <li> <a>Гранит</a></li>
                    <li> <a>Двойные</a></li>
                  </ul><img src="images/gravestones/afford-1.png" alt="">
                </div>
                <div class="afford-subcategories afford__subcategories fence">
                  <ul></ul><img src="#" alt="">
                </div>
                <div class="afford-subcategories afford__subcategories complex">
                  <ul></ul><img src="#" alt="">
                </div>
                <div class="afford-subcategories afford__subcategories lamps">
                  <ul></ul><img src="#" alt="">
                </div>
                <div class="afford-subcategories afford__subcategories bronze">
                  <ul></ul><img src="#" alt="">
                </div>
              </div>
            </div>
          </section>
          <section class="promotions">
            <div class="container">
              <h1 class="promotions__header">Лучшие предложения на сегодня</h1>
              <div class="promotions__list">
                <div class="promotions__unit">
                  <div class="promotion__image"><img src="images/gravestones/promo-1.png" alt=""></div>
                  <div class="promotion__info">
                    <div class="promotion__name">Памятник "Одиссей"</div>
                    <div class="promotion__material">Материал: черный и красный гранит</div>
                    <div class="promotion__from">Происхождение: Китай</div>
                    <div class="promotion__size">Размеры: 180х120х150</div>
                  </div>
                  <div class="promotion__price">1250руб.</div>
                  <div class="promotion__more"> <span class="read-more">Подробнее</span></div>
                </div>
                <div class="promotions__unit">
                  <div class="promotion__image"><img src="images/promo-2.png" alt=""></div>
                  <div class="promotion__info">
                    <div class="promotion__name">Комплекс "Black&White"</div>
                    <div class="promotion__material">Материал: черный и белый мрамор</div>
                    <div class="promotion__from">Происхождение: Египет</div>
                    <div class="promotion__size">Размеры: 180х120х150</div>
                  </div>
                  <div class="promotion__price">1250руб.</div>
                  <div class="promotion__more"> <span class="read-more">Подробнее</span></div>
                </div>
                <div class="promotions__unit">
                  <div class="promotion__image"><img src="images/promo-3.png" alt=""></div>
                  <div class="promotion__info">
                    <div class="promotion__name">Памятник "Боствана"</div>
                    <div class="promotion__material">Материал: черный, серый и красный гранит</div>
                    <div class="promotion__from">Происхождение: Карелия</div>
                    <div class="promotion__size">Размеры: 180х120х150</div>
                  </div>
                  <div class="promotion__price">1250руб.</div>
                  <div class="promotion__more"> <span class="read-more">Подробнее</span></div>
                </div>
              </div>
            </div>
          </section>
        </main>
      </div>
      <div class="page__footer">
        <footer class="footer">
          <div class="footer-menu">
            <ul>
              <li class="footer-menu__unit"><a>Памятники</a></li>
              <li class="footer-menu__unit"><a>Буквы</a></li>
              <li class="footer-menu__unit"><a>Комплексы</a></li>
              <li class="footer-menu__unit"><a>Ограды</a></li>
              <li class="footer-menu__unit"><a>Кресты</a></li>
              <li class="footer-menu__unit"><a>Лампады</a></li>
              <li class="footer-menu__unit"><a>Вазы</a></li>
              <li class="footer-menu__unit"><a>О нас</a></li>
              <li class="footer-menu__unit"><a>Обратная связь</a></li>
            </ul>
          </div>
          <div class="footer-information">
            <div class="footer-information__contacts">
              <div class="footer-information__contacts_social">
                <h3>Мы в социальных сетях</h3>
                <div class="footer__social-links"><a class="facebook-link"><i class="fab fa-facebook-f"></i></a><a class="twitter-link"><i class="fab fa-twitter"></i></a><a class="vk-link"><i class="fab fa-vk"></i></a><a class="email-link"><i class="fas fa-envelope"></i></a></div>
              </div>
              <div class="footer-information__contacts_info">
                <div class="footer-information__adress">
                  <h3>Адрес</h3>
                  <p>ул. Аульская, стр. 8</p>
                </div>
                <div class="footer-information__phones">
                  <h3>Телефоны</h3>
                  <div class="footer-information__phones-block">
                    <p>+375 (29) 123-45-67</p>
                    <p>+375 (29) 123-45-67</p>
                    <p>+375 (29) 123-45-67</p>
                  </div>
                </div>
                <div class="footer-information__email">
                  <h3>Электронная почта</h3>
                  <p>realvotiva@gmail.com</p>
                </div>
              </div>
            </div>
            <div class="footer-information__description">Данный интернет-сайт носит информационный характер и ни при каких условиях не является публичной офертой, которая определяется положением Статьи 407 Гражданского кодекса РБ.</div>
          </div>
        </footer>
      </div>
    </div>
    <button class="button call-us-button" id="call-us" type="button">Заказать звонок</button>
    <form class="call-us-form" id="call-us-form" action="">
      <div class="call-us__head">
        <h1 class="call-us__header">Напишите нам и мы Вам перезвоним</h1>
        <div class="close" id="close">&times;</div>
      </div>
      <div class="call-us-form__field">
        <input class="call-us__name" type="text" name="name">
        <label for="name">Введите имя</label>
      </div>
      <div class="call-us-form__field">
        <input class="call-us__e-mail" type="email" name="email">
        <label for="email">Введите e-mail</label>
      </div>
      <div class="call-us-form__field">
        <input class="call-us__phone" type="tel" name="phone">
        <label for="phone">Введите номер телефона</label>
      </div>
      <div class="call-us-form__field">
        <button class="cal-us-form__submit button">Оформить заявку</button>
      </div>
    </form>
    <div class="sell-unit">
      <div class="close-modal">&times;</div>
      <div class="sell-unit__image"><span class="previous"></span>
        <div class="carousel"><img src="images/carousel-image-1.png" alt=""><img src="images/carousel-image-2.png" alt=""><img src="images/carousel-image-3.png" alt=""></div><span class="next"></span>
      </div>
      <div class="sell-unit__price promotion__price">1299 руб.</div>
      <h1 class="sell-unit__header">Комплекс "Боствана"</h1>
      <div class="sell-unit__info">
        <div class="sell-unit__info_col">
          <div class="sell-unit__material promotion__material">Материал: черный и красный гранит</div>
          <div class="sell-unit__from promotion__from">Происхождение: Китай</div>
          <div class="sell-unit__size promotion__size">Размеры: 180х120х150</div>
        </div>
        <div class="sell-unit__info_col">
          <p class="sell-unit__describe">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, adipisci hic! Hic animi expedita quisquam ducimus ratione ipsam nihil vero! Placeat alias eius adipisci nisi corrupti? Necessitatibus dolores quaerat distinctio?</p>
        </div>
      </div>
    </div>
  </body>
</html>