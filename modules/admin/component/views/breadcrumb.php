<?php use navatech\language\widgets\LanguageWidget;

?>
<div class="breadcrumbs" id="breadcrumbs">
    <script type="text/javascript">
        try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
    </script>

    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="#"><?php echo yii::$app->controller->id?></a>
        </li>
        <li class="active"><?php echo yii::$app->controller->action->id?></li>
    </ul><!-- /.breadcrumb -->

    <div class="nav-search" id="nav-search">

    </div><!-- /.nav-search -->
</div>