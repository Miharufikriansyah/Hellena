<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/signin.css'; ?>">
    <!-- Webtitle -->
    <title>Sign In</title>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>
<body style="background-image:url(<?php echo base_url() . 'assets/Images/BackGround.png'; ?>">
    <!-- Header -->
    <header class="header">
        <div class="logo">
            <a href="<?php echo base_url()?>"><img src="<?php echo base_url() . 'assets/Images/logo1.png'; ?>" alt="Logo"></a>
        </div>
        <!-- Navbar -->
        <nav class="navbar">
            <a href="<?php echo base_url()?>" id="current">Home</a>
            <a href="<?php echo site_url().'Hellena/medicineList'?>">Medicine</a>
            <a href="<?php echo site_url().'Hellena/doctorList'?>">Doctors</a>
            <a href="<?php echo site_url().'Hellena/notregistered'?>">Order</a>
        </nav>
    </header>

    <!-- Main -->
    <main>
        <div class="signin">
            <div class="signtitle">
                <h3>Sign In As a Doctor</h3>
                <p>Sign-in with your account now</p>
            </div>
            <form action="<?= base_url()  ?>HomeDocLogin" method="post">
                  <label for="email">Email</label>
                  <input type="email" placeholder="Email" name="email">
                  <label for="pass">Password</label>
                  <input type="password" placeholder="Password" class="pass" name="password">
                  <input type="checkbox" name="" id="show">
                  <label for="show" id="labelshow">Show Password</label>
                  <?php if($this->session->flashdata('message')): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $this->session->flashdata('message') ?>
                    </div>
                    <?php endif ?>
                  <input id="login" type="submit" value="login">
              </form>
              <a href="<?php echo site_url().'Hellena/registDoc'?>" class="regist">Don't Have An Account? <span>Register</span></a>
        </div>
    </main>

    <!-- Jquery -->
    <script>
        // Mengubah tipe input password menjadi text untuk melihat password diketik saat checkbox diclick dan berstatus checked
        $("#show").click(function(){
            if($("#show").prop("checked")){
                $(".pass").attr("type","text")
            }else{
                $(".pass").attr("type","password")
            }
        })
    </script>
</body>
</html>