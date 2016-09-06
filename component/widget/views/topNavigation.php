<?php
    use app\assets\AppAsset;
    use yii\helpers\Url;
    $bunel = AppAsset::register($this);
?>
<div class="navigation">
    <div class="container">
        <div class="logo">
            <h1><a href="<?=Url::toRoute(['index'])?>">Dormitory</a></h1>
        </div>
        <div class="navigation-right">
            <span class="menu"><img src="<?= $bunel->baseUrl?>/images/menu.png" alt=" " /></span>
            <nav class="link-effect-3" id="link-effect-3">
                <ul class="nav1 nav nav-wil">
                    <li class="active"><a data-hover="Trang chủ" href="index.html">Trang chủ</a></li>
                    <li><a data-hover="Thông tin" href="#about" class="scroll">Thông tin</a></li>
                    <li><a data-hover="Đội ngũ" href="#team" class="scroll">Đội ngũ</a></li>
                    <li><a data-hover="Ảnh" href="#gallery" class="scroll">Ảnh</a></li>
                    <li><a data-hover="Liên hệ" href="#contact" class="scroll">Liên hệ</a></li>
                    <li><a data-hover="Đăng nhập" href="<?=Url::toRoute(["/admin/default/index"])?>">Đăng nhập</a></li>
                </ul>
            </nav>
            <!-- script-for-menu -->
            <script>
                $( "span.menu" ).click(function() {
                    $( "ul.nav1" ).slideToggle( 300, function() {
                        // Animation complete.
                    });
                });
            </script>
            <!-- /script-for-menu -->
        </div>
        <div class="clearfix"></div>
    </div>
</div>
