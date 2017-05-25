<?php

namespace app\controllers;

use app\models\City;
use app\models\Province;
use Yii;
use app\models\User;
use app\models\search\UserSearch;
use yii\base\Exception;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $gender = User::getGender($model->gender);
//        $province = Province::getListProvince();
//        $city = City::getListCity($model->city_id);

        return $this->render('view', [
            'model' => $model,
            'gender' => $gender
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();
        $model->scenario = 'create';
        $getListProvince = ArrayHelper::map(Province::getListProvince(), 'id', 'name');

        if ($model->load(Yii::$app->request->post())) {
            $transaction = Yii::$app->db->beginTransaction();
            try {
                if ($model->save()) {
                    $transaction->commit();
                    Yii::$app->session->setFlash('success', ' Data saved!');

                    return $this->redirect(['index']);
                } else {
                    $transaction->rollBack();
                    Yii::$app->session->setFlash('warning', ' Data failed to saved!');
                }
            } catch (Exception $e) {
                throw $e;
            }
        }

        return $this->render('create', [
            'model' => $model,
            'getListProvince' => $getListProvince,
        ]);
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->scenario = 'update';
        $getListProvince = ArrayHelper::map(Province::getListProvince(), 'id', 'name');
        $getListCity = ArrayHelper::map(City::getListCity($model->province_id), 'id', 'city');

        if ($model->load(Yii::$app->request->post())) {
            $transaction = Yii::$app->db->beginTransaction();
            try {
                if ($model->save()) {
                    $transaction->commit();
                    Yii::$app->session->setFlash('success', ' Data saved!');

                    return $this->redirect(['index']);
                } else {
                    $transaction->rollBack();
                    Yii::$app->session->setFlash('warning', ' Data failed to saved!');
                }
            } catch (Exception $e) {
                throw $e;
            }
        }

        return $this->render('update', [
            'model' => $model,
            'getListProvince' => $getListProvince,
            'getListCity' => $getListCity
        ]);
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function actionGetListCity($id)
    {
        $query = (new \yii\db\Query())
            ->select(['id', 'province_id', 'city', 'zipcode'])
            ->from('city')
            ->where(['province_id' => $id])
            ->groupBy('id')
            ->all();
        $data = ArrayHelper::map($query, 'id', 'city');

        return json_encode($data);
    }

    public function actionErd()
    {

    }
}
