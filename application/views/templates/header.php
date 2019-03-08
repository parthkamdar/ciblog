<html>
  <head>
    <title>CI Blog</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/mycss.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">CI BLog</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>posts">Posts</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>about">About</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>posts/create">Create New Post</a></li>
      </ul>
      </div>
    </nav>
    <div class="container">
