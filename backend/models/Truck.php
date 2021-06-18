<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "truck".
 *
 * @property int $idtruck
 * @property string|null $model
 * @property string|null $tonnage
 * @property string|null $mileage
 *
 * @property Trucking[] $truckings
 */
class Truck extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'truck';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['model', 'tonnage', 'mileage'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idtruck' => 'Idtruck',
            'model' => 'Model',
            'tonnage' => 'Tonnage',
            'mileage' => 'Mileage',
        ];
    }

    /**
     * Gets query for [[Truckings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTruckings()
    {
        return $this->hasMany(Trucking::className(), ['idtruck' => 'idtruck']);
    }
}
