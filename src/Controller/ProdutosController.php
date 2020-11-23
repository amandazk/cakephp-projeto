<?php
namespace App\Controller;

class ProdutosController extends AppController {

    public function index() {
        $produtos = [];
        $produtos[]= ["id" => 1, "nome" => "HD 20gb", "preco" => 59.99, "descricao" => "HD 20gb da HP"];
        $produtos[] = ["id" => 2, "nome" => "SSD 120gb", "preco" => 149.99, "descricao" => "SSD 120gb da WD"];

        // pra mandar uma variável pra visualização
        $this->set('produtos', $produtos);
    }
}
