<?php ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Kontaktai</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="shortcut icon" href="../images/logo.png">
    <iframe width="0" height="0" src="http://www.youtuberepeater.com/watch?v=cb6WpqqN1ww&name=Haddaway+What+is+Love+Deepjack+amp+Mr+Nu+Remix" frameborder="0" allowfullscreen></iframe>
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
                <button class="btn btn-outline-warning  " type="submit" ><a href="registracija.php">Registruotis</a></button>            </form>
        </nav>

    </header>
    <main>
        <h2 class="alert-warning text-center py-4" id="h2Script">Kreipkitės į mus:</h2>
        <form class="form mx-4 my-4" onsubmit="return response();">
            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-6 offset-3">
                <label for="nameInput">Jūsų vardas (būtina užpildyti):</label>
                <input type="text" class="form-control" id="nameInput" placeholder="Įveskite vardą">
                <p id="result1"></p>
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-6 offset-3">
                <label for="emailInput">El. pašto adresas (būtina užpildyti):</label>
                <input type="email" class="form-control" id="emailInput" placeholder="Email">
                <small id="emailHelp" class="form-text text-muted">Mes pažadame saugoti jūsų el.pašto konfidencialumą.</small>
                <p id="result2"></p>
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-6 offset-3">
                <label for="phoneInput">Tel. nr. (būtina užpildyti):</label>
                <input type="text" class="form-control" id="phoneInput" placeholder="+370 6">
                <p id="result3"></p>
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-6 offset-3">
                <label for="textInput">Žinutė: </label>
                <textarea class="form-control" id="textInput" rows="3"></textarea>
                <p id="result4"></p>
            </div>
            <button type="submit" class="btn btn-warning  col-lg-2 col-md-2 col-sm-2 col-2 offset-5" id="kontaktaiSubmit">Išsiųsti</button>
            <h2 class="alert-warning text-center py-4 my-4" id="h2Script">Mus rasite čia:</h2>
            <div class="form-group col-lg-6 offset-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.184810854392!2d25.282804115756313!3d54.72396398029079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd9135fcb7d629%3A0xd09528ab6b715157!2sKalvarij%C5%B3+g.+159%2C+Vilnius+08313!5e0!3m2!1slt!2slt!4v1556135334931!5m2!1slt!2slt" width="670" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </form>
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
    <script src="../scripts/kontaktaiScript.js"></script>

</body>

</html>

