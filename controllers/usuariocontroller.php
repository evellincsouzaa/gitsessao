<?php
require_once '../models/usuarioModel.php';


class usuarioController {
    private $usuarioModel;

    public function __construct($pdo) {
        $this->usuarioModel = new usuarioModel($pdo);
    }

    public function criarusuario($nome, $senha, $email) {
        $this->usuarioModel->criarusuario($nome, $senha, $email);
    }
}