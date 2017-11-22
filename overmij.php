
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/app.css">
    <title>Menouer Nobach - About</title>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
</head>

<body>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Menouer Nobach</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="overmij.php">Over mij</a></li>
                <li><a href="projecten.php">Projecten</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://www.instagram.com/menouern/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://github.com/exkungen"><i class="fa fa-github"></i></a></li>
                <li><a href="https://www.facebook.com/menouer.nobach"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.linkedin.com/in/menouer-nobach-a18184152/"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="title-bar">
    <div class="container">
        <h1>Over mij</h1>
    </div>
</div>

<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Over mij</h4>
                    </div>
                    <div class="panel-body">
                        <p>Welkom en leuk dat je een kijkje neemt op mijn portfolio website!</p>
                        <p>Mijn naam is Menouer Nobach, ik woon in Heemskerk en ik ben 18 jaar oud.</p>
                        <p>Momenteel zit ik in het 2e leerjaar op het Media College Amsterdam met als opleiding "Media Developer".</p>
                        <p>Na mijn opleiding wil ik graag software-engineer studeren aan de Hogeschool van Amsterdam.</p>
                       <br />
                        <p>Mijn interesses liggen vooral bij back-end maar ik vind front-end ook leuk om te doen</p>
                        <p>Later zou ik mijn eigen bedrijf willen beginnen, en als dat niet lukt wil ik bij een klein development bedrijf te werk gaan</p>
                        <p>Mijn sterktste punt ligt bij communicatie omdat ik vergeleken met andere developers sociaal en aansprekbaar ben</p>
                        <br />
                        <p>Programmeertalen die ik momenteel beheer:</p>
                        <ul>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JavaScript</li>
                            <li>PHP</li>
                            <li>MYSQL</li>
                        </ul>
                        <p>Frameworks waar ik mee gewerkt hebt:</p>
                        <ul>
                            <li>SASS</li>
                            <li>Bootstrap</li>
                            <li>ReactJS</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
</div>

<div class="section-c">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>Contact</h2>
                <br />
                <p>Laat een bericht achter</p>
                <hr />
                <form method="post" id="login" action="contact_proccess.php">
                    <input type="email" class="form-control input-lg" placeholder="Email" required name="email">

                    <br />
                    <input type="text" class="form-control input-lg" placeholder="Naam" required name="firstname">
                    <br />
                    <textarea class="form-control input-lg" placeholder="Bericht" cols="20" rows="5" required name="other"></textarea>
                    <br />

                    <button class="btn btn-primary btn-lg btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p>Copyright &copy; Menouer Nobach</p>
    </div>

</footer>

<script src="bower_components/jquery/dist/jquery.js"></script>
<script src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.js"></script>

<script>
    window.sr = ScrollReveal();

    sr.reveal('.navbar', {
        duration: 2000,
        origin: 'bottom'
    });
    sr.reveal('.section-c', {
        duration: 2000,
        origin: 'left'
    });
    sr.reveal('.footer', {
        duration: 1000,
        origin: 'top'
    });
    sr.reveal('.title-bar' , {
        duration: 2000,
        origin:top
    });
    sr.reveal('.footer', {
        duration: 1000,
        origin: 'bottom'
    });
    sr.reveal('.main', {
        duration: 2000,
        origin: 'bottom'
    });

</script>

<script>
$(function() {
    // Smooth Scrolling
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});
</script>
</body>
</html>
