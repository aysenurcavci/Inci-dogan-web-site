<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Dil Bozukluklar , Konuşma Bozuklukları , Ses Bozuklukları">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <title><?= $baslik ?></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
<style>
 #nb{
     background-color: #ffffff;
 }

</style>


<?php
$iphone = stristr(@$_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = stristr(@$_SERVER['HTTP_USER_AGENT'],"Android");
$webos = stristr(@$_SERVER['HTTP_USER_AGENT'],"webOS");
$bberry = stristr(@$_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = stristr(@$_SERVER['HTTP_USER_AGENT'],"iPod");
if ($iphone || $android || $webos || $ipod || $bberry == true)
{
?>
    <div style="width:300px;position:fixed;top:450px;left: 02px;z-index:99999;font-size:12px;">
        <a href="https://api.whatsapp.com/send?phone=905313356665">
            <img style="width:40px;" src="https://demobul.net/images/whatsapp.png" alt="whatsapp">

        </a>
    </div>
<?php }else{?>
    <div style="width:300px;position:fixed;top:500px;left: 10px;z-index:99999;font-size:12px;">
        <a href="https://api.whatsapp.com/send?phone=905313356665" target="_blank">
            <img style="width:40px;" src="https://demobul.net/images/whatsapp.png" alt="whatsapp">
        </a>
        <a class="btn white btn-rounded btn-sm font-weight-bold" href="https://api.whatsapp.com/send?phone=905313356665"
           data-offset="90" target="_blank">
            RANDEVU TALEBİ</a>
    </div>
<?php } ?>

<script language="javascript" src="http://ir.sitekodlari.com/yukaricik1.js"></script>

<body>

<!-- Navigation & Intro -->
<header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top scrolling-navbar " id="nb">
        <div class="container ">
            <a class="navbar-brand font-weight-bold title" href="index.php?sayfa=index">
                <img src="img/as.jpg" alt="" width="180" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="list-unstyled navbar-nav mr-auto">
                    <li class="nav-item ml-4">
                        <a class="nav-link title" href="index.php?sayfa=index">Anasayfa</a>
                    </li>
                    <li class="nav-item ml-4">
                        <a class="nav-link title" href="index.php?sayfa=hakkimda" data-offset="90">Hakkımda</a>
                    </li>
                    <li class="nav-item dropdown ml-4">
                        <a class="nav-link dropdown-toggle title" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Hizmetler</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="index.php?sayfa=calismaAlanlari">Çalışma Alanları</a>
                            <a class="dropdown-item" href="index.php?sayfa=galeri">Galeri</a>
                            <a class="dropdown-item" href="index.php?sayfa=sorular">Sıkça Sorulan Sorular</a>
                        </div>
                    </li>
                    <li class="nav-item ml-4">
                        <a class="nav-link title" href="index.php?sayfa=makale" data-offset="90">Makaleler</a>
                    </li>
                    <li class="nav-item ml-4">
                        <a class="nav-link title" href="index.php?sayfa=iletisim" data-offset="90">İletişim</a>
                    </li>
                </ul>
                <!-- Social Icon  -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a  href="tel://+905313356665" class="nav-link">
                            <i class="fas fa-phone title" ></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                            <i class="fab fa-facebook-f title"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.instagram.com/inciidogann/" class="nav-link">
                            <i class="fab fa-instagram title"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a  href="https://api.whatsapp.com/send?phone=905313356665" class="nav-link">
                            <i class="fab fa-whatsapp title"></i>
                        </a>
                    </li>
                    <li class="nav-item ml-3">
                        <a class="btn pink-gradient btn-rounded btn-sm font-weight-bold  "
                           href="index.php?sayfa=iletisim" data-offset="90">RANDEVU TALEBİ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- Navigation & Intro -->
