<?php ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Procedūros</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="shortcut icon" href="../images/logo.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-light justify-content-between">
                <a href="../index.html"><img class="logo" src="../images/logo.png" alt="logo"></a>
                <a class="navbar-brand" href="../index.php">Apie mus</a>
                <a class="navbar-brand" href="proceduros.php">Procedūros</a>
                <a class="navbar-brand" href="registracija.php">Registracija</a>
                <a class="navbar-brand" href="kontaktai.php">Kontaktai</a>
                <form class="form-inline">
                    <button class="btn btn-outline-warning mx-2" type="submit"><a href="../pages/user.php">Prisijungti</a></button>
                    <button class="btn btn-outline-warning  " type="submit" ><a href="registracija.php">Registruotis</a></button></form>
            </nav>
        </header>
        <main>
            <hr>
            <h1 class="text-center">Procedūros</h1>
            <hr>
            <div class="ProceduruNavigacija">
                <nav class="navbar navbar-light justify-content-between">
                    <a class="navbar-brand col-6 text-center col-sm-2 col-md-2 col-lg-2 offset-lg-3" href="proceduros.php">Visos</a>
                    <a class="navbar-brand col-6 text-center col-sm-2 col-md-2 col-lg-2" href="proceduros.php" id="veido">Veido</a>
                    <a class="navbar-brand col-6 text-center col-sm-2 col-md-2 col-lg-2" href="proceduros.php" id="masazai">Masažai</a>
                    <a class="navbar-brand col-6 text-center col-sm-2 col-md-2 col-lg-2" href="proceduros.php" id="aroma">Aromaterapija</a>
                </nav>
            </div>
            <div class="proceduruImages">
                <!--Pirma procedūra-->
                <div class="row col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="procedura1 col-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="../images/procedure1.jpg" alt="procedure1">
                        <h2>Veido procedūra</h2>
                        <p>Agurkų kaukė skaistina veidą ir papildo jį būtinais mineralais. Po procedūros veido oda atrodo atsigavusi ir švytinti.</p>
                        <h3>10eur</h3>
                        <a class="btn btn-warning" id="uzsisakytiProcedura1">Užsisakyti</a>
                    </div>
                </div>
                <!--Antra procedūra-->
                <div class="row col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="procedura2 col-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="../images/procedure2.jpeg" />
                        <h2>Kojų depiliacija + kojų masažas</h2>
                        <p>Nudezinfekuojama ir nusausinama depiliuojama vieta. Karštas, apie +38 °C, vaškas užtepamas ant odos medine mentele. Po procedūros jūsų laukia kojų masažas su kvapniais aliejais.</p>
                        <h3>8eur</h3>
                        <a class="btn btn-warning" id="uzsisakytiProcedura2">Užsisakyti</a>
                    </div>
                </div>
                <!--Trecia procedūra-->
                <div class="row col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="procedura3 col-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="../images/procedure3.jpeg" />
                        <h2>Veido kaukė su baltuoju moliu</h2>
                        <p>Sugeria mikrobus, prisotina odą mineralais, skatina odos atsinaujinimą, turi priešuždegiminį poveikį. Sugeria riebalus nuo odos paviršiaus ir efektyviai šalina negyvas ląsteles, atkuria sveiką, jaunatvišką odos spindesį.</p>
                        <h3>10eur</h3>
                        <a class="btn btn-warning" id="uzsisakytiProcedura3">Užsisakyti</a>
                    </div>
                </div>
                <!--Ketvirta procedūra-->
                <div class="row col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="procedura4 col-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="../images/procedure4.jpeg" />
                        <h2>Aromaterapija + viso kūno masažas</h2>
                        <p>Būsite masžuojami kvapniais eteriniais aliejais kartu su kokosų aliejumi. Šis vidutinio stiprumo masažas ypač efektyviai atpalaiduoja visą kūną, pašalina įtampas, ramina bei teigiamai veikia viso organizmo pusiausvyrą, sumažiną dirglumą bei grąžina Jums gerą savijautą. </p>
                        <h3>60eur</h3>
                        <a class="btn btn-warning" id="uzsisakytiProcedura4">Užsisakyti</a>
                    </div>
                </div>
                <!--Penkta procedūra-->
                <div class="row col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="procedura5 col-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="../images/procedure5.jpeg" />
                        <h2>Nugaros masažas</h2>
                        <p>Nugaros masažas atpalaiduoja įsitempusius raumenis, gerina kraujo apytaką, audinių mitybą, aktyvina vegetatyvinę nervų sistemą ir tokiu būdu daro teigiamą poveikį įvairiems organizmo organams, gerina bendrą organizmo būklę.</p>
                        <h3>35eur</h3>
                        <a class="btn btn-warning" id="uzsisakytiProcedura5">Užsisakyti</a>
                    </div>
                </div>
                <!--Šešta procedūra-->
                <div class="row col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="procedura6 col-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="../images/procedure6.jpg" />
                        <h2>Aromaterapija + masažas žvakių šviesoje</h2>
                        <p>Paslaptinga, tačiau itin maloni procedūra, kurią dažniausiai renkasi nerimo, streso, depresijos, emocinio išsekimo ar miego sutrikimų turintys asmenys. Po procedūros jausitės visiškai atsipalaidavę ir emociškai sutvirtėję.</p>
                        <h3>45eur</h3>
                        <a class="btn btn-warning" id="uzsisakytiProcedura6">Užsisakyti</a>
                    </div>
                </div>
                <!--Septinta procedūra-->
                <div class="row col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="procedura7 col-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="../images/procedure7.jpeg" />
                        <h2>Kojų masažas</h2>
                        <p>kojų masažas puikiai tinka visiems, dirbantiems sunkų fizinį darbą, ilgai stovimą darbą žmonėms, dažnai dėvint aukštakulnius, nėštumo metu. Po procedūros jūsų pėdos ir kojos atrodys nepriekaištingai bei pagerės ir jūsų savijauta!</p>
                        <h3>15eur</h3>
                        <a class="btn btn-warning" id="uzsisakytiProcedura7">Užsisakyti</a>
                    </div>
                </div>
                <!--Aštunta procedūra-->
                <div class="row col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="procedura8 col-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="../images/procedure8.jpeg" />
                        <h2>Masažas su kokoso aliejumi</h2>
                        <p>Mažina aukštą kraujospūdį, šalina depresiją, stresą ir emocinės pusiausvyros sutrikimus, padeda esant migrenai, sutrikus miegui, stiprina imuninę sistemą.</p>
                        <h3>40eur</h3>
                        <a class="btn btn-warning" id="uzsisakytiProcedura8">Užsisakyti</a>
                    </div>
                </div>
                <!--Devinta procedūra-->
                <div class="row col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="procedura9 col-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="../images/procedure9.jpeg" />
                        <h2>Aromaterapija + masažas</h2>
                        <p>Mėgausitės aromaterapija ir būsite masažuojami su cinamono ir šokolado kūno šveitikliais. Po procedūros jausitės žvalūs ir energingi.</p>
                        <h3>35eur</h3>
                        <a class="btn btn-warning" id="uzsisakytiProcedura9">Užsisakyti</a>
                    </div>
                </div>
                <!--Dešimta procedūra-->
                <div class="row col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="procedura10 col-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="../images/procedure10.jpeg" />
                        <h2>Viso kūno masažas</h2>
                        <p>Cinamonas + apelsinas = puikūs derinys! Pasimėgaukite kvapniais eteriniais aliejais ir puikiu masažu, kuris atnaujins jūsų odos lasteles ir pakels jūsų nuotaiką.</p>
                        <h3>45eur</h3>
                        <a class="btn btn-warning" id="uzsisakytiProcedura10">Užsisakyti</a>
                    </div>
                </div>
                <!--Vienuolikta procedūra-->
                <div class="row col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="procedura11 col-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="../images/procedure11.jpeg" />
                        <h2>Levandų aromaterapija</h2>
                        <p>Atpalaiduojantis, raminantis, nuimantis įtampą, balansuojantis, skatinantis kokybišką miegą, padedantis užmigti, lengvinantis kvėpavimą masažas.</p>
                        <h3>55eur</h3>
                        <a class="btn btn-warning" id="uzsisakytiProcedura11">Užsisakyti</a>
                    </div>
                </div>
                <!--Dvylikta procedūra-->
                <div class="row col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="procedura12 col-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="../images/procedure12.jpeg" />
                        <h2>Anticeliulitinis masažas su kvapniu kavos aliejumi</h2>
                        <p>Jis geras antioksidantas, pasižymintis anticeliulitiniu poveikiu, padedantis įveikti depresiją.</p>
                        <h3>45eur</h3>
                        <a class="btn btn-warning" id="uzsisakytiProcedura12">Užsisakyti</a>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <hr>
            <div class="foot row mx-2 my-4">
                <div class="foot1 lg-3">
                    <a href="../index.html"><img class="logo" src="../images/logo.png" alt="logo"></a>
                </div>
                <div class="foot3 lg-3 text-center">
                    <p>Adresas: Kalvarijų 159, LT-20321 Vilnius, Lietuva</p>
                    <p>Registracija telefonu: +370 6 48 755</p>
                    <p>El. paštas: bazeliukalisa@gmail.com</p>
                </div>
                <div class="foot32 lg-3 text-center">
                    <p>Procedūrų atlikimo laikas:
                        Pirmadienis – Sekmadienis 09:00 – 21:00</p>
                    Procedūrų atlikimo laikas:
                    Pirmadienis – Sekmadienis 09:00 – 21:00
                </div>
                <div class="foot2 lg-3 text-center">
                    <nav class="nav flex-column navbar-light">
                        <a class="navbar-brand" href="../index.php">Apie mus</a>
                        <a class="navbar-brand" href="../pages/proceduros.php">Procedūros</a>
                        <a class="navbar-brand" href="../pages/registracija.php">Registracija</a>
                        <a class="navbar-brand" href="../pages/kontaktai.php">Kontaktai</a>
                    </nav>
                </div>
            </div>
        </footer>
        <script src="../scripts/procedurosScript.js"></script>
    </body>
</html>
