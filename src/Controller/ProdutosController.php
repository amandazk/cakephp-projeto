<?php
namespace App\Controller;

class ProdutosController extends AppController {

    public function index() {
        $produto = ["id" => 1, "nome" => "HD 20gb", "preco" => 59.99, "descricao" => "HD 20gb da HP"];

        // pra mandar uma variável pra visualização
        $this->set('produto', $produto);
    }
}
?>