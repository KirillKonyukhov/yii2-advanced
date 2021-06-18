<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cargo".
 *
 * @property int $idcargo
 * @property string|null $name
 * @property string|null $type
 * @property string|null $ weight
 *
 * @property Trucking[] $truckings
 */
class Cargo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cargo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'type', ' weight'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcargo' => 'Idcargo',
            'name' => 'Name',
            'type' => 'Type',
            ' weight' => 'Weight',
        ];
    }

    /**
     * Gets query for [[Truckings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTruckings()
    {
        return $this->hasMany(Trucking::className(), ['idcargo' => 'idcargo']);
    }
}
