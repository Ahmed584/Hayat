<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>HAYAT</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="HAYAT - Activism & Campaign HTML5 Template">
  <meta name="author" content="xenioushk">
  <link rel="shortcut icon" href="images/hayat-icon.png" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" type="text/css">
  <link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
  <link href="css/venobox.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/styles.css" />

  <body>



    <!-- Login Modal -->
    <div class="modal fade" id="loginModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Se connecter</h4>
          </div>
          <!-- Modal Body -->
          <div class="modal-body">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span>Adresse mail</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="user@yahoo.com" type="email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"><span class="glyphicon glyphicon-off"></span>Mot de passe</label>
              <input class="form-control" id="exampleInputPassword1" placeholder="Mot de passe" type="password">
            </div>
            <button class="loginBtn loginBtn--facebook btn-block">se connecter avec facebook</button>
            <button class="loginBtn loginBtn--google btn-block">se connecter avec google</button>
            <p></p>
            <p class="text-right"><a href="#">Mot de passe oublié ?</a></p>
            <p class="text-right"><a href="#">Inscription</a></p>
          </div>
          <!-- Modal Footer -->
          <div class="modal-footer">
            <div class="col-sm-12 text-center">
              <a href="clients/index.html" class="btn bg-grey text-center">se connecter</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="preloader">
      <span class="margin-bottom"><img src="images/loader.gif" alt="" /></span>
    </div>
    <div class="modal fade" id="annonce">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Log-in</h4>
          </div>
          <!-- Modal Body -->
          <div class="modal-body">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span>Username</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Enter Username" type="email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"><span class="glyphicon glyphicon-off"></span>Password</label>
              <input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password">
            </div>
            <button class="loginBtn loginBtn--facebook btn-block">Login with Facebook</button>
            <button class="loginBtn loginBtn--google btn-block">Login with Google</button>
            <p></p>
            <p class="text-right"><a href="#">Forgot password?</a></p>
            <p class="text-right"><a href="#">Don't have an account yet!</a></p>
          </div>
          <!-- Modal Footer -->
          <div class="modal-footer">
            <div class="col-sm-12 text-center">
              <a href="clients/index.html" class="btn bg-grey text-center">Log-in</a>
            </div>
          </div>
        </div>
      </div>
    </div>






    <!--  HEADER -->

    <header class="main-header clearfix" data-sticky_header="1">

      <div class="top-bar clearfix">

        <div class="container">

          <div class="row">

            <div class="col-md-7 col-xs-7 ">

              <p>HAYAT Un don , Un espoir </p>

            </div>

            <!--    <div class="col-md-4col-sm-12">
                            <div class="top-bar-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>-->

            <div class="col-md-3 col-xs-3">
              <button class="btn btn-info" data-toggle="modal" data-target="#loginModal">publier une annonce  </button>
            </div>



            <div class="col-md-2 col-xs-2">
              <button class="btn btn-info btn-fill" data-toggle="modal" data-target="#loginModal">se connecter </button>
            </div>


          </div>

        </div>
        <!--  end .container -->

      </div>
      <!--  end .top-bar  -->

      <section class="header-wrapper navgiation-wrapper">

        <div class="navbar navbar-default">
          <div class="container">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
              <a class="logo" href="index.html"><img alt="" src="images/hayat.png"></a>
            </div>

            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li class="drop">
                  <a href="index1.php" title="Home Layout 01">Accueil</a>
                </li>
                <li><a href="index-profil.html" title="About Us">Profil</a></li>



                <li>
                  <a href="index-annonces.html">Annonces</a>

                </li>

                <li>
                  <a href="index-Renseignements.html">Renseignements</a>
                </li>

                <li>
                  <a href="index-contact.html">Contact</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </section>

    </header>
    <!-- end main-header  -->

    <!-- recherche  -->
    <section class="cta-section-1">
      <div class="container">
        <div class="row">
          <form name="form" action ="index1.php" method="post">


          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

              <label for="exampleSelect">Group Sanguin</label>
              <select name="gr1" class="form-control" id="gr">
                <option>A+</option>
                <option>A-</option>
                <option>B+</option>
                <option>B-</option>
                <option>AB+</option>
                <option>AB-</option>
                <option>O+</option>
                <option>O-</option>
              </select>

          </div>
          <!--  end .col-md-8  -->
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

              <label  for="exampleSelect1">Ville</label>
              <select  name="ville1"class="form-control" id="ville">
                <option>Toute la Tunisie </option>
                <option>Ariana</option>
                <option>Beja</option>
                <option>Ben Arous</option>
                <option>Bizerte</option>
                <option>Gabes</option>
                <option>Gafsa</option>
                <option>Jendouba</option>
                <option>Kairouan</option>
                <option>Kasserine</option>
                <option>kébili</option>
                <option>La Manouba</option>
                <option>Le Kef</option>
                <option>Mahdia</option>
                <option>Medenine</option>
                <option>Monastir</option>
                <option>Nabeul</option>
                <option>Sfax</option>
                <option>Sidi Bouzid</option>
                <option>Siliana</option>
                <option>Sousse</option>
                <option>Tataouine</option>
                <option>Tozeur</option>
                <option>Tunis</option>
                <option>Zaghouan</option>

              </select>

          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <input type ="submit" class="btn btn-info btn-fill" value="chercher"  name="chercher" />
          </div>
          <!--  end .col-md-4  -->
        </form>
        </div>
        <!--  end .row  -->
      </div>
    </section>
    <?php
    if(isset($_POST["chercher"]))
    {
      $bdd=mysqli_connect("localhost","root","","hayat");

        $sql="Select * from donneur where ville='$_POST[ville1]' ";
        $res = mysqli_query($bdd,$sql);
      echo"<div class='container'> ";
          echo"  <div class='row'> ";

        echo"<table id='example' class='table'>";
        echo"  <thead>";
        echo"  <tr>";
        echo"  <th>NOM </th>";
        echo"  <th>PRENOM</th>";
        echo"  <th>GSM</th>";
        echo"  </tr>";
        echo"</thead>";
          while($donne=mysqli_fetch_assoc($res))
          {
            echo"<tbody>";
            echo "<tr>";
            echo "<td>".$donne['nom']."</td>";
            echo"<td>".$donne['prenom']."</td>";
            echo"<td>".$donne['gsm']."</td>";
            echo "</tr>";
            echo"  </tbody>";
      }
        echo"  </table>";
        echo"</div>";
        echo"</div>";
      }
      ?>
    <!--  HOME SLIDER BLOCK  -->

    <div class="slider-wrap">

      <div id="slider_1" class="owl-carousel owl-theme">

        <div class="item">
          <img src="images/home_1_slider_1.jpg" alt="img">
          <div class="slider-content text-center">
            <div class="container">

              <div class="slider-contents-info">
                <h3>Faites un don de sang, sauvez la vie!</h3>
                <h2>
                                    Votre don peut apporter
                                    <br>
                                    sourire aux autres face
                                </h2>
                <a href="#" class="btn btn-slider">Faire un don maintenant<i class="fa fa-long-arrow-right"></i></a>
              </div>
              <!-- end .slider-contents-info  -->
            </div>
            <!-- /.slider-content -->
          </div>
        </div>

        <div class="item">
          <img src="images/home_1_slider_1.jpg" alt="img">
          <div class="slider-content text-center">
            <div class="container">
              <div class="slider-contents-info">
                <h3>Donate blood,save life !</h3>
                <h2>
                                    Donne ton sang et
                                    <br>
                                    inspire aux autres
                                </h2>
                <a href="#" class="btn btn-slider">Rejoignez-nous <i class="fa fa-long-arrow-right"></i></a>
              </div>
              <!-- /.slider-content -->
            </div>
            <!-- end .slider-contents-info  -->
          </div>

        </div>
      </div>

    </div>

    <!-- HIGHLIGHT CTA  -->



    <!--  SECTION DONATION PROCESS -->

    <section class="section-content-block section-process">

      <div class="container-fluid">

        <div class="row">

          <div class="col-md-12 col-sm-12 text-center">
            <h2 class="section-heading"><span>Annonces </span> Urgentes</h2>
            <p class="section-subheading">Ces annonces sont triées par ordre le plus urgent</p>
          </div>
          <!-- end .col-sm-10  -->

        </div>
        <!--  end .row  -->

        <div class="row wow fadeInUp">

          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

            <div class="process-layout">

              <figure class="process-img">

                <img src="images/urgent.jpg" alt="process" />
                <div class="step">
                  <h3>1</h3>
                </div>
              </figure>
              <!-- end .process-img  -->

              <article class="process-info">
                <h2>Anonyme : </h2>
                <p>Prenom : </p>
                <p>nom : </p>
                <p>ville : </p>
                <p>group sanguin : </p>

              </article>

            </div>
            <!--  end .process-layout -->

          </div>
          <!--  end .col-lg-3 -->



          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

            <div class="process-layout">

              <figure class="process-img">
                <img src="images/urgent.jpg" alt="process" />
                <div class="step">
                  <h3>2</h3>
                </div>
              </figure>
              <!-- end .cau<h5 class="step">1</h5>se-img  -->

              <article class="process-info">
                <h2>Anonyme : </h2>
                <p>Prenom : </p>
                <p>nom : </p>
                <p>ville : </p>
                <p>group sanguin : </p>
              </article>

            </div>
            <!--  end .process-layout -->

          </div>
          <!--  end .col-lg-3 -->


          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

            <div class="process-layout">

              <figure class="process-img">
                <img src="images/urgent.jpg" alt="process" />
                <div class="step">
                  <h3>3</h3>
                </div>
              </figure>
              <!-- end .process-img  -->

              <article class="process-info">
                <h2>Anonyme : </h2>
                <p>Prenom : </p>
                <p>nom : </p>
                <p>ville : </p>
                <p>group sanguin : </p>
              </article>

            </div>
            <!--  end .process-layout -->

          </div>
          <!--  end .col-lg-3 -->



          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

            <div class="process-layout">

              <figure class="process-img">
                <img src="images/urgent.jpg" alt="process" />
                <div class="step">
                  <h3>4</h3>
                </div>
              </figure>
              <!-- end .process-img  -->

              <article class="process-info">
                <h2>Anonyme : </h2>
                <p>Prenom : </p>
                <p>nom : </p>
                <p>ville : </p>
                <p>group sanguin : </p>

            </div>
            <!--  end .process-layout -->

          </div>
          <!--  end .col-lg-3 -->

        </div>
        <!--  end .row -->

      </div>
      <!--  end .container  -->

    </section>
    <!--  end .section-process -->

    <!--  SECTION COUNTER   -->

    <section class="section-counter" data-stellar-background-ratio="0.3">

      <div class="container wow fadeInUp">

        <div class="row">

          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

            <div class="counter-block-1 text-center">

              <i class="fa fa-heartbeat icon"></i>
              <span class="counter">2578</span>
              <h4>Personnes Sauvées</h4>

            </div>

          </div>
          <!--  end .col-lg-3  -->

          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

            <div class="counter-block-1 text-center">

              <i class="fa fa-stethoscope icon"></i>
              <span class="counter">3235</span>
              <h4>Donateurs</h4>

            </div>

          </div>
          <!--  end .col-lg-3  -->
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

            <div class="counter-block-1 text-center">

              <i class="fa fa-building icon"></i>
              <span class="counter">1364</span>
              <h4>Cas Urgents</h4>

            </div>

          </div>

          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

            <div class="counter-block-1 text-center">

              <i class="fa fa-users icon"></i>
              <span class="counter">3568</span>
              <h4>Nombre utilisateurs</h4>

            </div>

          </div>
          <!--  end .col-lg-3  -->


          <!--  end .col-lg-3  -->


        </div>
        <!-- end row  -->

      </div>
      <!--  end .container  -->

    </section>
    <!--  end .section-counter -->

    <!--  SECTION APPOINTMENT   -->

    <section class="section-appointment">

      <div class="container wow fadeInUp">

        <div class="row">

          <div class="col-lg-6 col-md-6 hidden-sm hidden-xs">

            <figure class="appointment-img">
              <img src="images/appointment.jpg" alt="appointment image">
            </figure>
          </div>
          <!--  end col-lg-6  -->


          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

            <div class="appointment-form-wrapper text-center clearfix">
              <h3 class="join-heading">Suggesttion</h3>
              <form class="appoinment-form">
                <div class="form-group col-md-6">
                  <input id="your_name" class="form-control" placeholder="Name" type="text">
                </div>
                <div class="form-group col-md-6">
                  <input id="your_email" class="form-control" placeholder="Email" type="email">
                </div>
                <div class="form-group col-md-6">
                  <input id="your_phone" class="form-control" placeholder="Phone" type="text">
                </div>
                <div class="form-group col-md-6">
                  <div class="select-style">
                    <select class="form-control" name="your_center">
                                            <option>Donation Center</option>
                                            <option>Los Angles</option>
                                            <option>California</option>
                                        </select>
                  </div>
                </div>

                <div class="form-group col-md-6">
                  <input id="your_date" class="form-control" placeholder="Date" type="text">
                </div>


                <div class="form-group col-md-6">
                  <input id="your_time" class="form-control" placeholder="Time" type="text">
                </div>

                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                  <textarea id="textarea_message" class="form-control" rows="4" placeholder="Your Message..."></textarea>
                </div>

                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                  <button id="btn_submit" class="btn-submit" type="submit">ENVOYER</button>
                </div>

              </form>

            </div>
            <!-- end .appointment-form-wrapper  -->

          </div>
          <!--  end .col-lg-6 -->

        </div>
        <!--  end .row  -->

      </div>
      <!--  end .container -->

    </section>
    <!--  end .appointment-section  -->

    <!-- SECTION TESTIMONIAL   -->

    <section class="section-content-block section-client-testimonial">

      <div class="container">

        <div class="testimonial-container text-center">

          <div class="col-md-10 col-md-offset-1 col-sm-12">

            <div class="testimony-layout-1">
              <h3 class="people-quote">Les avis de nos utilisateurs </h3>
              <p class="testimony-text">
                <i class="fa fa-quote-left" aria-hidden="true"></i> Je donne fièrement du sang sur une base régulière, car cela donne aux autres quelque chose dont ils ont désespérément besoin pour survivre. Le simple fait de savoir que je peux faire une différence dans la vie de quelqu'un d'autre me fait sentir
                 génial!
                <i class="fa fa-quote-right" aria-hidden="true"></i>
              </p>

              <h6>Brandon Munson</h6>
              <span></span>

            </div>
            <!-- end .testimony-layout-1  -->

          </div>
          <!--  end col-md-10  -->

          <div class="col-md-10 col-md-offset-1 col-sm-12">

            <div class="testimony-layout-1">
              <h3 class="people-quote">Les avis de nos utilisateurs</h3>
              <p class="testimony-text">
                <i class="fa fa-quote-left" aria-hidden="true"></i> Je suis un donateur depuis le lycée. Bien que je n'ai pas été un donneur chaque année, je veux toujours donner à la race humaine. J'aime aider les autres! De plus cela donne une vraie paix dans mon esprit.
                <i class="fa fa-quote-right" aria-hidden="true"></i>
              </p>

              <h6>Brandon Munson</h6>
              <span></span>

            </div>
            <!-- end .testimony-layout-1  -->

          </div>
          <!--  end col-md-10  -->

          <div class="col-md-10 col-md-offset-1 col-sm-12">

            <div class="testimony-layout-1">
              <h3 class="people-quote">Les avis de nos utilisateurs </h3>
              <p class="testimony-text">
                <i class="fa fa-quote-left" aria-hidden="true"></i> J'aimerais pouvoir vous dire à quel point je suis reconnaissant pour votre acte altruiste. Vous m'avez donné une nouvelle vie. Nous pouvons être des collègues ou des camarades de classe ou juste deux dans la même communauté. Je suis très reconnaissant à toi.
                <i class="fa fa-quote-right" aria-hidden="true"></i>
              </p>

              <h6>Brandon Munson</h6>
              <span></span>

            </div>
            <!-- end .testimony-layout-1  -->

          </div>
          <!--  end col-md-10  -->

        </div>
        <!--  end .row  -->

      </div>
      <!-- end .container  -->

    </section>
    <!--  end .section-client-testimonial -->

    <!-- SECTION TEAM  -->
    <!--  end .section-our-team -->

    <!-- SECTION CTA -->

    <section class="section-content-block cta-section-3">
      <div class="container wow fadeIn animated">
        <div class="row">
          <div class="col-md-12">
            <div class="cta-content text-center">
              <h2>JOIGNEZ-NOUS ET SAUVEZ LA VIE</h2>
              <a class="btn-cta-3" href="#">Devenir un volonataire</a>
            </div>
          </div>
          <!-- end .col-md-12 -->
        </div>
        <!-- end .row  -->
      </div>
      <!-- end .container  -->
    </section>
    <!-- end cta-section  -->

    <!--  SECTION CAMPAIGNS   -->


    <!--  SECTION GALLERY  -->

    <section class="section-content-block no-bottom-padding section-secondary-bg">

      <div class="container">

        <div class="row section-heading-wrapper">

          <div class="col-md-12 col-sm-12 text-center">
            <h2 class="section-heading">Galerie</h2>
            <p class="section-subheading">Photos de campagnes de différentes régions de Tunisie et notre prestigieux travail</p>
          </div>
          <!-- end .col-sm-10  -->


        </div>
        <!-- end .row  -->

      </div>
      <!--  end .container -->

      <div class="container-fluid wow fadeInUp">

        <div class="row no-padding-gallery">

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

            <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_1.jpg">

              <figure class="gallery-img">

                <img src="images/gallery_1.jpg" alt="gallery image" />

              </figure>
              <!-- end .gallery-img  -->

            </a>

          </div>
          <!-- end .col-sm-3  -->

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

            <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_2.jpg">

              <figure class="gallery-img">

                <img src="images/gallery_2.jpg" alt="gallery image" />

              </figure>
              <!-- end .gallery-img  -->

            </a>
            <!-- end .gallery-light-box  -->

          </div>
          <!-- end .col-sm-3  -->

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

            <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_3.jpg">

              <figure class="gallery-img">

                <img src="images/gallery_3.jpg" alt="gallery image" />

              </figure>
              <!-- end .gallery-img  -->

            </a>

          </div>
          <!-- end .col-sm-3  -->

        </div>
        <!-- end .row  -->

        <div class="row no-padding-gallery">

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

            <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_4.jpg">

              <figure class="gallery-img">

                <img src="images/gallery_4.jpg" alt="gallery image" />

              </figure>
              <!-- end .gallery-img  -->

            </a>
            <!-- end .gallery-light-box  -->

          </div>
          <!-- end .col-sm-3  -->

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

            <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_5.jpg">

              <figure class="gallery-img">

                <img src="images/gallery_5.jpg" alt="gallery image" />

              </figure>
              <!-- end .gallery-img  -->

            </a>

          </div>
          <!-- end .col-sm-3  -->

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

            <a class="gallery-light-box" data-gall="myGallery" href="images/gallery_6.jpg">

              <figure class="gallery-img">

                <img src="images/gallery_6.jpg" alt="gallery image" />

              </figure>
              <!-- end .gallery-img  -->

            </a>
            <!-- end .gallery-light-box  -->

          </div>
          <!-- end .col-sm-3  -->

        </div>
        <!-- end .row  -->
		        <div class="row no-padding-gallery">

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

            <a class="gallery-light-box" data-gall="myGallery" href="images/1.jpg">

              <figure class="gallery-img">

                <img src="images/1.jpg" alt="gallery image" />

              </figure>
              <!-- end .gallery-img  -->

            </a>
            <!-- end .gallery-light-box  -->

          </div>
          <!-- end .col-sm-3  -->

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

            <a class="gallery-light-box" data-gall="myGallery" href="images/2.jpg">

              <figure class="gallery-img">

                <img src="images/2.jpg" alt="gallery image" />

              </figure>
              <!-- end .gallery-img  -->

            </a>

          </div>
          <!-- end .col-sm-3  -->

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 gallery-container">

            <a class="gallery-light-box" data-gall="myGallery" href="images/3.jpg">

              <figure class="gallery-img">

                <img src="images/3.jpg" alt="gallery image" />

              </figure>
              <!-- end .gallery-img  -->

            </a>
            <!-- end .gallery-light-box  -->

          </div>
          <!-- end .col-sm-3  -->

        </div>

      </div>
      <!-- end .container-fluid  -->

    </section>
    <!-- end .section-content-block  -->

    <!-- SECTION LOGO   -->


    <!-- SECTION BLOG   -->



    <!-- START FOOTER  -->

    <footer>

      <section class="footer-widget-area footer-widget-area-bg">

        <div class="container">

          <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

              <div class="about-footer">

                <div class="row">

                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <img src="images/hayat.png" alt="" />
                  </div>
                  <!--  end col-lg-3-->

                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <p>
                      Nous travaillons  avec une vision prestigieuse pour aider les patients à fournir du sang. Nous travaillons partout dans le pays, en organisant une campagne de dons de sang pour sensibiliser les gens au don de sang.
                    </p>
                  </div>
                  <!--  end .col-lg-9  -->

                </div>
                <!--  end .row -->

              </div>
              <!--  end .about-footer  -->

            </div>
            <!--  end .col-md-12  -->

          </div>
          <!--  end .row  -->

          <div class="row">

            <div class="col-md-6 col-sm-12 col-xs-12">

              <div class="footer-widget">
                <div class="sidebar-widget-wrapper">
                  <div class="footer-widget-header clearfix">
                    <h3>Abonnez-vous</h3>
                  </div>
                  <p>Inscrivez-vous à la newsletter régulière et restez au courant de nos dernières nouvelles.</p>
                  <div class="footer-subscription">
                    <p>
                      <input id="mc4wp_email" class="form-control" required="" placeholder="Entrer ton mail" name="EMAIL" type="email">
                    </p>
                    <p>
                      <input class="btn btn-default" value="Abonnez vous" type="submit">
                    </p>
                  </div>
                </div>
              </div>

            </div>
            <!--  end .col-md-4 col-sm-12 -->

            <div class="col-md-6 col-sm-12 col-xs-12">

              <div class="footer-widget">

                <div class="sidebar-widget-wrapper">

                  <div class="footer-widget-header clearfix">
                    <h3>Contactez nous</h3>

                  </div>
                  <!--  end .footer-widget-header -->


                  <div class="textwidget">

                    <i class="fa fa-envelope-o fa-contact"></i>
                    <p><a href="#">contact@hayat.cf</a></p>

                    <i class="fa fa-location-arrow fa-contact"></i>
                    <p> Sfax,TUNISIE</p>

                    <i class="fa fa-phone fa-contact"></i>
                    <p>+216 74 123 456</p>

                  </div>

                </div>
                <!-- end .footer-widget-wrapper  -->

              </div>
              <!--  end .footer-widget  -->

            </div>
            <!--  end .col-md-4 col-sm-12 -->


            <!--  end .col-md-4 col-sm-12 -->

          </div>
          <!-- end row  -->

        </div>
        <!-- end .container  -->

      </section>
      <!--  end .footer-widget-area  -->

      <!--FOOTER CONTENT  -->

      <section class="footer-contents">

        <div class="container">

          <div class="row clearfix">

            <div class="col-md-6 col-sm-12">
              <p class="copyright-text"> Copyright © 2017, HAYAT </p>

            </div>
            <!-- end .col-sm-6  -->

            <div class="col-md-6 col-sm-12 text-right">
              <div class="footer-nav">
                <nav>
                  <ul>
                    <li>
                      <a href="index-2.html">Accueil</a>
                    </li>
                    <li>
                      <a href="#">profil</a>
                    </li>
                    <li>
                      <a href="donate.html">Annonces</a>
                    </li>
                    <li>
                      <a href="blog-with-sidebar.html">Renseignements</a>
                    </li>
                    <li>
                      <a href="contact.html">Contact</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!--  end .footer-nav  -->
            </div>
            <!--  end .col-lg-6  -->

          </div>
          <!-- end .row  -->

        </div>
        <!--  end .container  -->

      </section>
      <!--  end .footer-content  -->

    </footer>

    <!-- END FOOTER  -->

    <!-- Back To Top Button  -->

    <a id="backTop">Back To Top</a>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ahmed.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.backTop.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/waypoints-sticky.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="js/custom-scripts.js"></script>
  </body>


  <!-- Mirrored from projects.bluewindlab.net/tf/2017/blood_donation/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2017 00:39:11 GMT -->

</html>
