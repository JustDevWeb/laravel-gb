<h1>Categories</h1>
<?php foreach ($categories as $category):?>
<h4><a href="<?= route("category.show",$category) ?>"><?=$category?></a></h4>
<?php endforeach;?>
