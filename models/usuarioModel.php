<?php
class usuarioModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function criarusuario($nome, $senha, $email) {
        $sql = "INSERT INTO usuarios (nome, senha, email) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $senha, $email]);
    }
}