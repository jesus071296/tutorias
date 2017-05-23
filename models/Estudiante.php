<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estudiante".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $carrera
 * @property string $semestre
 * @property integer $situacion
 *
 * @property Situacion $situacion0
 */
class Estudiante extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estudiante';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'carrera', 'semestre'], 'required'],
            [['nombre', 'carrera', 'semestre'], 'string'],
            [['situacion'], 'integer'],
            [['situacion'], 'exist', 'skipOnError' => true, 'targetClass' => Situacion::className(), 'targetAttribute' => ['situacion' => 'id']],
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
            'carrera' => Yii::t('app', 'Carrera'),
            'semestre' => Yii::t('app', 'Semestre'),
            'situacion' => Yii::t('app', 'Situacion'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSituacion0()
    {
        return $this->hasOne(Situacion::className(), ['id' => 'situacion']);
    }
}
