<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Productos;
use yii\data\ActiveDataProvider;
use app\models\contacto;
use app\models\Categorias;

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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index',
                ["titulo"=>"productos de Jota",
                 "foto"=>"jota.png",
                 "texto"=>"ejemplo de clase con web"   
            ]);
    }
       
    public function actionProductos(){
        //$query="select * from productos";
        $activeQuery=Productos::find();
        $dataProvider=new ActiveDataProvider([
            "query"=>$activeQuery,
        ]);
        
        return $this->render("productos",[
            "data"=>$dataProvider,
        ]);
        
    }
    
     public function actionOfertas(){
        //$query="select * from productos";
        $activeQuery=Productos::find()
                ->where(["oferta"=>1]);
        $dataProvider=new ActiveDataProvider([
            "query"=>$activeQuery,
        ]);
        
        return $this->render("productos",[
            "data"=>$dataProvider,
        ]);
        
    }


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
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }
    
    public function actionInformacion(){
        $model=new ContactForm();
        if($model->load(Yii::$app->request->post())
                && 
            $model->contact(Yii::$app->params["informacion"])){
            Yii::$app->session->setFlash('enviadaInformacion');
            return $this->refresh();
        }
        
        return $this->render("informacion",[
            "model"=>$model,
        ]);
                
    }
    
    
    /**
     * prueba de envio de correo electronico desde informacion
     */
    public function actionCorreo(){
        $correo=new ContactForm();
        $correo->nombre="Cliente";
        $correo->contact(Yii::$app->params["informacion"]);
    }
    
    
        /**
     * prueba de envio de correo electronico desde contacto
     */
     public function actionContactoPrueba(){
        $correo=new Contacto();
        $correo->asunto="Probando este rollo";
    $correo->temas=0;
        $correo->correo="cliente@correo.es";
        $correo->nombre="Cliente";
           $correo->apellidos="Cliente";
        $correo->contact();

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

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
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
     public function actionContacto(){
        $model=new Contacto();
        if($model->load(Yii::$app->request->post())
                && 
            $model->contact()){
            Yii::$app->session->setFlash('enviadaInformacion');
            return $this->refresh();
        }
        
        return $this->render("contacto",[
            "model"=>$model,
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
    
    public function actionCategorias(){
        $query= Categorias::find();
        
        $dataProvider=new ActiveDataProvider([
            "query"=>$query,
            "pagination"=>["pageSize"=>2,
                ],
            ]);
        
            return $this->render("categorias",[
            "dataProvider"=>$dataProvider
        ]);

    }
    public function actionMostrarCategoria($id){
        $categoria= Categorias::findOne($id);
        //$categoria= Categorias::find()->where(["id"=>$id])->one();
        
        $consultaProductos= Productos::find()
                ->joinWith("relacions",FALSE,"INNER JOIN")
                ->where(["categoria"=>$id]);
        $dataProvider=new ActiveDataProvider([
            "query"=>$consultaProductos,
        ]);
        return $this->render("mostrarCategoria",[
            "modelo"=>$categoria,
            "dataProvider"=>$dataProvider,
        ]);
        
        
    }

}
