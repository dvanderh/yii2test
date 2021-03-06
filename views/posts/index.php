<?php

use yii\helpers\Url;

?>

<table class="table">
    <tbody>
        <tr>
            <th>ID</th>
            <th>Title</th>
        </tr>
        <?php foreach($posts as $post): ?>
            <?php if(Yii::$app->user->can('viewPost', ['post' => $post])): ?>
            <tr>
                <td><a href="<?= Url::to(['posts/edit', 'id' => $post->id]) ?>"><?= $post->id ?></a></td>
                <td><?= $post->title ?></td>
            </tr>
            <?php endif ?>
        <?php endforeach ?>
    </tbody>
</table>
<?php  ?>