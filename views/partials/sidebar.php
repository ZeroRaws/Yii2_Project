<?php
use yii\helpers\Url;
?>

<div class="col-md-4" data-sticky_column>
    <div class="primary-sidebar">

        <aside class="widget">
            <h3 class="widget-title text-uppercase text-center">Популярные Посты</h3>

            <?php foreach ($popular as $article): ?>
                <div class="popular-post">
                    <a href="<?= Url::toRoute(['site/post', 'id'=>$article->id]); ?>" class="popular-img"><img src="<?= $article->getImage();?>" alt="">
                        <div class="p-overlay"></div>
                    </a>

                    <div class="p-content">
                        <a href="<?= Url::toRoute(['site/post', 'id'=>$article->id]); ?>" class="text-uppercase"><?= $article->title; ?></a>
                        <span class="p-date"><?= $article->getdate(); ?></span>
                    </div>
                </div>
            <?php endforeach; ?>

        </aside>
        <aside class="widget pos-padding">
            <h3 class="widget-title text-uppercase text-center">Недавние Посты</h3>

            <?php foreach ($recent as $article): ?>
                <div class="thumb-latest-posts">

                            <a href="<?= Url::toRoute(['site/post', 'id'=>$article->id]); ?>" class="popular-img"><img src="<?= $article->getImage();?>" alt="">
                                <div class="p-overlay"></div>
                            </a>


                        <div class="p-content">
                            <a href="<?= Url::toRoute(['site/post', 'id'=>$article->id]); ?>" class="text-uppercase"><?= $article->title; ?></a>
                            <span class="p-date"><?= $article->getdate(); ?></span>
                        </div>

                </div>
            <?php endforeach; ?>

        </aside>
        <aside class="widget border pos-padding">
            <h3 class="widget-title text-uppercase text-center">Категории</h3>
            <ul>
                <?php foreach ($categories as $category): ?>
                    <li>
                        <a href="<?= Url::toRoute(['site/category', 'id'=>$article->category->id]); ?>"><?= $category->title; ?></a>
                        <span class="post-count pull-right"> (<?= $category->getArticlesCount(); ?>)</span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </div>
</div>