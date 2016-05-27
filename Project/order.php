<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Made with Jesus help and bootstrap:)">
    <meta name="author" content="Aleksandr Laada">

    <title>Index</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar-wrapper"><!--Navigation bar-->
    <div class="container">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapsed" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Hotel Oll</a>
                </div>

                <div id="navbar" class="navbar-collapse collapse"><!--Navigation baari lingid-->
                    <ul class="nav navbar-nav navbar-left">
                        <li class="active"><a href="view.php"> Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#contactdialog">Contact</a></li>
                        <li><a href="index.php">Broneering</a></li>
                        <li><a href="#profile" data-toggle="modal" data-target="#profile">Profile</a></li>
                        <li>
                            <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
                                <input type="hidden" name="action" value="logout">
                                <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">
                                <button class="navbar-btn btn-danger" type="submit">Logi välja</button>
                            </form>
                        </li>
                        <li> <?php foreach (message_list() as $message): ?>
                                <p style="border: 1px solid blue; background: #EEE;">
                                    <?= $message; ?>
                                </p>
                            <?php endforeach; ?></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--/.nav-collapse -->
    </div>
</div>

<div id="carousel" class="carousel slide" data-ride="carousel">
    <!-- indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide="0"></li>
        <li data-target="#carousel" data-slide="1"></li>
        <li data-target="#carousel" data-slide="2"></li>
    </ol>
    <!-- Slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="images/s1.jpg" width="800" height="600" alt="">
            <div class="container">
                <div class="carousel-caption">
                    <h3>slide2</h3>
                    <p>opisanie</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="images/s2.jpg" width="800" height="600" alt="">
            <div class="container">
                <div class="carousel-caption">
                    <h3>slide1</h3>
                    <p>opisanie</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="images/s3.jpg" width="800" height="600" alt="">
            <div class="container">
                <div class="carousel-caption">
                    <h3>slide3</h3>
                    <p>opisanie</p>
                </div>
            </div>
        </div>
    </div>
    <!-- slide buttons -->
    <a href="#carousel" class="left carousel-control" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a href="#carousel" class="right carousel-control" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
<!-- Content after carousel -->
<div class="container">
    <div class="row">
        <h1> Siin me näitame kui palju numbreid veel olemas klienditele</h1>
    </div>
    <div class="container-fluid">
        <div class="row center-block">
            <h1>Broneering programm</h1>

            <p id="kuva-nupp">
                <button class="btn btn-success" type="button" data-toggle="modal" data-target="#lisamisevorm">Kuva lisamise vorm</button>
            </p>
            <div class="modal fade" id="lisamisevorm"><!--Lisamise vorm-->
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="text-center">lisamise vorm</h2>
                        </div>
                        <div class="modal-body text-center" id="lisavormistus">
                            <form id="lisa-vorm" method="post" action="<?= $_SERVER['PHP_SELF']; ?>">

                                <input type="hidden" name="action" value="add">
                                <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">

                                <table class="table-bordered">
                                    <tr>
                                        <td>Nimetus</td>
                                        <td>
                                            <input type="text" id="nimetus" name="nimetus">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kogus</td>
                                        <td>
                                            <input type="number" id="kogus" name="kogus">
                                        </td>
                                    </tr>
                                </table>

                                <p>
                                    <button type="submit" class="btn btn-warning center-block">Lisa kirje</button>
                                </p>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <table id="ladu" border="1">
                <thead>
                <tr>
                    <th>Nimetus</th>
                    <th>Kogus</th>
                    <th>Tegevused</th>
                </tr>
                </thead>

                <tbody>

                <?php
                // koolon tsükli lõpus tähendab, et tsükkel koosneb HTML osast
                foreach (model_load($page) as $rida): ?>

                    <tr>
                        <td>
                            <?=
                            // vältimaks pahatahtlikku XSS sisu, kus kasutaja sisestab õige
                            // info asemel <script> tag'i, peame tekstiväljundis asendama kõik HTML erisümbolid
                            htmlspecialchars($rida['nimetus']);
                            ?>
                        </td>
                        <td>
                            <form method="post" action="<?= $_SERVER['PHP_SELF'];?>">
                                <input type="hidden" name="action" value="update">
                                <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'];?>">
                                <input type="hidden" name="id" value="<?= $rida['id'];?>">

                                <input type="number" style="width: 5em; text-align: right;" name="kogus" value="<?= $rida['kogus']; ?>">
                                <button type="submit">Uuenda</button>
                            </form>
                        </td>
                        <td>

                            <form method="post" action="<?= $_SERVER['PHP_SELF'];?>">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">
                                <input type="hidden" name="id" value="<?= $rida['id']; ?>">
                                <button type="submit">Kustuta rida</button>
                            </form>

                        </td>
                    </tr>

                <?php endforeach; ?>

                </tbody>
            </table>

            <p>
                <a href="<?= $_SERVER['PHP_SELF']; ?>?page=<?= $page - 1; ?>">
                    Eelmine lehekulg
                </a>
                |
                <a href="<?= $_SERVER['PHP_SELF']; ?>?page=<?= $page + 1; ?>">
                    Järgmine lehekulg
                </a>
            </p>
        </div>
    </div>
</div>
<!-- /Content after carousel -->
<!-- Forms -->
<div class="modal" id="logdialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="form-signin-heading text-center">Sisselogimine vorm</h2>
            </div>
            <div class="modal-body" id="loginforma">

                <form method="POST" id="logvorm" action="<?= $_SERVER['PHP_SELF']; ?>" class="form-signin">
                    <input type="hidden" name="action" value="login">
                    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">


                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="text" id="Userlogin" name="kasutajanimi" class="form-control"
                           placeholder="Email address" required="" autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="UserParool" name="parool" class="form-control" placeholder="Password"
                           required="">

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Logi sisse</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="regdialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="form-signin-heading text-center">Registreerimis vorm</h2>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>" class="form-signin">
                    <input type="hidden" name="action" value="register">
                    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">

                    <p><input type="text" id="RegEmail" name="kasutajanimi" class="form-control"
                              placeholder="Email address" required="" autofocus></p>

                    <p><input type="password" id="RegPassword" name="parool" class="form-control" placeholder="Parool"
                              required="">
                    </p>
                    <div class="text-center text-info">
                        <label>
                            Juba olemas kontot? <a href="#" data-toggle="modal" data-target="#logdialog">Logi sisse</a>!
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Registreeri</button>

                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="contactdialog" role= "dialog"> <!-- Contact form-->
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal">
                <div class="modal-header">
                    <h4>Contact Me</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">

                        <label for="contact-name" class="col-lg-2 control-label">Name:</label>
                        <div class="col-lg-10">

                            <input type="text" name="form-control" id="contact-name" placeholder="Your name">
                        </div>
                    </div>

                    <div class="form-group">

                        <label for="contact-email" class="col-lg-2 control-label">Email:</label>
                        <div class="col-lg-10">

                            <input type="email" name="form-control" id="contact-email" placeholder="Email@example.com">
                        </div>
                    </div>

                    <div class="form-group">

                        <label for="contact-msg" class="col-lg-2 control-label">Message:</label>
                        <div class="col-lg-10">

                            <textarea class="form-control" rows="6"></textarea>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss = "modal">Close</a>
                    <button class="btn btn-primary" type="submit">Send</button>

                </div>
            </form>
        </div>
    </div>
</div><!-- /Contact form-->
<!-- /Forms -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="js/bootstrap.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>