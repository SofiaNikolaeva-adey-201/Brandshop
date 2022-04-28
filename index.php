<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/site.css" rel="stylesheet">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
    <title>Онлайн магазин</title>
</head>
<body>
<header>
    <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">Brand</div>
        <div id="navWrap">
            <a href="/">
                Главная
            </a>
            <a href="index.php?page=shop">
                Магазин
            </a>
            <a href="index.php?page=contacts">
                Контакты
            </a>
            <a href="index.php?page=history">
                История техники
            </a>
            <a href="index.php?page=facts">
                Интересные факты
            </a>
        </div>
    </div>
</header>

<div id="content">
    <?php
        $goods = [
            [
                'id' => 1,
                'name' => 'Iphone',
                'desc' => 'iPhone (МФА: [ˈaɪfoʊn]) — серия смартфонов, разработанных корпорацией Apple. Работают под управлением операционной системы iOS, представляющей собой упрощённую и оптимизированную для функционирования на мобильном устройстве версию macOS. ',
                'img' => '/images/goods/iphone.jpg',
                'price' => '2000 $'
            ],
            [
                'id' => 2,
                'name' => 'HTC',
                'desc' => 'HTC Corporation (TWSE: 2498, бывшая High Tech Computer Corporation изменила своё наименование в июне 2008 года) — тайваньский производитель смартфонов и планшетов. Компания изначально выпускала смартфоны в основном на базе мобильной операционной системы Windows Mobile от Microsoft, но в 2009 году начала выпускать большинство устройств на платформе Android, а с 2010 года и на платформе Windows Phone. ',
                'img' => '/images/goods/htc.jpg',
                'price' => '1200 $'
            ],
            [
                'id' => 3,
                'name' => 'Samsung',
                'desc' => 'Samsung Group («Самсунг Груп», кор. 삼성그룹, Samseong Gurub, Samsŏng Gurup) — южнокорейская группа компаний, один из крупнейших чеболей, основанный в 1938 году. На мировом рынке известен как производитель высокотехнологичных компонентов, включая полноцикловое производство интегральных микросхем, телекоммуникационного оборудования, бытовой техники, аудио- и видеоустройств. Главный офис компании расположен в Сеуле. ',
                'img' => '/images/goods/samsung.jpg',
                'price' => '1400 $'
            ]
        ];

        $page = $_GET['page'];

        if (!isset($page)) {
            require('templates/main.php');
        } elseif ($page == 'shop') {
            require('templates/shop.php');
        } elseif ($page == 'contacts') {
            require('templates/contacts.php');
        } elseif ($page == 'history') {
            require('templates/history.php');
        } elseif ($page == 'facts') {
            require('templates/facts.php');
        } elseif ($page == 'product') {
            $id = $_GET['id'];
            $good = [];
            foreach ($goods as $product) {
                if ($product['id'] == $id) {
                    $good = $product;
                    break;
                }
            }
            require('templates/openedProduct.php');
        }

    ?>



</div>

<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
                <img src="images/envelope.svg" class="contactIcon">
                info@brandshop.ru
            </div>
            <div class="contactWrap">
                <img src="images/phone-call.svg" class="contactIcon">
                8 800 555 00 00
            </div>
            <div class="contactWrap">
                <img src="images/placeholder.svg" class="contactIcon">
                Москва, пр-т Ленина, д. 1 офис 304
            </div>
        </div>

        <div id="footerNav">
            <a href="/">Главная</a>
            <a href="index.php?page=shop">Магазин</a>
        </div>

        <div id="social">
            <img class="socialItem" src="images/vk-social-logotype.svg">
            <img class="socialItem" src="images/google-plus-social-logotype.svg">
            <img class="socialItem" src="images/facebook-logo.svg">
        </div>

        <div id="copyrights">&copy; Brandshop</div>
    </div>
</footer>

</body>
</html>