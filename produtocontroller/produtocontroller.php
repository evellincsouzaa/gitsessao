<?php
require_once '../models/produtoModel.php';


class produtoController {
    private $produtoModel;

    public function __construct($pdo) {
        $this->produtoModel = new produtoModel($pdo);
    }

    public function criarproduto($nome, $quantidade, $preco) {
        $this->produtoModel->criarproduto($nome, $quantidade, $preco);
    }
}