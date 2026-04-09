<?php

namespace app\services;

use app\repositories\UsuarioRepository;

class AutenticacaoService{

    private UsuarioRepository $usuarioRepository;

    public function __construct()
    {
        $this->usuarioRepository = new UsuarioRepository();
    }

    public function logar(string $email, string $senha): bool {
        $usuario = $this->usuarioRepository->getUsuarioByEmail($email);

        print_r($usuario);
        die;
    }

}