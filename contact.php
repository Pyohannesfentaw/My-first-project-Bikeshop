<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BoeliesFietsen</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">


</head>


   <!--bovenste stukje-->
    <!--nav section-->

    <div class="row d-flex text-center row-bottom-border">
      <div class="col-2"></div>
      <div class="col-md-2">
        <p class="checkbox mt-3 "> <i class="fal fa-check-square mr-3" ></i>Maakt fietsen weer leuk!</p>
      </div>
      <div class="col-md-2">
        <p class="checkbox mt-3 "><i class="fal fa-check-square mr-3" ></i>Fietsen voor elk budget</p>
      </div>
      <div class="col-md-2">
        <p class="checkbox mt-3 "><i class="fal fa-check-square mr-3" ></i> Voordelige reparatie </p>
      </div>
      <div class="col-md-2">
        <p class="checkbox mt-3"><i class="far fa-map-marker-alt mr-2" ></i> Onze locatie </p>
        <div class="col-2"></div>
      </div>
    </div>
  


  </div>

  

  <div class="container nav-d" >
   
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand mr-5" href="index.html"><img src="img/Logo-transparant.png" alt="Logo-transparant"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item  ">
              <a class="nav-link" href="index.html"> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="product.html">Product</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="occasions.html"> Occasions</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="bicyclerepair.html">Bicycle repair</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="product-single.html">Single product</a>
            </li>
            <li class="nav-item home-active">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>

            <li class="nav-item telefoon-nav  pr-0">
              <a href="tel: +06 0000000" class=" my-link  ml-3 mr-2 " style="color: white; font-size: 16px;" ><i class="far fa-phone mr-2"></i>06 0000000</a>
            </li>
          </ul>
    </nav>
  </div>
  </div>

  </div>

  <body class="
  ">
  <img src="img/Group2.png" class="img-fluid image-group2" alt="Responsive image">

  <!--
<img src="https://via.placeholder.com/1568x280?text=Visit+Blogging.com+Now" alt="">
    -->

  <div class="container mt-5">
    <div class="row contact-row">
      <div class="col-md-1"></div>
      <div class="col-md-6">
        <h1 class="Contacttext1 mb-4"> Contact</h1>
        <p class="Contacttext2">
          Heeft u een vraag over een bepaalde fiets of wilt u een afspraak maken voor een reparatie of onderhoud?
          eem dan contact met ons op. Wij zitten in het oude Alfa college gebouw.
          Als u moeite heeft met het vinden kunt u het beste even bellen.</p>
        <form class="formulier mb-4" action="to.php" action="contactform.php" method="POST">
          
          <h2 class="subtitle-contact">Contact Formulier</h2>

          <div class="div mb-4">
            <label for="inputEmail4" > <strong class="contactnaam">Naam: </strong></label>
            <input type="text" class="form-control" name="name" placeholder="Uw voor en/of achternaam">
          </div>
          <div class="con mb-4">
            <label for="email" > <strong class="contactnaam">Email: </strong> </label>
            <input type="text" class="form-control"  placeholder="Enter email" name="email" required>
          </div>

          <div class="con mb-4">
            <label for="exampleFormControlTextarea1" ><strong class="contactnaam">Bericht:</strong></label>
            <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Uw bericht"></textarea>
            <div class="g-recaptcha mt-3" data-callback="callback" data-expired-callback="ex-callback" data-sitekey="6LeEh94ZAAAAAPM7jNHl6QBR-0Zi97pbvnOW9ccW"></div>

            <button type="submit" name="submit" class="btn btn-primary mt-4 send-email-btn mb-3">Verstuur bericht</button>
            
         </div>

        </form>
      </div>
      <div class="col-md-1">

      </div>

      <div class="col-md-3 ">
        <div class="card mb-3  shadow-sm  bg-white rounded">
          <div class="card-body">
            <p class="card-title text-center mb-3"><span class="dot"><i class="far fa-map-signs mt-3" "></i></span></p>
            <p class="card-text moi-cerdtext1 text-center mb-0">Adresgegevens </p>
            <p class="card-text moi-cerdtext2 text-center mb-0"> Travertijnstraat 6 </p>
            <p class="card-text moi-cerdtext2 text-center mb-0"> 9743SZ Groningen</p>

          </div>
        </div>


        <div class="card mb-3  shadow-sm  bg-white rounded">
          <div class="card-body ">
            <p class="card-title text-center"><span class="dot"><i class="far fa-id-card mt-3" "></i></span></p>
            <p class="card-text moi-cerdtext1 text-center mb-0">Contactgegevens</p>
            <p class="card-text moi-cerdtext2 text-center mb-0">06 - 3042 3640 </p>
            <p class="card-text moi-cerdtext2 text-center"> info@boeliesfietsen.nl
            </p>

          </div>
        </div>

        <div class="card  shadow-sm  bg-white rounded">
          <div class="card-body">
            <p class="card-title text-center"><span class="dot"><i class="far fa-credit-card mt-3"  "></i></span></p>
            <p class="card-text moi-cerdtext1 text-center mb-0">Financiële gegevens </p>
            <p class="card-text moi-cerdtext2 text-center mb-0"> KvK: 63370840 </p>
            <p class="card-text moi-cerdtext2 text-center mb-0"> Btw: NL200049276
            </p>

          </div>
        </div>
      </div>


    </div>
  </div>

  <!--footer-->

  <footer class="container-fluid foot-con">

    <div class="row footer-row1 text-center d-flex justify-content-center">
      <div class="col-md text-left mt-5 ">
        <a href="index.html"><img class="log" src="img/Logo-transparant.png" alt="image resposive"></a>
        <p class="Footertext1" > Boelie's Fietsen is opgericht in 2015. Wij waarborgen onze kwaliteit en vakmanschap. Boelie's Fietsen maakt fietsen weer leuk!</p>
      </div>
      <div class="col-md text-left mt-5">
        <h2 class="title-footer"> Boelie Fietsen</h2>
        <ul class="list-unstyled">
          <li><a href="index.html">
              <p class="Footertext1 mb-1" > Home</p>
            </a></li>
          <li><a href="product.html">
              <p class="Footertext1 mb-1" > Product</p>
            </a></li>
          <li><a href="occasions.html">
              <p class="Footertext1 mb-1" > Tweedehandsfietsen</p>
            </a></li>
          <li><a href="bicyclerepair.html">
              <p class="Footertext1 mb-1" > Fietsreperatie</p>
            </a></li>
          <li><a href="product-single.html">
              <p class="Footertext1 mb-1" > product-single</p>
            </a></li>
          <li><a href="contact.html">
              <p class="Footertext1 mb-1" > Contact</p>
            </a></li>
        </ul>
      </div>


      <div class="col-md text-left mt-5">

        <h2 class="title-footer mb-3">Contact</h2>

        <p class="footer-locatie mb-0" > <i class="fas fa-building mr-3"></i>Travertijnstraat 6</p>

        <p class="footer-locatie mt-0 ml-4" > 9743 SZ Gronignen</p>

        <a href="#" class="footer-locatie mr-5" ><i class="fab fa-facebook-square mr-3 mb-4"></i> Facebook </a>
        <br>

        <a href="#" class="footer-locatie mr-5" ><i class="fab fa-youtube mr-3"></i>Youtube </a>
      </div>




      <div class="col-md text-left mt-5">
        <h2 class="title-footer">Reviews</h2>
        <ul class="list-unstyled quick-links">
          <li>
            <p class="pp"> <span class="googlefont">Google</span> - <span class="reviewfont">20 reviews </span></p>
          </li>
          <li>
            <p class="pp"><span class="footnumero">4,9</span> <i class=" starr far fa-star ml-3"></i><i class="  starr far fa-star ml-1"></i> <i class="  starr far fa-star"></i> <i class=" starr far fa-star"></i> <i class="  starr far fa-star"></i></p>
          </li>
          <li>
            <p class="pp"> <span class="googlefont"> Facebook </span> - <span class="reviewfont">32 reviews</span></p>
          </li>
          <li>
            <p class="pp"> <span class="footnumero">5,0</span> <i class=" starr far fa-star ml-3"></i><i class="  starr far fa-star ml-1"></i> <i class="  starr far fa-star"></i> <i class=" starr far fa-star"></i> <i class="  starr far fa-star"></i></p>
          </li>

        </ul>
      </div>
    </div>

    <hr class="footer-line mt-2 mb-1" >

    <div class="row ">
      <div class="col-md-6 mt-2  text-left text-white">
        <p > © 2018 Boelie's fietsen | <a class="bottom-links" href="index.html"> Privacyverklaring </a>|<a class="bottom-links" href="index.html"> Cookies</a></p>

      </div>
      <div class="col-6 text-right ">
        <a class="bottom-links" href="https://www.anurawebdevelopment.nl/">Powered by Anura</a>
      </div>
    </div>



  </footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
 
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>
  <script src="https://kit.fontawesome.com/d4122f0987.js" crossorigin="anonymous"></script>
  <script src="js/bootstrap.js"></script>

  <script>
    $(document).on('click', 'ul li', function(){
      $(this).addClass('active').siblings().removeClass('active')
    })
  </script>
</body>

</html>