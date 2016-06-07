<?php
use yii\helpers\Html;
use app\models\User;
use app\models\BuzonDocumento;
use app\models\DocumentoFlujo;
use app\models\Documento;
use app\models\ProcesoFlujo;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
                <?php if (!Yii::$app->user->isGuest) : ?>
                <!-- Messages: style can be found in dropdown.less-->
                 <?php
                        $userID = Yii::$app->user->id;
                        
                ?>
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success"><?="5"?></span>
                    </a>
                    <ul class="dropdown-menu">
                   
                        <li class="header">Tienes documento por Procesar</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">

                                
                                
                                 <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle"
                                                 alt="User Image"/>
                                        </div>
                                        <h4>
                                            Support Team
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                               
                            
                                
                            </ul>
                        </li>
                        <li class="footer"><a href="<?= Url::toRoute(['documento/buzon']); ?>">Ir al buzón de Documentos</a></li>
                    </ul>
                </li>
            <?php endif; ?>
             
            
                <!-- User Account: style can be found in dropdown.less -->

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                        <?php if (!Yii::$app->user->isGuest) : ?>
                            <span class="hidden-xs">                        
                                <?= Yii::$app->user->identity->username;?>
                            </span>
                        <?php endif;?>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle"
                                 alt="User Image"/>

                            <p>
                                <?php if (!Yii::$app->user->isGuest) : ?>
                                <?= Yii::$app->user->identity->username;?>
                                <small> 
                                Miembro desde:    
                                <?php 
                                     setlocale(LC_ALL,"es_ES");
                                     $user=@Yii::$app->user->identity->username;
                                     $existe = User::find()->where(['username' => $user])->one();
                                     echo strftime("%d de %B del %Y",$existe->created_at);     
                                ?>
                                </small>
                            <?php endif;?>
                            </p>
                        </li>
                        
                        
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Perfil</a>
                            </div>
                            <div class="pull-right">
                                <?= Html::a(
                                    'Cerrar Sesión',
                                    ['/site/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>


                            </div>
                        </li>
                    </ul>
                </li>

                <!-- User Account: style can be found in dropdown.less -->
                <!-- <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li> -->
            </ul>
        </div>
    </nav>
</header>
