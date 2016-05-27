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
    <!--[if lt IE 9]
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar-wrapper"><!--navigation bar-->
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
                    <a class="navbar-brand" href="index.php">Hotel Oll</a>
                </div>

                <div id="navbar" class="navbar-collapse collapse"><!--navigation bar buttons-->
                    <ul class="nav navbar-nav navbar-left">
                        <li class="active"><a href="index.php"> Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#contactdialog">Contact</a></li>
                    </ul>
                </div>
            </div><!--/navigation bar buttons-->
        </nav>
        <!--/.nav-collapse -->
    </div>
</div><!--/navigation bar-->

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
                    <h2>Mingi kasulik informatsioon</h2>
                    <p>voib olla mingi kampaania voi muud asju</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="images/s2.jpg" width="800" height="600" alt="">
            <div class="container">
                <div class="carousel-caption">
                    <h2>Mingi kasulik informatsioon</h2>
                    <p>voib olla mingi kampaania voi muud asju</p>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="images/s3.jpg" width="800" height="600" alt="">
            <div class="container">
                <div class="carousel-caption">
                    <h2>Mingi kasulik informatsioon</h2>
                    <p>voib olla mingi kampaania voi muud asju</p>
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
    <div class="row text-center">
        <h1> Hotel Oll</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            Me asume kuskilt maailmas, meie asukoht ei tea mitte keegi. Me ei ole suur, aga me arendame!...
            Meie hoone pilt <img src="images/c13.jpg" width="700" height="700"> ja kaart.
        </div>
    </div>
</div>

<!-- /Content after carousel -->
<!-- Forms -->

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
<!-- <script src="js/ie10-viewport-bug-workaround.js"></script>-->

</body>
</html>