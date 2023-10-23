<?php
class produtoModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function criarproduto($nome, $quantidade, $preco) {
        $sql = "INSERT INTO produtos (nome, quantidade, preco) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $quantidade, $preco]);
    }
}