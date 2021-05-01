<?php session_start();
  include 'core/admin.php';
  $admin = new Admin();
  $client = new User();
  if(isset($_POST['submit'])){
  $client->insert_email_for_client_nsletter($_POST);
  }

  if(isset($_POST['request_qoute'])){
    $client->insertClientRequest($_POST);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="CSS/services.css">
    <link rel="stylesheet" href="CSS/aboutus.css">
    <link rel="stylesheet" href="CSS/navbar.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="bootstrap/animate.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <title>Nibram Cleaning Services</title>
    
</head>
<body>