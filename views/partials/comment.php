<?php if (!empty($comments)): ?>
    <?php foreach ($comments as $comment): ?>
        <div class="bottom-comment"><!--bottom comment-->
            <h4>Комментарий</h4>

            <div class="comment-img">
                <img width="50" class="img-circle" src="<?= $comment->user->image; ?>" alt="">
            </div>

            <div class="comment-text">
                <a href="#" class="replay btn pull-right"> Replay</a>
                <h5><?= $comment->user->name; ?></h5>

                <p class="comment-date">
                    <?= $comment->getdate(); ?>
                </p>


                <p class="para"><?= $comment->text; ?></p>
            </div>
        </div>
        <!-- end bottom comment-->
    <?php endforeach; ?>

<?php endif; ?>
<?php if (!yii::$app->user->isGuest): ?>
    <div class="leave-comment"><!--leave comment-->
        <h4>Оставить комментарий</h4>
        <?php if (yii::$app->session->getFlash('comment')): ?>
            <div class="alert alert-success" role="alert">
                <?= yii::$app->session->getFlash('comment'); ?>
            </div>
        <?php endif; ?>
        <?php $form = \yii\widgets\ActiveForm::begin([
            'action'=>['site/comment', 'id'=>$article->id],
            'options'=>['class'=>'form-horizontal contact-form', 'role'=>'form']
        ]) ?>
        <div class="form-group">
            <div class="col-md-12">
                <?= $form->field($commentForm, 'comment')->textarea(['class'=>'form-control',
                    'rows'=>'4', 'placeholder'=>'Текст сообщения'])->label(false) ?>
            </div>
        </div>
        <button type="submit" class="btn send-btn">Оставить Комментарий</button>
        <?php \yii\widgets\ActiveForm::end(); ?>
    </div><!--end leave comment-->
<?php endif; ?>