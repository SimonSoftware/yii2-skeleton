<?php
/**
 * Created by ibuildings
 * User: Paolo
 * Date: 16/04/2016
 * Time: 07:03
 */

$parms = [
    's1' => app\models\People::findOne(1),
    's2' => app\models\People::findOne(2),
    'c1' => app\models\Church::findOne(1),
    'p1' => app\models\Place::findOne(1),
    'tl' => app\models\Timeline::find()->all(),
];


echo $this->render('_home',$parms);
echo $this->render('_about',$parms);
echo $this->render('_cerimony',$parms);
echo $this->render('_photos',$parms);
echo $this->render('_story',$parms);
echo $this->render('_contact',$parms);
echo $this->render('_copyright',$parms);
