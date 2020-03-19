<?php
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link href="/themes/stamina/css/aos.css" rel="stylesheet">

<script src="/themes/stamina/js/aos.js"></script>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <?php $this->beginBody() ?>
    <div class="site-wrap">
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo"><a href="index.html">WATMAI<span>.</span> </a></div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li>
                     <?= Html::a('หน้าแรก', ['/site/index'],['class'=>'nav-link']) ?>
                </li>
                <li><a href="#news-section" class="nav-link">ข่าวสารและกิจกรรม</a></li>
                <li><a href="#classes-section" class="nav-link">บทความ</a></li>
                <li><a href="#schedule-section" class="nav-link">ตารางกิจกรรม</a></li>
                <li><a href="#trainer-section" class="nav-link">พระสงฆ์</a></li>
                <li><a href="#services-section" class="nav-link">กิจนิมนต์</a></li>
                <li><a href="#contact-section" class="nav-link">ติดต่อวัด</a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
          </div>

        </div>
      </div>

    </header>

       
          <?= Breadcrumbs::widget([
              'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
          ]) ?>
          <?= Alert::widget() ?>
          <?= $content ?>
        
    </div>

    <footer class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3 class="text-dark">About I-Compose</h3>
            <p>We have experience in website development and backoffice System</p>
          </div>

          <div class="col-md-3 ml-auto">
            <h3 class="text-dark">Links</h3>         
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" >หน้าแรก</a></li>
                <li><a href="#news-section">ข่าวสารและกิจกรรม</a></li>
                <li><a href="#classes-section">บทความ</a></li>
                <li><a href="#schedule-section">ตารางกิจกรรม</a></li>
                <li><a href="#trainer-section">พระสงฆ์</a></li>
                <li><a href="#services-section">กิจนิมนต์</a></li>
                <li><a href="#contact-section">ติดต่อวัด</a></li>
              </ul>
          </div>

          <div class="col-md-4">
            <h3 class="text-dark">Subscribe</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
            </p>
            <form action="#">
              <div class="d-flex mb-5">
                <input type="text" class="form-control rounded-0" placeholder="Email">
                <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
              </div>
            </form>
          </div>

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class=" pt-5">
              <p class="copyright">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
