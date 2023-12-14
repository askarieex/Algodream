<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADTS</title>
    <link rel="stylesheet" type="text/css" href="dist/css/styleHeader.css">
    <link rel="stylesheet" type="text/css" href="dist/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel="stylesheet" href="dist/css/contact.css">
	<script src="https://unpkg.com/animejs@3.0.1/lib/anime.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
<style>
            @media (max-width: 767px) {

            .header-logo-image {
                height: 40px !important;
            }
        }
</style>

</head>

<body class="is-boxed has-animations">    
<?php
include 'components/header.php';
?>
     <div class="container down-con">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Nowlari Pattan, 193121</div>
          <div class="text-two">Jammu and Kashmir</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+91 7889704442</div>
          <div class="text-two">+91 9682366790 (whatsapp)</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">info@algodream.in</div>
          <div class="text-two">support@algodream.in</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any work for us or any type of queries, please fill the below form. It will be our pleasure to help you.</p>
        
  <!-- FORM -->

  <div class="alert-box">
  <div class="message"></div>
  <div class="close-btn">&times;</div>
</div>



  <form id="myForm" action="#">
        <div class="input-box">
          <input type="text" placeholder="Enter your name" name="name">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email" name="email">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your phone number" name="phone">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter organization" name="organization">
        </div>
        <div class="input-box message-box">
          <textarea placeholder="Enter your message" name="message"></textarea>
        </div>
        <div class="button">
          <input type="submit" value="Send Now" >
        </div>
      </form>
    </div>
    </div>
</div>
<?php
    include 'components/footer.php';
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="dist/js/main.min.js"></script>
    <script src="dist/js/mynewscript.js"></script>
</body>
</html>