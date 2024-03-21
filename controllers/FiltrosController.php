<?php

namespace app\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;
use app\classes\filters\TempoAcaoFilter;

class FiltrosController extends Controller
{
    public function behaviors()
    {
        return [
            'tempocao' => [
                'class' => TempoAcaoFilter::className(),
                // 'message' => 'Tempo de execução: '
            ],
            'access' => [
                'class' => AccessControl::className(),
                // 'except' => ['create'],
                'only' => ['create', 'update'],
                'rules' => [
                    ['allow' => false]
                ],
            ]
        ];
    }

    public function actionIndex()
    {
        return 'Listagem';
    }

    public function actionCreate()
    {
        return 'Novo';
    }
    
    public function actionUpdate()
    {
        return 'Atualizar';
    }

    public function actionDelete()
    {
        return 'Deletar';
    }

}