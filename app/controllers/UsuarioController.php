<?php

namespace app\controllers;

use app\helper\Validador;
use app\core\Controller;
use app\models\Usuario;
use app\services\UsuarioService;

class UsuarioController extends Controller
{
    private UsuarioService $service;

    public function __construct() {
        $this->service = new UsuarioService();
    }

    public function index() {
        $data['usuarios'] = $this->service->getUsuarios();
        $this->view('usuarios/usuario_list', $data);
    }

    public function editar() {
        $id = $_GET['id'];
        $data['usuario'] = $this->service->getUsuarioById($id);
        $this->view('usuarios/usuario_edit', $data);
    }

    public function atualizar() {
        $usuario = new Usuario(
            $_POST['id'], 
            $_POST['nomeUsuario'], 
            $_POST['email'], 
            $_POST['senha'] ?? '', 
            $_POST['perfil']
        );
        $this->service->updateUsuario($usuario);
        $this->redirect(URL_BASE . '/usuarios');
    }

    public function cadastrar() {
        $this->view('usuarios/usuario_create');
    }

    public function excluir() {
        $id = $_GET['id'];
        $this->service->deleteUsuario($id);
        $this->redirect(URL_BASE . '/usuarios');
    }

    public function salvar() {

        $validador = new Validador();
        
        //sanitizar os dados
    
        $nomeUsuario = error_log(filter_input(INPUT_POST, $_POST['nomeUsuario'], FILTER_SANITIZE_SPECIAL_CHARS));
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $perfil = $_POST['perfil'];

        //validar os dados

        $validador->obrigatorio('nomeUsuario', $nomeUsuario);
        $validador->obrigatorio('email', $email);

        if ($validador->temErros()) {
            $data['usuario'] = $_POST;
            $data['erros'] = $validador->getErros();

            $this->view('usuarios/usuario_create', $data);

            return;
        }

        //salvar

        $usuario = new Usuario(
            0, 
            $nomeUsuario, 
            $email, 
            $senha, 
            $perfil
        );

        if ($this->service->saveUsuario($usuario)) {
            $this->redirect(URL_BASE . '/usuarios');
        } else {
            // Aqui você poderia passar uma mensagem de erro para a view
            echo "Erro: Este e-mail já está cadastrado!";
        }
    }
}