<?php

namespace app\controllers;

use app\models\search\UserSearch;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\City;
use app\models\Province;
use app\models\Account;

class Soal5Controller extends Controller
{

    protected function verbs()
    {
        return [
            'api' => ['GET'],
        ];
    }

    // Sistem A
    public function actionIndex()
    {
        $model = new Account();

        if ($model->load(Yii::$app->request->post())) {
            $data = Account::doLogin("http://testsibisnis.test/soal-5/api", $model->email, $model->password);

            $email = $data['email'];
            $password = $data['password'];

            if ($email != '') {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                Yii::$app->session->setFlash('success', ' Authentication success!');
            } else {
                Yii::$app->session->setFlash('danger', ' Authentication Failed!');
            }
        }

        return $this->render('index', [
            'model' => $model
        ]);
    }

    // Sistem B
    public function actionApi()
    {
        $email = $_GET['email'];
        $password = $_GET['password'];

        $model = Account::find()->select('*')->where(['email' => $email, 'password' => md5($password)])->asArray()->one();

        if ($model) {
            return json_encode($model);
        } else {
            return 'null';
        }
    }
}
