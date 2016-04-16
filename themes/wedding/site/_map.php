<?php
/**
 * Created by PhpStorm.
 * User: Paolo
 * Date: 14/12/2014
 * Time: 19:16
 */
use dosamigos\leaflet\layers\TileLayer;
use dosamigos\leaflet\LeafLet;
use dosamigos\leaflet\types\LatLng;
use dosamigos\leaflet\plugins\geocoder\ServiceNominatim;
use dosamigos\leaflet\plugins\geocoder\GeoCoder;
use dosamigos\leaflet\layers\Marker;
?>
    <div class="row">
        <div class="col-md-12">

            <?php

            $model->lat = isset($model->lat) ? $model->lat : \Yii::$app->params['defaults']['lat'];
            $model->lng = isset($model->lng) ? $model->lng : \Yii::$app->params['defaults']['lng'];

            $center = new LatLng(['lat' => $model->lat, 'lng' => $model->lng]);
            $marker = new \dosamigos\leaflet\layers\Marker(['latLng' => $center, 'popupContent' => 'Hi!']);

            $marker = new Marker([
                'name' => 'geoMarker',
                'latLng' => $center,
                ]);

            $tileLayer = new TileLayer([
                'urlTemplate' => 'http://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}',
                //'urlTemplate' => 'http://otile{s}.mqcdn.com/tiles/1.0.0/map/{z}/{x}/{y}.jpeg',
                'clientOptions' => [
                    'attribution' => 'Tiles Courtesy of <a href="http://www.mapquest.com/" target="_blank">MapQuest</a> ' .
                        '<img src="http://developer.mapquest.com/content/osm/mq_logo.png">, ' .
                        'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' .
                        '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
                    'subdomains' => '1234'
                ]
            ]);

            $leafLet = new LeafLet([
                'name' => 'geoMap',
                'tileLayer' => $tileLayer,
                'center' => $center,
                'zoom' => 1,
            ]);

            $leafLet->addLayer($marker);

            echo \dosamigos\leaflet\widgets\Map::widget(['leafLet' => $leafLet, 'height' => 250]);
            ?>
        </div>
    </div>