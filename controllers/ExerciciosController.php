<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\CadastroModel;
use app\models\Pessoas;
use yii\data\Pagination;

class ExerciciosController extends Controller
{
    public function actionFormulario()
    {   
        $cadastroModel = new CadastroModel();
        $post = Yii::$app->request->post();

        if( $cadastroModel->load($post) && $cadastroModel->validate()){

            return $this->render('formulario-confirmacao', [
                'model' => $cadastroModel,
            ]);

        }else{

            return $this->render('formulario', [
                'model' => $cadastroModel,
            ]);            

        }

    }

    public function actionPessoas(){

        // $pessoas = Pessoas::find()->orderBy('nome')->all();
        // echo '<pre>'; print_r($pessoas);

        // $pessoa = Pessoas::findOne(2);
        // echo $pessoa->nome . ' - ' . $pessoa->email;

        // $pessoa = Pessoas::findOne(2);
        // $pessoa->nome = 'Rafael Andrade Lima';
        // $pessoa->save();

        // echo $pessoa->nome;

        $query = Pessoas::find();

        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $query->count(),
        ]);

        $pessoas = $query->orderBy('nome')
                        ->offset($pagination->offset)
                        ->limit($pagination->limit)
                        ->all();

        return $this->render('pessoas', [
            'pessoas' => $pessoas,
            'pagination' => $pagination
        ]);
    }
}
