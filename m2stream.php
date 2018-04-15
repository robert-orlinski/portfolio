<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Portfolio">
    <meta name=”keywords” content="portfolio, web developer, front-end developer">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>M2Stream Sp. z o.o. | Robert Orliński</title>

    <link rel="Shortcut icon" href="/favicon.png">  <!-- :c -->

	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:700&amp;subset=latin-ext">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700&subset=latin-ext">
    <link rel="stylesheet" href="assets/css/m2stream.css">
    <link rel="stylesheet" href="assets/css/main.css">
    
	<!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
    <a href="#tresc" class="focus-only" tabindex="1">Przejdź do treści</a>
	<header>
		<nav class="navigation">
			<div class="navigation__elements">
				<a class="navigation__elements__logo link-animation" href="strona-glowna" tabindex="2">Robert Orliński</a>
				<button class="navigation__elements__button navigation__elements__button--spin" type="button" aria-label="Menu" aria-controls="navigation" aria-expanded="false" tabindex="3">
					<span class="navigation__elements__button__hamburger" tabindex="-1">
						<span class="navigation__elements__button__hamburger__inner" tabindex="-1"></span>
					</span>
  				</button>
			</div>
			<div class="navigation__menu" id="navigation">
				<ul class="navigation__menu__elements">
					<li class="navigation__menu__elements__once"><a href="strona-glowna#start" class="navigation__menu__elements__once__link link-animation" tabindex="-1">Start</a></li>
					<li class="navigation__menu__elements__once"><a href="strona-glowna#kim-jestem" class="navigation__menu__elements__once__link link-animation" tabindex="-1">O mnie</a></li>
					<li class="navigation__menu__elements__once"><a href="strona-glowna#projekty" class="navigation__menu__elements__once__link link-animation" tabindex="-1">Projekty</a></li>
					<li class="navigation__menu__elements__once"><a href="strona-glowna#usługi" class="navigation__menu__elements__once__link link-animation" tabindex="-1">Co robię</a></li>
					<li class="navigation__menu__elements__once"><a href="strona-glowna#opinie" class="navigation__menu__elements__once__link link-animation" tabindex="-1">Opinie</a></li>
					<li class="navigation__menu__elements__once"><a href="https://blog.robertorlinski.pl" class="navigation__menu__elements__once__link link-animation" tabindex="-1">Blog</a></li>
					<li class="navigation__menu__elements__once"><a href="#kontakt" class="navigation__menu__elements__once__link" tabindex="-1">Kontakt</a></li>
				</ul>
			</div>
		</nav>
		<section class="banner banner--restaurant" id="start">
			<div class="banner__header">
				<h1 class="banner__header__title">
                    <span class="banner__header__title--first-line banner__header__title--m2 start-overlay-animation" data-overlay-animation="0" data-overlay-right="0">M2Stream Sp. z o.o.</span>
                </h1>
                <a class="banner__header__button standard-button start-overlay-animation" data-overlay-animation="0" data-overlay-right="0" href="#tresc">Przejdź dalej</a>
			</div>
            <img alt="" class="banner__mockup" src="assets/img/mockup-m2.png">
		</section>
	</header>
    <main id="tresc">
        <section class="about about--portfolio">
            <div class="about__content">
                <div>
                    <p class="about__content__text__paragraph fade-animation">Spółka M2Stream działa w branży budowlanej, wykonuje instalacje sanitarne i zajmuje się instalacją klimatyzacji oraz ciepłem technologicznym. Pracą, którą miałem dla niej wykonać okazało się stworzenie witryny, łączącą w sobie trzy cechy: jak najlepsze przedstawienie marki, przyjemność dla użytkownika oraz bardzo łatwą edycję dla administratorów.</p>
                    <div class="about__content__text__button">
                        <a class="about__content__text__button__link standard-button fade-animation link-animation" tabindex="-1" href="http://m2stream.pl">Zobacz stronę</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="info">
            <div class="info__content">
                <div class="info__content__website overlay-animation" data-overlay-animation="0" data-overlay-right="0">
                    <img alt="Widok całej strony internetowej" src="assets/img/m2-website.png" class="info__content__website__image">
                </div>
                <div class="info__content__text">
                    <div>
                        <h2 class="standard-header fade-animation">Zakres prac</h2>
                        <p class="fade-animation">Po rozmowach z zarządem spółki przystąpiłem do szkicu witryny, który chwilę później został przeniesiony na kod witryny. Po utworzeniu statycznej strony internetowej całość została oparta o WordPress i odpowiednio skonfigurowana.</p>
                        <h2 class="standard-header fade-animation">Użyte technologie</h2>
                        <p class="fade-animation">Jak zwykle podstawą tej strony internetowej okazały się technologie takie jak HTML oraz CSS. Dodatkowy JavaScript sprawił, że witryna stała się bardziej interaktywna, a proces tworzenia został znacznie usprawniony przez framework Bootstrap oraz preprocesor CSSa - Sass. Pod koniec wszystko zostało zintegrowane z najpopularniejszym systemem zarządzania treścią - WordPressem.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="mobile">
            <div class="mobile__content">
                <img alt="" class="mobile__content__mockup fade-animation" src="assets/img/mobile-mockup13.png">
                <img alt="" class="mobile__content__mockup fade-animation--second" src="assets/img/mobile-mockup14.png">
                <img alt="" class="mobile__content__mockup fade-animation--third" src="assets/img/mobile-mockup15.png">
            </div>
        </section>
        <section class="contact">
            <div class="contact__anchor" id="kontakt"></div>
            <h2 class="contact__header standard-header fade-animation">Stwórzmy razem coś wspaniałego</h2>
            <div class="contact__content">
                <div class="contact__content__info overlay-animation" data-overlay-animation="0" data-overlay-right="0">
                    <h3 class="contact__content__info__header">Dane kontaktowe</h3>
                    <a class="contact__content__info__link" href="mailto:kontakt@robertorlinski.pl">kontakt@robertorlinski.pl</a>
                    <a class="contact__content__info__link" href="tel:+48123456789">+48 123 456 789</a>
                    <div class="contact__content__info__social">
                        <a href="#">Facebook</a>
                        <a href="#">Twitter</a>
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
    <script src="assets/js/scripts-portfolio.min.js"></script>

</body>
</html>