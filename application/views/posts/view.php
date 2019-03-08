<h2> Title: <?php echo $post['tiitle']; ?></h2>
<p> <?php echo $post['body']; ?></p>

<hr>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
  <img width="100" src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image']; ?>"/>
  <input type="submit" value="delete" class="btn btn-danger"/>
</form>
<a href="<?php echo site_url('/posts/edit/'.$post['slug']);?>" class="btn btn-default">Edit</a>
