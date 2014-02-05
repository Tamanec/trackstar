<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Track star</h1>

<?php if(!Yii::app()->user->isGuest):?>
    <p>
        You last logged in on <?php echo Yii::app()->user->lastLogin; ?>.
    </p>
<?php endif;?>

<p>dsn: <?php echo $dsn; ?></p>