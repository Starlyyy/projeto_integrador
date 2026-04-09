<?php

namespace app\controllers;

use app\core\Controller;
use app\services\AutenticacaoService;

class AutenticacaoController extends Controller {

    private AutenticacaoService $autenticacaoService;

    public function __construct()
    {
        $this->autenticacaoService = new AutenticacaoService();
    }

    public function login(){
        $this->view('autenticacao/login');
    }

    public function logar(){
        // print_r($_POST);
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $resultado = $this->autenticacaoService->logar($email, $senha);

        if ($resultado) {
            $this->redirect(URL_BASE . '/jogadores');
        } else {
            
            $dados['erros'] = 'Voce nao tem conta aqui rapaz';

            $this->view('autenticacao/login', $dados);
            
        }
    }
    
}



//log-out