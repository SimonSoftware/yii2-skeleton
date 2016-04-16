<?php
/**
 * Created by Simon Software & Services
 * User: Paolo
 * Date: 29/07/2015
 * Time: 10:46
 */
namespace app\modules\admin\controllers;

use app\models\Church;
use app\models\People;
use app\models\Place;
use app\models\Products;
use app\models\Timeline;
use Yii;
use yii\web\Controller;
use zxbodya\yii2\galleryManager\GalleryManagerAction;
use app\models\Categories;

class GalleryController extends Controller
{
    public function actions()
    {
        return [
            'galleryApi' => [
                'class' => GalleryManagerAction::className(),
                'types' => [
                    'church' => Church::className(),
                    'place' => Place::className(),
                    'people' => People::className(),
                    'timeline' => Timeline::className()
                ]
            ],
        ];
    }
}