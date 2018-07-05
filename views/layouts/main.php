<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\PublicAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\widgets\Menu;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
                    

<nav class="navbar main-menu navbar-default">
    <div class="container">
        <div class="menu-content">
           
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">NEWS</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav text-uppercase">
                    <li><a class="dropdown-toggle" href="/">Home</a></li>
                    <li><a  data-toggle="dropdown" class="dropdown-toggle">Categories</a>
                        <ul class="dropdown-menu">
                            <li><a href="/site/category?id=1">First Category</a></li>
                            <li><a href="/site/category?id=2">Second Category</a></li>
                            <li><a href="/site/category?id=3">Third Category</a></li>
                            <li><a href="#">Interesting posts</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="/site/view?id=8" class="dropdown-item">Lorem Ipsum</a></li>
                                    <li><a href="/site/view?id=11" class="dropdown-item">Lorem Ipsum</a></li>
                                </ul>     
                            </li>
                        </ul>
                    </li>
                    <li><a href="/site/view?id=9">Lorem Dolor</a></li>
                </ul>

                <div class="i_con">
                    <ul class="nav navbar-nav text-uppercase">
                         <?php if(Yii::$app->user->isGuest):?>
                            <li><a href="<?= Url::toRoute(['auth/login'])?>">Login</a></li>
                            <li><a href="<?= Url::toRoute(['auth/signup'])?>">Register</a></li>
                        <?php else: ?>
                            <?= Html::beginForm(['/auth/logout'], 'post')
                            . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->name . ')',
                                ['class' => 'btn btn-link logout', 'style'=>"padding-top:10px;"]
                            )
                            . Html::endForm() ?>
                        <?php endif;?>
                    </ul>
                </div>

            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>
<!--end navigation-->
<div class="subscribe-me">
						<h4>Подпишитесь на нашу новостную рассылку</h4>
						<a href="#close" class="sb-close-btn">x</a>
						<form>
                            <input type="name" placeholder="Укажите имя">
							<input type="email" placeholder="Email адрес">
							<input type="submit" value="принять">
						</form>
                        
</div>

<?= $content ?>

<!--footer start-->
<footer class="footer-widget-section">
    <div class="footer-copy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">&copy; 2018 NEWS Built with yii2 by Andrew
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
