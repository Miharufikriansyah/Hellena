<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/css/doctor.css'; ?>">
    <!-- webtitle -->
    <title>Doctors</title>
</head>
<body style="background-image:url(<?php echo base_url() . 'assets/Images/Vector163.png'; ?>">
    <!-- Header -->
    <header class="header">
      <!-- logo -->
        <div class="logo">
          <a href="<?php echo base_url();?>"><img src="<?php echo base_url() . 'assets/Images/logo1.png'; ?>" alt="Logo"></a>
        </div>
        <!-- Logo end -->

        <!-- Navbar -->
        <nav class="navbar">
            <a href="<?php echo base_url();?>">Home</a>
            <a href="<?php echo site_url();?>Hellena/medicineList">Medicine</a>
            <a href="" id="current">Doctors</a>
            <a href="<?php echo site_url();?>Hellena/notregistered">Order</a>
        </nav>
        <!-- Navbar end -->

        <!-- Sign in button -->
        <div class="signin">
            <a href="<?php echo site_url();?>Hellena/signOption"><button>Sign in</button></a>
        </div>
        <!-- Sign in button end -->
    </header>
    <!-- Header end -->

    <!-- Main -->
    <main>
        <br><br><br>
        <div class="title">
            <h2>Our Doctors</h2>
            <h6>Choose your doctor now</h6>
        </div>
        <div class="search">
            <form action="<?= base_url() . 'Hellena/doctorSearch'?>" method="post">
            <input type="text" placeholder="Nama Dokter" name="nama">
            <input type="text" placeholder="Spesialis" name="special">
            <input type="text" placeholder="Country" name="negara">
            <!-- <input type="submit" value="Search"> -->
            <div class="signin">
            <input type="submit" value="Search">            
            </form>
            </div>
            
        </div>
        <br><br>
        <!-- Doctor content -->
        <div class="doctor-card">
          <?php 
          foreach($doc['entries']->result_array() as $doc_entry){
          ?>
            <div class="card mb-3" style="max-width: 900px; border: none; background-color: transparent; width: 600px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="<?php 
                    if($doc_entry['Image'] == null){
                      echo base_url() . 'assets/Images/profil_dummy.png';
                    }else{
                      echo base_url() . 'assets/uploads/' . $doc_entry['Image'];
                    }  ?>" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h3 class="doctorname"><?php echo $doc_entry['Nama'];?></h3>
                      <p class="doctortitle"><?php echo $doc_entry['Spesialis'];?></p>
                      <p class="doctortitle"><?php echo $doc_entry['Negara'];?></p>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            }
            ?>
        </div>
        <!-- Doctor content end -->
    </main>
    <!-- Main end -->
</body>
</html>