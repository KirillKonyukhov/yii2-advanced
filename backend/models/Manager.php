<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "manager".
 *
 * @property int $idmanager
 * @property string $FIO
 * @property string $birth
 * @property string $begin_work
 * @property string $phone
 *
 * @property Trucking[] $truckings
 */
class Manager extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'manager';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FIO', 'birth', 'begin_work', 'phone'], 'required'],
            [['birth', 'begin_work'], 'safe'],
            [['FIO', 'phone'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idmanager' => 'Idmanager',
            'FIO' => 'Fio',
            'birth' => 'Birth',
            'begin_work' => 'Begin Work',
            'phone' => 'Phone',
        ];
    }

    /**
     * Gets query for [[Truckings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTruckings()
    {
        return $this->hasMany(Trucking::className(), ['idmanager' => 'idmanager']);
    }
}
