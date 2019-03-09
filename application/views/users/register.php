<div class="col-md-4 offset-4">
  <h2><?= $title; ?></h2>
  <p><?php echo validation_errors(); ?></p>
  <?php echo form_open('users/register'); ?>
    <div class="form-group">
      <label>Name</label>
      <input name="name" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input name="email" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label>Zipcode</label>
      <input name="zipcode" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label>UserName</label>
      <input name="username" type="text" class="form-control">
    </div>
    <div class="form-group">
      <label>Password</label>
      <input name="password" type="password" class="form-control">
    </div>
    <div class="form-group">
      <label>Confirm Password</label>
      <input name="password2" type="password" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary btn-block">Submit</button>
  <?php echo form_close() ?>
</div>
