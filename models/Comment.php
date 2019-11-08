<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property int $id
 * @property string $comment
 * @property string $name
 * @property string $email
 * @property int $malumot_id
 *
 * @property Malumot $malumot
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['comment'], 'string'],
            [['name', 'email', 'malumot_id'], 'required'],
            [['malumot_id'], 'integer'],
            [['name', 'email'], 'string', 'max' => 255],
            [['malumot_id'], 'exist', 'skipOnError' => true, 'targetClass' => Malumot::className(), 'targetAttribute' => ['malumot_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'comment' => 'Comment',
            'name' => 'Name',
            'email' => 'Email',
            'malumot_id' => 'Malumot ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMalumot()
    {
        return $this->hasOne(Malumot::className(), ['id' => 'malumot_id']);
    }
}
