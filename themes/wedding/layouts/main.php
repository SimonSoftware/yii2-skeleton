<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\WeddingAsset;

WeddingAsset::register($this);

$sposo = \Yii::$app->params['sposo'];
$sposa = \Yii::$app->params['sposa'];

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

    <!-- begin:home -->
    <section id="home">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<h1><?= $sposo['nome'] . ' & ' . $sposa['nome'] ?></h1>
					<h3><span>Si stanno per</span></h3>
					<h2><i class="fa fa-heart-o"></i> SPOSARE! <i class="fa fa-heart-o"></i></h2>
					<h4>E Sono Lieti Di Invitarti al loro matrimonio</h4>
					<!-- <h5><span>~ Invitarti ~</span></h5> -->
    			</div>
    		</div>
    	</div>
    </section>
    <!-- end:home -->
	
	<!-- begin:about -->
	<section id="about">
		<div class="line"></div>
		<div class="about-inner">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h2><?= $sposo['nome'] ?></h2>
						<p>Lorenso, 21 Tahun. Pria tak tampan yang bercita-cita menjadi jutawan dengan modal pas-pasan.
						Hobi berenang, menolong teman, sepak bola, main futsal, main PES, dan segala sesuatu tentang bal-balan.
						Bisanya cuma nyinyir dan komentar, agak sombong tapi nggak arogan. </p>
						<blockquote>
							Cinta itu.. jika kamu bilang iya ~ waktu aku bertanya "Maukah kau menikah denganku?" #eeaaa
							<small>Lorenso</small>
						</blockquote>
					</div>
					<!-- break -->

					<div class="col-md-4">
						<div class="about-img-container"></div>
						<img src="img/bottom.png" class="about-img img-responsive">
					</div>
					<!-- break -->

					<div class="col-md-4">
						<h2><?= $sposa['nome'] ?></h2>
						<p>Julia, 20 Tahun. Wanita periang yang bercita-cita menjadi seorang pendidik dan pengajar.
						Murah senyum, galak, tapi sangat cengeng. Tinggi, langsing, hidung pesek dan bergingsul.
						Hobi makan es krim, mie ayam dan ngambek. Care sama temen dan pokoknya lakik #ehh.</p>
						<blockquote>
							Cinta itu.. jika kamu langsung datang kerumah dan melamarku ~ #duhh
							<small>Julia</small>
						</blockquote>
					</div>
					<!-- break -->

				</div>
			</div>
		</div>
	</section>
	<!-- end:about -->

	<!-- begin:ceremony -->
	<section id="ceremony">
		<div class="line"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>The Ceremony</h1>
					<h3><span>Will Be Held On</span></h3>
					<h2>26, 2013</h2>
					<h5><span>~ December ~</span></h5>
					<h4>Mi'rojul Muttaqinallah Mosque, Yogyakarta 09.00 WIB</h4>
				</div>
			</div>
		</div>
	</section>
	<!-- end:ceremony -->

	<!-- begin:photos -->
	<section id="photos">
		<div class="line"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img src="img/bottom.png" class="about-img img-responsive">
					<h2>Wedding Gallery</h2>
					<p>Here, you can put photos of about couple, prewedd, and many more.</p>
				</div>
				<!-- break -->

				<div class="col-md-8">
					<div id="wedding-photo" class="carousel slide" data-ride="carousel">
				      <div class="carousel-inner">
				        <div class="item">
				          <div class="row">
				          	<div class="col-md-4 col-sm-4 col-xs-12 animated fadeInLeftBig">	
				          		<a href="img/ditinggalrabi-wedding-photo-01.jpg" class="gallery-images">
				          			<div class="photo-gallery">
				          				<img src="img/ditinggalrabi-wedding-photo-01.jpg" class="img-responsive" alt="ditinggalrabi-wedding-photo-01">
				          			</div>
				          		</a>
				          	</div>
				          	<div class="col-md-4 col-sm-4 col-xs-12 animated fadeInDownBig">
				          		<a href="img/ditinggalrabi-wedding-photo-02.jpg" class="gallery-images">
				          			<div class="photo-gallery">
				          				<img src="img/ditinggalrabi-wedding-photo-02.jpg" class="img-responsive" alt="ditinggalrabi-wedding-photo-02">
				          			</div>
				          		</a>
				          	</div>
				          	<div class="col-md-4 col-sm-4 col-xs-12 animated fadeInRightBig">
				          		<a href="img/ditinggalrabi-wedding-photo-03.jpg" class="gallery-images">
				          			<div class="photo-gallery">
				          				<img src="img/ditinggalrabi-wedding-photo-03.jpg" class="img-responsive" alt="ditinggalrabi-wedding-photo-03">
				          			</div>
				          		</a>
				          	</div>
				          </div>
				        </div>
				        <div class="item active">
				          <div class="row">
				          	<div class="col-md-4 col-sm-4 col-xs-12 animated fadeInRightBig">	
				          		<a href="img/ditinggalrabi-wedding-photo-04.jpg" class="gallery-images">
				          			<div class="photo-gallery">
				          				<img src="img/ditinggalrabi-wedding-photo-04.jpg" class="img-responsive" alt="ditinggalrabi-wedding-photo-04">
				          			</div>
				          		</a>
				          	</div>
				          	<div class="col-md-4 col-sm-4 col-xs-12 animated fadeInUpBig">
				          		<a href="img/ditinggalrabi-wedding-photo-05.jpg" class="gallery-images">
				          			<div class="photo-gallery">
				          				<img src="img/ditinggalrabi-wedding-photo-05.jpg" class="img-responsive" alt="ditinggalrabi-wedding-photo-05">
				          			</div>
				          		</a>
				          	</div>
				          	<div class="col-md-4 col-sm-4 col-xs-12 animated fadeInLeftBig">
				          		<a href="img/ditinggalrabi-wedding-photo-06.jpg" class="gallery-images">
				          			<div class="photo-gallery">
				          				<img src="img/ditinggalrabi-wedding-photo-06.jpg" class="img-responsive" alt="ditinggalrabi-wedding-photo-06">
				          			</div>
				          		</a>
				          	</div>
				          </div>
				        </div>
				      </div>
				      <a class="left carousel-control" href="#wedding-photo" data-slide="prev">
				        <span class="glyphicon glyphicon-chevron-left"></span>
				      </a>
				      <a class="right carousel-control" href="#wedding-photo" data-slide="next">
				        <span class="glyphicon glyphicon-chevron-right"></span>
				      </a>
				    </div>
				</div>
			</div>
		</div>
	</section>
	<!-- end:photos -->

	<!-- begin:story -->
	<section id="story">
		<div class="line"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>The Story</h2>
					<ul class="content">
						<li>
							<h3 class="content-avatar avatar-top">
								<div class="img-avatar" style="background-image: url(img/gravatar.jpg);"></div>
							</h3>
							<ul>
								<!-- begin:content-text -->
								<li class="content-item content-text">
									<h3>Hae :"></h3>
									<div class="text">I meet you at the first time. I smile, and you don't smile back to me. I was silent, and you laugh out loud alone. I'ts so fuck'in romantic epic. :))</div>
									<time datetime=""><i class="fa fa-calendar"></i> December, 19 2010</time>
								</li>
								<!-- end:content-text -->

								<!-- begin:content-photo -->
								<li class="content-item content-photo">
									<img src="img/img05.jpg" alt="ditinggal rabi - together">	
									<p class="caption">At the first date, we ate ice cream and "cemong" together. We enjoyed the evening. Sitting on the bench side of the road. Telling each other silly thing, and I was able to make a little melted. Emm.. I mean make your ice cream melts. :|</p>
									<time datetime=""><i class="fa fa-calendar"></i> January, 19 2011</time>
								</li>
								<!-- end:content-photo -->

								<!-- begin:content-photo -->
								<li class="content-item content-photo">
									<img src="img/img06.jpg" alt="ditinggal rabi - sleep together">
									<time datetime=""><i class="fa fa-calendar"></i> February, 19 2011</time>	
								</li>
								<!-- end:content-photo -->

								<!-- begin:content-chat -->
								<li class="content-item content-chat">
									<p class="text chat odd">A : Sist..</p>
									<p class="text chat even">B : Yeah..</p>
									<p class="text chat odd">A : Sist..</p>
									<p class="text chat even">B : Yeahh broth..</p>
									<p class="text chat odd">A : Would you be..</p>
									And then silence....
									<time datetime=""><i class="fa fa-calendar"></i> March, 26 2011</time>
								</li>
								<!-- end:content-chat -->

								<!-- begin:content-quote -->
								<li class="content-item content-quote">
									<blockquote>
										<p>I do not promise anything, I can only promise one thing. I would still handsome until tomorrow... <small>avriqq</small></p>
										<time datetime=""><i class="fa fa-calendar"></i> March, 26 2013</time>
									</blockquote>
								</li>
								<!-- end:content-quote -->

								<!-- begin:content-photo -->
								<li class="content-item content-photo">
									<img src="img/img07.jpg" alt="ditinggal rabi - wedding ring">
									<p class="caption">And finally, we are now getting married. :')</p>
									<time datetime=""><i class="fa fa-calendar"></i> March, 26 2016</time>
								</li>
								<!-- end:content-photo -->

								
							</ul>
						</li>

						<li class="content-end">
							<h3 class="content-avatar avatar-end">
								<div class="img-avatar" style="background-image: url(img/avatar.png);"></div>
							</h3>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- end:story -->
	
	<!-- begin:contact -->
	<section id="contact">
		<div class="line"></div>
		<div id="maps"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Contact Us</h2>
					<div class="contact-container">
						<div class="row">
							<form>
							<div class="col-md-6 col-sm-6">
								<textarea rows="7" class="form-control no-resize" placeholder="Message"></textarea>
							</div>
							<!-- break -->

							<div class="col-md-6 col-sm-6">
								<input type="text" class="form-control" placeholder="Name">
								<input type="email" class="form-control" placeholder="Email">
								<input type="submit" value="Submit" class="btn btn-lg btn-secondary" />
							</div>
							</form>
						</div>
					</div>
					<h5><span>~ Thank you ~</span></h5>
				</div>
			</div>
		</div>
	</section>
	<!-- end:contact -->

	<!-- begin:copyright -->
	<section id="copyright">
		<div class="line"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Lorenso & Julia</h2>
					<h3>Yang sangat berbahagia</h3>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<ul class="list-inline social-icon">
						<li><a href="#" class="icon-twitter" rel="tooltip" title="Twitter" data-placement="top"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="icon-facebook" rel="tooltip" title="Facebook" data-placement="top"><i class="fa fa-facebook-square"></i></a></li>
						<li><a href="#" class="icon-google" rel="tooltip" title="Google Plus" data-placement="top"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="icon-instagram" rel="tooltip" title="Instagram" data-placement="top"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<p>Lorenso &amp; Julia's Wedding Invitation built with <i class="fa fa-heart-o"></i> by <a href="http://templateninja.net" target="_blank">@_TemplateNinja</a></p>
					<p>Copyright &copy; 2014 All Right Reserved.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- end:copyright -->

  <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>
