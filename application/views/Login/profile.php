<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/css/info.css'; ?>">
    <!-- webtitle -->
    <title>Your Information</title>
    <!-- jquery plugin -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>
<body style="background-image:url(<?php echo base_url() . 'assets/Images/BackGround.png'; ?>">
    <!-- Header -->
    <header class="header">
        <!-- Logo -->
        <div class="logo">
            <a href="<?php echo site_url().'Hellena/homeLogin'?>"><img src="<?php echo base_url() . 'assets/Images/logo1.png'; ?>" alt="Logo"></a>
        </div>
        <!-- Logo end -->

        <!-- Navbar -->
        <nav class="navbar">
            <a href="<?php echo site_url().'Hellena/homeLogin'?>" id="current">Home</a>
            <a href="<?php echo site_url().'Hellena/medicineListLog'?>">Medicine</a>
            <a href="<?php echo site_url().'Hellena/doctorListLog'?>">Doctors</a>
            <a href="<?php echo site_url().'Hellena/orderList'?>">Order</a>
        </nav>
        <!-- Navbar end -->
    </header>
    <!-- Header end -->

    <main>
        <!-- Content table -->
        <div class="signin">
            <div class="signtitle">
                <h3>Your Information</h3>
            </div>
            <?php 
                foreach($query as $row){
            ?>
            <div class="datatable">
                <div class="uploadimg">
                <?php if($this->session->flashdata('error')) :?>
                <?= $this->session->flashdata('error') ?>
            <?php endif ?>
                    <label for="inp" class="upld">
                        <img src=" <?php if($row->image ==null){
                           echo base_url() . 'assets/Images/profil_dummy.png';
                        }else{
                           echo base_url() . 'assets/uploads/' . $row->image ;
                        }?>" alt="" class="image">
                        <div class="uptext">
                            <p class="text">Upload Your Image!</p>
                        </div>
                    </label>
                    <?php echo form_open_multipart('Hellena/uploadPatImg','id="form"');?>
                    <!-- <form action="<?=base_url()?>UploadPatImg" method="post" id="form"> -->
                        <input type="file" id="inp" name="upload_file"> 
                    </form>
                    
                </div>
                <table>
                        <tr>
                            <td class="left">Name</td>
                            <td class="right"><?php echo $row->Nama;?></td>
                        </tr>
                        <tr>
                            <td class="left">ID Number</td>
                            <td class="right"><?php echo $row->id?></td>
                        </tr>
                        <tr>
                            <td class="left">Phone Number</td>
                            <td class="right"><?php echo $row->NomorHP;?></td>
                        </tr>
                        <?php
                    } 
                    ?>
                </table>
            </div>
            <a href="<?= base_url() ?>HomeLogout"><button id="dataregist">Logout</button></a>
        </div>
        <!-- Content table end -->
    </main>
    <!-- Main end -->

    <!-- Jquery -->
    <script>
          
        $('#inp').change(function(){
            if($('#inp').val() == ''){
                
             }else{
                $('#form').submit();
             }
        })
        
    </script>
</body>
</html>