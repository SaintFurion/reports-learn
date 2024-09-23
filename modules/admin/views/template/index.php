<?php

use app\modules\admin\models\Template;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var app\modules\admin\models\TemplateSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Шаблоны';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <?= Html::a('Добавить шаблон', ['create'], ['class' => 'btn btn-primary']) ?>
            </div>

            <div class="card-body">
                <div class="template-index">
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'pager' => ['class' => \yii\bootstrap5\LinkPager::class],
                        'columns' => [
                            'id',
                            [
                                'header' => 'Название',
                                'attribute' => 'name',
                                'format' => 'text',
                            ],
                            [
                                'header' => 'Срок сдачи',
                                'attribute' => 'deadline',
                                'format' => 'text',
                            ],
                            [
                                'class' => ActionColumn::class,
                                'urlCreator' => function ($action, Template $model, $key, $index, $column) {
                                    return Url::toRoute([$action, 'id' => $model->id]);
                                }
                            ],
                        ],
                    ]); ?>
                </div>
            </div>

            <div class="card-footer clearfix">

            </div>

        </div>
    </div>
</div>


