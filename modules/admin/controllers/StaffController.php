<?php

namespace app\modules\admin\controllers;

use app\models\DormitoryManagement;
use Yii;
use app\models\Staff;
use app\modules\admin\ModelSeach\StaffSeach;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * StaffController implements the CRUD actions for Staff model.
 */
class StaffController extends Controller
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
     * Lists all Staff models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StaffSeach();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Staff model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model= $this->findModel($id);
        $model->imager=$model->getUrlPicture($model->imager);
        $managementDormitory=new DormitoryManagement();
        if($model->load(Yii::$app->request->post())) {
            $model['day_birth']= Staff::convertDate($model['day_birth']);
            $model->save();
            return $this->render('view', [
                'model' => $model,
                'manager'=>$managementDormitory
            ]);
        }
        else

            return $this->render('view', [
                'model' => $model,
                'manager'=>$managementDormitory
            ]);
    }

    /**
     * Creates a new Staff model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Staff();
        $model->id_staff=Staff::createIdStaff();
        if($model->load(Yii::$app->request->post())) {

            $model['day_birth']= Staff::convertDate($model['day_birth']);
            $image=UploadedFile::getInstanceByName('Staff[imager]');
            if($image!=null) {
                $model->imager = Yii::$app->security->generateRandomString() . "." . $image->extension;

                // the path to save file, you can set an uploadPath
                // in Yii::$app->params (as used in example below)
                $path = Yii::$app->params['uploadPath'] . $model->imager;
                if(!$image->saveAs($path))
                {
                    return $this->render('create', [
                        'model' => $model,
                    ]);
                }
            }
            if ($model->save()) {
                return $this->redirect(['index']);
            }
            else
            {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Staff model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->imager=$model->getUrlPicture($model->imager);
        if($model->load(Yii::$app->request->post())) {

            $model['day_birth']= Staff::convertDate($model['day_birth']);
            $image=UploadedFile::getInstanceByName('Staff[imager]');
            if($image!=null) {
                $model->imager = Yii::$app->security->generateRandomString() . "." . $image->extension;

                // the path to save file, you can set an uploadPath
                // in Yii::$app->params (as used in example below)
                $path = Yii::$app->params['uploadPath'] . $model->imager;
                if(!$image->saveAs($path))
                {
                    return $this->render('create', [
                        'model' => $model,
                    ]);
                }
            }
            if ($model->save()) {
                return $this->redirect(['index']);
            }
            else
            {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Staff model.
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
     * Finds the Staff model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Staff the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Staff::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
