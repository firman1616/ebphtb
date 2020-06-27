<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>Login Form</title>
  <link rel="shortcut icon" href="<?php echo base_url('');?>assets/img/favicon-resto.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/1/normalize.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/1/style.css">
  <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/1/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

  body {
    background-image: url("<?php echo base_url('');?>assets/img/2.jpg");
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    margin-top: 0PX;
}
.username{
  width: 25%;
  padding: 12px 20px;
  margin: 4px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid #0A35F0;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {padding: 10px 24px;}
.button2 {padding: 12px 28px;}
.button3 {padding: 14px 40px;}
.button4 {padding: 32px 16px;}
.button5 {padding: 16px;}
</style>
</head>
<body>
    
<div class="row" align="center">
  <img src="">
  <div class="container">
    <div>
    <form class="form-signin2" style="color: snow">
      <img style="width: 170px; margin-top: 0px" align="center" src="<?php echo base_url('assets/img/sampang.png'); ?>"/><br>
      <p style="color: black; font-size: 30px; font-weight: bold; margin-top: 6px">PEMERINTAH KABUPATEN SAMPANG</p>
      <p style="color: black; font-size: 30px; font-weight: bold; margin-top: 6px">Badan Pengelolaan dan Pendapatan<br>Keuangan dan Aset Daerah</p>
      <p style="color: black; font-size: 20px; margin-top: 4px">Jl. Rajawali No.4, Bledanah, Karang Dalem, Sampang, Kabupaten Sampang, Jawa Timur 69216</p>
    </form>
  </div>
    <!-- <div class="row" align="right"><img style="width: 120px" src="logo.png"/></div> -->
    <form class="form-signin" action="<?php echo base_url('login/login_form');?>" method="POST">
      <h3 class="section-heading"><span>Aplikasi E-BPHTB</span></h3>
      <div class="row">
        <div class="column">
          <!-- <label>USERNAME </label> -->
          <input class="username"  name="username" class="full-width" type="text" placeholder="Username">
        </div>
      </div>
      <div class="row">
        <div class="column">
          <!-- <label>PASSWORD </label> -->
          <input class="username" name="password" class="full-width" type="password" placeholder="Password">
        </div>
      </div>
      <br>
      <button class="button button1" type="submit">LOGIN</button>
      
    </form> 
  </div>
</div>
</body>
</html>