<!DOCTYPE html>
<html lang="pl">
   <head>
      <title>Skup metali szlachetnych</title>
      <meta charset="UTF-8" />
      <link rel="stylesheet" href="./build/css/styles.css" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta
         name="description"
         content="Nasza firma zajmuje się skupem wszelkiego rodzaju metali szlachetnych,
    na terenie całego kraju.
    Oferujemy najwyższe ceny oraz specjalistyczne pomiary dostarczonych metali za pomocą zaawansowanego sprzętu. Za towar płacimy od ręki w gotówce lub na specjalne życzenie klienta przelewem."
      />
      <link
         href="https://fonts.googleapis.com/css?family=Cormorant+Upright|Source+Sans+Pro&display=swap"
         rel="stylesheet"
      />
      <link
         rel="stylesheet"
         href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
         integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
         crossorigin="anonymous"
      />
      <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
      />
   </head>
   <body>
       <?php require_once "backend/user.php"; ?>
      <div class="app">
         <header class="app-header">
            <div class="header__company-name">JTDMA</div>
            <div class="header__company-slogan">
               <strong>Skup metali szlachetnych</strong>
            </div>
            <div class="header__underline"></div>
            <p class="header__main-paragraph">
               Nasza firma zajmuje się skupem metali szlachetnych na terenie całego kraju.
               Na stronie zapoznasz się z naszą ofertą. Sprawdzisz również aktualne ceny
               kruszców takich jak złoto, srebro, platyna czy pallad oraz zobaczysz o nich
               ciekawe informacje.
            </p>
         </header>

         <main class="app-informations">
            <article class="article-about-company">
               <h1 class="header">Czym zajmuje się nasza firma?</h1>
               <div class="wrapper">
                  <p class="paragraph">
                     <strong>
                        Nasza firma zajmuje się skupem złota, srebra, palladu oraz
                        platyny. Ponadto, oferujemy najwyższe ceny oraz specjalistyczne
                        pomiary dostarczonych metali za pomocą zaawansowanego sprzętu.
                     </strong>
                  </p>
                  <img src="./images/equipment.jpg" alt="Sprzęt" />
               </div>

               <div class="wrapper">
                  <p class="paragraph">
                     <strong>
                        Skupujemy metale różnego rodzaju i niezależnie od jego postaci m.
                        in. biżuteria, sztabki, pierścionki. Jednym słowem - wszystko,
                        jeżeli posiada ilości metali. Przy pomocy profesjonalnego sprzętu
                        oceniamy zawartość metali w danej rzeczy i dokonujemy odpowiedniej
                        wyceny. <br /><br />
                        Istnieje możliwość dojazdu do klienta na życzenie.
                     </strong>
                  </p>
                  <img src="./images/tests.jpg" class="rotated-photo" alt="Testy" />
               </div>
            </article>

            <section class="metals-prices-chart">
               <h1 class="header">
                  <strong>Aktualne ceny kruszców</strong>
               </h1>
               <canvas class="chart" style="width: 6vw; height: 4vh;"></canvas>

               <table class="container centered">
                  <thead>
                     <tr>
                        <th class="grey darken-3">Nazwa kruszca</th>
                        <th class="grey darken-3">Cena</th>
                     </tr>
                  </thead>

                  <tbody>
                     <tr class="row">
                        <td>Złoto</td>
                        <td class="info">Ładowanie...</td>
                     </tr>
                     <tr>
                        <td>Srebro</td>
                        <td class="info">Ładowanie...</td>
                     </tr>
                     <tr>
                        <td>Pallad</td>
                        <td class="info">Ładowanie...</td>
                     </tr>
                     <tr>
                        <td>Platyna</td>
                        <td class="info">Ładowanie...</td>
                     </tr>
                  </tbody>
               </table>
            </section>
         </main>

         <article class="article-gold-price">
            <h1 class="header">Od czego zależy cena złota?</h1>
            <div class="wrapper">
               <img src="./images/silver.jpg" class="special-img" alt="Srebro" />
               <p class="paragraph">
                  <strong>
                     Na aktualną cenę złota ma wpływ wiele czynników. Przed wszystkim jest
                     to jakość samego kruszca. Wiele przedmiotów "premium" jest zbudowana
                     ze złota w niewielkiej części, więc inwestowanie w te rzeczy nie da
                     nam pewności czy jego jakość jest na wysokim poziomie. Znacznie
                     lepiej kupić wysoce cenione sztabki złota lub monety bulionowe.
                  </strong>
               </p>
            </div>

            <div class="wrapper">
               <img src="./images/gold3.jpg" class="special-img" alt="Złoto" />
               <p class="paragraph">
                  Ważną rolę odgrywa również aktualna sytuacja na świecie. Im bardziej
                  jest ona niestabilna, tym więcej osób decyduje się na inwestycje jakim
                  jest złoto. Kurs złotego i dolara to kolejny czynnik wpływający na jego
                  cenę rynkową. Zasada jest prosta - gdy dolar tanieje, jego cena i
                  wartość są wyższe. Nie inaczej jest w przypadku polskiego złotego.
               </p>
            </div>
         </article>

         <div class="company-adventages-wrapper">
            <h1 class="header">Dlaczego powinieneś wybrać JTDMA?</h1>
            <aside class="company-adventages">
               <ul class="list">
                  <li class="list-item adventage">
                     Profesjonalna obsługa
                     <i class="far fa-check-circle"></i>
                  </li>

                  <li class="list-item adventage">
                     Zadowolenie konsumenta na pierwszym miejscu
                     <i class="far fa-check-circle"></i>
                  </li>

                  <li class="list-item adventage">
                     Bezproblemowa konsultacja
                     <i class="far fa-check-circle"></i>
                  </li>

                  <li class="list-item adventage">
                     Profesjonalny sprzęt
                     <i class="far fa-check-circle"></i>
                  </li>
               </ul>
            </aside>
         </div>

         <section class="gold-titbits">
            <h1 class="header titbit__header">Czy wiesz że...</h1>

            <ul class="list">
               <li class="list-item titbit" data-firstLetter="Z">
                  Złoto występuje w ludzkim organizmie. Nie przekracza ona jednak 10 mg.
                  <br />
                  Podobno połowa tej ilości znajduje się w kościach a reszta jest we krwi
               </li>

               <li class="list-item titbit" data-firstLetter="D">
                  Do tej pory na świecie wydobyto około 161 000 ton złota.
               </li>

               <li class="list-item titbit" data-firstLetter="P">
                  Pierwiastek chemiczny jakim jest złoto zostało znalezione i wydobyte już
                  na wszystkich kontynentach.
               </li>
            </ul>
         </section>

         <section class="FAQ">
            <h1 class="header FAQ__title">FAQ</h1>
            <ul class="FAQ__list list">
               <li>
                  <h2 class="FAQ__question">Co to jest uncja złota?</h2>

                  <p class="FAQ__answer">
                     <dfn>
                        Uncja to jednostka masy bądź objętości płynów, stosowana m.in.
                        jako jednostka wagi metali szlachetnych, w szerszym zakresie w
                        krajach anglosaskich. Waga uncji może być różna w zależności od
                        systemu wagowego. Uncja trojańska wykorzystywana w przemyśle
                        jubilerskim wynosi w przybliżeniu 31,1 grama.
                     </dfn>
                  </p>
               </li>

               <li>
                  <h2 class="FAQ__question">Co to jest karat?</h2>

                  <p class="FAQ__answer">
                     <dfn>
                        Uncja to jednostka masy bądź objętości płynów, stosowana m.in.
                        jako jednostka wagi metali szlachetnych, w szerszym zakresie w
                        krajach anglosaskich. Waga uncji może być różna w zależności od
                        systemu wagowego. Uncja trojańska wykorzystywana w przemyśle
                        jubilerskim wynosi w przybliżeniu 31,1 grama.
                     </dfn>
                  </p>
               </li>
               <li>
                  <h2 class="FAQ__question">Czym jest próba złota?</h2>
                  <p class="FAQ__answer">
                     <dfn>
                        Próba złota jest to sposób określenia zawartości złota w stopie
                        wyrażonej w promilach, np. jeśli stop zawiera 50% czystego złota
                        jest ono próby 500. Czyste złoto jest bardzo miękkie dlatego
                        domieszkowane jest innymi metalami, aby zwiększyć trwałość wyrobów
                        z niego wykonanych. W celu standaryzacji ilości złota w stopie
                        wprowadzono próby złota.
                     </dfn>
                  </p>
               </li>
            </ul>
            <div class="paragraph payment-ways">
               Rodzaje płatności:
               <ul>
                  <li>
                     <i class="fas fa-wallet"></i>
                     gotówka
                  </li>
                  <li><i class="far fa-credit-card"></i>przelew</li>
               </ul>
            </div>
         </section>

         <footer class="footer">
            <div class="footer-side">
               <p>Dane kontaktowe</p>
               <ul>
                  <li>Nr telefonu: 727-555-444</li>
                  <li>E-mail: e-mail firmy</li>
                  <br />
               </ul>
               <br />
            </div>

            <div class="footer-side">
               <p>Źródła</p>
               <ul>
                  <li>
                     Zdjęcia ze strony
                     <a href="https://unsplash.com/">https://unsplash.com/</a>
                  </li>

                  <li>
                     Wyjaśnienie definicji:
                     <a href="https://pl.wikipedia.org/">https://pl.wikipedia.org/</a>
                  </li>
               </ul>
               <br />
            </div>
            <div class="footer-side">
               <p>Pozostałe informacje</p>
               <ul>
                  <li>Autor strony: Krzysztof Szczepański</li>
                  <li>JTDMA 2020 @ all rights reserved</li>
               </ul>
            </div>
         </footer>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
      <script src="./app.js"></script>
   </body>
</html>
