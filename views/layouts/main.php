<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

use app\assets\AppAsset;

$bundle=AppAsset::register($this);
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
</head>
<body>
<?php $this->beginBody() ?>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<script src="<?=$bundle->baseUrl?>/js/jquery.vide.min.js"></script>
<div>
    <div class="center-container" style="position: relative">
        <?=\app\component\widget\Video::widget()?>
        <?=\app\component\widget\TopNavigation::widget()?>
        <div class="w3ls_banner_info">
            <div class="container">
                <div class="w3l_banner_logo">
                    <h2>D</h2>
                </div>
                <h3>cơ sở hạ tầng được xây dựng khang trang, hiện đại</h3>
                <p> Khu Nội trú Trường Đại học Tây Bắc được đầu tư xây dựng khang trang, hiện đại trên khuôn viên khuôn viên rộng</p>
                <div class="more">

                </div>
                <!--modal-video-->
                <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                Schooling
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <section>
                                <div class="modal-body">
                                    <img src="<?=$bundle->baseUrl?>/images/17.jpg" alt=" " class="img-responsive" />
                                    <p>Ut enim ad minima veniam, quis nostrum
                                        exercitationem ullam corporis suscipit laboriosam,
                                        nisi ut aliquid ex ea commodi consequatur? Quis autem
                                        vel eum iure reprehenderit qui in ea voluptate velit
                                        esse quam nihil molestiae consequatur, vel illum qui
                                        dolorem eum fugiat quo voluptas nulla pariatur.
                                        <i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit
                                            esse quam nihil molestiae consequatur.</i></p>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?=$content?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
