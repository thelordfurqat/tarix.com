<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "malumot".
 *
 * @property int $id
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $short_uz
 * @property string $short_ru
 * @property string $short_en
 * @property string $body_uz
 * @property string $body_ru
 * @property int $body_en
 * @property string $image
 * @property string $date
 * @property int $type_id
 *
 * @property Comment[] $comments
 * @property Type $type
 */
class Malumot extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'malumot';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['body_en','body_uz', 'body_ru'], 'string'],
            [[ 'type_id'], 'integer'],
            [['date'], 'safe'],
            [['type_id'], 'required'],
            [['title_uz', 'title_ru', 'title_en', 'short_uz', 'short_ru', 'short_en', 'image'], 'string', 'max' => 255],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => Type::className(), 'targetAttribute' => ['type_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_uz' => 'Title Uz',
            'title_ru' => 'Title Ru',
            'title_en' => 'Title En',
            'short_uz' => 'Short Uz',
            'short_ru' => 'Short Ru',
            'short_en' => 'Short En',
            'body_uz' => 'Body Uz',
            'body_ru' => 'Body Ru',
            'body_en' => 'Body En',
            'image' => 'Image',
            'date' => 'Date',
            'type_id' => 'Type ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['malumot_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(Type::className(), ['id' => 'type_id']);
    }
}
