<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class CadastroModel extends Model
{

    public $nome;
    public $email;
    public $idade;

    public function rules(){

        return [
            [['nome', 'email', 'idade'], 'required'],
            ['email', 'email'],
            ['idade', 'number', 'integerOnly'=>true],
        ];

    }

    public function attributeLabels(){

        return[
            'nome' => 'Nome Completo',
            'email' => 'Email',
            'idade' => 'Idade',
        ];        

    }

}