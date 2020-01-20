<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actor".
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellidos
 * @property string $imdb
 *
 * @property ActoresPorPelicula[] $actoresPorPeliculas
 * @property Pelicula[] $idpeliculas
 */
class Actor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'actor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apellidos'], 'required'],
            [['nombre', 'apellidos'], 'string', 'max' => 64],
            [['imdb'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellidos' => 'Apellidos',
            'imdb' => 'Imdb',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getActoresPorPeliculas()
    {
        return $this->hasMany(ActoresPorPelicula::className(), ['idactor' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdpeliculas()
    {
        return $this->hasMany(Pelicula::className(), ['id' => 'idpelicula'])->viaTable('actores_por_pelicula', ['idactor' => 'id']);
    }
}
