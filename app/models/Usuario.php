<?php

namespace app\models;

use DateTimeImmutable;

class Usuario
{
    private int $id;
    private string $nomeUsuario;
    private string $email;
    private string $senha;
    private string $perfil;
    private DateTimeImmutable $criadoEm;

    public function __construct(int $id = 0, string $nomeUsuario = '', string $email = '', string $senha = '', string $perfil = 'user')
    {
        $this->id = $id;
        $this->nomeUsuario = $nomeUsuario;
        $this->email = $email;
        $this->senha = $senha;
        $this->perfil = $perfil;
        $this->criadoEm = new DateTimeImmutable();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getNomeUsuario(): string
    {
        return $this->nomeUsuario;
    }

    public function setNomeUsuario(string $nomeUsuario): self
    {
        $this->nomeUsuario = $nomeUsuario;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function setSenha(string $senha): self
    {
        $this->senha = $senha;

        return $this;
    }

    public function getPerfil(): string
    {
        return $this->perfil;
    }

    public function setPerfil(string $perfil): self
    {
        $this->perfil = $perfil;

        return $this;
    }

    public function getCriadoEm(): DateTimeImmutable
    {
        return $this->criadoEm;
    }

    public function setCriadoEm(DateTimeImmutable $criadoEm): self
    {
        $this->criadoEm = $criadoEm;

        return $this;
    }
}