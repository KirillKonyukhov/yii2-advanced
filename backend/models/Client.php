<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property int $idclient
 * @property string $FIO
 * @property string $birth
 * @property string $phone
 *
 * @property Trucking[] $truckings
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FIO', 'birth', 'phone'], 'required'],
            [['birth'], 'safe'],
            [['FIO', 'phone'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idclient' => 'ID',
            'FIO' => 'ФИО',
            'birth' => 'Дата рождения',
            'phone' => 'Телефон',
        ];
    }

    /**
     * Gets query for [[Truckings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTruckings()
    {
        return $this->hasMany(Trucking::className(), ['idclient' => 'idclient']);
    }
}
