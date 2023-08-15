<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/css/signinoption.css'; ?>">
    <!-- Webtitle -->
    <title>Sign In</title>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>
<body style="background-image:url(<?php echo base_url() . 'assets/Images/BackGround.png'; ?>">
    <!-- Header -->
    <header class="header">
        <!-- Logo -->
        <div class="logo">
            <a href="<?php echo base_url();?>"><img src="<?php echo base_url() . 'assets/Images/logo1.png'; ?>" alt="Logo"></a>
        </div>
        <!-- Navbar -->
        <nav class="navbar">
            <a href="<?php echo base_url();?>" id="current">Home</a>
            <a href="<?php echo site_url().'Hellena/medicineList'?>">Medicine</a>
            <a href="<?php echo site_url().'Hellena/doctorList'?>">Doctors</a>
            <a href="<?php echo site_url().'Hellena/notregistered'?>">Order</a>
        </nav>
    </header>

    <!-- Main -->
    <main>
        <div class="signin">
            <div class="signtitle">
                <h3>Sign In As?</h3>
            </div>
           <div class="option">
            <div class="doctoropt">
                <a href="<?php echo site_url().'Hellena/signDoc'?>">
                    <img src="<?php echo base_url() . 'assets/Images/15175440_Doctor_professional_team_cartoon_art_illustration [Converted] 1.png'; ?>" alt="doctor">
                    <h4>DOCTOR</h4>
                </a>
            </div>
            <div class="patientopt">
                <a href="<?php echo site_url().'Hellena/signPat'?>">
                    <img src="<?php echo base_url() . 'assets/Images/12628332_5024768 1.png'; ?>" alt="patient">
                    <h4>PATIENT</h4>
                </a>
            </div>
           </div>
        </div>
    </main>
</body>
</html>