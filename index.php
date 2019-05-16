
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Massage</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="shortcut icon" href="images/logo.png" img="images/logo.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
        
            <!--         NAVIGACIJA-->
            <nav class="navbar navbar-light justify-content-between">

                <a href="index.html"><img class="logo" src="images/logo.png" alt="logo"></a>
                <a class="navbar-brand" href="index.php">Apie mus</a>
                <a class="navbar-brand" href="pages/proceduros.php">Procedūros</a>
                <a class="navbar-brand" href="pages/registracija.php">Registracija</a>
                <a class="navbar-brand" href="pages/kontaktai.php">Kontaktai</a>
                <form class="form-inline">
                    <button class="btn btn-outline-warning mx-2" type="submit"><a href="./pages/user.php">Prisijungti</a></button>
                    <button class="btn btn-outline-warning  " type="submit" ><a href="pages/registracija.php">Registruotis</a></button>
                </form>
            </nav>
            <hr>
            <!--             SLIDE SU FOTO-->
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/header-slide1.jpeg" alt="First slide">
                    </div>
                    <div class="carousel-caption">
                        <h3 class="h3-responsive">Mūsų masažo salonas jau laukia tavęs!</h3>
                        <p>Užsirašyk pirmam masažui nemokamai!</p>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/header-slide2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/header-slide4.jpeg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </header>
        <main>
            <!--       PASTRAIPA APRASYMAS-->
            <hr>
            <div class="aprasymas text-center col-lg-12 col-md-12 col-sm-12 col-12 ">Massage - vienas iš jaukesnių masažo salonų Vilniuje. Kiekvienas, užsukęs poilsio valandėlei, bus pats svarbiausias svečias, kuriam visą savo dėmesį skirs rūpestingi natūralios terapijos specialistai.
                Rankų šiluma, malonūs kvapai ir naudojamos medžiagos sušildys kūną ir sielą, suteiks ramybės.
                Pasijusite, tarsi ilsintis mažoje, jaukioje kalnų trobelėje, kažkur toli nuo kasdienybės ir mus supančio miesto šurmulio.

                „Mezzanine“ salone atliekamos kūno masažo procedūros, naudojant natūralias medžiagas, kosmetiką, pagamintą tausojant gamtą. Unikali aplinka ir rūpestingos masažuotojų rankos suteiks tai, ko Jūs tikrai nusipelnėte. Poilsio, trūkstamo kiekvienam, įtemptą gyvenimo tempą privalančiam atlaikyti žmogui!</div>
            <hr>
            <h1 class="text-center">Mėnesio naujienos:</h1>
            <hr>
            <div class="sales row mx-1">
                <div class="col-md-6 col-lg-3 col-sm-12 col-12">
                    <div class="card  my-4 text-center">
                        <img class="card-img-top" src="images/card-3.jpeg" alt="Card image cap3">
                        <div class="card-body">
                            <h4 class="card-title">Masažas</h4>
                            <p class="card-text">Atpalaiduojantis viso kūno masažas + DOVANA – rankų ar pėdų masažas
                                Seanso trukmė – 90 min.,
                                kaina: €35 vietoj €45</p>
                            <a class="btn btn-warning" id="card1">Užsisakyti</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-12 col-12">
                    <div class="card  my-4 text-center">
                        <img class="card-img-top" src="images/card-2.jpeg" alt="Card image cap2">
                        <div class="card-body">
                            <h4 class="card-title">Parafino vonelė</h4>
                            <p class="card-text">Parafino vonelė rankoms + veido masažas su pasirinktu aliejumi (argano, migdolų, morkų fitoliu)
                                Seanso trukmė – 40 min.,
                                kaina: €20 vietoj €26</p>
                            <a class="btn btn-warning" id="card2">Užsisakyti</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-12 col-12">
                    <div class="card  my-4 text-center">
                        <img class="card-img-top" src="images/card-1.jpeg" alt="Card image cap1">
                        <div class="card-body">
                            <h4 class="card-title">Tailandietiškas masažas</h4>
                            <p class="card-text">Dovanų kuponas tik €48 !
                                Vertė negalioja akcijos procedūroms. Suteikiame €58 vertės paslaugas 12 mėn. laikotarpiu.</p>
                            <a class="btn btn-warning" id="card3">Užsisakyti</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="card  my-4 text-center">
                        <img class="card-img-top" src="images/card-4.jpeg" alt="Card image cap3">
                        <div class="card-body">
                            <h4 class="card-title">Pečių juostos masažas</h4>
                            <p class="card-text">Atpalaiduojantis viso kūno masažas + DOVANA – rankų ar pėdų masažas
                                Seanso trukmė – 90 min.,
                                kaina: €35 vietoj €45</p>
                            <a class="btn btn-warning" id="card4">Užsisakyti</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="foot row mx-2 my-4">
                <div class="foot1 col-lg-3 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                    <a href="index.html"><img class="logo" src="images/logo.png" alt="logo"></a>
                </div>
                <div class="foot3  col-lg-3 col-md-12 col-sm-12 col-12 text-center">
                    <p>Adresas: Kalvarijų 159, LT-20321 Vilnius, Lietuva</p>
                    <p>Registracija telefonu: +370 6 48 755</p>
                    <p>El. paštas: bazeliukalisa@gmail.com</p>
                </div>
                <div class="foot32  col-lg-3 col-md-12 col-sm-12 col-12 text-center">
                    <p>Procedūrų atlikimo laikas:
                        Pirmadienis – Sekmadienis 09:00 – 21:00</p>
                    Procedūrų atlikimo laikas:
                    Pirmadienis – Sekmadienis 09:00 – 21:00
                </div>
                <div class="foot2 col-lg-3 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                    <nav class="nav flex-column navbar-light">
                        <a class="navbar-brand" href="../index.php">Apie mus</a>
                        <a class="navbar-brand" href="pages/proceduros.php">Procedūros</a>
                        <a class="navbar-brand" href="pages/registracija.php">Registracija</a>
                        <a class="navbar-brand" href="pages/kontaktai.php">Kontaktai</a>

                    </nav>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="scripts/indexScript.js"></script>
    </body>
</html>

