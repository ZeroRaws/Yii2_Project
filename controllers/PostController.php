<?php

namespace app\controllers;

use yii;

class PostController extends AppController
{
    public $layout = 'basic';
    
    public function actionIndex()
    {   
        if (yii::$app->request->isAjax){
            debug($_POST);
            return 'test';
        }
        $this->view->title = 'Статьи!';
        return $this->render('index');
    }
    
    public function actionShow()
    {        
//        $this->layout = 'basic';
        $this->view->title = 'Одна статья!';
        return $this->render('show');
    }
}