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

  <div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area">
        <div class="container">
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
          <a class="navbar-brand" href="#home">
                    <img src="img/logoo.png" alt="" width="150" height="40" />
                </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="pelajar3.php">Pelajar</a></li>
            <li><a href="kelas3.php">Kelas</a></li>
            <li><a href="pengajar3.php">Pengajar</a></li>
            <li><a href="index.php">Close</a></li>
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
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                <h4 class="h-light">Masukkan Kelas</h4>
              </div>
              <div class="well well-trans">
                <div class="wow fadeInRight" data-wow-delay="0.1s">

                  <!-- <ul class="lead-list"> -->
                    <?php

                    include("database.php");
                    $sql = mysqli_query($db, "SELECT id, nama_pelajaran, deskripsi, tentang  FROM pelajaran");
                    $datas = array();
                    while ($kelas = mysqli_fetch_array($sql)){
                      $datas[] = $kelas;
                    }
                    ?>

                    <table class="table table-dark">
                      <tr>
                        <th scope="col">No</th>
                          <th scope="col">Nama Pelajaran</th>
                          <th scope="col">Deskripsi</th>
                          <th scope="col">Tentang</th>
                      </tr>
                      <!-- fungsi untuk menambah row -->
                      <?php if (mysqli_num_rows($sql)>0) {?>
                      <?php


                            foreach ($datas as $data) {

                        ?>
                      <tr>
                          <td scope="row"><?php echo $data ["id"];?></td>
                          <td scope="row"><?php echo $data ["nama_pelajaran"];?></td>
                          <td scope="row"><?php echo $data ["deskripsi"];?></td>
                          <td scope="row"><?php echo $data ["tentang"];?></td>
                          <td scope="row"><button type="button" class="btn btn-light" data-toggle="modal" data-target="#modaledit<?php echo $data['id']; ?>"><span>Edit</span></button></td>
                          <td scope="row"><a class="btn btn-skin" href="hapuskelas.php?id=<?php echo $data["id"]; ?>"><span>Hapus</span></a></td>
                      </tr>

                    <?php }} ?>
                  </table>

                  <p class="text-center wow bounceIn" data-wow-delay="0.4s">
                  <a href="tambahkelas.php" class="btn btn-skin btn-lg">Tambah Kelas <i class="fa fa-angle-right"></i></a>
                </div>
              </div>


            </div>
            <div class="col-lg-6">
              <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                <br><br><br><br><br>
                <img src="img/dummy/grup.png" class="img-responsive" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>

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

                    Designed by <a href="https://bootstrapmade.com/">hehehe</a>
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

  <div class="modal fade" id="modaledit<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
        <form action="editpelajaran.php" method="POST">

          <div class="form-group">
              <label for="exampleInputPassword1">Nama Pelajaran</label>
              <input type="text" class="form-control" id="exampleInputNamapelajaran" placeholder="nama_pelajaran"
              name="nama_pelajaran" value="<?php echo $data ["nama_pelajaran"];?>">
          </div>
  <input type="hidden" name="id" value="<?php echo $data ["id"];?>">
    <div class="form-group">
        <label for="exampleInputPassword1">Deskripsi</label>
        <input type="text" class="form-control" id="exampleInputDeskripsi" placeholder="deskripsi"
        name="deskripsi" value="<?php echo $data ["deskripsi"];?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Tentang</label>
        <input type="text" class="form-control" id="exampleInputTentang" placeholder="tentang"
        name="tentang" value="<?php echo $data ["tentang"];?>">
    </div>

    <div class="form-group">
    <input type="hidden" class="form-control"
    id="exampleInputId" name="id"
    value="<?php echo $data ["id"];?>">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Edit</button>
          </div>


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
