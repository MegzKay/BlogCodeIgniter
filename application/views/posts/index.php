<?php if($this->session->flashdata('post_created')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('post_updated')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('post_deleted')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
<?php endif; ?>

<?php if($this->session->flashdata('post_not_edited')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('post_not_edited').'</p>'; ?>
<?php endif; ?>
<h2><?= $title ?></h2>
<?php foreach($posts as $post) : ?>
    <h3><a href="<?php echo site_url('/posts/'.$post['slug']); ?>"><?php echo ucwords($post['title']); ?></a></h3>
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