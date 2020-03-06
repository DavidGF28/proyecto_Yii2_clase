<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\widgets\miniaturas;

use yii\base\Widget;
use yii\helpers\Html;

/**
 * Description of Miniaturas
 *
 * @author ramon
 */
class Miniaturas extends Widget {

    public $titulo;
    public $nombre;
    public $descripcion;
    public $foto;

    public function init() {
        parent::init();
        if(empty($this->foto)){
            $this->foto="anonimo.png";
        }
    }

    public function run() {
        return $this->render("index",[
            "titulo"=>$this->titulo,
            "foto"=>$this->foto,
            "nombre"=>$this->nombre,
            "descripcion"=>$this->descripcion,
        ]);
           
    }

}
