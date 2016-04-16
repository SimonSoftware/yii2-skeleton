<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\WeddingAsset;

WeddingAsset::register($this);

?>

<?php $this->beginPage() ?><!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
  <head>
	  <meta charset="<?= Yii::$app->charset ?>">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <?= Html::csrfMetaTags() ?>
	  <title><?= Html::encode($this->title) ?></title>
	  <?php $this->head() ?>

  		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<meta name="description" content="ditinggal rabi responsive wedding invitation theme built with bootstrap">
	<meta name="author" content="@_TemplateNinja">
	<link rel="shortcut icon" href="img/favicon.png">
  </head>

  <body data-spy="scroll" data-target=".navbar-default">
  <?php $this->beginBody() ?>

  	<!-- begin:demo-panel -->
  <!--
  	<div id="demo-panel" class="panel-hide">
  		<span class="panel-toggle"><i class="fa fa-cogs"></i></span>
  		<ul>
  			<li class="default" data-color="default"></li>
  			<li class="blue" data-color="blue"></li>
  			<li class="green" data-color="green"></li>
  			<li class="yellow" data-color="yellow"></li>
  			<li class="orange" data-color="orange"></li>
  			<li class="red" data-color="red"></li>
  		</ul>
  	</div>
  	-->
  	<!-- end:demo-panel -->

  	<!-- begin:navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand visible-xs" href="#home">Lorenso & Julia</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#home">Home</a></li>
          	<li><a href="#about">About</a></li>
          	<li><a href="#ceremony">Ceremony</a></li>
          	<li><a href="#photos">Photos</a></li>
          	<li><a href="#story">Story</a></li>
          	<li><a href="#contact">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
    <!-- end:navbar -->

  	<?= $content ?>

  <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>
