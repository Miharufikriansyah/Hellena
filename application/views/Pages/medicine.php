<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/css/mediciness.css'; ?>">
    <!-- webtitle -->
    <title>Medicine</title>
</head>
<body style="background-image:url(<?php echo base_url() . 'assets/Images/Vector163.png'; ?>">
    <!-- Header -->
    <header class="header">
      <!-- logo -->
        <div class="logo">
          <a href="<?php echo base_url()?>"><img src="<?php echo base_url() . 'assets/Images/logo1.png'; ?>" alt="Logo"></a>
        </div>
        <!-- Logo end -->

        <!-- Navbar -->
        <nav class="navbar">
            <a href="<?php echo base_url()?>">Home</a>
            <a href="" id="current">Medicine</a>
            <a href="<?php echo site_url().'Hellena/doctorList'?>">Doctors</a>
            <a href="<?php echo site_url().'Hellena/notregistered'?>">Order</a>
        </nav>
        <!-- Navbar end -->

        <!-- Sign in button -->
        <div class="signin">
            <a href="<?php echo site_url().'Hellena/signOption'?>"><button>Sign in</button></a>
        </div>
        <!-- Sign in button end -->
    </header>
    <!-- Header end -->

    <!-- Main -->
    <main>
        <br><br><br>
        <div class="title">
            <h2>Get Healthy with some medicine</h2>
            <h6>Don't get overdose</h6>
        </div>
        <br><br>
        <!-- Medicine content -->
        <div class="medicine-card">
          <?php
            foreach($medic['entries']->result_array() as $medic_entry){
          ?>
            <div class="card mb-3" style="max-width: 900px; border: none; background-color: transparent; width: 600px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="<?php echo base_url() . 'assets/Images/' . $medic_entry['gambar']; ?>" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h3 class="medicinename"><?php echo $medic_entry['nama']?></h3>
                      <p class="medicinetitle"><?php echo $medic_entry['deskripsi']?></p>
                      <p class="medicinetitle"><?php echo $medic_entry['country']?></p>
                      <div class="price">
                        <h4 class="medicineprice"><?php echo 'Rp.' .  $medic_entry['harga']?></h4>
                        <a href="<?=base_url() . 'Hellena/orders/' . $medic_entry['id']?>" class="amount"><button>+</button></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              }
              ?>
              <?php
              echo $this->pagination->create_links();
              ?>
        </div>
        <!-- Doctor content end -->
    </main>
    <!-- Main end -->
</body>
</html>