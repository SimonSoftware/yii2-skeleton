<?php
/**
 * Created by Simon Software & Services
 * User: Paolo
 * Date: 22/01/2016
 * Time: 21:45
 */
?>
<div class="row">
<div class="col-md-12">
    <?php
    if ($model->isNewRecord) {
        echo 'Can not upload images for new record';
    } else {
        echo \zxbodya\yii2\galleryManager\GalleryManager::widget(
            [
                'model' => $model,
                'behaviorName' => 'galleryBehavior',
                'apiRoute' => '/admin/gallery/galleryApi'
            ]
        );
    }
    ?>
</div>
    </div>
