<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $apellido_materno
 * @property string $apellido_paterno
 * @property integer $edad
 * @property integer $genero
 * @property string $direccion
 * @property string $telefono
 * @property integer $estado
 * @property string $ciudad
 * @property string $email
 * @property integer $nu_clase
 *
 * @property Estados $estado0
 * @property Genero $genero0
 * @property Tipo $nuClase
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'apellido_materno', 'apellido_paterno', 'edad', 'direccion', 'telefono', 'ciudad', 'email'], 'required'],
            [['nombre', 'apellido_materno', 'apellido_paterno', 'direccion', 'telefono', 'ciudad', 'email'], 'string'],
            [['edad', 'genero', 'estado', 'nu_clase'], 'integer'],
            [['estado'], 'exist', 'skipOnError' => true, 'targetClass' => Estados::className(), 'targetAttribute' => ['estado' => 'id']],
            [['genero'], 'exist', 'skipOnError' => true, 'targetClass' => Genero::className(), 'targetAttribute' => ['genero' => 'id']],
            [['nu_clase'], 'exist', 'skipOnError' => true, 'targetClass' => Tipo::className(), 'targetAttribute' => ['nu_clase' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'apellido_materno' => Yii::t('app', 'Apellido Materno'),
            'apellido_paterno' => Yii::t('app', 'Apellido Paterno'),
            'edad' => Yii::t('app', 'Edad'),
            'genero' => Yii::t('app', 'Genero'),
            'direccion' => Yii::t('app', 'Direccion'),
            'telefono' => Yii::t('app', 'Telefono'),
            'estado' => Yii::t('app', 'Estado'),
            'ciudad' => Yii::t('app', 'Ciudad'),
            'email' => Yii::t('app', 'Email'),
            'nu_clase' => Yii::t('app', 'Nu Clase'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstado0()
    {
        return $this->hasOne(Estados::className(), ['id' => 'estado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenero0()
    {
        return $this->hasOne(Genero::className(), ['id' => 'genero']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNuClase()
    {
        return $this->hasOne(Tipo::className(), ['id' => 'nu_clase']);
    }
}
