<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    
        public function actionIndex ()
    {
        return $this->render('index');
    }
    
    public function actionEjercicio1(){
        $adp=new \yii\data\ActiveDataProvider([
            'query'=> \app\models\Emple::find(),
            'sort'=>[
                'defaultOrder'=>[],
            ],
        ]);
        //var_dump(\app\models\Emple::find()->all());die();
        return $this->render('grid', [
            'adp' => $adp, 
            'columns' => []
        ]);
    }
    public function actionEjercicio2(){
        $adp=new \yii\data\ActiveDataProvider([
            'query'=> \app\models\Depart::find(),
            'sort'=>[
                'defaultOrder'=>[],
            ],
        ]);
        //var_dump(\app\models\Emple::find()->all());die();
        return $this->render('grid', [
            'adp' => $adp, 
            'columns' => []
        ]);
    }
    public function actionEjercicio3(){
        $adp=new \yii\data\ActiveDataProvider([
            'query'=> \app\models\Emple::find(),
            'sort'=>[
                'defaultOrder'=>[],
            ],
        ]);
        //var_dump(\app\models\Emple::find()->all());die();
        return $this->render('grid', [
            'adp' => $adp, 
            'columns' => ['apellido','oficio']
        ]);
    }
    public function actionEjercicio4(){
        $adp=new \yii\data\ActiveDataProvider([
            'query'=> \app\models\Depart::find(),
            'sort'=>[
                'defaultOrder'=>[],
            ],
        ]);
        //var_dump(\app\models\Emple::find()->all());die();
        return $this->render('grid', [
            'adp' => $adp, 
            'columns' => ['loc','dept_no']
        ]);
    }
    public function actionEjercicio5(){
        $adp=new \yii\data\ActiveDataProvider([
            'query'=> \app\models\Depart::find(),
            'sort'=>[
                'defaultOrder'=>[],
            ],
        ]);
        //var_dump(\app\models\Emple::find()->all());die();
        return $this->render('grid', [
            'adp' => $adp, 
            'columns' => ['dept_no','dnombre','loc']
        ]);
    }
    public function actionEjercicio6(){
        $adp=new \yii\data\ActiveDataProvider([
            'query'=>\app\models\Emple::find()->select("count(*) total"),
            'sort'=>[
                'defaultOrder'=>[],
            ],
        ]);
        //var_dump(\app\models\Emple::find()->all());die();
        return $this->render('grid', [
            'adp' => $adp, 
            'columns' => ['total']
        ]);
    }
//  public function actionEjercicio7(){
//        $adp=new \yii\data\ActiveDataProvider([
//            'query'=>\app\models\Emple::find(),
//            'sort'=>[
//                'defaultOrder'=>[],
//            ],
//        ]);
//        //var_dump(\app\models\Emple::find()->all());die();
//        return $this->render('grid', [
//            'adp' => $adp, 
//            'columns' => []
//        ]);
//    }    
//  public function actionEjercicio8(){
//        $adp=new \yii\data\ActiveDataProvider([
//            'query'=>\app\models\Emple::find(),
//            'sort'=>[
//                'defaultOrder'=>[],
//            ],
//        ]);
//        //var_dump(\app\models\Emple::find()->all());die();
//        return $this->render('grid', [
//            'adp' => $adp, 
//            'columns' => []
//        ]);
//    }    
    public function actionEjercicio9(){
        $adp=new \yii\data\ActiveDataProvider([
            'query'=> \app\models\Depart::find()->select("count(*) dept_no"),
            'sort'=>[
                'defaultOrder'=>[],
            ],
        ]);
        //var_dump(\app\models\Emple::find()->all());die();
        return $this->render('grid', [
            'adp' => $adp, 
            'columns' => ['dept_no']
        ]);
    }    
//  public function actionEjercicio10(){
//        $adp=new \yii\data\ActiveDataProvider([
//            'query'=>\app\models\Emple::find(),
//            'sort'=>[
//                'defaultOrder'=>[],
//            ],
//        ]);
//        //var_dump(\app\models\Emple::find()->all());die();
//        return $this->render('grid', [
//            'adp' => $adp, 
//            'columns' => []
//        ]);
//    }
//  public function actionEjercicio11(){
//        $adp=new \yii\data\ActiveDataProvider([
//            'query'=>\app\models\Emple::find(),
//            'sort'=>[
//                'defaultOrder'=>[],
//            ],
//        ]);
//        //var_dump(\app\models\Emple::find()->all());die();
//        return $this->render('grid', [
//            'adp' => $adp, 
//            'columns' => []
//        ]);
//    }
//  public function actionEjercicio12(){
//        $adp=new \yii\data\ActiveDataProvider([
//            'query'=>\app\models\Emple::find(),
//            'sort'=>[
//                'defaultOrder'=>[],
//            ],
//        ]);
//        //var_dump(\app\models\Emple::find()->all());die();
//        return $this->render('grid', [
//            'adp' => $adp, 
//            'columns' => []
//        ]);
//    }
    public function actionEjercicio13(){
        $adp=new \yii\data\ActiveDataProvider([
            'query'=>\app\models\Emple::find()->where(['>','salario',2000]),
            'sort'=>[
                'defaultOrder'=>[],
            ],
        ]);
        //var_dump(\app\models\Emple::find()->all());die();
        return $this->render('grid', [
            'adp' => $adp, 
            'columns' => ['emp_no']
        ]);
    }
    public function actionEjercicio14(){
        $adp=new \yii\data\ActiveDataProvider([
            'query'=>\app\models\Emple::find()->where(['<','salario',2000]),
            'sort'=>[
                'defaultOrder'=>[],
            ],
        ]);
        //var_dump(\app\models\Emple::find()->all());die();
        return $this->render('grid', [
            'adp' => $adp, 
            'columns' => ['emp_no','apellido']
        ]);
    }
    public function actionEjercicio15(){
        $adp=new \yii\data\ActiveDataProvider([
            'query'=>\app\models\Emple::find()->where(['between','salario',1500,2500]),
            'sort'=>[
                'defaultOrder'=>[],
            ],
        ]);
        //var_dump(\app\models\Emple::find()->all());die();
        return $this->render('grid', [
            'adp' => $adp, 
            'columns' => []
        ]);
    }
    public function actionEjercicio16(){
        $adp=new \yii\data\ActiveDataProvider([
            'query'=>\app\models\Emple::find()->where(['=','oficio','analista']),
            'sort'=>[
                'defaultOrder'=>[],
            ],
        ]);
        //var_dump(\app\models\Emple::find()->all());die();
        return $this->render('grid', [
            'adp' => $adp, 
            'columns' => []
        ]);
    }
//    public function actionEjercicio17(){
//        $adp=new \yii\data\ActiveDataProvider([
//            'query'=>\app\models\Emple::find()->where(['between','salario',1500,2500]),
//            'sort'=>[
//                'defaultOrder'=>[],
//            ],
//        ]);
//        //var_dump(\app\models\Emple::find()->all());die();
//        return $this->render('grid', [
//            'adp' => $adp, 
//            'columns' => []
//        ]);
//    }
    public function actionEjercicio18(){
        $adp=new \yii\data\ActiveDataProvider([
            'query'=>\app\models\Emple::find()->where(['=','dept_no',20]),
            'sort'=>[
                'defaultOrder'=>[],
            ],
        ]);
        //var_dump(\app\models\Emple::find()->all());die();
        return $this->render('grid', [
            'adp' => $adp, 
            'columns' => ['apellido','oficio']
        ]);
    }
//    public function actionEjercicio19(){
//        $adp=new \yii\data\ActiveDataProvider([
//            'query'=>\app\models\Emple::find()->where(['=','dept_no',20]),
//            'sort'=>[
//                'defaultOrder'=>[],
//            ],
//        ]);
//        //var_dump(\app\models\Emple::find()->all());die();
//        return $this->render('grid', [
//            'adp' => $adp, 
//            'columns' => ['apellido','oficio']
//        ]);
//    }
//    public function actionEjercicio20(){
//        $adp=new \yii\data\ActiveDataProvider([
//            'query'=>\app\models\Emple::find()->where(['=','dept_no',20]),
//            'sort'=>[
//                'defaultOrder'=>[],
//            ],
//        ]);
//        //var_dump(\app\models\Emple::find()->all());die();
//        return $this->render('grid', [
//            'adp' => $adp, 
//            'columns' => ['apellido','oficio']
//        ]);
//    }
//    public function actionEjercicio21(){
//        $adp=new \yii\data\ActiveDataProvider([
//            'query'=>\app\models\Emple::find()->where(['=','dept_no',20]),
//            'sort'=>[
//                'defaultOrder'=>[],
//            ],
//        ]);
//        //var_dump(\app\models\Emple::find()->all());die();
//        return $this->render('grid', [
//            'adp' => $adp, 
//            'columns' => ['apellido','oficio']
//        ]);
//    }
    public function actionEjercicio22(){
        $adp=new \yii\data\ActiveDataProvider([
            'query'=>\app\models\Emple::find()->where([]),
            'sort'=>[
                'defaultOrder'=>[],
            ],
        ]);
        //var_dump(\app\models\Emple::find()->all());die();
        return $this->render('grid', [
            'adp' => $adp, 
            'columns' => []
        ]);
    }       
}
