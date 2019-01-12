<?php

namespace app\controllers\admin;

use app\controllers\AppController;

class UserController extends AppController
{
    public function actionIndex()
    {
//        return $this->render('index', ['hello' => $hi, 'names' => $names]);
//        return $this->render('index', compact('hi', 'names', 'id'));
        return $this->render('index');
    }
}