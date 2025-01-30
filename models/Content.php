<?php

namespace app\models;

use Yii;
use yii\helpers\Inflector;

/**
 * This is the model class for table "content".
 *
 * @property int $id
 * @property string|null $type
 * @property int|null $status
 * @property int|null $is_deleted
 * @property int|null $cacheable
 * @property string|null $created_on
 * @property int|null $created_by
 * @property string|null $updated_on
 * @property int|null $updated_by
 * @property int|null $content_category_id
 *
 * @property ContentInfo[] $contentInfos
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'content';
    }

    public $file_name;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'is_deleted', 'cacheable', 'created_by','author_id', 'updated_by', 'content_category_id'], 'integer'],
            [['type', 'created_on', 'updated_on'], 'string', 'max' => 255],
            [['file_name'], 'safe'],
        ];
    }

    public function beforeSave($insert)
    {
        if ($insert) {
            $this->created_on = date('Y-m-d H:i:s');
            $this->created_by = Yii::$app->user->id;
        }
        else {
            $this->updated_on = date('Y-m-d H:i:s');
            $this->updated_by = Yii::$app->user->id;
        }

        return parent::beforeSave($insert);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'file_name' => Yii::t('app', 'Rasm'),
            'type' => Yii::t('app', 'Turi'),
            'status' => Yii::t('app', 'Holati'),
            'author_id' => Yii::t('app', 'Avtor'),
            'is_deleted' => Yii::t('app', 'O‘chirildi'),
            'cacheable' => Yii::t('app', 'Keshlash mumkin'),
            'created_on' => Yii::t('app', 'Yaratilgan sana'),
            'created_by' => Yii::t('app', 'Kim tomonidan yaratilgan'),
            'updated_on' => Yii::t('app', 'Yangilangan sana'),
            'updated_by' => Yii::t('app', 'Kim tomonidan yangilangan'),
        ];
    }

    public function getShortDescription($wordLimit = 20)
    {
        $description = $this->contentInfos[0]->description ?? '';
        return implode(' ', array_slice(explode(' ', $description), 0, $wordLimit)) . '...';
    }


    /**
     * Gets query for [[ContentInfos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContentInfos()
    {
        return $this->hasMany(ContentInfo::class, ['content_id' => 'id']);
    }

    public function getContentCategory()
    {
        return $this->hasOne(Categories::class, ['id' => 'content_category_id']);
    }

    public function getCreatedBy()
    {
        return $this->hasOne(User::class, ['id' => 'created_by']);
    }

    public function getAuthor()
    {
        return $this->hasOne(User::class, ['id' => 'author_id']);
    }

    public function getMedia()
    {
        return $this->hasOne(Media::class, ['object_id' => 'id']);
    }

}
