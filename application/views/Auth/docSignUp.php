<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/css/signupdoc.css'; ?>">
    <!-- Webtitle -->
    <title>Sign Up as Doctor</title>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>
<body style="background-image:url(<?php echo base_url() . 'assets/Images/BackGround.png'; ?>">
    <!-- Header -->
    <!-- <?php echo $error;?> -->

    <!-- <?php echo form_open_multipart('Hellena/registered');?> -->
    <header class="header">
        <!-- Logo -->
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
                <h3>Sign Up As a Doctor</h3>
                <p>Register your account</p>
            </div>
            <?php if($this->session->flashdata("error")) :?>
                <?= $this->session->flashdata("error") ?>
            <?php endif ?>
            <form action="<?= base_url() ?>registerDoc" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" placeholder="Full Name" class="valuein" name="name">
                  <label for="exampleInputPassword1">Phone Number</label>
                  <input type="text" placeholder="Phone Number" class="valuein" name="phone">
                  <label for="exampleInputPassword1">E-mail</label>
                  <input type="email" placeholder="E-mail" class="valuein" name="email">
                  <label for="">Graduates</label>
                  <input type="text" id="" placeholder="University" class="valuein" name="univ">
                  <label for="">Speciality</label>
                  <input type="text" id="" placeholder="Speciality" class="valuein" name="special">
                  <label for="">Country</label>
                  <input type="text" id="" placeholder="Country" class="valuein" name="country">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" placeholder="Password" class="pass valuein" id="pwd" name="password">
                  <label for="exampleInputPassword1">Confirm Password</label>
                  <input type="password" placeholder="Confirm Password" class="pass valuein" id="conpwd">
                  <input type="checkbox" name="" id="show">
                  <label for="" id="labelshow">Show Password</label>
                  <p id="wrong">*Password did not match!!</p>
                  <div class="sideform">
                    <span class="date">
                        <label for="">Graduation Dates</label>
                        <input type="date" name="dates">
                      </span>
                      <span class="certif">
                        <label for="Certificate" >Certificate</label>
                        <input type="file" name="fileuploads[]" id="certificate">
                        <label for="certificate" id="certiflabel">Insert pdf</label>
                      </span>
                  </div>
                  <span class="practice">
                    <label>Practice License</label>
                   <input type="file" name="fileuploads[]" id="license">
                   <label for="license" id="licenselabel">Insert pdf</label>
                  </span>
                  
                  <div class="buttons">
                    <input id="button" type="submit" value="Register" disabled="disabled">
                  </div>
              </form>
              <a href="<?php echo site_url().'Hellena/signDoc'?>" class="regist">Already Have An Account?<span>Log in</span></a>
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
        $("#wrong").hide()
        $(".valuein").keyup(function(){
            var empty = false;
            $(".valuein").each(function(){ //Mengecek seluruh inputan sudah terisi atau tidak, jika terisi semua button dapat diclick
                if($(this).val() == ""){
                    empty = true;
                }
            })
            if(empty){
                $("#button").attr('disabled',true)
            }else{  
                if($("#pwd").val() == $("#conpwd").val()){ //Mengecek password dan confrim sudah sama atau tidak, jika sama button dapat diclick
                    $("#button").attr('disabled',false)
                    $("#wrong").hide()
                } else {
                    $("#button").attr('disabled',true) //Jika password dan confirm tdak sama, maka akan muncul pesan
                    $("#wrong").show()
                }
            }
        })
        //Mengubah model inputan saat diclick
        $("#certiflabel").on("click", function(){
            if($("#certificate").val() == ''){
                $("#certiflabel").css("display","none")
                $("#certificate").css("display", "inline-block", "padding-top","10px")
            }
        })
        
        $("#licenselabel").on("click", function(){
            if($("#license").val() == ''){
                $("#licenselabel").css("display","none")
                $("#license").css("display", "inline-block", "padding-top","10px")
            }
        })
    </script>
</body>
</html>