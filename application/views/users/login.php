<?php echo form_open(); ?>
  <div class="row">
    <div class="col-md-4 offset-4">
      <h2 class="text-center"><?php echo $title; ?></h2>
      <div class="form-group">
        <label>User Name</label>
        <input type="text" name="username" class="form-control" autofocus/>
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control"/>
      </div>
      <button class="btn btn-primary btn-block" type="submit">Login</button>
    </div>
  </div>
<?php echo form_close(); ?>
