<?php

use app\models\CommentForm;
use yii\helpers\Url;

?>

<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post">
                    <div class="post-thumb">
                        <a href="blog.html"><img src="<?= $article->getImage();?>" alt=""></a>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            <h6><a href="<?= Url::toRoute(['site/category', 'id'=>$article->category->id]) ?>"><?= $article->category->title; ?></a></h6>

                            <h1 class="entry-title"><?= $article->title ?></h1>

                        </header>
                        <div class="entry-content">
                           <?= $article->content ?>
                        </div>
                        <!-- tags -->
                        
                        <div class="decoration">
                            <?php foreach ($tags as $tag): ?>
                            <a href="<?= Url::toRoute(['site/tags', 'id'=>$tag->id]) ?>" class="btn btn-default"><?= $tag->title; ?></a>
                            <?php endforeach; ?>
                        </div>
                        <!-- // -->

                        <div class="social-share">
							<span
                                class="social-share-title pull-left text-capitalize">By <?= $article->author->name; ?> On <?= $article->getDate(); ?></span>
                            <ul class="text-center pull-right">
                                <li><a class="s-facebook" href="#"><i class="fa fa-eye"></i></a></li><?= (int) $article->viewed ?>
                            </ul>
                        </div>
                    </div>
                </article>

                <?= $this->render('/partials/comment', [
                 'article'=>$article,
                 'comments'=>$comments,
                 'commentForm'=>$commentForm,
                ])?>


        </div>
    </div>
</div>
<!-- end main content-->