<?php

namespace app\controllers;

use app\models\LoginForm;
use app\models\SignupForm;
use app\models\User;
use Yii;
use yii\web\Controller;

class AuthController extends Controller
{
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            //var_dump(yii::$app->user->isGuest);die;
            return $this->goBack();
        }
//var_dump(yii::$app->user->isGuest);die;
        $model->password = '';
        return $this->render('/auth/login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionSignup(){
        $model = new SignupForm();

        if (yii::$app->request->isPost){
            $model->load(yii::$app->request->post());
            if ($model->signup()){
                return $this->redirect(['auth/login']);
            }
        }

        return $this->render('signup', ['model'=>$model]);
    }

    public function actionLoginVk($uid, $first_name, $photo){

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $user = new User();
        if ($user->saveFromVk($uid, $first_name, $photo)){
            return $this->goBack();
        }
    }
}