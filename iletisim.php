<!DOCTYPE html>
<html lang="en" class="">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="Dil ve Konuşma Terapisti İletişim">
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
  <title>İNCİ DOĞAN | İletişim</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #eee;
    }
    .map-container-section {
      overflow: hidden;
      position: relative;
      height: 0;
    }
    .map-container-section iframe {
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      position: absolute;
    }
  </style>
</head>
<?php require 'header.php';?>

<section>
  <div id="map-container-demo-section" class="map-container-section mb-4" style="height: 500px">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1340.213270905918!2d28.993755829248595!3d41.
      05419242347218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab71cb6094abf%3A0xa5d4f851518ae0bf!
      2sDo%C3%A7.%20Dr.%20Nimet%20D%C3%96RTCAN!5e0!3m2!1str!2str!4v1607268725968!5m2!1str!2str" width="600" height="450"
      frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
</section>

<!-- Main Navigation -->
<body>

  <!-- Main Layout -->
  <main>

    <div class="container-fluid mb-5">

      <!-- Grid row -->
      <div class="row" style="margin-top: -100px;">

        <!-- Grid column -->
        <div class="col-md-12">

          <div class="card pb-5">
            <div class="card-body">

              <div class="container">

                <!-- Section: Contact v.2 -->
                <section class="text-center">

                  <!-- Section heading -->
                  <h2 class="font-weight-bold title h1 my-5">Bizimle iletişime geçin!</h2>
                  <!-- Section description -->
                  <p class="grey-text w-responsive mx-auto mb-5">Sayın ebeveynler, değerli danışanlarım, yaşadığınız
                      dil ve konuşma güçlükleriyle ilgili her konuda bize ulaşabilirsiniz.</p>

                  <div class="row pt-5">

                    <!-- Grid column -->
                    <div class="col-md-8 col-xl-9 mb-4">
                      <form  action="mail.php" method="post">

                        <!-- Grid row -->
                        <div class="row">

                          <!-- Grid column -->
                          <div class="col-md-6">
                            <div class="md-form mb-0">
                              <div class="md-form mb-0">
                                <input type="text" name="isim" class="form-control">
                                <label for="contact-name" class="">Adınız*</label>
                              </div>
                            </div>
                          </div>
                          <!-- Grid column -->

                          <!-- Grid column -->
                          <div class="col-md-6">
                            <div class="md-form mb-0">
                              <div class="md-form mb-0">
                                <input type="text"  name="posta" class="form-control">
                                <label for="contact-email" class="">E-mail*</label>
                              </div>
                            </div>
                          </div>
                          <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">
                          <div class="col-md-12">
                            <div class="md-form mb-0">
                              <input type="text"  name="konu" class="form-control">
                              <label for="contact-Subject" class="">Konu</label>
                            </div>
                          </div>
                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">

                          <!-- Grid column -->
                          <div class="col-md-12">

                            <div class="md-form mb-0">
                              <textarea type="text"  name="mesaj" class="md-textarea form-control"
                                rows="3" ></textarea>
                              <label for="contact-message"  >Mesajınız*</label>
                            </div>

                          </div>
                        </div>
                        <!-- Grid row -->

                        <div class="text-center text-md-left mt-4">
                          <input class="btn pink-gradient btn-rounded" type="submit" value="Gönder">
                        </div>

                      </form>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-xl-3">
                      <ul class="list-unstyled contact-icons">
                        <li>
                          <i class="fas fa-map-marker-alt fa-2x orange-text"></i>
                            <p> Nişantaşı, Teşvikiye Sezai Selek Sokak Hak Apt. No:21/1, 34365 Şişli/İstanbul -TR</p>
                        </li>

                        <li>
                          <i class="fas fa-phone fa-2x orange-text"></i>
                            <p>
                                <a class="black-text" href="tel://+905313356665">+ 90 531 335 6665</a>
                            </p>
                        </li>

                        <li>
                          <i class="fas fa-envelope fa-2x orange-text"></i>
                          <p>
                              <a  class="black-text" href="mailto:info@example.com">info@incidogan.com</a>
                          </p>
                        </li>
                      </ul>
                    </div>
                    <!-- Grid column -->

                  </div>

                </section>
                <!-- Section: Contact v.2 -->

              </div>
            </div>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>

    </div>

  </main>
  <!-- Main Layout -->
<?php require 'footer.php';?>
</body>
</html>