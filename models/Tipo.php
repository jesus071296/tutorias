<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo".
 *
 * @property integer $id
 * @property string $tipos
 *
 * @property Usuarios[] $usuarios
 */
class Tipo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tipos'], 'required'],
            [['tipos'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'tipos' => Yii::t('app', 'Tipos'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuarios::className(), ['nu_clase' => 'id']);
    }
    
    public static function getAll() {
        $clase[] = 'Seleccione el tipo de usuario';
        
        foreach (Tipo::find()->all() as $registro) {
            $clase[$registro->id] = $registro->tipos;
        }
        return $clase;
    }
}
