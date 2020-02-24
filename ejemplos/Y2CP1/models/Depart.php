<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "depart".
 *
 * @property int $dept_no
 * @property string|null $dnombre
 * @property string|null $loc
 *
 * @property Emple[] $emples
 */
class Depart extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'depart';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dept_no'], 'required'],
            [['dept_no'], 'integer'],
            [['dnombre', 'loc'], 'string', 'max' => 30],
            [['dept_no'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'dept_no' => 'Dept No',
            'dnombre' => 'Dnombre',
            'loc' => 'Loc',
        ];
    }

    /**
     * Gets query for [[Emples]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmples()
    {
        return $this->hasMany(Emple::className(), ['dept_no' => 'dept_no']);
    }
}
