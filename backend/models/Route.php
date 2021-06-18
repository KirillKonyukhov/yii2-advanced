<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "route".
 *
 * @property int $idroute
 * @property string|null $name
 * @property string|null $specification
 * @property string|null $length
 *
 * @property Trucking[] $truckings
 */
class Route extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'route';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 20],
            [['specification', 'length'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idroute' => 'Idroute',
            'name' => 'Name',
            'specification' => 'Specification',
            'length' => 'Length',
        ];
    }

    /**
     * Gets query for [[Truckings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTruckings()
    {
        return $this->hasMany(Trucking::className(), ['idroute' => 'idroute']);
    }
}
