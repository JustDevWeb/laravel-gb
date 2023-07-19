<h1><?=$categoryName?></h1>
<?php foreach($newsList as $news): ?>
<div>
    <h4><a href="<?= route("news.show",$news["id"]) ?>"><?=$news["title"]?></a></h4>
    <br/>
    <img src="<?=$news["image"]?>" />
    <p><em><?=$news["author"]?> &nbsp; (<?=$news["created_at"]?>)</em></p>
    <p><?=$news["description"]?></p>

</div>
<?php endforeach; ?>
