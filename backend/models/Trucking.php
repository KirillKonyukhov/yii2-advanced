<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trucking".
 *
 * @property int $idtruking
 * @property int $idclient
 * @property int $iddriver
 * @property int $idmanager
 * @property int $idcargo
 * @property int $idroute
 * @property int $idtruck
 * @property string $payment_date
 * @property string $date_trucking
 * @property int $discount
 * @property int $price
 *
 * @property Cargo $idcargo0
 * @property Client $idclient0
 * @property Driver $iddriver0
 * @property Manager $idmanager0
 * @property Route $idroute0
 * @property Truck $idtruck0
 */
class Trucking extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'trucking';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idclient', 'iddriver', 'idmanager', 'idcargo', 'idroute', 'idtruck', 'payment_date', 'date_trucking', 'discount', 'price'], 'required'],
            [['idclient', 'iddriver', 'idmanager', 'idcargo', 'idroute', 'idtruck', 'discount', 'price'], 'integer'],
            [['payment_date', 'date_trucking'], 'safe'],
            [['idcargo'], 'exist', 'skipOnError' => true, 'targetClass' => Cargo::className(), 'targetAttribute' => ['idcargo' => 'idcargo']],
            [['idclient'], 'exist', 'skipOnError' => true, 'targetClass' => Client::className(), 'targetAttribute' => ['idclient' => 'idclient']],
            [['iddriver'], 'exist', 'skipOnError' => true, 'targetClass' => Driver::className(), 'targetAttribute' => ['iddriver' => 'iddriver']],
            [['idmanager'], 'exist', 'skipOnError' => true, 'targetClass' => Manager::className(), 'targetAttribute' => ['idmanager' => 'idmanager']],
            [['idroute'], 'exist', 'skipOnError' => true, 'targetClass' => Route::className(), 'targetAttribute' => ['idroute' => 'idroute']],
            [['idtruck'], 'exist', 'skipOnError' => true, 'targetClass' => Truck::className(), 'targetAttribute' => ['idtruck' => 'idtruck']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idtruking' => 'Idtruking',
            'idclient' => 'Idclient',
            'iddriver' => 'Iddriver',
            'idmanager' => 'Idmanager',
            'idcargo' => 'Idcargo',
            'idroute' => 'Idroute',
            'idtruck' => 'Idtruck',
            'payment_date' => 'Payment Date',
            'date_trucking' => 'Date Trucking',
            'discount' => 'Discount',
            'price' => 'Price',
        ];
    }

    /**
     * Gets query for [[Idcargo0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdcargo0()
    {
        return $this->hasOne(Cargo::className(), ['idcargo' => 'idcargo']);
    }

    /**
     * Gets query for [[Idclient0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdclient0()
    {
        return $this->hasOne(Client::className(), ['idclient' => 'idclient']);
    }

    /**
     * Gets query for [[Iddriver0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIddriver0()
    {
        return $this->hasOne(Driver::className(), ['iddriver' => 'iddriver']);
    }

    /**
     * Gets query for [[Idmanager0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdmanager0()
    {
        return $this->hasOne(Manager::className(), ['idmanager' => 'idmanager']);
    }

    /**
     * Gets query for [[Idroute0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdroute0()
    {
        return $this->hasOne(Route::className(), ['idroute' => 'idroute']);
    }

    /**
     * Gets query for [[Idtruck0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdtruck0()
    {
        return $this->hasOne(Truck::className(), ['idtruck' => 'idtruck']);
    }
}
