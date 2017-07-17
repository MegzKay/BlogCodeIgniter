<h2><?php echo ucwords($post['title']) ?></h2>
    <small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>
    <p><?php echo $post['body']; ?></p>
    <img style="height:200px; width: 200px;" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>">
    <br>

<hr>
<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
    <a class="btn btn-default pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">Edit</a>

<?php echo form_open('/posts/delete/'.$post['id']); ?>
    <input type='submit' value="Delete" class="btn btn-danger"/>
</form>
<hr>
<?php endif;?>

<h3>Comments</h3>


<?php if(!empty($comments)) : ?>
    <?php foreach($comments as $comment) : ?>
        <div class="well">
            <h5><?php echo $comment['body']; ?></h5>
            <p><em>By: <strong><?php echo $comment['username']; ?></strong></em></p>
        </div>
    <?php endforeach; ?>
<?php else : ?>
	<p>No Comments To Display</p>
<?php endif; ?>
        
<?php if(!empty($this->session->userdata('user_id'))): ?>        
     
<h3>Add Comment</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/'.$post['id']) ?> 
    <div class="form-group">
        <label>Comment</label>
        <textarea name="body" class="form-control"></textarea>  
    </div>
    <input type="hidden" name="slug" value="<?php echo $post['slug']; ?>"/>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php else:?>
<br>   
<h4 class="alert alert-warning">Need to login to comment</h4>
<?php endif;?>