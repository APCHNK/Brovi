<?php // этот php-код компилирует less/style.less в css/style.css	
	require "./assets/less/lessc.inc.php";	
	function autoCompileLess($inputFile, $outputFile) {
	  // load the cache
	  $cacheFile = $inputFile.".cache";
	  if (file_exists($cacheFile)) {
		$cache = unserialize(file_get_contents($cacheFile));
	  } else {
		$cache = $inputFile;
	  }
	  $less = new lessc;
	  $newCache = $less->cachedCompile($cache);
	  if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
		file_put_contents($cacheFile, serialize($newCache));
		file_put_contents($outputFile, $newCache['compiled']);
	  }
	}
	autoCompileLess('./assets/less/style.less', './assets/css/style.css');
// class="col-xs-6 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="0.6s"
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta name="viewport" content="width=1200px">-->

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!--<link rel="apple-touch-icon" href="ссылка на фавикон для apple">
	<link rel="apple-touch-icon" sizes="72x72" href="ссылка на фавикон для apple">
	<link rel="apple-touch-icon" sizes="114x114" href="ссылка на фавикон для apple"> -->

    <!-- <meta property="og:image" content="ссылка на картинку для превью"> -->
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css" />
</head>

<body>
    <div class="wrapper">
        <div id="mobile-menu">
            <div class="block df">
                <ul>
                    <li><a href=""><span>Link</span></a></li>
                    <li><a href=""><span>Link</span></a></li>
                    <li><a href=""><span>Link</span></a></li>
                    <li><a href=""><span>Link</span></a></li>
                </ul>
            </div>
        </div>
        <header>
            <div class="container">
                <div class="block df jb">
                    <div class="left">
                        <div class="logo">
                            Pied-De-Lapin
                        </div>
                    </div>
                    <div class="right">
                        <div class="but md-trigger" data-modal="modal-1">
                            ОНЛАЙН ЗАПИСЬ
                        </div>
                    </div>
                    <div class="menu">
                        <!-- Кнопка Мобильного Меню -->
                        <button id="burger-menu">
                            <div class="box box_item1"></div>
                            <div class="box box_item2"></div>
                            <div class="box box_item3"></div>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <section class="sec1">
            <div class="bg"></div>
            <div class="container">
                <div class="brovi">
                    <h1>Брови</h1>
                    <h2>/</h2>
                    <p>Профессиональная косметика и квалифицированные мастера делают нас лучшими, а тебя — ещё красивее</p>
                    <a href="#price">СМОТРЕТЬ ПРАЙС ЛИСТ</a>
                </div>
            </div>
        </section>
        <section class="sec2">
            <div class="container">
                <div class="blocks">
                    <div class="block b1">
                        <div class="image">
                            <img src="./assets/img/i2.jpeg" alt="">
                            <div class="num">01</div>
                        </div>
                        <div class="content">
                            <div class="title">
                                <h1><span>Коррекция</span><br>бровей</h1>
                            </div>
                            <div class="p">У нас есть несколько вариантов коррекции бровей:<br>• создание формы пинцетом или нитью;<br>• поддержание существующей формы пинцетом или нитью;<br>Также наши мастера дадут рекомендации по средствам для роста волосков и подберут правильную косметику для бровей. Процедура займёт 15-30 минут.</div>
                            <div class="price_time">
                                <div class="price">
                                    <span>Стоимость:</span>
                                    <p>350 грн.</p>
                                </div>
                                <div class="time">
                                    <span>Время:</span>
                                    <p>15-30 мин.</p>
                                </div>
                            </div>
                            <div class="but md-trigger" data-modal="modal-1">ЗАПИСАТЬСЯ</div>
                        </div>
                    </div>
                    <div class="block b2">
                        <div class="image">
                            <img src="./assets/img/i3.jpeg" alt="">
                            <div class="num">02</div>
                        </div>
                        <div class="content">
                            <div class="title">
                                <h1><span>Окрашивание</span><br>бровей</h1>
                            </div>
                            <div class="p">Перед окрашиванием наши мастера подберут твой индивидуальный оттенок. Мы работаем с профессиональной краской для бровей. При наличии аллергии на красители, мы рекомендуем сделать пробу на окрашивание. Процедура займёт 15-30 минут, а эффект продержится на волосках до 2-х недель.</div>
                            <div class="price_time">
                                <div class="price">
                                    <span>Стоимость:</span>
                                    <p>350 грн.</p>
                                </div>
                                <div class="time">
                                    <span>Время:</span>
                                    <p>15-30 мин.</p>
                                </div>
                            </div>
                            <div class="but md-trigger" data-modal="modal-1">ЗАПИСАТЬСЯ</div>
                        </div>
                    </div>
                    <div class="block b3">
                        <div class="image">
                            <img src="./assets/img/i4.png" alt="">
                            <div class="num">03</div>
                        </div>
                        <div class="content">
                            <div class="title">
                                <h1><span>Окрашивание бровей</span><br>бесцветной хной + ботокс</h1>
                            </div>
                            <div class="p">Процедура, которая создана, чтобы укрепить волоски и сделать их более здоровыми, блестящими и ухоженными. Такой вид окрашивания мастера The Brow Bar рекомендуют обладательницам жёстких и непослушных бровей. Эта процедура осчастливит твои брови. <br>Процедура длится примерно 45 минут.</div>
                            <div class="price_time">
                                <div class="price">
                                    <span>Стоимость:</span>
                                    <p>650 грн.</p>
                                </div>
                                <div class="time">
                                    <span>Время:</span>
                                    <p>45 мин.</p>
                                </div>
                            </div>
                            <div class="but md-trigger" data-modal="modal-1">ЗАПИСАТЬСЯ</div>
                        </div>
                    </div>
                    <div class="block b4">
                        <div class="image">
                            <img src="./assets/img/i5.jpeg" alt="">
                            <div class="num">04</div>
                        </div>
                        <div class="content">
                            <div class="title">
                                <h1><span>Ламинирование</span><br>бровей</h1>
                            </div>
                            <div class="p">Уложенные брови, ради которых не нужно страдать каждое утро. Процедура для девушек с непослушными, асимметричными бровями, волоски которых не желают лежать в одном направлении. Мастера The Brow Bar работают на основе составов Thuya, In Lei. <br>Процедура занимает от 60 до 75 минут.</div>
                            <div class="price_time">
                                <div class="price">
                                    <span>Стоимость:</span>
                                    <p>1000 грн.</p>
                                </div>
                                <div class="time">
                                    <span>Время:</span>
                                    <p>60-75 мин.</p>
                                </div>
                            </div>
                            <div class="but md-trigger" data-modal="modal-1">ЗАПИСАТЬСЯ</div>
                        </div>
                    </div>
                    <div class="block_price" id="price">
                        <div class="l">
                            <div class="image">
                                <div class="num">05</div>
                            </div>
                            <div class="text">
                                <span>Прайс лист</span>
                            </div>
                        </div>
                        <div class="r">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>БРОВИ</th>
                                        <th>CENA</th>
                                    </tr>
                                    <tr>
                                        <td>Рядок 1, ячейка 1</td>
                                        <td>Рядок 1, ячейка 2</td>
                                    </tr>
                                    <tr>
                                        <td>Рядок 2, ячейка 1</td>
                                        <td>Рядок 2, ячейка 2</td>
                                    </tr>
                                    <tr>
                                        <td>Рядок 2, ячейка 1</td>
                                        <td>Рядок 2, ячейка 2</td>
                                    </tr>
                                    <tr>
                                        <td>Рядок 2, ячейка 1</td>
                                        <td>Рядок 2, ячейка 2</td>
                                    </tr>
                                    <tr>
                                        <td>Рядок 2, ячейка 1</td>
                                        <td>Рядок 2, ячейка 2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec3">
            <div class="container">
                <div class="title">
                    Отзывы наших клиентов
                </div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p>
                                Хожу в этот прекрасный салон уже на протяжении года, безумно довольна качеством Это те процедуры, которые я делаю на постоянной основе! Все мастера всегда прислушиваются к запросу! Особенно обожаю по волосам Максима, он просто топ! Безумно благодарна за качество работы.
                            </p>
                            <div class="user">
                                <div class="image">
                                    <img src="./assets/img/u1.jpeg" alt="">
                                </div>
                                <div class="name">
                                    <div class="nik">
                                        Алина Герасимова
                                    </div>
                                    <div class="status">
                                        блогерка
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>
                                Хожу в этот прекрасный салон уже на протяжении года, безумно довольна качеством Это те процедуры, которые я делаю на постоянной основе! Все мастера всегда прислушиваются к запросу! Особенно обожаю по волосам Максима, он просто топ! Безумно благодарна за качество работы.
                            </p>
                            <div class="user">
                                <div class="image">
                                    <img src="./assets/img/u1.jpeg" alt="">
                                </div>
                                <div class="name">
                                    <div class="nik">
                                        Алина Герасимова
                                    </div>
                                    <div class="status">
                                        блогерка
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>
                                Хожу в этот прекрасный салон уже на протяжении года, безумно довольна качеством Это те процедуры, которые я делаю на постоянной основе! Все мастера всегда прислушиваются к запросу! Особенно обожаю по волосам Максима, он просто топ! Безумно благодарна за качество работы.
                            </p>
                            <div class="user">
                                <div class="image">
                                    <img src="./assets/img/u1.jpeg" alt="">
                                </div>
                                <div class="name">
                                    <div class="nik">
                                        Алина Герасимова
                                    </div>
                                    <div class="status">
                                        блогерка
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>
                                Хожу в этот прекрасный салон уже на протяжении года, безумно довольна качеством Это те процедуры, которые я делаю на постоянной основе! Все мастера всегда прислушиваются к запросу! Особенно обожаю по волосам Максима, он просто топ! Безумно благодарна за качество работы.
                            </p>
                            <div class="user">
                                <div class="image">
                                    <img src="./assets/img/u1.jpeg" alt="">
                                </div>
                                <div class="name">
                                    <div class="nik">
                                        Алина Герасимова
                                    </div>
                                    <div class="status">
                                        блогерка
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <p>
                                Хожу в этот прекрасный салон уже на протяжении года, безумно довольна качеством Это те процедуры, которые я делаю на постоянной основе! Все мастера всегда прислушиваются к запросу! Особенно обожаю по волосам Максима, он просто топ! Безумно благодарна за качество работы.
                            </p>
                            <div class="user">
                                <div class="image">
                                    <img src="./assets/img/u1.jpeg" alt="">
                                </div>
                                <div class="name">
                                    <div class="nik">
                                        Алина Герасимова
                                    </div>
                                    <div class="status">
                                        блогерка
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-scrollbar"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
    </div>

    <?php require "modal.php"?>
    <?php require "footer.php"?>
