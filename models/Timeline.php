<?php

namespace app\models;

use Yii;
use zxbodya\yii2\galleryManager\GalleryBehavior;
use Imagine\Image\ImageInterface;
/**
 * This is the model class for table "timeline".
 *
 * @property integer $id
 * @property string $description
 * @property integer $person
 * @property integer $date
 */
class Timeline extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'timeline';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['person', 'date'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'description' => 'Description',
            'person' => 'Person',
            'date' => 'Date',
        ];
    }

    public function behaviors()
    {
        return [
            'galleryBehavior' => [
                'class' => GalleryBehavior::className(),
                'type' => 'timeline',
                'extension' => 'jpg',
                'directory' => Yii::getAlias('@webroot') . '/gallery/timeline',
                'url' => Yii::getAlias('@web') . '/gallery/timeline',
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
