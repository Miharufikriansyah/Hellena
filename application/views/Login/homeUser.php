<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/css/style.css'; ?>">
    <!-- Jquery plugin -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
      <!-- Webtitle -->
    <title>Hellena</title>
</head>
<body style="background-image:url(<?php echo base_url() . 'assets/Images/Maskgroup.png'; ?>">
  <!-- Header -->
    <header class="header">
        <!-- logo -->
        <div class="logo">
          <a href=""><img src="<?php echo base_url() . 'assets/Images/logo1.png'; ?>" alt="Logo"></a>
        </div>
        <!-- Logo end -->

        <!-- Navbar -->
        <nav class="navbar">
            <a href="" id="current">Home</a>
            <a href="<?php echo site_url().'Hellena/medicineListLog'?>">Medicine</a>
            <a href="<?php echo site_url().'Hellena/doctorListLog'?>">Doctors</a>
            <a href="<?php echo site_url().'Hellena/orderList'?>">Order</a>
        </nav>
        <!-- Navbar end -->

        <!-- profile button -->
        <div class="signin">
            <a href="<?php echo site_url().'Hellena/infoPat'?>"><button>Profile</button></a>
        </div>
        <!-- profile button end -->
    </header>
        <!-- header end -->

    <!-- Main   -->
    <main>
        <!-- Banner -->
        <div class="banner">
            <div class="headTitle">
                <h6>GET BETTER ADVICE</h6>
                <h1>Let's Find Best Doctors Around The World</h1>
                <p>We develop an app to allow you to improve your health better and get a life you want to live</p>
                <button class="learn" id="opener">Learn More</button>
                <div id="dialog" title="Hellena" class="moretitle">
                  <p class="more">Hellena is a website for people all around the worlds to buy the herbs from other countries easily and trusted</p>
                  <p class="more">In this website you can do consultation and buy herbs from all around the world</p>
                </div>
            </div>
        </div>
        <br><br><br><br><br>
        <!-- Banner end -->

        <!-- Section step -->
        <div class="steps">
            <div class="steptitle">
                <h6>3 QUIICK STEPS</h6>
                <h3>Claim Your Better Health</h3>
            </div>
            <br><br>
            <!-- Steps content -->
            <div class="container text-center justify-content-center">
                <div class="row">
                  <div class="col-md">
                    <div class="card" style="width: 18rem; border: none;">
                        <img src="<?php echo base_url() . 'assets/Images/Mini 4.png'; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title" style="color: #211B3D;">1.Get The Right Doctor</h5>
                          <p class="card-text" style="color: #9B9B9B;">Choose the best doctor from around the world.</p>
                        </div>
                      </div>
                  </div>
                  <div class="col-md">
                    <div class="card" style="width: 18rem; border: none;">
                        <img src="<?php echo base_url() . 'assets/Images/Mini 5.png'; ?>" class="card-img-top" alt="..." style="height: 288px; width: 350px;">
                        <div class="card-body">
                          <h5 class="card-title" style="color: #211B3D;">2.Follow The Insight</h5>
                          <p class="card-text" style="color: #9B9B9B;">Doctor will give you the good direction that matters to your body.</p>
                        </div>
                      </div>
                  </div>
                  <div class="col-md">
                    <div class="card" style="width: 18rem; border: none;">
                        <img src="<?php echo base_url() . 'assets/Images/Mini 6.png'; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title" style="color: #211B3D;">3.Become Healthier</h5>
                          <p class="card-text" style="color: #9B9B9B;">Start doing what you love again and enjoy.</p>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <!-- Steps content end -->
        </div>
        <br><br>
        <!-- Section steps end -->

        <!-- Section disease -->
        <div class="doctors">
            <div class="doctorstitle">
                <h6>Secure Your Health</h6>
                <h3>Don't Catch These Disease</h3>
            </div>
            <br><br>
            <!-- Disesase content -->
            <div class="container text-center">
                <div class="row row-cols-4 gx-lg-5">
                  <div class="col">
                    <div class="card" style="width: 18rem; border: none;padding: 10px;">
                        <img src="<?php echo base_url() . 'assets/Images/Rectangle 62.png'; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Covid-19</h5>
                          <p class="card-text">180 Doctors Available.</p>
                        </div>
                      </div>
                  </div>
                  <div class="col">
                    <div class="card" style="width: 18rem; border: none; padding: 10px;">
                        <img src="<?php echo base_url() . 'assets/Images/Rectangle 62 (1).png'; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Flu</h5>
                          <p class="card-text">180 Doctors Available.</p>
                        </div>
                      </div>
                  </div>
                  <div class="col">
                    <div class="card" style="width: 18rem; border: none; padding: 10px;">
                        <img src="<?php echo base_url() . 'assets/Images/Headache.png'; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Headache</h5>
                          <p class="card-text">Many Doctors Available.</p>
                        </div>
                      </div>
                  </div>
                  <div class="col">
                    <div class="card" style="width: 18rem; border: none; padding: 10px;">
                        <img src="<?php echo base_url() . 'assets/Images/Obesity.png'; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Obesity</h5>
                          <p class="card-text">Many Doctors Available.</p>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <!-- Disesase Content -->
        </div>
        <br><br>
        <!-- Section disease end -->

        <!-- Footer -->
        <div class="footer">
            <div class="footimg">
                <img src="<?php echo base_url() . 'assets/Images/ILLUSTRATION 3.png'; ?>" alt="">
            </div>
            <div class="foot">
                <div class="footitle">
                    <h6>Secure your health</h6>
                    <p>We develop an app to allow you to improve your health better in the great way</p>
                    <h3>Download Our App</h3>
                    <div class="appstore">
                        <img src="<?php echo base_url() . 'assets/Images/App Store.png'; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer end -->
    </main>
    <!-- main end -->

    <!-- jquery -->
    <script>
      // Jquery plugin dialog, menampilkan dialog detail setelah button learn more di click
        $( function() {
         $( "#dialog" ).dialog({
          autoOpen: false,
          show: {
          effect: "blind",
          duration: 1000,
        },
        hide: {
        effect: "blind",
        duration: 1000
        }
      });
 
      $( "#opener" ).on( "click", function() {
        $( "#dialog" ).dialog( "open");
      });
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>