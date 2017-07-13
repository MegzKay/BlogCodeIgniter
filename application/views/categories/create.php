<h2><?= $title ;?></h2>


<?php echo form_open_multipart('categories/create'); ?>
	<div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name">
            <?php echo form_error('name','<span class="error">', '</span>'); ?>
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
</form>