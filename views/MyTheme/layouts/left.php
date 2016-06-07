<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <?php if (!Yii::$app->user->isGuest) : ?>
                <p><?= Yii::$app->user->identity->username;?></p>
                <?php endif; ?>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu Condominio', 'options' => ['class' => 'header']],
                    [
                        'label' => 'Administrar Usuarios',
                        'icon' => 'fa fa-dot-circle-o',
                        'url' => '#',
                        'visible' => (Yii::$app->user->can('Administrar Piso')),
                        'items' => [
                            ['label' => 'Administrar Permisologia', 'icon' => 'fa fa-key', 'url' => ['/admin']],
                            ['label' => 'Crear Usuario', 'icon' => 'fa fa-user-plus', 'url' => ['/user/register']],
                           
                        ],
                    ],
                    [
                        'label' => 'Gestión de Edificios',
                        'icon' => 'fa fa-dot-circle-o',
                        'url' => '#',
                        'visible' => (Yii::$app->user->can('Administrar Edificio')),
                        'items' => [
                            ['label' => 'Administrar Edificios', 'icon' => 'fa fa-cogs', 'url' => ['/edificio/index']],
                            ['label' => 'Crear Edificio', 'icon' => 'fa fa-plus-circle', 'url' => ['/edificio/create']],
                           
                        ],
                    ],
                    [
                        'label' => 'Gestión de Pisos',
                        'icon' => 'fa fa-dot-circle-o',
                        'url' => '#',
                        'visible' => (Yii::$app->user->can('Administrar Piso')),
                        'items' => [
                            ['label' => 'Administrar Pisos', 'icon' => 'fa fa-cogs', 'url' => ['/piso/index']],
                            ['label' => 'Crear Piso', 'icon' => 'fa fa-plus-circle', 'url' => ['/piso/create']],
                           
                        ],
                    ],
                    [
                        'label' => 'Pagos Ordinarios',
                        'icon' => 'fa fa-dot-circle-o',
                        'url' => '#',
                        'visible' => (Yii::$app->user->can('Administrar Pago Ordinario')),
                        'items' => [
                            ['label' => 'Administrar P. Ordinarios', 'icon' => 'fa fa-cogs', 'url' => ['/pago-ordinario/index']],
                            ['label' => 'Crear Pago', 'icon' => 'fa fa-plus-circle', 'url' => ['/pago-ordinario/create']],
                           
                        ],
                    ],
                    [
                        'label' => 'Pagos Extraordinarios',
                        'icon' => 'fa fa-dot-circle-o',
                        'url' => '#',
                        'visible' => (Yii::$app->user->can('Administrar Pago Extraordinario')),
                        'items' => [
                            ['label' => 'Administrar P. Extraordinarios', 'icon' => 'fa fa-cogs', 'url' => ['/pago-extraordinario/index']],
                            ['label' => 'Crear Pago', 'icon' => 'fa fa-plus-circle', 'url' => ['/pago-extraordinario/create']],
                           
                        ],
                    ],
                    [
                        'label' => 'Penalizaciones',
                        'icon' => 'fa fa-dot-circle-o',
                        'url' => '#',
                        'visible' => (Yii::$app->user->can('Administrar Penalizacion')),
                        'items' => [
                            ['label' => 'Administrar Penalización', 'icon' => 'fa fa-cogs', 'url' => ['/penalizacion/index']],
                            ['label' => 'Crear Pago', 'icon' => 'fa fa-plus-circle', 'url' => ['/penalizacion/create']],
                           
                        ],
                    ],
                    
                ],
            ]
        ) ?>

    </section>

</aside>
