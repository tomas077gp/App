<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cms".
 *
 * @property integer $ID
 * @property string $TITULO
 * @property string $DESCRIPCION
 * @property string $AUTOR
 * @property string $DIRECCION
 */
class Cms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'TITULO', 'DESCRIPCION', 'AUTOR', 'DIRECCION'], 'required'],
            [['ID'], 'integer'],
            [['DESCRIPCION'], 'string'],
            [['TITULO'], 'string', 'max' => 30],
            [['AUTOR', 'DIRECCION'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'TITULO' => 'Titulo',
            'DESCRIPCION' => 'Descripcion',
            'AUTOR' => 'Autor',
            'DIRECCION' => 'Direccion',
        ];
    }
}
