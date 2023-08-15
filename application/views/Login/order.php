<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/css/orderpage.css'; ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- webtitle -->
    <title>Medicine</title>
</head>
<body style="background-image:url(<?php echo base_url() . 'assets/Images/BackGround.png'; ?>">
    <!-- Header -->
    <header class="header">
      <!-- logo -->
        <div class="logo">
          <a href="<?php echo site_url().'Hellena/homeLogin'?>"><img src="<?php echo base_url() . 'assets/Images/logo1.png'; ?>" alt="Logo"></a>
        </div>
        <!-- Logo end -->

        <!-- Navbar -->
        <nav class="navbar">
            <a href="<?php echo site_url().'Hellena/homeLogin'?>">Home</a>
            <a href="<?php echo site_url().'Hellena/medicineListLog'?>">Medicine</a>
            <a href="<?php echo site_url().'Hellena/doctorListLog'?>">Doctors</a>
            <a href="<?php echo site_url().'Hellena/orderList'?>" id="current">Order</a>
        </nav>
        <!-- Navbar end -->

        <!-- Sign in button -->
        <div class="signin">
            <a href="<?php echo site_url().'Hellena/infoPat'?>"><button>Profile</button></a>
        </div>
        <!-- Sign in button end -->
    </header>
    <!-- Header end -->

    <!-- Main -->
    <main>
        <br><br>
        <!-- Order Content content -->
        <div class="ordercontainer">
            <div class="orderside">
                <div class="profile">
                <?php foreach($medic as $row){?>
                <img src="<?php echo base_url() . 'assets/uploads/' . $row->image ;?>" alt="" style="width: 100px; height: 100px;">
                <p class="name"><?php echo $row->Nama?></p>
                <p><?php echo $row->Negara?></p>
                <p><?php echo $row->Alamat?></p>
                <p><?php echo $row->NomorHP?></p>
                <?php
              }
              ?>
                </div>
            </div>
            <div class="order-card">
              <?php foreach($query as $row_ord){?>
                <div class="card mb-3" style="max-width: 900px; border: none; background-color: transparent; width: 800px;">
                    <div class="row g-0">
                      <div class="col-md-4" style="width: 200px;">
                        <img src="<?php echo base_url() . 'assets/Images/' . $row_ord->gambar ;?>" class="img-fluid rounded-start" alt="" >
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h3 class="medicinename"><?php echo $row_ord->nama;?></h3>
                          <p class="medicinetitle"><?php echo $row_ord->deskripsi;?></p>
                          <p class="medicinetitle"><?php echo $row_ord->country;?></p>
                          <div class="price">
                            <h4 class="medicineprice" id="total"><?php if($row_ord->total_harga != null){
                              echo 'Rp.' . $row_ord->total_harga;
                              }else{
                                echo 'Rp' . $row_ord->harga;
                              }?></h4>
                            <button class="amount" id="plus" onclick="tambah(<?php echo $row_ord->order_id . ',' . $row_ord->harga?>)">+</button>
                            <form action="<?=base_url() . 'Hellena/orderList'?>" method="post" id="form" style="margin-bottom:0;">
                            <input type="number" name="kuant" id="count" min="0" value="<?php echo $row_ord->kuantitas?>">
                            <button class="amount" id="minus" onclick="kurang(<?php echo $row_ord->order_id . ',' . $row_ord->harga?>)">-</button>
                            </form>
                            <a href="<?=base_url() . 'Hellena/deleteOrderList/' . $row_ord->order_id?>">
                            <button class="delete">
                            <img src="<?php echo base_url() . 'assets/Images/Delete.png'; ?>" alt="delete icon" id="delete">
                            </button></a>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <?php
                }  
                ?>
                  <div class="checkout">
                    <?php foreach($total as $row_total){?>
                    <h3>TOTAL <span><?php echo 'Rp.' . $row_total->total_harga;?></span></h3>
                    <?php
                  }
                  ?>
                    <a href="<?php echo site_url().'Hellena/successOrder'?>" class="check"><button>Checkout Now</button></a>
                    
                  </div>
            </div>
        </div>
        
        <!-- Doctor content end -->
    </main>
    <!-- Main end -->
    <script>
        let count = $('#count').val();
        let kuant = count;
        function tambah(a,b){
            count++;
            $('#count').val(count);
            kuant = $('#count').val();
            $.ajax({
              url: "<?php echo base_url() . 'Hellena/updateOrder/'?>" +  a + "/" + b + "/" + kuant,
              type: 'POST',
              success : function(){
                // $('#total').text("</?php /* foreach($query as $row){echo 'Rp.' . $row->total_harga;}*/?>");
                $('#form').submit();
              }
            })
          }
        function kurang(a,b){  
            if(count > 1){
                count--;
                $('#count').val(count);
                kuant = $('#count').val();
            $.ajax({
              url: "<?php echo base_url() . 'Hellena/updateOrder/'?>" +  a + "/" + b + "/" + kuant,
              type: 'POST',
              success : function(){
                $('#form').submit();
              }
            })
            } 
        }
    </script>
</body>
</html>