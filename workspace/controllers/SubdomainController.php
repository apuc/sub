<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 11.12.19
 * Time: 22:36
 */

namespace workspace\controllers;


use core\App;
use core\Controller;
use core\Debug;
use workspace\models\Subdomain;

class SubdomainController extends Controller
{

    public function actionIndex()
    {
        $model = \workspace\models\Subdomain::all();
        return $this->render('subdomain/index.tpl', [
            'model' => $model,
            'title' => 'Поддомены',
            'h1' => 'Поддомены'
        ]);
    }

    public function actionAddForm()
    {
        return $this->render('subdomain/form.tpl', [
            'title' => 'Добавить',
            'h1' => 'Поддомены'
        ]);
    }

    public function actionAdd()
    {
        $model = new Subdomain();
        $model->name = $_POST['name'] ?: null;
        $model->region = $_POST['region'] ?: null;
        $model->phone = $_POST['phone'] ?: null;
        $model->save();
        App::$header->add('Location', '/sub');
    }

    public function actionDel($id)
    {
        Subdomain::destroy($id);
        App::$header->add('Location', '/sub');
    }

}