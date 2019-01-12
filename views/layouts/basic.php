<?php

use app\assets\AppAsset;
use yii\helpers\html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
   
    <div class="wrap">
        <div class="container">
           
            <ul class="nav nav-pills">
                <li role="presentation" class="active"><?= html::a('Главная', '/web/') ?></li>
                <li role="presentation"><?= html::a('Статьи', ['post/index']) ?></li>
                <li role="presentation"><?= html::a('Статья', ['post/show']) ?></li>
            </ul>
            
            <?= $content ?>
            
        </div>
    </div>
    
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>