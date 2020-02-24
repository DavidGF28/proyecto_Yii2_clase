<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emple".
 *
 * @property int $emp_no
 * @property string $apellido
 * @property string|null $oficio
 * @property int|null $dir
 * @property string|null $fecha_alt
 * @property int|null $salario
 * @property int|null $comision
 * @property int|null $dept_no
 *
 * @property Depart $deptNo
 */
class Emple extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'emple';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['emp_no', 'apellido'], 'required'],
            [['emp_no', 'dir', 'salario', 'comision', 'dept_no'], 'integer'],
            [['fecha_alt'], 'safe'],
            [['apellido'], 'string', 'max' => 50],
            [['oficio'], 'string', 'max' => 30],
            [['emp_no'], 'unique'],
            [['dept_no'], 'exist', 'skipOnError' => true, 'targetClass' => Depart::className(), 'targetAttribute' => ['dept_no' => 'dept_no']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'emp_no' => 'Emp No',
            'apellido' => 'Apellido',
            'oficio' => 'Oficio',
            'dir' => 'Dir',
            'fecha_alt' => 'Fecha Alt',
            'salario' => 'Salario',
            'comision' => 'Comision',
            'dept_no' => 'Dept No',
        ];
    }

    /**
     * Gets query for [[DeptNo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeptNo()
    {
        return $this->hasOne(Depart::className(), ['dept_no' => 'dept_no']);
    }
}
