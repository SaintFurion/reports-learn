<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Template;

class MainController extends AppAdminController
{

    public function actionIndex()
    {
        $templates = Template::find()->count();

        return $this->render('index', compact('templates'));
    }

}