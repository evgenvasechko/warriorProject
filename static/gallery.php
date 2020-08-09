<!DOCTYPE html>
<html lang="en">
  <head>
    <head>
      <title>Heartstone</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="styles/app.css?stamp=1596710895">
      <!--link(rel='stylesheet' href="styles/hamburgers.css")-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <script src="js/app.js?stamp=1596710895"></script>
      <script src="js/mail.js"></script>
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
            <li class="header-menu__unit"><a href="services.html">Услуги</a></li>
          </ul>
        </header>
        <header class="header-mobile">
          <button class="hamburger hamburger--slider" type="button"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
          <ul class="header-menu">
            <li class="header-menu__unit"><a href="index.php">Главная</a></li>
            <li class="header-menu__unit"> <a href="catalog.php">Каталог</a></li>
            <li class="header-menu__unit"><a href="about-us.html">О нас</a></li>
            <li class="header-menu__unit"><a href="gallery.php">Галерея</a></li>
            <li class="header-menu__unit"><a href="3d-design.html">3D-дизайн</a></li>
            <li class="header-menu__unit"><a href="contacts.html">Контакты</a></li>
            <li class="header-menu__unit"><a href="services.html">Услуги</a></li>
          </ul>
        </header>
      </div>
      <div class="page__inner">
        <main class="page__content">
          <section class="gallery-hero hero-sections">
            <div class="hero-container">
              <h1 class="page-title">Галерея</h1>
              <div class="page-about">
                <div class="page-about__text">За многие годы работы нами было выполнено множество заказов, которые вполне могут стать шаблонами в качестве готовых решений. На данной странице представлены наиболее оптимальные, по нашему мнению, решения для оформления и комбинации материалов и цветов.</div>
                <div class="page-about__filter"><span class="filter-unit" name="fund">Памятники</span><span class="filter-unit" name="lamp"> Лампады</span><span class="filter-unit" name="bronse"> Бронза</span><span class="filter-unit" name="tomb"> Надгробия</span></div>
              </div>
            </div>
          </section>
          <section class="gallery">
            <div class="container">
              <div class="gallery-images__list">
              <?php
                  while ($row = $img->fetch())
                  {
                      echo "<img class='gallery-image fund' src='images/gallery-images/".$row['img_name']."' alt=''>";
                  }
                  ?>
              </div>
              <button class="gallery-images__load-more button">Load More</button>
            </div>
          </section>
          <div class="gallery-modal"><span class="gallery-modal__close">&times;</span><img class="gallery-modal__content" alt="" id="gallery-modal-image">
            <div class="gallery-modal__prev"></div>
            <div class="gallery-modal__next"></div>
          </div>
        </main>
      </div>
      <div class="page__footer">
        <footer class="footer">
          <div class="footer-information">
            <div class="footer-information__contacts">
              <div class="footer-information__contacts_info">
                <div class="footer-information__adress">
                  <h3>Адрес склада:</h3>
                  <p>г.Гродно, ул. Аульская, д. 33</p>
                </div>
                <div class="footer-information__adress">
                  <h3>Адрес магазина:</h3>
                  <p>г.Гродно, ул. Белуша, д. 4, пав. 9</p>
                </div>
                <div class="footer-information__phones">
                  <h3>Телефоны</h3>
                  <div class="footer-information__phones-block">
                    <p>+375 (33) 618-32-03</p>
                    <p>+375 (33) 623-20-76</p>
                    <p>+375 (152) 68-83-49</p>
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
        <input class="call-us__phone" type="tel" name="phone" placeholder="+375 ">
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