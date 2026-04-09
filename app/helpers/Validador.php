<?php

namespace app\helper;

class Validador{
    private array $erros = [];

    //validacoes

    public function obrigatorio(string $campo, mixed $valor, ?string $mensagem = null){
        if (empty($valor) && $valor !== '0') {
            $this->erros['campo'] = $mensagem ?? "O campo {$campo} e obrigatorio!!";
        }

        return $this;
    }

    public function temErros() : bool{
        return !empty($this->erros);
    }

    public function getErros(){
        return $this->erros;
    }
}