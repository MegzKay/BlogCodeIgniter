<h2><?= $title ;?></h2>


<?php echo form_open('categories/update'); ?>
	<input type="hidden" name="id" value="<?php echo $category->id?>" />
	<div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $category->name ?>">
            <?php echo form_error('name','<span class="error">', '</span>'); ?>
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
</form>