<?php

namespace app\controllers;

class PruebasController extends \yii\web\Controller
{
    public function actionPruebas()
    {
        return $this->render('pruebas');
    }
    
      public function actionUno()
    {
        return 'Hola Mundo';
    }

}
