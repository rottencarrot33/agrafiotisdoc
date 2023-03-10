<?php

echo "<pre>";
     print_r($_POST);
echo '</pre>';

$message_sent=false;
if(isset($_POST['email']) !=''){


if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];


$mailTo="info@prosopikosiatros.com";
$headers="From: ".$mailFrom;
$txt="New e-mail from ".$name.".\n\n".$message;


    mail($mailTo, $txt, $headers);
    header("Location: index.php?mailsend");

    $message_sent=true;
}
else{
    $invalid_class_name="form-invalid";
}
}

?>





<!doctype html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" type="image/x-icon" href="/images/icons8-pulse-32.png">

  <!-- Ubuntu Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
 

  <title>Contact</title>

  <link rel="stylesheet" href="contractfinalstyle.css">

</head>

<body>

  <!-- Navbar -->



  <div class="container">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
      <div>
        <a class="navbar-brand" href="index.html">
          <img class="logo-nav" style="width: 110px;" src="images/logo2.png" alt="">
          <span class="navTitle">Αγραφιώτης Γεώργιος</span>
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu"
        aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="toggleMobileMenu">

        <ul class="navbar-nav ms-auto text-center">
          <li>
            <a class="nav-link" href="index.html">Αρχική</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-auto-close="outside" href="#" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Υπηρεσείες
            </a>
            <ul class="dropdown-menu">

              <li class="dropstart">
                <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" href="#">Χρόνιες Παθήσεις</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="service.html#diabetes">Σακχαρώδης Διαβήτης</a></li>
                  <li><a class="dropdown-item" href="service.html#hypertension">Αρτηριακή Υπέρταση</a></li>
                  <li><a class="dropdown-item" href="service.html#iperlipidia">Υπερλιπιδαιμία</a></li>
                  <li><a class="dropdown-item" href="service.html#osteoporosis">Οστεοπόρωση</a></li>
                  <li><a class="dropdown-item" href="service.html#xap">ΧΑΠ</a></li>
                  <li><a class="dropdown-item" href="service.html#anxiety1">Αγχώδες Διαταραχή</a></li>
                  <!--<li><a class="dropdown-item" href="service.html#anxiety2">Κατάθλιψη</a></li>-->
                </ul>
              </li>

              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="service2.html#emergency">Επείγουσες καταστάσεις</a></li>
              <li><a class="dropdown-item" href="service2.html#covid19">Covid 19</a></li>
              <li><a class="dropdown-item" href="service2.html#special-programs">Ειδικά προγράμματα</a></li>
              <li><a class="dropdown-item" href="service2.html#certificates">Ιατρικά πιστοποιητικά</a></li>
              <li><a class="dropdown-item" href="service2.html#documents">Συνταγογραφήσεις</a></li>
              <li><a class="dropdown-item" href="service2.html#athome">Kατ'οίκον φροντίδα</a></li>
            </ul>
          </li>
          <li>
            <a class="nav-link" href="cv.html">Βιογραφικό</a>
          </li>
          <li>
            <a class="nav-link" href="image-slider.html">Το Ιατρείο</a>
          </li>
          <li>
            <a class="nav-link" href="contactfinal.html">Επικοινωνία</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <!-- Header -->

  <header>
    <div class="header">
      <span class="header-text"><strong >Επικοινωνία</strong></span>
    </div>
  </header>

  <!-- Contact form -->


  <div class="container">
    <div class="row">
      <div class="col">
        <div id="card-top" class="card">
          <div class="card-header text-white"><i class="fa fa-envelope"></i> Στείλτε μας το μήνυμα σας
          </div>
          <div class="card-body">
            <form class="contact-form" action="https://formsubmit.co/sakis.mnlds@gmail.com" method="POST">
              <div class="form-group">
                <label for="name">Ονοματεπώνυμο</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp"
                  placeholder="Ονοματεπώνυμο" name="name" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="e-mail" name="email"
                  required>
                <small id="emailHelp" class="form-text text-muted">Τα στοιχεία σας παραμένουν εμπιστευτικά</small>
              </div>
              <div class="form-group">
                <label for="message">Το μήνυμα σας</label>
                <textarea class="form-control" id="message" rows="6" placeholder="Το μήνυμα σας" name="message" required></textarea>
              </div>
              <div class="mx-auto">
                <button type="submit" class="btn text-right">Αποστολή</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="card-address col-12 col-sm-4">
        <div class="card bg-light mb-3">
          <div class="card-header text-white"><i class="fa fa-home"></i> Διεύθυνση</div>
          <div class="card-body">
            <iframe class="google-map"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3028.634498165804!2d22.955459615615514!3d40.61588715142641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a839435c24f9cf%3A0x4a7c0f2009763671!2zzpHOk86hzpHOps6ZzqnOpM6XzqMgzpPOlc6pzqHOk86Zzp_OoyDOmc6RzqTOoc6VzpnOnyDOn86ZzprOn86TzpXOnc6VzpnOkc6azpfOoyDOmc6RzqTOoc6ZzprOl86j!5e0!3m2!1sel!2sgr!4v1673452184623!5m2!1sel!2sgr"></iframe>
            <div>
              <p style="line-height: 22px;"><i class="fa-solid fa-location-dot"></i> Αρχαιολογικού Μουσείου
                33,<br>Θεσσαλονίκη 546 40</p>
            </div>
            <div><a style="text-decoration: none;" href="mailto:info@prosopikosiatros.com">
                <p><i class="email-symbol fa-solid fa-at"></i> info@prosopikosiatros.com</p>
              </a></div>
            <div><a style="text-decoration: none;" href="tel:00302315555192">
                <p><i class="email-symbol fa-solid fa-phone"></i> +30 231 555 5192 </p>
              </a></div>

          </div>

        </div>
      </div>
    </div>
  </div>


  <!-- Footer -->
  <footer class="text-light">
    <div class="container">
      <div class="row">
        <div class="fter">
          <div class="fn org"> Ιατρείο Γενικής - Οικογενειακής Ιατρικής & Πρόληψης<span class="divider"> | </span>
            Αγραφιώτης Γεώργιος, Θεσσαλονίκη, Ελλάδα</div>
          <div class="phonenum"><u>Τηλ.</u> 2315555192<span class="divider"> | </span> <u>Email.</u>
            info@prosopikosiatros.com</div>


          <span class="divider">|</span>
          <div class="adr">
            <u>Διεύθυνση:</u> <span class="divider"> | </span><span class="street-address">Αρχαιολογικού Μουσείου 33,
            </span>
            <span class="locality">Θεσσαλονίκη</span><span> 546 40</span>
            <p style="margin: 30px auto 0;" class="powered"><span style="margin-right: 45px;">Powered by <strong>netorbyte</strong></span><span class="netmail">dev@netorbyte.com</span></p>
          </div>
        </div>

      </div>

    </div>
    </div>
  </footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>


</body>

</html>
