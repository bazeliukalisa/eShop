<?php ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registracija</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="shortcut icon" href="../images/logo.png">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-light justify-content-between">
                <a href="../index.html"><img class="logo" src="../images/logo.png" alt="logo"></a>
                <a class="navbar-brand" href="../index.php">Apie mus</a>
                <a class="navbar-brand" href="../pages/proceduros.php">Procedūros</a>
                <a class="navbar-brand" href="../pages/registracija.php">Registracija</a>
                <a class="navbar-brand" href="../pages/kontaktai.php">Kontaktai</a>
                <form class="form-inline">
                    <button class="btn btn-outline-warning mx-2" type="submit"><a href="../pages/user.php">Prisijungti</a></button>
                    <button class="btn btn-outline-warning  " type="submit" ><a href="registracija.php">Registruotis</a></button>
                </form>
            </nav>
        </header>
        <main>
            <form action="" method="POST" onsubmit="return validate();">
                <h2 class="offset-4 my-4 ">Prašome užsiregistruoti: </h2>
                <div class="registrationContainer">
                    <div class="form-group row col-lg-6 col-md-6 col-sm-6 offset-3">
                        <label for="inputName" class="col-sm-2 col-form-label">Vartotojo vardas:</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="inputName" placeholder="Vardas" name="inputName">
                            <hr>


                        </div>
                    </div>
                    <p id="result1"></p>
                    <div class="form-group row col-lg-6 col-md-6 col-sm-6 offset-3">
                        <label for="inputSurname" class="col-sm-2 col-form-label">Pavardė:</label>
                        <div class="col-sm-10">
                            <input type="surname" class="form-control" id="inputSurname" placeholder="Pavardė" name="inputSurname">
                        </div>
                    </div>
                    <div class="form-group row col-lg-6 col-md-6 col-sm-6 offset-3">
                        <label for="email" class="col-sm-2 col-form-label">Jūsų elektroninis paštas:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="emailId" placeholder="Email" name="inputEmail">
                        </div>
                    </div>
                    <div class="form-group row col-lg-6 col-md-6 col-sm-6 offset-3">
                        <label for="pass" class="col-sm-2 col-form-label">Sugalvokite slaptažodį:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="passId" placeholder="Slaptažodis" name="inputPassword">
                        </div>
                    </div>
                    <div class="form-group row col-lg-6 col-md-6 col-sm-6 offset-3">
                        <label for="passConfirm" class="col-sm-2 col-form-label">Pakartokite slaptažodį:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="passConfirmId" placeholder="Pakartotas slaptažodis" name="inputPassword2">
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <div class="row offset-3">
                            <legend class="col-form-label col-sm-2 pt-0">Lytis:</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Moteris" checked>
                                    <label class="form-check-label" for="gridRadios1">
                                        Moteris
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Vyras">
                                    <label class="form-check-label" for="gridRadios2">
                                        Vyras
                                    </label>
                                </div>

                            </div>
                        </div>
                    </fieldset>
                    <div class=" row col-lg-6 offset-3">
                        <label for="inlineFormCustomSelect" class="col-sm-2 col-form-label">Jūsų gimimo metai:</label>
                        <div class="col-lg-6">
                            <input class="form-control" type="date" id="myDate" value="2014-02-09" name="birthDate">
                        </div>
                    </div>


                    <div class="col-auto my-1 ml-2">
                        <div class="form-group row offset-3">
                            <div class="col-sm-2">Ar sutinkate gauti naujienlaiškį? </div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1" name="gridCheck1">
                                    <label class="form-check-label" for="gridCheck1">
                                        Sutinku </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row offset-3">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-warning">Užsiregistruoti</button>
                                <!--                                Buvo padarytas id="uzsiregistruoti"-->
                            </div>
                        </div>
                    </div>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../scripts/registracijaScript.js"></script>
    </body>

</html>


