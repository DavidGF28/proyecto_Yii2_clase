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
    
       public function actionDos()
    {           
       $fecha = new \DateTime(date('d-m-Y H:i:s'));
       $fecha->add(new \DateInterval('P2DPT10M'));
        return $fecha->format('d-m-Y H:i:s') . "\n";
    }   

}
