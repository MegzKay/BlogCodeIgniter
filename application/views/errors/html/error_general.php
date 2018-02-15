<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>General Error</title>
<link rel="stylesheet" href="https://bootswatch.com/cerulean/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">

          <div class="navbar-header">
              <a class="navbar-brand" href="<?php echo base_url(); ?>">ciblog</a>
          </div>
          <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url(); ?>">Home</a></li>
              <li><a href="<?php echo base_url(); ?>about">About</a></li>
              <li><a href="<?php echo base_url(); ?>posts">Blog</a></li>
              <li><a href="<?php echo base_url(); ?>categories">Categories</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
            <li><a href="<?php echo base_url(); ?>users/register">Register</a></li>

          </ul>
        </div>
    </nav>
    <div class="container">

        <h1><?php echo $heading; ?></h1>
        <?php echo $message; ?>
    </div>
</body>
</html>