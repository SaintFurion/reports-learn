<?php

$this->title = 'Система отчетности';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?= $templates ?></h3>
                <p>Шаблонов</p>
            </div>
            <div class="icon">
                <i class="fas fa-columns"></i>
            </div>
            <a href="<?= yii\helpers\Url::to(['template/index']) ?>" class="small-box-footer">
                Смотреть <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
</div>