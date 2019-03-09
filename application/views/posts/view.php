<h2> Title: <?php echo $post['tiitle']; ?></h2>
<div class="row">
  <div class="col-md-4">
    <img style="width:90%;border-radius: 10px;margin: 50px 50px;" src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image']; ?>"/>
  </div>
</div>
<div class="row">
  <p> <?php echo $post['body']; ?></p>
</div>
<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
  <hr>
  <?php echo form_open('/posts/delete/'.$post['id']); ?>
    <input type="submit" value="delete" class="btn btn-danger"/>
  </form>
  <a href="<?php echo site_url('/posts/edit/'.$post['slug']);?>" class="btn btn-default">Edit</a>
<?php endif; ?>
<hr>
<h3>Comments</h3>
<p>
  <?php if($comments):?>
    <?php foreach($comments as $comment): ?>
      <h5><?php echo $comment['body']; ?></h5>
      <small>[by <strong> <?php echo $comment['name']; ?></strong>]</small>
    <?php endforeach; ?>
  <?php else:?>
    <p>No comments</p>
  <?php endif;?>

</p>
<hr>
<h3>Add a Comment</h3>
<p><?php echo validation_errors(); ?></p>
<?php echo form_open('comments/create/'.$post['id']); ?>
<div class="form-group">
  <label> Name </label>
  <input type="text" name="name" class="form-control"/>
</div>
<div class="form-group">
  <label> Email </label>
  <input type="email" name="email" class="form-control"/>
</div>
<div class="form-group">
  <label> Body </label>
  <textarea type="text" name="body" class="form-control"></textarea>
</div>
<input type="hidden" value="<?php echo $post['slug']; ?>" name="slug"/>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
