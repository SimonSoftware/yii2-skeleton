<?php
/**
 * Created by ibuildings
 * User: Paolo
 * Date: 16/04/2016
 * Time: 07:07
 */
?>
<!-- begin:ceremony -->
<section id="ceremony">
    <div class="line"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>La cerimonia</h1>
                <h3><span>Si volgerà il</span></h3>
                <h2><?= \Yii::$app->formatter->asDate($c1->start_date) ?></h2>
                <h5><span><?= $c1->name ?></span></h5>
                <h4><?= $c1->history ?></h4>
            </div>
        </div>
    </div>
</section>
<!-- end:ceremony -->
