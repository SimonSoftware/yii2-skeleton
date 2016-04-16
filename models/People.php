<?php

namespace app\models;

use Yii;
use zxbodya\yii2\galleryManager\GalleryBehavior;
use Imagine\Image\ImageInterface;
/**
 * This is the model class for table "people".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $nickname
 * @property string $description
 * @property integer $birthday
 * @property string $quote
 */
class People extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'people';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'nickname', 'description', 'quote'], 'string'],
            [['birthday'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'nickname' => 'Nickname',
            'description' => 'Description',
            'birthday' => 'Birthday',
            'quote' => 'Quote',
        ];
    }

    public function behaviors()
    {
        return [
            'galleryBehavior' => [
                'class' => GalleryBehavior::className(),
                'type' => 'people',
                'extension' => 'jpg',
                'directory' => Yii::getAlias('@webroot') . '/gallery/people',
                'url' => Yii::getAlias('@web') . '/gallery/people',
                'versions' => [
                    'small' => function ($img) {
                        return $img
                            ->copy()
                            ->thumbnail(new \Imagine\Image\Box(336, 197),
                                ImageInterface::THUMBNAIL_OUTBOUND);
                    },
                    'medium' => function ($img) {
                        $dstSize = $img->getSize();
                        $maxWidth = 800;
                        if ($dstSize->getWidth() > $maxWidth) {
                            $dstSize = $dstSize->widen($maxWidth);
                        }
                        return $img
                            ->copy()
                            ->resize($dstSize);
                    },
                ]
            ],
        ];
    }

}
