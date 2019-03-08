<h2><?= $title ?></h2>
<?php foreach($posts as $post) : ?>
  <h3><?php echo $post['tiitle']; ?></h3>
  <div class="row post-item">
    <div class="col-md-3">
      <img style="width:100%;border-radius: 10px;" src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image']; ?>"/>
    </div>
    <div class="col-md-9">
      <small class="post-date">Posted on: <?php echo $post['created_at']; ?> in <strong><?php echo $post['name']; ?></strong></small><br>
      <p><?php echo word_limiter($post['body'], 80); ?></p>
      <P><a href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>
    </div>
  </div>
<?php endforeach; ?>
