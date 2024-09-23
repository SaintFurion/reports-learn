<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= Yii::$app->homeUrl; ?>" class="brand-link" target="_blank">
        <img src="/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info text-white">
                <?= Yii::$app->user->identity->email; ?>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= \yii\helpers\Url::to('main/index')?>" class="nav-link">
                        <i class="fas fa-home nav-icon"></i>
                        <p>
                            Система отчетности
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= \yii\helpers\Url::to('template/index')?>" class="nav-link">
                        <i class="fas fa-columns nav-icon"></i>
                        <p>
                            Шаблоны
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>