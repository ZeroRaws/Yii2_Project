<?php

namespace app\modules\admin\controllers;

use app\models\Comment;
use yii\web\Controller;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class CommentController extends Controller
{
    public function actionIndex(){
        $comments = Comment::find()->orderBy('id desc')->all();
        return $this->render('index', ['comments'=>$comments]);
    }

    public function actionDelete($id){
        $comment = Comment::findOne($id);
        if ($comment->delete()){
            return $this->redirect(['comment/index']);
        }
    }

    public function actionAllow($id){
        $coment = Comment::findOne($id);
        if ($coment->allow()){
            return $this->redirect(['index']);
        }
    }

    public function actionDisallow($id){
        $coment = Comment::findOne($id);
        if ($coment->disallow()){
            return $this->redirect(['index']);
        }
    }
}
