<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class Contacto extends Model
{
    public $apellidos;
    public $correo;
    public $temas;
    public $temasTexto;
    public $asunto;
    public $valores=[

        "general",
        "productos",
        "reclamacion"
    ];
       

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['nombre', 'correo'], 'required'],
            ['correo', 'email'],
            ['asunto','string','length'=>[5,50]],
            ['temas', 'in', 'range' => $this->valores],
            ['temas','integer','min'=>0,'max'=> count($this->valores)],
            ['temasTexto', 'in', 'range' => $this->valores],
            ['apellidos','safe'],

        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'nombre' => 'Introduce tu nombre',
            'apellidos' => 'Introduce tus apellidos',
            'correo' => 'Introduce un correo para ponernos en contacto contigo',
            'asunto' => 'Porque quieres ponerte en contacto con nosotros',
            'tema' => 'Selecciona sobre que tema quieres tratar',
        ];
    }

        
    public function beforeValidate() {
        parent::beforeValidate();
        $this->temasTexto=$this->valores[$this->temas];
        return true;
    }

    
    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact()
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo(Yii::$app->params['contacto'])
                ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                ->setReplyTo([$this->correo => $this->nombre])
                ->setSubject($this->temasTexto)
                ->setTextBody($this->asunto)
                ->send();

            return true;
        }
        return false;
    }
}
