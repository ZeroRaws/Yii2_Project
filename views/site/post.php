<?php
use yii\helpers\Url;
?>

<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post">
                    <div class="post-thumb">
                        <a href="<?= Url::toRoute(['site/post', 'id'=>$article->id]); ?>"><img src="<?= $article->getImage();?>" alt=""></a>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            <h6><a href="<?= Url::toRoute(['site/category', 'id'=>$article->category->id]); ?>"><?= $article->category->title; ?></a></h6>

                            <h1 class="entry-title"><a href="<?= Url::toRoute(['site/post', 'id'=>$article->id]); ?>"><?= $article->title; ?></a></h1>


                        </header>
                        <div class="entry-content">
                            <?= $article->content; ?>
                        </div>
                        <div class="social-share">
							<span
                                class="social-share-title pull-left text-capitalize">Автор <a href="#"><?= $article->user->name; ?></a> от <?= $article->getdate(); ?></span>
                        </div>
                    </div>
                </article>
                <div class="top-comment"><!--top comment-->
                    <img width="80" src="<?= $article->user->photo; ?>" class="pull-left img-circle" alt="">
                    <h4><?= $article->user->name; ?></h4>
                    <p>Об авторе.</p>
                </div><!--top comment end-->
            <?= $this->render('/partials/comment', [
                'article' => $article,
                'comments' => $comments,
                'commentForm' => $commentForm
            ]) ?>
            </div>
            <?= $this->render('/partials/sidebar', [
                'popular'=>$popular,
                'recent'=>$recent,
                'categories'=>$categories
            ]); ?>
        </div>
    </div>
</div>
<!-- end main content-->