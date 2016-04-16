<?php
/**
 * Created by ibuildings
 * User: Paolo
 * Date: 16/04/2016
 * Time: 07:07
 */

$p1 = app\models\People::findOne(1);
$p2 = app\models\People::findOne(2);

?>
<!-- begin:about -->
<section id="about">
    <div class="line"></div>
    <div class="about-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2><?= $p1->name ?></h2>
                    <p><?= $p1->description ?></p>
                    <blockquote>
                        <?= $p1->quote ?>
                        <small><?= $p1->name ?></small>
                    </blockquote>
                </div>
                <!-- break -->

                <div class="col-md-4">
                    <div class="about-img-container"></div>
                    <img src="img/bottom.png" class="about-img img-responsive">
                </div>
                <!-- break -->

                <div class="col-md-4">
                    <h2><?= $p2->name ?></h2>
                    <p><?= $p2->description ?></p>
                    <blockquote>
                        <?= $p2->quote ?>
                        <small><?= $p2->name ?></small>
                    </blockquote>
                </div>
                <!-- break -->

            </div>
        </div>
    </div>
</section>
<!-- end:about -->
