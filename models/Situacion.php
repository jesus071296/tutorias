<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "situacion".
 *
 * @property integer $id
 * @property string $situaciones
 *
 * @property Estudiante[] $estudiantes
 */
class Situacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'situacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['situaciones'], 'required'],
            [['situaciones'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'situaciones' => Yii::t('app', 'Situaciones'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstudiantes()
    {
        return $this->hasMany(Estudiante::className(), ['situacion' => 'id']);
    }
}
