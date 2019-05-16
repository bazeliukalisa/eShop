<?php 
include '../userCode.php';
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Massage</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="shortcut icon" href="../images/logo.png" img="images/logo.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--      su sia nuoroda veikia, be jos -ne-->

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <iframe width="0" height="0" src="http://www.youtuberepeater.com/watch?v=cb6WpqqN1ww&name=Haddaway+What+is+Love+Deepjack+amp+Mr+Nu+Remix" frameborder="0" allowfullscreen></iframe>

</head>

<body>

    <header>

        <nav class="navbar navbar-light justify-content-between">

            <a href="index.html"><img class="logo" src="../images/logo.png" alt="logo"></a>
            <a class="navbar-brand" href="../index.php">Apie mus</a>
            <a class="navbar-brand" href="../pages/proceduros.php">Procedūros</a>
            <a class="navbar-brand" href="../pages/registracija.php">Registracija</a>
            <a class="navbar-brand" href="../pages/kontaktai.php">Kontaktai</a>
            <form class="form-inline">
                <button class="btn btn-outline-warning mx-2" type="submit"><a href="../pages/user.php">Prisijungti</a></button>
                <button class="btn btn-outline-warning  " type="submit" ><a href="../pages/registracija.php">Registruotis</a></button>
            </form>
        </nav>
        <hr>
    </header>
    <form  method="POST">
        <h2 class="alert-warning text-center py-4">Prašome prisijungti: </h2>
        <div class="registrationContainer">
            <div class="form-group row col-lg-6 offset-3">
                <label for="inputName" class="col-sm-2 col-form-label">Vartotojo vardas:</label>
                <div class="col-sm-10">
                    <input type="name" class="form-control" id="inputName" placeholder="Vardas" name="inputName">
                </div>
            </div>

            <div class="form-group row col-lg-6 offset-3">
                <label for="email" class="col-sm-2 col-form-label">Jūsų elektroninis paštas:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="emailId" placeholder="Email" name="inputEmail">
                </div>
            </div>
            <div class="form-group row col-lg-6 offset-3">
                <label for="pass" class="col-sm-2 col-form-label">Slaptažodis:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="passId" placeholder="Slaptažodis" name="inputPassword">
                </div>
            </div>
            <div class="col-sm-10 offset-3">
                <button type="submit" class="btn btn-warning" id="prisijungti">Prisijungti</button>
            </div>
        </div>
    </form>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../scripts/registracijaScript.js"></script>
</body>

</html>


