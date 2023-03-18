<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "yii2_contents".
 *
 * @property int $id
 * @property int|null $category
 * @property string|null $title
 * @property string|null $description
 */
class Yii2Contents extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii2_contents';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category'], 'integer'],
            [['description'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'title' => 'Title',
            'description' => 'Description',
        ];
    }
}
