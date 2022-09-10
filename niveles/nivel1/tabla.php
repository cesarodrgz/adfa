<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Tabla Nivel 1</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="../../css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="../../css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="../../css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="../../images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="../../css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="../../images/loading.gif" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- header -->
   <header>
      <!-- header inner -->
      <div class="head_top">
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="../../index.php"><img src="../../images/adfa.webp" alt="#" style="width: 100px;" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--START NAV BAR--->
                  <?php
                  include "../../secciones/navBar.php";
                  ?>
                  <!--END NAV BAR-->
               </div>
            </div>
         </div>
         <!-- end header inner -->
         <!-- end header -->
         <!-- banner -->
         <section class="banner_main">
            <div class="container">
               <div class="row d_flex">
                  <div class=" col-xl-8 col-lg-8 col-md-8 col-12-9">
                     <div class="text-bg">
                        <h1>Tabla de posiciones<br>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-12-3">
                     <div class="text-img">
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </header>
   <!-- end banner -->
   <!-- blog_main -->
   <div class="blog_main">
      <div class="container">
         <!-- fist section -->
         <div class="row">
            <div class="col-md-12">
               <div class="row">
                  <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                     <div class="our_text_box">
                        <h3 class="awesome pa_wi">Clasificación</h3>

                        <table class="table table-light table-responsive">
                           <thead>
                              <th>Equipo</th>
                              <th>PJ</th>
                              <th>PG</th>
                              <th>PE</th>
                              <th>PP</th>
                              <th>GF</th>
                              <th>GC</th>
                              <th>+/-</th>
                              <th>PTS</th>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>Golazo FC</td>
                                 <td>1</td>
                                 <td>6</td>
                                 <td>2</td>
                                 <td>3</td>
                                 <td>4</td>
                                 <td>5</td>
                                 <td>6</td>
                                 <td>7</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end fist section -->
      </div>
   </div>
   <!-- end blog_main -->

   <!--  footer -->
   <?php
   include "../../secciones/footer.php";
   ?>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="../../js/jquery.min.js"></script>
   <script src="../../js/popper.min.js"></script>
   <script src="../../js/bootstrap.bundle.min.js"></script>
   <script src="../../js/jquery-3.0.0.min.js"></script>

   <!-- sidebar -->
   <script src="../../js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="../../js/custom.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>