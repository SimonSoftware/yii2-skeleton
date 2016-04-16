<?php

namespace app\models;

use Yii;
use zxbodya\yii2\galleryManager\GalleryBehavior;
use Imagine\Image\ImageInterface;
/**
 * This is the model class for table "church".
 *
 * @property integer $id
 * @property string $name
 * @property double $lat
 * @property double $lng
 * @property string $history
 * @property integer $start_date
 */
class Church extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'church';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'history'], 'string'],
            [['lat', 'lng'], 'number'],
            [['start_date'], 'integer'],
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
            'lat' => 'Lat',
            'lng' => 'Lng',
            'history' => 'History',
            'start_date' => 'Start Date',
        ];
    }

    public function behaviors()
    {
        return [
            'galleryBehavior' => [
                'class' => GalleryBehavior::className(),
                'type' => 'church',
                'extension' => 'jpg',
                'directory' => Yii::getAlias('@webroot') . '/gallery/church',
                'url' => Yii::getAlias('@web') . '/gallery/church',
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
