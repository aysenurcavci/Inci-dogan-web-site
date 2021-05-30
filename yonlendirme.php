<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
  <title>İNCİ DOĞAN</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <style>
    html,
    body,
    header,
    .view {
      height: 100%;
    }
    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 815px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {         
      html,
      body,
      header,
      .view {
        height: 600px;
      }
    }
  </style>
</head>
<?php require 'header.php';?>
<body>

  <!-- Navigation & Intro -->
    <!-- Intro Section -->
    <div  class="view jarallax" data-jarallax='{"speed": 0.2}' style="background-image: url('img/slide2.jpg');"">
      <div class="mask rgba-gradient-1">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="row">
            <div class="col-md-12 wow fadeIn mb-3">
              <div class="card card-body rgba-white-slight text-center white-text">
                <ul class="list-unstyled py-2 mx-lg-5">
                  <li>
                    <h1 class="display-1 mt-5 mx-5 mt-lg-0 mb-5 font-weight-bold white-text wow fadeIn"
                      data-wow-delay="0.3s">
                      <strong>HATA</strong>
                    </h1>
                  </li>
                  <li>
                    <h4 class="white-text description mb-4 wow fadeIn" data-wow-delay="0.4s">Opps! Aradığın sayfa
                        bulunamadı.</h4>
                    <p class="white-text description pb-5 wow fadeIn" data-wow-delay="0.4s"> Bir problemle karşılaştık.
                    </p>
                  </li>

                  <li class="nav-item ml-2 mb-5">
                      <a class="btn pink-gradient btn-rounded btn-sm font-weight-bold" href="index.php?sayfa=index"
                         data-offset="90">Anasayfa</a>
                  </li>

                  <li>

                    <a class="p-2 m-2 fa-lg fb-ic">
                      <i class="fab fa-facebook-f white-text"></i>
                    </a>
                    <a class="p-2 m-2 fa-lg fb-ic" href="https://www.instagram.com/inciidogann/" >
                       <i class="fab fa-instagram white-text"></i>
                    </a>
                    <a class="p-2 m-2 fa-lg fb-ic" href="tel://+905313356665">
                        <i class="fas fa-phone white-text"></i>
                    </a>
                    <a class="p-2 m-2 fa-lg fb-ic" href="https://api.whatsapp.com/send?phone=905313356665">
                        <i class="fab fa-whatsapp white-text"></i>
                    </a>

                  </li>
                </ul>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- Navigation & Intro -->
<?php require 'footer.php';?>
</body>
</html>
