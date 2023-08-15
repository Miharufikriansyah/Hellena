<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/css/successOrder.css'; ?>">
    <title>Order Success</title>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>
<body style="background-image:url(<?php echo base_url() . 'assets/Images/BackGround.png'; ?>">
    <!-- Header -->
    <header class="header">
        <!-- Logo -->
        <div class="logo">
            <a href="<?php echo base_url()?>"><img src="<?php echo base_url() . 'assets/Images/logo1.png'; ?>" alt="Logo"></a>
        </div>
        <!-- navbar -->
        <nav class="navbar">
            <a href="<?php echo base_url();?>">Home</a>
            <a href="<?php echo site_url();?>Hellena/medicineListLog">Medicine</a>
            <a href="<?php echo site_url();?>Hellena/doctorListLog">Doctors</a>
            <a href="<?php echo site_url();?>Hellena/orderList" id="current">Order</a>
        </nav>
    </header>

    <!-- Main -->
    <main>
        <div class="text-center" style="padding-top: 50px;">
            <img src="<?php echo base_url() . 'assets/Images/Group 83.png'; ?>" alt="MailBox" id="mail">
            <h2 class="message">Thank You For Purchasing<span><br>Our Medicine</span></h2>
            <a href="<?php echo site_url().'Hellena/homeLogin';?>" class="regist"><button>Back To Home</button></a>
        </div>
    </main>
</body>
</html>