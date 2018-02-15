<html>
    <head>
        <title>ciblog</title>
        <link rel="stylesheet" href="https://bootswatch.com/3/paper/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <script src="http://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
    </head>
    
<body>    
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
      
    <div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		</button>
        <a class="navbar-brand" href="<?php echo base_url(); ?>">ciblog</a>
    </div>
	<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav">
			<li><a href="<?php echo base_url(); ?>">Home</a></li>
			<li><a href="<?php echo base_url(); ?>about">About</a></li>
			<li><a href="<?php echo base_url(); ?>posts">Blog</a></li>
			<li><a href="<?php echo base_url(); ?>categories">Categories</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
			<?php if(!$this->session->userdata('logged_in')) : ?>
				<li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
				<li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
			<?php endif; ?>
			<?php if($this->session->userdata('logged_in')) : ?>
				<li><a href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
				<li><a href="<?php echo base_url(); ?>categories/create">Create Category</a></li>
				<li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
			<?php endif; ?>
		</ul>
	</div>
  </div>
</nav>
<div class="container">
    
