
    

    <div class="container">
        <? if(!empty($posts)): ?>
        <? foreach($posts as $post): ?>
        <div class="panel panel-default">
        <div class="panel-heading"><?=$post['title']?></div>
        <div class="panel-body">
        <?=$post['text']?>
        </div>
        </div>
        <?endforeach;?>
        <?endif;?>
        
    </div>
