<div class="container">
    <? if(!empty($posts)): ?>
    <? foreach($posts as $post): ?>
    <p></p>
    <div class="card">

    <h5 class="card-header"><?=$post['title']?></h5>
    <div class="card-body">
        <p></p>
    <p class="card-text"><?=$post['text']?></p>
    </div>
    </div>
    <?endforeach;?>
    <?endif;?>
</div>
