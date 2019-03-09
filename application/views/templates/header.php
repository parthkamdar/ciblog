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
          <a class="navbar-brand" href="<?php echo site_url(); ?>">CI BLog</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>posts">Posts</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>categories">Categories</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>about">About</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <?php if(!$this->session->userdata('logged_in')) : ?>
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>users/login">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>users/register">Register</a></li>
        <?php endif; ?>
        <?php if($this->session->userdata('logged_in')) : ?>
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>posts/create">Create New Post</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>categories/create">Create New Category</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo site_url(); ?>users/logout">Logout</a></li>
        <?php endif; ?>
      </ul>
      </div>
    </nav>
    <div class="container">
      <!-- Flash Message -->
      <?php if($this->session->flashdata('user_registered')): ?>
        <p class="alert alert-success"><?php echo $this->session->flashdata('user_registered'); ?></p>
      <?php endif; ?>
      <?php if($this->session->flashdata('post_created')): ?>
        <p class="alert alert-success"><?php echo $this->session->flashdata('post_created'); ?></p>
      <?php endif; ?>
      <?php if($this->session->flashdata('post_updated')): ?>
        <p class="alert alert-success"><?php echo $this->session->flashdata('post_updated'); ?></p>
      <?php endif; ?>
      <?php if($this->session->flashdata('category_created')): ?>
        <p class="alert alert-success"><?php echo $this->session->flashdata('category_created'); ?></p>
      <?php endif; ?>
      <?php if($this->session->flashdata('post_deteled')): ?>
        <p class="alert alert-success"><?php echo $this->session->flashdata('post_deleted'); ?></p>
      <?php endif; ?>
      <?php if($this->session->flashdata('user_login_success')): ?>
        <p class="alert alert-success"><?php echo $this->session->flashdata('user_login_success'); ?></p>
      <?php endif; ?>
      <?php if($this->session->flashdata('user_login_failed')): ?>
        <p class="alert alert-danger"><?php echo $this->session->flashdata('user_login_failed'); ?></p>
      <?php endif; ?>
      <?php if($this->session->flashdata('user_logout')): ?>
        <p class="alert alert-success"><?php echo $this->session->flashdata('user_logout'); ?></p>
      <?php endif; ?>
      <?php if($this->session->flashdata('login_required')): ?>
        <p class="alert alert-danger"><?php echo $this->session->flashdata('login_required'); ?></p>
      <?php endif; ?>
      <?php if($this->session->flashdata('wrong_user')): ?>
        <p class="alert alert-danger"><?php echo $this->session->flashdata('wrong_user'); ?></p>
      <?php endif; ?>
