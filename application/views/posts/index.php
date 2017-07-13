<h2><?= $title ?></h2>
<?php foreach($posts as $post) : ?>
    <h3><?php echo ucwords($post['title']); ?></h3>
    <div class="row">
        <div class="col-md-3">
            <img class="post-thumb" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
        </div>
        <div class="col-md-9 date-nopadding"> 
            <small class="post-date">Posted on: <?php echo $post['created_at']; ?> in <strong><?php echo $post['name']; ?></strong></small>
        </div>   
            
        <p><?php echo word_limiter($post['body'], 50); ?></p>
        <br>
        <p><a class="btn btn-default" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>
    </div>

<?php endforeach; ?>
<div class='pagination-links'>
    <?php echo $this->pagination->create_links(); ?>
</div>