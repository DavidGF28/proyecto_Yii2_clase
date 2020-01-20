<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pelicula".
 *
 * @property int $id
 * @property string $titulo
 * @property int $idsoporte
 * @property int $idgenero
 *
 * @property ActoresPorPelicula[] $actoresPorPeliculas
 * @property Actor[] $idactors
 * @property DirectoresPorPelicula[] $directoresPorPeliculas
 * @property Director[] $iddirectors
 * @property Soporte $idsoporte0
 * @property Genero $idgenero0
 */
class Pelicula extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pelicula';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'idsoporte', 'idgenero'], 'required'],
            [['idsoporte', 'idgenero'], 'integer'],
            [['titulo'], 'string', 'max' => 64],
            [['idsoporte'], 'exist', 'skipOnError' => true, 'targetClass' => Soporte::className(), 'targetAttribute' => ['idsoporte' => 'id']],
            [['idgenero'], 'exist', 'skipOnError' => true, 'targetClass' => Genero::className(), 'targetAttribute' => ['idgenero' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'idsoporte' => 'Idsoporte',
            'idgenero' => 'Idgenero',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActoresPorPeliculas()
    {
        return $this->hasMany(ActoresPorPelicula::className(), ['idpelicula' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdactors()
    {
        return $this->hasMany(Actor::className(), ['id' => 'idactor'])->viaTable('actores_por_pelicula', ['idpelicula' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDirectoresPorPeliculas()
    {
        return $this->hasMany(DirectoresPorPelicula::className(), ['idpelicula' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIddirectors()
    {
        return $this->hasMany(Director::className(), ['id' => 'iddirector'])->viaTable('directores_por_pelicula', ['idpelicula' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdsoporte0()
    {
        return $this->hasOne(Soporte::className(), ['id' => 'idsoporte']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdgenero0()
    {
        return $this->hasOne(Genero::className(), ['id' => 'idgenero']);
    }
}
