<h2><?= $title; ?></h2>


<?php echo form_open('users/register'); ?>
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="name" />
        <?php echo form_error('name','<span class="error">', '</span>'); ?>
    </div>
    <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="username" placeholder="username" />
        <?php echo form_error('username','<span class="error">', '</span>'); ?>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="email" />
        <?php echo form_error('email','<span class="error">', '</span>'); ?>
    </div>
    <div class="form-group">
        <label>Postal Code</label>
        <input type="text" class="form-control" name="zipcode" placeholder="postal code"/>
        <?php echo form_error('zipcode','<span class="error">', '</span>'); ?>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="password" />
        <?php echo form_error('password','<span class="error">', '</span>'); ?>
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" class="form-control" name="password2" placeholder="confirm password" />
        <?php echo form_error('password2','<span class="error">', '</span>'); ?>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close(); ?>