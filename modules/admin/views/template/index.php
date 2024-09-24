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

<div class="template-index">
    <div class="row">
        <div class="col-md-12">
            <p>
                <?= Html::a('Добавить шаблон', ['create'], ['class' => 'btn btn-primary']) ?>
            </p>
            <div class="card">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'layout' => '<div class="card-header"><h3 class="card-title">Список шаблонов</h3><div class="float-right">{summary}</div></div><div class="card-body">{items}</div><div class="card-footer clearfix">{pager}</div>',
                    'pager' => [
                        'class' => \yii\bootstrap5\LinkPager::class,
                        'listOptions' => ['class' => 'pagination pagination-sm m-0 float-right']
                    ],
                    'columns' => [
                        'id',
                        'name',
                        [
                            'attribute' => 'deadline',
                            'format' => 'datetime'
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
    </div>
</div>


