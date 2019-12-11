<?php

namespace workspace\controllers;

use core\App;
use core\Controller;
use core\Debug;
use Illuminate\Database\Capsule\Manager as Capsule;
use workspace\models\Subdomain;
use workspace\models\User;

class MainController extends Controller
{

    public function actionIndex()
    {
        $model = Subdomain::where(['name' => $_SERVER['SUBDOMAIN']])->first();
        return $this->render('main/view.tpl', [
            'model' => $model,
            'title' => 'Данные',
            'h1' => 'Данные'
        ]);
    }

    public function actionItems($id)
    {
        return $this->render('main/index.tpl', ['title' => 'Название страницы ' . $id, 'h1' => 'Item ' . $id]);
    }

    public function actionUsers()
    {
        $users = User::all();
        Debug::dd($users);
    }

}