<?
header('Content-Type: text/html; charset= utf-8');
header("Expires: " . gmdate("D, d M Y H:i:s") . " GMT");
ob_start("sanitize_output");
function sanitize_output($buffer) {
    $search = array(
        '/\>[^\S ]+/s',  // strip whitespaces after tags, except space
        '/[^\S ]+\</s',  // strip whitespaces before tags, except space
        '/(\s)+/s'       // shorten multiple whitespace sequences
    );
    $replace = array(
        '>',
        '<',
        '\\1'
    );
    $buffer = preg_replace($search, $replace, $buffer);
    return $buffer;
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Свадьбы</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!-- Styles -->
    <link rel="stylesheet" href="css/screen.css"/>
    <link rel="stylesheet" type="text/css" href="feedback/css/jquery.arcticmodal.css">
    <link rel="stylesheet" type="text/css" href="feedback/css/jquery.jgrowl.css">
    <link rel="stylesheet" href="css/slick.css"/>
    <link rel="stylesheet" href="css/slick-theme.css"/>

</head>
<body>
<!-- Libraries -->
<script src="js/jquery-1.11.3.min.js"></script>

<script src="feedback/js/feedback.min.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/slick.min.js"></script>

<script src="js/ui.js"></script>

<!--test-->

<!--//test-->

<div class="wrapper">
    <header>
        <a class="hlogo" href="#"></a>
        <a class="hlogo-center" href="#"></a>
        <div class="right-info">
            <a class="telephone" href="tel:89299513630"><span>8 929</span> 951 36 30</a> <br/>
            <a class="email-feedback" href="#">viwe.italy@gmail.com</a><br/>
            <a class="order-call" href="#">Заказать звонок</a>
        </div>
    </header>
</div>
<div class="tab1">
    <div class="tab-inner-image">
        <div class="wrapper">
            <h1>Эксклюзивная <br/>
                свадьба</h1>
            <div class="heading-divider"></div>
            <p class="heading-description">в уникальном регионе Марке, <span>Италия</span></p>
            <div class="form">
                <h2>Оставь заявку сейчас и <br/>
                    получи скидку 5% на организацию <br/>
                    свадьбы в Италии</h2>
                <p><span>*</span>не распространяется на спецпредложения</p>
                <div class="bird"></div>
                <div class="love"></div>
                <form method="post" name="form-2" class="arctic-form">
                    <input type="text" value="" required placeholder="Ваше имя..." name="name"/>
                    <input type="tel" value="" required placeholder="Ваш телефон..." name="phone"/>
                    <input type="hidden" name="callback_info" value="Шапка - форма" />
                    <input type="submit" value="ОСТАВИТЬ ЗАЯВКУ" class="feedback" name="send"/>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="tab2">
    <div class="wrapper">
        <h1><span>Немного о свадьбе</span><br/>
        в италии</h1>
        <div class="heading-divider"></div>
        <p><span class="red">Свадьба</span> <span class="bold">- одно из самых волнительных, долгожданных и значимых событий в жизни каждого человека.</span><br/>
            С момента решения узаконить Ваши отношения, непременно встает вопрос - как сделать это событие самым ярким
            <br/>
            и незабываемым? <span class="normal">Свадьба в</span> <span class="red">Италии</span> - в самой романтичной, солнечной и необыкновенной стране
            <br/>
            мира, где даже в воздухе парит любовь и гармония.</p> <br/>
        <p><span class="normal">В </span><span class="red">Италии</span><span class="normal"> Вы можете, как официально зарегистрировать свои отношения,</span>
            <br/>
            так и устроить <span class="red">символическую свадьбу</span>, после регистрации в ЗАГСе у себя на родине. Уверяем Вас, это будет
            <br/>
            невероятное торжество, о котором Вы и Ваши гости будут вспоминать еще очень долго. И поверьте, это не <br/>
            дороже, чем организовать свадьбу в Москве, однако, по-истине необычно и волшебно.</p>
    </div>
</div>
<div class="tab3-top"></div>
<div class="tab3">
    <div class="tab-inner-image">
        <h1>НАШИ ПРЕИМУЩЕСТВА</h1>
        <ul class="benefits">
            <li>
                <div class="icon">
                    <div class="icon1"></div>
                </div>
                <div class="content">
                    6 лет в сфере <br/>
                    свадебных услуг
                </div>
            </li>
            <li>
                <div class="icon">
                    <div class="icon2"></div>
                </div>
                <div class="content">Собственное свадебное <br/>
                    дизайн агентство
                </div>
            </li>
            <li>
                <div class="icon">
                    <div class="icon3"></div>
                </div>
                <div class="content">Неизбитые, эксклюзивные <br/>
                    площадки
                </div>
            </li>
            <li>
                <div class="icon">
                    <div class="icon4"></div>
                </div>
                <div class="content">Прямые профессиональные <br/>
                    партнеры в Италии
                </div>
            </li>
            <li>
                <div class="icon">
                    <div class="icon5"></div>
                </div>
                <div class="content">Наличие рускоговорящих <br/>
                    представителей в Италии
                </div>
            </li>
            <li>
                <div class="icon">
                    <div class="icon6"></div>
                </div>
                <div class="content">Полное документальное <br/>
                    сопровождение
                </div>
            </li>
            <li>
                <div class="icon">
                    <div class="icon7"></div>
                </div>
                <div class="content">Гарантия возврата денег <br/>
                    в случае непредоставления <br/>
                    визы
                </div>
            </li>
            <li>
                <div class="icon">
                    <div class="icon8"></div>
                </div>
                <div class="content">Персональный менеджер <br/>
                    с момента заключения <br/>
                    договора
                </div>
            </li>
            <li>
                <div class="icon">
                    <div class="icon9"></div>
                </div>
                <div class="content">Консьерж - сервис по <br/>
                    любым вопросам
                </div>
            </li>
        </ul>
    </div>
    <div class="shadow"></div>
</div>
<div class="form tab3-form">
    <h2>Ознакомительный тур для невест и подружек невесты</h2>
    <p>Присоединяйся в группу и получи символическую <br/>
        церемонию в подарок при проведении <br/>
        свадьбы в Италии.</p>
    <div class="boots"></div>
    <div class="clothes"></div>
    <form method="post" name="form-2" class="arctic-form">
        <input type="text" value="" required placeholder="Ваше имя..." name="name"/>
        <input type="tel" value="" required placeholder="Ваш телефон..." name="phone"/>
        <input type="hidden" name="callback_info" value="Ознакомительный тур для невест (Наши преимущества)" />
        <input type="submit" value="ОСТАВИТЬ ЗАЯВКУ" class="feedback" name="send"/>
    </form>
</div>
<div class="tab4">
   <h1>НАШИ УСЛУГИ</h1>
    <div class="wrapper">
        <ul class="first-row clearfix">
            <li>
                <a class="title" href="#">Свадьба "для двоих" под ключ</a>
                <div class="horizontal-divider"></div>
                <div class="block">
                    <a href="#" class="read-about1"><img src="css/images/assets/poster1.png" alt=""/></a>
                    <div class="content">
                        Сбежать от всех, чтобы весь мир был только для <br/>
                        Вас одних. Самые смелые решения, на которые никто, <br/>
                        кроме Вас не решиться. Мы воплотим Ваши <br/>
                        неординарные желания в жизнь.
                    </div>
                </div>
                <div class="vertical-divider"></div>
                <div class="price">от 54 000 Р.</div>
                <a class="read-about read-about1" href="#">ЧИТАТЬ ПОДРОБНЕЕ</a>
            </li>
            <li>
                <a class="title" href="#">"Семейное торжество" под ключ</a>
                <div class="horizontal-divider"></div>
                <div class="block">
                    <a class="read-about2" href="#"><img src="css/images/assets/poster2.png" alt=""/></a>
                    <div class="content">
                        Под звон бокалов с Просекко, в дали от суеты <br/>
                        больших и пыльных городов, в самой романтичной и <br/>
                        солнечной стране мира, в окружении близких и друзей.
                    </div>
                </div>
                <div class="vertical-divider"></div>
                <div class="price">от 64 000 Р.</div>
                <a class="read-about read-about2" href="#">ЧИТАТЬ ПОДРОБНЕЕ</a>
            </li>
        </ul>
        <ul class="second-row clearfix">
            <li>
                <a class="read-about3" href="#"><img src="css/images/assets/poster3.png" alt=""/></a>
                <div class="content">
                    <a class="title" href="#">Организация медового месяца</a>
                    <div class="horizontal-divider"></div>
                    <a class="read-podrobnee read-about3" href="#">ПОДРОБНЕЕ</a>
                </div>
            </li>
            <li>
                <a class="read-about4" href="#"><img src="css/images/assets/poster4.png" alt=""/></a>
                <div class="content">
                    <a class="title" href="#">Годовщина свадьбы "под ключ"</a>
                    <div class="horizontal-divider"></div>
                    <a class="read-podrobnee read-about4" href="#">ПОДРОБНЕЕ</a>
                </div>
            </li>
            <li>
                <a class="read-about5" href="#"><img src="css/images/assets/poster5.png" alt=""/></a>
                <div class="content">
                    <a class="title" href="#">Самостоятельная организация</a>
                    <div class="horizontal-divider"></div>
                    <a class="read-podrobnee read-about5" href="#">ПОДРОБНЕЕ</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="tab5-top"></div>
<div class="tab5">
    <div class="tab-inner-image">
        <h1>НАШИ ЛОКАЦИИ</h1>
        <div class="multiple-items">
            <div class="item">
                <img src="css/images/assets/poster6.png" alt=""/>
                <div class="content">
                    <a class="title parko-otel" href="#">Парко отель</a>
                    <a class="read-full parko-otel" href="#">ПОДРОБНЕЕ</a>
                </div>
            </div>
            <div class="item">
                <img src="css/images/assets/poster7.png" alt=""/>
                <div class="content">
                    <a class="title villa-ester" href="#">Вилла Эстер</a>
                    <a class="read-full villa-ester" href="#">ПОДРОБНЕЕ</a>
                </div>
            </div>
            <div class="item">
                <img src="css/images/assets/poster8.png" alt=""/>
                <div class="content">
                    <a class="title torre-de-palme" href="#">Торре ди Пальме</a>
                    <a class="read-full torre-de-palme" href="#">ПОДРОБНЕЕ</a>
                </div>
            </div>
        </div>
    </div>
    <div class="shadow"></div>
</div>
<div class="tab6">
    <div class="wrapper">
        <h1>ПОЧЕМУ РЕГИОН МАРКЕ?</h1>
        <ul class="clearfix">
            <li>
                <div class="icon icon1"></div>
                <div class="title">Центральное местоположение</div>
                <div class="content">
                    Вдали от суеты и толпы туристов при этом <br/>
                    прекрасная транспортная доступностью во все <br/>
                    центральные города Италии
                </div>
            </li>
            <li>
                <div class="icon icon3"></div>
                <div class="title">Обувной шопинг</div>
                <div class="content">
                    Марке сердце всех обувных фабрик Италии, <br/>
                    во время путешествия Вы сможете выбрать <br/>
                    себе самую лучшую пару обуви
                </div>
            </li>
            <li>
                <div class="icon icon2"></div>
                <div class="title">Природная красота</div>
                <div class="content">
                    Вся Италия в одном регионе: море, <br/>
                    горы, холмы, поля
                </div>
            </li>
            <li>
                <div class="icon icon4"></div>
                <div class="title">Лучшие соотношение</div>
                <div class="content">
                    Цена-качество, акции, скидки, <br/>
                    антикризисные предложения
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="tab7">
    <div class="tab-inner-image">
        <h1><span>НАШИ</span> <br/>
            СПЕЦПРЕДЛОЖЕНИЯ</h1>
        <div class="wrapper">
            <ul>
                <li>
                    <div class="block">
                        <a class="title" href="#">Символическая <br/>
                            свадьба в Парко Отель </a>
                        <div class="horizontal-divider"></div>
                        <p>Свадебное торжество <br/>
                            на 10 человек <span>"Под ключ"</span></p>
                        <img src="css/images/assets/poster9.png" alt=""/>
                        <div class="gray-bg">
                            <div class="price">335 000 <span class="valuta">Р.</span><span class="important">*</span></div>
                            <div class="horizontal-divider"></div>
                            <a class="in-tariff parko-otel-in" href="#">Что входит в тариф</a>
                        </div>
                    </div>
                    <a class="make-order parko-otel-order" href="#">СДЕЛАТЬ ЗАКАЗ</a>
                </li>
                <li>
                    <div class="block">
                        <a class="title" href="#">Символическая
                            свадьба в Фортино Наполеонико </a>
                        <div class="horizontal-divider"></div>
                        <p>Свадебное торжество <br/>
                            на 10 человек <span>"Под ключ"</span></p>
                        <img src="css/images/assets/poster9.png" alt=""/>
                        <div class="gray-bg">
                            <div class="price">385 000 <span class="valuta">Р.</span><span class="important">*</span></div>
                            <div class="horizontal-divider"></div>
                            <a class="in-tariff fortino-in" href="#">Что входит в тариф</a>
                        </div>
                    </div>
                    <a class="make-order fortino-order" href="#">СДЕЛАТЬ ЗАКАЗ</a>
                </li>
                <li>
                    <div class="block">
                        <a class="title" href="#">Символическая
                            свадьба на вилле Кастелани</a>
                        <div class="horizontal-divider"></div>
                        <p>Свадебное торжество <br/>
                            на 10 человек <span>"Под ключ"</span></p>
                        <img src="css/images/assets/poster9.png" alt=""/>
                        <div class="gray-bg">
                            <div class="price">350 000 <span class="valuta">Р.</span><span class="important">*</span></div>
                            <div class="horizontal-divider"></div>
                            <a class="in-tariff kastelani-in" href="#">Что входит в тариф</a>
                        </div>
                    </div>
                    <a class="make-order kastelani-order" href="#">СДЕЛАТЬ ЗАКАЗ</a>
                </li>

            </ul>
        </div>
    </div>
    <div class="shadow"></div>
</div>
<div class="tab8">
    <div class="wrapper">
        <h1>ОТЗЫВЫ О НАС</h1>
        <div class="gb_container">
            <div class="gb_item">
                <div class="top-panel">
                    <div class="ava"><img src="css/images/ava_small.png" alt=""/></div>
                    <div class="title">Антонио и Анжелика</div>
                    <div class="vertical-divider"></div>
                    <p>Мы заказывали у Елены Балыкиной свадьбу в Италии, в Пьер-Марино. Елена нам все <br/>
                        объяснила более, чем подробно, жена с подругами съездила на разведку, приехала просто <br/>
                        в огромном шоке от счастья, мы сразу дали предоплату на свадьбу и начали организацию. <br/>
                        Спасибо огромное Елене за ее подход к нам и за суперскую свадьбу!</p>
                </div>
            </div>

            <div class="gb_item">
                <div class="top-panel">
                    <div class="ava"><img src="css/images/ava_small.png" alt="2"/></div>
                    <div class="title">Антонио и Анжелика2</div>
                    <div class="vertical-divider"></div>
                    <p>Мы заказывали у Елены Балыкиной свадьбу в Италии, в Пьер-Марино. Елена нам все <br/>
                        объяснила более, чем подробно, жена с подругами съездила на разведку, приехала просто <br/>
                        в огромном шоке от счастья, мы сразу дали предоплату на свадьбу и начали организацию. <br/>
                        Спасибо огромное Елене за ее подход к нам в огромном шоке от счастья, мы сразу дали предоплату на свадьбу и начали организацию. <br/>
                        Спасибо огромное Елене за ее подход к нам и в огромном шоке от счастья, мы сразу дали предоплату на свадьбу и начали организацию. <br/>
                        Спасибо огромное Елене за ее подход к нам и и за суперскую свадьбу!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form tab9-form">
    <h2>Ознакомительный тур для невест и подружек невесты</h2>
    <p>Присоединяйся в группу и получи символическую <br/>
        церемонию в подарок при проведении <br/>
        свадьбы в Италии.</p>
    <div class="boots"></div>
    <div class="clothes"></div>
    <form method="post" name="form-2" class="arctic-form">
        <input type="text" value="" required placeholder="Ваше имя..." name="name"/>
        <input type="tel" value="" required placeholder="Ваш телефон..." name="phone"/>
        <input type="hidden" name="callback_info" value="Ознакомительный тур для невест (как мы работаем)" />
        <input type="submit" value="ОСТАВИТЬ ЗАЯВКУ" class="feedback" name="send"/>
    </form>
</div>

<div class="tab9">
    <div class="tab-inner-image">
        <h1>КАК МЫ РАБОТАЕМ</h1>
        <div class="steps">
            <div class="step1">Личная встреча в Москве <br/>
                или удаленный формат <br/>
                общения с Вами</div>
            <div class="step2">Знакомство, обсуждение <br/>
                формата и концепции <br/>
                свадебного торжества</div>
            <div class="step3">Подготовка концепции <br/>
                свадебного торжества</div>
            <div class="step4">
                Оплата и отзыв <br/>
                о проведенной <br/>
                свадьбе
            </div>
            <div class="step5">Свадебное <br/>
                торжество</div>
            <div class="step6">Полноценная <br/>
                Подготовка к свадьбе</div>
            <div class="step_description">
                <span class="important">*</span> С момента заключения договора с Вами <br/>
                будет работать личный менеджер - координатор
            </div>
        </div>
    </div>
    <div class="shadow"></div>
</div>
<div class="tab10">
    <div class="wrapper">
        <h1>FAQ</h1>
        <div class="faq_container">
            <div class="faq_item">
                <div class="heading">Что будет, если место проведения мне не понравится?</div>
                <p>Просто Италия не оправдала ваших завышеных ожиданий. Мы в этом году <br/>
                    тоже побывали в Италии на Амальфитане и вернулись без поросячего восторга. <br/>
                    Нет, природа и архитектура впечатляет, но народ удивляет и разочаровывает. Вероятно, <br/>
                    уровни восторга должны были быть разными.</p>
            </div>
            <div class="faq_item">
                <div class="heading">Что будет, если место проведения мне не понравится?</div>
                <p>Просто Италия не оправдала ваших завышеных ожиданий. Мы в этом году <br/>
                    тоже побывали в Италии на Амальфитане и вернулись без поросячего восторга. <br/>
                    Нет, природа и архитектура впечатляет, но народ удивляет и разочаровывает. Вероятно, <br/>
                    уровни восторга должны были быть разными.</p>
            </div>
        </div>
    </div>
</div>
<div class="tab11">
    <div class="tab-inner-image">
        <div class="wrapper">
            <h1>ОБО МНЕ</h1>
            <div class="content">
                <div class="left">
                    <div class="ava"></div>
                    <div class="title">Елена Балыкина</div>
                    <div class="description">Организатор свадеб В италии</div>
                </div>
                <div class="right">
                    <p>EVENT - агентство Елены Балыкиной "VIWe" - VeseL.ItalianWedding - одно из <br/>
                        новых направлений деятельности успешно развивающейся на протяжении 6 <br/>
                        лет и зарекомендовавшей себя на рынке свадебных услуг, компании "VeseL". <br/>
                        Основной идеей создания event-агенства "VIWe" является организация <br/>
                        мероприятий в Италии в регионе Марке. <br/><br/>

                        Безусловно свадьбы - это наш "конек", однако мы за то, чтобы не стоять на <br/>
                        месте, а идти только вперед. Позвольте представиться ... меня зовут Елена - <br/>
                        руководитель EVENT-агенства "VIWe", а также, с момента Вашего обращения <br/>
                        к нам, я: - Ваш пероснальный менеджер (в силу того, что с момента <br/>
                        совместной работы по воплощению свадьбы Вашей мечты, Ваша <br/>
                        свадьба - моя свадьба); Безусловно свадьбы - это наш "конек", однако мы за то, чтобы не стоять на <br/>
                        месте, а идти только вперед. Позвольте представиться ... меня зовут Елена - <br/>
                        руководитель EVENT-агенства "VIWe", а также, с момента Вашего обращения <br/>
                        к нам, я: - Ваш пероснальный менеджер (в силу того, что с момента <br/>
                        совместной работы по воплощению свадьбы Вашей мечты, Ваша <br/>
                        свадьба - моя свадьба);</p>
                    <div class="glass"></div>
                    <a class="readfull" href="#"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="shadow"></div>
</div>
<div class="wrapper footer">
    <header>
        <a class="hlogo" href="#"></a>
        <a class="hlogo-center" href="#"></a>
        <div class="right-info">
            <a class="telephone" href="tel:89299513630"><span>8 929</span> 951 36 30</a> <br/>
            <a class="email-feedback" href="#">viwe.italy@gmail.com</a><br/>
            <a class="order-call footer-call" href="#">Заказать звонок</a>
        </div>
    </header>
</div>
<? include("modals.php"); ?>
</body>
</html>