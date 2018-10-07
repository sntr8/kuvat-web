<?php
    $bg = array('./bg/hkg-central.jpg', './bg/160611_possu_reunasaari.jpg', './bg/IMG_4473.jpg', './bg/IMG_8955.jpg');
    $i = rand(0, count($bg)-1);
    $selectedBg = "$bg[$i]";
?>

body {
    background-image: url(<?php echo $selectedBg; ?>);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}

#grey {
    background: rgba(70, 72, 82, 0.5);
    width: 600px;
    height: 300px;
    border-radius: 50px;
    position: absolute;
    margin: auto;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
}

#contact {
    position: fixed;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
}

.fa {
    padding: 20px;
    font-size: 30px;
    width: 30px;
    text-align: center;
    text-decoration: none;
    border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-linkedin {
    background: #007bb5;
    color: white;
}

.fa-youtube {
    background: #bb0000;
    color: white;
}

.fa-instagram {
    background: #125688;
    color: white;
}

.fa-github {
  background: #24292e;
  color: white;
}
