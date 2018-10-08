<?php
    $bg = array('./bg/hkg-central.jpg', './bg/160611_possu_reunasaari.jpg', './bg/IMG_4473.jpg', './bg/IMG_8955.jpg');
    $i = rand(0, count($bg)-1);
    $selectedBg = "$bg[$i]";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Etunimi Sukunimi Photography</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/layout.css" media="screen" />
        <base href="https://kuvat.santerilehtonen.net" />
        <style>
            body {
                background-image: url(<?php echo $selectedBg; ?>);
            }
        </style>
    </head>
    <body>
        <div id="grey">
            <div id="contact">
                <img id="logo" src="logo.png" alt="background" />
            </div>
            <div id="social">
                <div id="buttons">
                    <a href="https://www.linkedin.com/in/santerilehtonen/" class="fa fa-linkedin"></a>
                    <a href="https://www.youtube.com/channel/UC87RybFFLQ_-demnP5ZZ2nA" class="fa fa-youtube"></a>
                    <a href="https://www.instagram.com/sntr08/" class="fa fa-instagram"></a>
                    <a href="https://github.com/sntr8" class="fa fa-github"></a>
                </div>
            </div>
        </div>
    </body>
</html>
