<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>STUDY INFORMATION TECHNOLOGY</title>

  <!-- css -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="css/nivo-lightbox.css" rel="stylesheet" />
  <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="css/animate.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">

  <!-- boxed bg -->
  <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
<?php
include('database.php');
?>


  <div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area">

        <div class="container">

              <!-- <form class="navbar-form navbar-right">


                  <div class="btn-group">

                  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?=$_SESSION['nama'];?>  <span class="caret">  </span>
                  </button>
                  <ul class="dropdown-menu">
                  <li role="presentation" class="active"><a href="index.php" style="color : white" onclick="return confirm('Yakin untuk keluar?');">  <span class="glyphicon glyphicon-log-out" aria-hidden="true">Keluar</span> </a></li>
                  </form> -->
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <p class="bold text-left">STUDY INFORMATION TECHNOLOGY</p>
            </div>
            <div class="col-sm-6 col-md-6">
              <p class="bold text-right">EDUCATION</p>
            </div>
          </div>
        </div>
      </div>
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
          <a class="navbar-brand" href="level1.php">
                    <img src="img/logoo.png" alt="" width="150" height="40" />
                </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">

          <ul class="nav navbar-nav">
            <li class="active"><a href="pelajar1.php">Pelajar</a></li>
            <li><a href="#kelas">Kelas</a></li>
            <li><a href="#pengajar">Pengajar</a></li>
            <li><a href="index.php">Close</a></li>
            <li>


          </ul>
          </div
      <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    <!-- Section: home -->
    <section id="home" class="home">
      <div class="home-content">
      <div class="container">
          <div class="row">
            <div class="col-lg-12">

              <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                <br><br><br><br><br><br><br><br><br><br>
                <h2 class="h-ultra">STUDY INFORMATION TECHNOLOGY</h2>

                <form class="navbar-form navbar-right">


                    <div class="btn-group">

                    <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?=$_SESSION['nama'];?>  <span class="caret">  </span>
                    </button>
                    <!-- <ul class="dropdown-menu">
                    <li role="presentation" class="active"><a href="index.php" style="color : white" onclick="return confirm('Yakin untuk keluar?');">  <span class="glyphicon glyphicon-log-out" aria-hidden="true">Keluar</span> </a></li> -->
                  </form>


              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                <h4 class="h-light">Solusi belajar nyaman dan menyenangkan</h4>
              </div>
              <div class="well well-trans">
                <div class="wow fadeInRight" data-wow-delay="0.1s">

                  <ul class="lead-list">
                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Belajar secara Online</strong><br />Materi online dan video online dengan mudah ditonton</span></li>
                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Pengajar menarik</strong><br />Pengajar lulus seleksi, terjamin ilmunya</span></li>
                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Ujian menarik jadi tambah pintar</strong><br />Dapatkan ujian sebagai hasil anda memahami ilmu</span></li>
                  </ul>
                  <p class="text-right wow bounceIn" data-wow-delay="0.4s">
                    <a href="#kelas" class="btn btn-skin btn-lg">Masuk Kelas <i class="fa fa-angle-right"></i></a>
                  </p>
                </div>
              </div>


            </div>
            <div class="col-lg-6">
              <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                <!-- <img src="img/dummy/grup.png" class="img-responsive" alt=""/> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- /Section: pelajar -->

    <!-- Section: boxes -->
    <section id="boxes" class="home-section paddingtop-80">

      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">

                <i class="fa fa-check fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Kelas Online</h4>
                <p>
                  Nikmasti pembelajaran online secara menarik, nyaman, dan mudah dipahami.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">

                <i class="fa fa-check fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Dengar dan Tonton</h4>
                <p>
                  Dengan mudah anda dapat menonton materi dengan nyaman
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">
                <i class="fa fa-check-fa fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Akses dengan mudah</h4>
                <p>
                  Dengan mudah anda dapat mengakses sesuai dengan materinya
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>

    </section>
    <!-- /Section: boxes -->


    <section id="callaction" class="home-section paddingtop-40">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="callaction bg-gray">
              <div class="row">
                <div class="col-md-8">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text">
                      <h3>Apa yang ingin anda pelajari ?</h3>

                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
      $list = [];
      $sql = "select * from pelajaran order by id desc limit 0,6";
      $result = $db->query($sql);
      if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_assoc($result)){
          $list[] = array(
            'id' => $row['id'],
            'nama_pelajaran' => $row['nama_pelajaran'],
            'deskripsi' => $row['deskripsi']
          );
        }
      }
     ?>

    <!-- Section: kelass -->
    <section id="kelas" class="home-section nopadding paddingtop-60">

      <div class="container">

        <div class="row">
          <div class="col-sm-6 col-md-6">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <img src="img/dummy/di1.jpg" class="img-responsive" alt="" />
            </div>
          </div>
          <div class="col-sm-3 col-md-3">

            <?php foreach ($list as $row){
              ?>
            <div class="wow fadeInRight" data-wow-delay="0.2s">
              <div class="kelas-box">
                <div class="kelas-icon">
                  <span class="fa fa-book fa-3x"></span>
                </div>
                <div class="kelas-desc">
                  <a href="tampilankelas.php?id=<?=$row['id']?>"><h5 class="h-light"><?=$row['nama_pelajaran']?></h5>
                  </a>
                  <p><?=$row['deskripsi']?> </p>
                </div>
              </div>
            </div>
            <?php
}
             ?>

          </div>

        </div>
      </div>
    </section>
    <!-- /Section: kelass -->


    <!-- Section: team -->
    <section id="pengajar" class="home-section bg-gray paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h2 class="h-bold">Pengajar</h2>
                <p>Berikut adalah pengajar yang terpilih</p>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div id="filters-container" class="cbp-l-filters-alignLeft">
              <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All (
                <div class="cbp-filter-counter"></div>)</div>
              <div data-filter=".website" class="cbp-filter-item">Website (
                <div class="cbp-filter-counter"></div>)</div>
              <div data-filter=".design" class="cbp-filter-item">Design (
                <div class="cbp-filter-counter"></div>)</div>
              <div data-filter=".networking" class="cbp-filter-item">Networking (
                <div class="cbp-filter-counter"></div>)</div>
            </div>

            <div id="grid-container" class="cbp-l-grid-team">
              <ul>
                <li class="cbp-item design">
                  <a href="pengajar/member1.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="img/team/d1.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="pengajar/member1.html" class="cbp-singlePage cbp-l-grid-team-name">Ahmad Dahlan</a>
                  <div class="cbp-l-grid-team-position">design</div>
                </li>
                <li class="cbp-item website">
                  <a href="pengajar/member2.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="img/team/d2.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="pengajar/member2.html" class="cbp-singlePage cbp-l-grid-team-name">Sarah Amberlyn</a>
                  <div class="cbp-l-grid-team-position">website</div>
                </li>
                <li class="cbp-item website">
                  <a href="pengajar/member3.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="img/team/d3.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="pengajar/member3.html" class="cbp-singlePage cbp-l-grid-team-name">Alzena Dave</a>
                  <div class="cbp-l-grid-team-position">website</div>
                </li>
                <li class="cbp-item networking">
                  <a href="pengajar/member4.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
                      <img src="img/team/d4.jpg" alt="" width="100%">
                    </div>
                    <div class="cbp-caption-activeWrap">
                      <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                          <div class="cbp-l-caption-text">VIEW PROFILE</div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="pengajar/member4.html" class="cbp-singlePage cbp-l-grid-team-name">Adam Malik</a>
                  <div class="cbp-l-grid-team-position">networking</div>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>

    </section>

    <footer>

      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>About Study Information Technology</h5>
                <p>
                  Platform yang menghubungkan antara pelajar
                  dan pengajar yang tepat untuk membantu semua
                  kalangan mempelajari keahlian dan pengetahuan
                  teknologi informasi.
                </p>
              </div>
            </div>

          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Study Information Technology Center</h5>
                <p>
                  Info lebih lanjut dapat hubungi
                </p>
                <ul>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Monday - Saturday, 8am to 10pm
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> +62 858 0612 3682
                  </li>
                  <li>
                    <span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> studyinftech@education.com
                  </li>

                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Our location</h5>
                <p>Baker Street 21B, Landon, Inggris </p>

              </div>
            </div>
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="widget">
                <h5>Follow us</h5>
                <ul class="company-social">
                  <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                  <li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sub-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInLeft" data-wow-delay="0.1s">
                <div class="text-left">
                  <p>&copy;Copyright - SIT Theme. All rights reserved.</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="text-right">
                  <div class="credits">

                    <a href="https://bootstrapmade.com/"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

  <!-- Core JavaScript Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/stellar.js"></script>
  <script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/nivo-lightbox.min.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>
