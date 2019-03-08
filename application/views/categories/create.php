<h2><?= $title; ?></h2>
<p><?php echo validation_errors(); ?></p>
<?php echo form_open_multipart('categories/create'); ?>
  <div class="form-group">
    <label> Name </label>
    <input type="text" class="form-control" name="name"/>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
