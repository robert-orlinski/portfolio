<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Portfolio">
    <meta name=”keywords” content="portfolio, web developer, front-end developer">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Robert Orliński</title>

    <link rel="Shortcut icon" href="/favicon.png">  <!-- :c -->

	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:700&amp;subset=latin-ext">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700&subset=latin-ext">
	<link rel="stylesheet" href="assets/css/main.css">

	<!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-83586499-6"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-83586499-6');
    </script>

</head>
<body>
    <a href="#tresc" class="focus-only" tabindex="1">Przejdź do treści</a>
	<header>
		<nav class="navigation">
			<div class="navigation__elements">
				<a class="navigation__elements__logo" href="#start" tabindex="2">Robert Orliński</a>
				<button class="navigation__elements__button navigation__elements__button--spin" type="button" aria-label="Menu" aria-controls="navigation" aria-expanded="false" tabindex="3">
					<span class="navigation__elements__button__hamburger">
						<span class="navigation__elements__button__hamburger__inner"></span>
					</span>
  				</button>
			</div>
			<div class="navigation__menu" id="navigation">
				<ul class="navigation__menu__elements">
					<li class="navigation__menu__elements__once"><a href="#start" class="navigation__menu__elements__once__link" tabindex="-1">Start</a></li>
					<li class="navigation__menu__elements__once"><a href="#kim-jestem" class="navigation__menu__elements__once__link" tabindex="-1">O mnie</a></li>
					<li class="navigation__menu__elements__once"><a href="#projekty" class="navigation__menu__elements__once__link" tabindex="-1">Projekty</a></li>
					<li class="navigation__menu__elements__once"><a href="#usługi" class="navigation__menu__elements__once__link" tabindex="-1">Co robię</a></li>
					<li class="navigation__menu__elements__once"><a href="#opinie" class="navigation__menu__elements__once__link" tabindex="-1">Opinie</a></li>
					<li class="navigation__menu__elements__once"><a href="https://blog.robertorlinski.pl" class="navigation__menu__elements__once__link link-animation" tabindex="-1">Blog</a></li>
					<li class="navigation__menu__elements__once"><a href="#kontakt" class="navigation__menu__elements__once__link" tabindex="-1">Kontakt</a></li>
				</ul>
			</div>
		</nav>
		<section class="banner" id="start">
			<div class="banner__header">
				<h1 class="banner__header__title">
                    <span class="banner__header__title--first-line start-overlay-animation" data-overlay-animation="0" data-overlay-right="0">Cześć, jestem Robert. Pomogę</span>
                    <span class="banner__header__title--second-line start-overlay-animation" data-overlay-animation="0" data-overlay-right="0"> Ci zaistnieć w internecie.</span>
                </h1>
				<a class="banner__header__button standard-button start-overlay-animation" data-overlay-animation="0" data-overlay-right="0" href="#kim-jestem">Poznaj mnie</a>
			</div>
			<a href="#kim-jestem"><span class="banner__arrow"></span></a>
		</section>
	</header>
    <main id="tresc">
        <section class="about" id="kim-jestem">
            <div class="about__content row">
                <img alt="" class="about__content__image" src="assets/img/man.jpg">
                <div class="about__content__text">
                    <div>
                        <h2 class="about__content__text__header standard-header overlay-animation" data-overlay-animation="0" data-overlay-right="0">Kim jestem?</h2>
                        <p class="about__content__text__paragraph overlay-animation" data-overlay-animation="0" data-overlay-right="0">Front-end developerem, który nie boi się wyzwań. Z Każdym dniem rozwijam się, aby tworzyć estetyczne, zoptymalizowane oraz dostępne strony internetowe, które pozwolają Ci zainstnieć w internecie i znacząco zwiększyć wyniki Twojej działalności.</p>
                        <div class="about__content__text__button">
                            <button class="about__content__text__button__link standard-button overlay-animation" data-overlay-animation="0" data-overlay-right="0" tabindex="-1" >CV już wkrótce</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="projects">
            <div class="projects__content row">
                <div class="projects__content__example">
                    <h2 class="standard-header projects__content__header fade-animation">Zrealizowane projekty:</h2>
                    <div class="projects__content__example__image overlay-animation" data-overlay-animation="0" data-overlay-right="0" id="projekt-1">
                        <div class="projects__content__example__image__overlay">
                                <div class="projects__content__example__image__overlay__title">
                                    <h3 class="projects__content__example__image__overlay__title__name">M2Stream Sp. z o.o.</h3>
                                    <p class="projects__content__example__image__overlay__title__year">2018</p>
                                </div>
                                <p class="projects__content__example__image__overlay__more">Dowiedz się więcej</p>
                            <a class="projects__content__example__image__overlay__link link-animation" href="m2stream"></a>
                        </div>
                    </div>
                </div>
                <div class="projects__content__example">
                    <div class="projects__content__example__image overlay-animation" data-overlay-animation="0" data-overlay-right="0" id="projekt-2">
                        <div class="projects__content__example__image__overlay">
                            <div class="projects__content__example__image__overlay__title">
                                <h3 class="projects__content__example__image__overlay__title__name">Motyw WordPress</h3>
                                <p class="projects__content__example__image__overlay__title__year">2018</p>
                            </div>
                            <p class="projects__content__example__image__overlay__more">Dowiedz się więcej</p>
                            <a class="projects__content__example__image__overlay__link link-animation" href="motyw-wordpress"></a>
                        </div>
                    </div>
                </div>
                <div class="projects__content__example">
                    <div class="projects__content__example__image overlay-animation" data-overlay-animation="0" data-overlay-right="0" id="projekt-3">
                        <div class="projects__content__example__image__overlay">
                            <div class="projects__content__example__image__overlay__title">
                                <h3 class="projects__content__example__image__overlay__title__name">Centrum Edukacji Oxford</h3>
                                <p class="projects__content__example__image__overlay__title__year">2016</p>
                            </div>
                            <p class="projects__content__example__image__overlay__more">Dowiedz się więcej</p>
                            <a class="projects__content__example__image__overlay__link link-animation" href="centrum-edukacji-oxford"></a>
                        </div>
                    </div>
                </div>
                <div class="projects__content__example">
                    <div class="projects__content__example__image overlay-animation" data-overlay-animation="0" data-overlay-right="0" id="projekt-4">
                        <div class="projects__content__example__image__overlay">
                            <div class="projects__content__example__image__overlay__title">
                                <h3 class="projects__content__example__image__overlay__title__name">Restauracja</h3>
                                <p class="projects__content__example__image__overlay__title__year">2017</p>
                            </div>
                            <p class="projects__content__example__image__overlay__more">Dowiedz się więcej</p>
                            <a class="projects__content__example__image__overlay__link link-animation" href="restauracja"></a>
                        </div>
                    </div>
                    <a class="standard-button projects__content__example__button fade-animation link-animation" href="https://github.com/robert-orlinski">Profil na GitHubie</a>
                </div>
            </div>
        </section>
        <section class="carousel">
            <div class="carousel__anchor"></div>
            <h2 class="carousel__header standard-header">Zrealizowane projekty</h2>
            <div class="carousel__projects">
                <div class="carousel__projects__once">
                    <a class="carousel__projects__once__link link-animation" href="m2stream">
                        <div class="carousel__projects__once__link__overlay">
                            <div class="carousel__projects__once__link__overlay__title">
                                <h3 class="carousel__projects__once__link__overlay__title__name">M2Stream Sp. z o.o.</h3>
                                <p class="carousel__projects__once__link__overlay__title__year">2018</p>
                            </div>
                            <p class="carousel__projects__once__link__overlay__more">Dowiedz się więcej</p>
                        </div>
                    </a>
                </div>
                <div class="carousel__projects__once">
                    <a class="carousel__projects__once__link link-animation" href="motyw-wordpress">
                        <div class="carousel__projects__once__link__overlay">
                            <div class="carousel__projects__once__link__overlay__title">
                                <h3 class="carousel__projects__once__link__overlay__title__name">Motyw WordPress</h3>
                                <p class="carousel__projects__once__link__overlay__title__year">2018</p>
                            </div>
                            <p class="carousel__projects__once__link__overlay__more">Dowiedz się więcej</p>
                        </div>
                    </a>
                </div>
                <div class="carousel__projects__once">
                    <a class="carousel__projects__once__link link-animation" href="restauracja">
                        <div class="carousel__projects__once__link__overlay">
                            <div class="carousel__projects__once__link__overlay__title">
                                <h3 class="carousel__projects__once__link__overlay__title__name">Restauracja</h3>
                                <p class="carousel__projects__once__link__overlay__title__year">2017</p>
                            </div>
                            <p class="carousel__projects__once__link__overlay__more">Dowiedz się więcej</p>
                        </div>
                    </a>
                </div>
                <div class="carousel__projects__once">
                    <a class="carousel__projects__once__link link-animation" href="centrum-edukacji-oxford">
                        <div class="carousel__projects__once__link__overlay">
                            <div class="carousel__projects__once__link__overlay__title">
                                <h3 class="carousel__projects__once__link__overlay__title__name">Centrum Edukacji Oxford</h3>
                                <p class="carousel__projects__once__link__overlay__title__year">2016</p>
                            </div>
                            <p class="carousel__projects__once__link__overlay__more">Dowiedz się więcej</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="carousel__dots">
                <span class="carousel__dots__once fa fa-circle" id="dot1"></span>
                <span class="carousel__dots__once fa fa-circle" id="dot2"></span>
                <span class="carousel__dots__once fa fa-circle" id="dot3"></span>
                <span class="carousel__dots__once fa fa-circle" id="dot4"></span>
            </div>
        </section>
        <section class="doing">
            <div class="doing__anchor" id="usługi"></div>
            <div class="doing__content">
                <h2 class="doing__content__header standard-header fade-animation">Co mogę dla Ciebie zrobić</h2>
                <div class="doing__content__row">
                    <img alt="" class="doing__content__row__image" src="assets/img/doing-1.jpg" id="doing-1">
                    <div class="doing__content__row__text overlay-animation" data-overlay-animation="0" data-overlay-right="0">
                        <div class="fade-animation--delayed">
                            <h3 class="standard-header">Stworzyć statyczną stronę internetową</h3>
                            <p>Gdy edycja treści na stronie nie jest dla Ciebie niezbędna idealna może okazać się strona statyczna, którą utworzę od podstaw i dostosuję do Twoich potrzeb.</p>
                            <a class="standard-button link-animation" href="statyczne-strony-internetowe">Sprawdź</a>
                        </div>
                    </div>
                </div>
                <div class="doing__content__row">
                    <img alt="" class="doing__content__row__image" src="assets/img/doing-2.jpg" id="doing-2">
                    <div class="doing__content__row__text overlay-animation" data-overlay-animation="0" data-overlay-right="0">
                        <div class="fade-animation--delayed">
                            <h3 class="standard-header">Wykonać witrynę opartą o system CMS</h3>
                            <p>Strona podpięta pod system zarządzania treścią da Ci niegraniczone możliwości edycji, dzięki czemu samodzielnie wyprzedzisz swoją konkurencję.</p>
                            <a class="standard-button link-animation" href="strony-oparte-o-system-cms">Sprawdź</a>
                        </div>
                    </div>
                </div>
                <div class="doing__content__row">
                    <img alt="" class="doing__content__row__image" src="assets/img/doing-3.jpg" id="doing-4">
                    <div class="doing__content__row__text overlay-animation" data-overlay-animation="0" data-overlay-right="0">
                        <div class="fade-animation--delayed">
                            <h3 class="standard-header">Przekuć szablon PSD w działający produkt</h3>
                            <p>Jestem do usług również gdy nie odpowiada Ci obecny stan Twojej witryny. Zaktualizuję, zoptymalizuję i zaopiekuję się Twoją stroną internetową.</p>
                            <a class="standard-button link-animation" href="kodowanie-wg-plikow-psd">Sprawdź</a>             
                        </div>
                    </div>
                </div>
                <div class="doing__content__row">
                    <img alt="" class="doing__content__row__image" src="assets/img/doing-4.jpg" id="doing-3">
                    <div class="doing__content__row__text overlay-animation" data-overlay-animation="0" data-overlay-right="0">
                        <div class="fade-animation--delayed">
                            <h3 class="standard-header">Zaopiekować się Twoją stroną</h3>
                            <p>Jestem do usług również gdy nie odpowiada Ci obecny stan Twojej witryny. Zaktualizuję, zoptymalizuję i zaopiekuję się Twoją stroną internetową.</p>
                            <a class="standard-button link-animation" href="opieka-nad-strona-internetowa">Sprawdź</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="opinions">
            <div class="opinions__anchor" id="opinie"></div>
            <h2 class="opinions__header standard-header fade-animation">Uwielbiam moich Klientów</h2>
            <div class="opinions__content">
                <div class="opinions__content__row overlay-animation" data-overlay-animation="0" data-overlay-right="0">
                    <div class="fade-animation--delayed">
                        <figure>
                            <figcaption class="opinions__content__row__author">
                                <h3 class="opinions__content__row__author__name">Michał Hajduk</h3>
                                <p class="opinions__content__row__author__company">M2Stream Sp. z o.o.</p>
                            </figcaption>
                            <blockquote class="opinions__content__row__text">
                                <p class="opinions__content__row__text__quote">Robert Orliński podczas realizacji witryny internetowej dla naszej firmy dysponował rozległą wiedzą, a jednocześnie pozostawał otwarty na sugestie oraz propozycje.</p><p class="opinions__content__row__text__quote">W czasie wszelkich działań zachowywał pełny profesjonalizm, ustalone terminy zostały dotrzymane, a korespondencja przebiegała wzorowo. Na pewno zwrócimy się  do niego przy okazji realizacji kolejnych projektów</p>
                            </blockquote>
                            <p class="opinions__content__row__project-link">
                                <a class="opinions__content__row__project-link__ref link-animation" href="m2stream">Zobacz projekt</a>
                            </p>
                        </figure>
                    </div>
                </div>
                <div class="opinions__content__row overlay-animation" data-overlay-animation="0" data-overlay-right="0">
                    <div class="fade-animation--delayed">
                        <figure>
                            <figcaption class="opinions__content__row__author">
                                <h3 class="opinions__content__row__author__name">Klara Machowicz</h3>
                                <p class="opinions__content__row__author__company">Centrum Edukacji Oxford</p>
                            </figcaption>
                            <blockquote class="opinions__content__row__text">
                                <p class="opinions__content__row__text__quote">Polecam współpracę z Robertem Orlińskim przede wszystkim za profesjonalne podejście do pracy. Wszystkie etapy tworzenia strony internetowej były realizowane zgodnie z objętym harmonogramem, a cała praca przebiegła sprawnie i szybko.</p><p class="opinions__content__row__text__quote">Wszystkie uwagi zostały uwzględnione zgodnie z moimi potrzebami, a sugestie pana Roberta wzbogaciły i udoskonaliły cały projekt, tak że efekt przerósł moje oczekiwania.</p>
                            </blockquote>
                            <p class="opinions__content__row__project-link">
                                <a class="opinions__content__row__project-link__ref link-animation" href="centrum-edukacji-oxford">Zobacz projekt</a>
                            </p>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog">
            <h2 class="blog__header standard-header fade-animation">Kocham dzielić się wiedzą</h2>
            <article class="blog__content">
                <img alt="" class="blog__content__image" src="assets/img/blog-psd.jpg" id="thumbnail-1">
                <div class="blog__content__date">
                    <p><span class="blog__content__date__day-number">21</span> sie 2017<p>
                </div>
                <div class="blog__content__text overlay-animation" data-overlay-animation="0" data-overlay-right="0">
                    <div class="fade-animation--delayed">
                        <h3 class="blog__content__text__header standard-header">10 darmowych szablonów PSD, które zwiększą Twoje doświadczenie</h3>
                        <p class="blog__content__text__paragraph">Chyba każda osoba, która kiedykolwiek chciała tworzyć strony internetowe zadała sobie jedno bardzo ważne pytanie: “W jaki sposób mam się tego nauczyć?” Często mogła otrzymać według mnie najlepszą odpowiedź: przez tworzenie własnych projektów...</p>
                        <div class="blog__content__text--flex">
                            <a class="blog__content__text__button standard-button link-animation" href="https://programajster.pl/2017/08/21/10-darmowych-szablonow-psd/">Czytaj dalej</a>
                            <span class="blog__content__text__comments">Web design</span>
                        </div>
                    </div>
                </div>
            </article>
            <article class="blog__content">
                <img alt="" class="blog__content__image" src="assets/img/blog-extensions.jpg" id="thumbnail-2">
                <div class="blog__content__date">
                    <p><span class="blog__content__date__day-number">18</span> lip 2017<p>
                </div>
                <div class="blog__content__text overlay-animation" data-overlay-animation="0" data-overlay-right="0">
                    <div class="fade-animation--delayed">
                        <h3 class="blog__content__text__header standard-header">10 dodatków do Google Chrome, które pomogą Ci w tworzeniu stron WWW</h3>
                        <p class="blog__content__text__paragraph">Google Chrome jest obecnie najpopularniejszą przeglądarką na świecie (wg różnych źródeł posiada ponad połowę rynku). Co za tym idzie, to właśnie na nią powstaje najwięcej dodatków, które potrafią znacznie rozbudować jej funkcjonalności oraz sprawić...</p>
                        <div class="blog__content__text--flex">
                            <a class="blog__content__text__button standard-button link-animation" href="https://programajster.pl/2017/07/18/dodatki-dla-tworcow-stron-internetowych/">Czytaj dalej</a>
                            <span class="blog__content__text__comments">Narzędzia</span>
                        </div>
                    </div>
                </div>
            </article>
            <article class="blog__content">
                <img alt="" class="blog__content__image" src="assets/img/blog-good.jpg" id="thumbnail-3">
                <div class="blog__content__date">
                    <p><span class="blog__content__date__day-number">30</span> kwi 2017<p>
                </div>
                <div class="blog__content__text overlay-animation" data-overlay-animation="0" data-overlay-right="0">
                    <div class="fade-animation--delayed">
                        <h3 class="blog__content__text__header standard-header">13 dobrych praktyk, które sprawią, że Twój kod CSS stanie się lepszy!</h3>
                        <p class="blog__content__text__paragraph">Ostatnio Bartłomiej Mąkina z bloga Devcorner.pl stworzył artykuł, w którym wymienia 7 złych praktyk podczas pisania kodu CSS. Zainspirowało mnie to do stworzenia swojego wpisu, w którym przedstawiam przeciwieństwo, czyli dobre...</p>
                        <div class="blog__content__text--flex">
                            <a class="blog__content__text__button standard-button link-animation" href="https://programajster.pl/2017/04/30/dobre-praktyki-css/">Czytaj dalej</a>
                            <span class="blog__content__text__comments">Front-end</span>
                        </div>
                    </div>
                </div>
            </article>
        </section>
        <section class="contact">
            <div class="contact__anchor" id="kontakt"></div>
            <h2 class="contact__header standard-header fade-animation">Stwórzmy razem coś wspaniałego</h2>
            <div class="contact__content">
                <div class="contact__content__info overlay-animation" data-overlay-animation="0" data-overlay-right="0">
                    <h3 class="contact__content__info__header">Dane kontaktowe</h3>
                    <a class="contact__content__info__link" href="mailto:kontakt@robertorlinski.pl">kontakt@robertorlinski.pl</a>
                    <a class="contact__content__info__link" href="tel:+48790808478">+48 790 808 478</a>
                    <div class="contact__content__info__social">
                        <a class="link-animation" href="https://www.facebook.com/robertorlinski.blog">Facebook</a>
                        <a class="link-animation" href="https://twitter.com/robert_orlinski">Twitter</a>
                    </div>
                </div>
                <form action="form.php" class="contact__content__form fade-animation--delayed--bigger-offset" method="POST">
                    <h3 class="contact__content__form__header">Wyślij wiadomość</h3>
                    <div class="contact__content__form__input">
                        <input id="name" class="contact__content__form__input__field" type="text">
                        <label class="contact__content__form__input__description" for="name">Imię i nazwisko</label>
                    </div>
                    <div class="contact__content__form__input">
                        <input id="email" class="contact__content__form__input__field" type="text">
                        <label class="contact__content__form__input__description" for="email">E-mail</label>
                    </div>
                    <div class="contact__content__form__input">
                        <input id="topic" class="contact__content__form__input__field" type="text">
                        <label class="contact__content__form__input__description" for="topic">Temat</label>
                    </div>
                    <div class="contact__content__form__input">
                        <textarea id="message" class="contact__content__form__input__field"></textarea>
                        <label class="contact__content__form__input__description" for="message">Wiadomość</label>
                    </div>
                    <div class="contact__content__form__input contact__content__form__input--button" data-tooltip="">
                        <input class="contact__content__form__input--button__submit standard-button" type="submit" name="button" value="Wyślij" id="submit">
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer class="main-footer">
      <div class="main-footer__content">
        <span class="main-footer__content__text">2018 &copy; Strona wykorzystuje pliki cookies.</span>
        <span class="main-footer__content__text">Wykonana z odrobiną &hearts; przeze mnie.</span>
      </div>
    </footer>

    <script src="assets/js/start.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/viewport-checker.min.js"></script>
    <script src="assets/js/siema.min.js"></script>
    <script src="assets/js/scripts.min.js"></script>

</body>
</html>