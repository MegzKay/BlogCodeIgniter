<?php if($this->session->flashdata('category_created')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('category_not_deleted')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('category_not_deleted').'</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('category_deleted')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
<?php endif; ?>

<h2><?= $title; ?></h2>
<ul class="list-group">
<?php foreach($categories as $category) : ?>
    <li class="list-group-item"><a href="<?php echo site_url('/categories/posts/'.$category['id']); ?>"><?php echo $category['name']; ?></a>
        <?php if($this->session->userdata('user_id') == $category['user_id']): ?>
            <form class="cat-delete" action="categories/delete/<?php echo $category['id']; ?>" method="POST">
                <input type="submit" class="btn-link text-danger" value="[X]">
            </form>
			<form class="cat-delete" action="categories/edit/<?php echo $category['id']; ?>" method="POST">
                <input type="submit" class="btn-link text-primary" value="Edit">
            </form>
        <?php endif; ?>
    </li>
<?php endforeach; ?>
</ul>
