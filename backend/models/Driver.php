<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "driver".
 *
 * @property int $iddriver
 * @property string $FIO
 * @property string $birth
 * @property string $begin_work
 * @property string $phone
 * @property string $license
 *
 * @property Trucking[] $truckings
 */
class Driver extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'driver';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FIO', 'birth', 'begin_work', 'phone', 'license'], 'required'],
            [['birth', 'begin_work'], 'safe'],
            [['FIO', 'phone', 'license'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'iddriver' => 'Iddriver',
            'FIO' => 'Fio',
            'birth' => 'Birth',
            'begin_work' => 'Begin Work',
            'phone' => 'Phone',
            'license' => 'License',
        ];
    }

    /**
     * Gets query for [[Truckings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTruckings()
    {
        return $this->hasMany(Trucking::className(), ['iddriver' => 'iddriver']);
    }
}
