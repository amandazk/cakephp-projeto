<?php
namespace App\Controller;

class ProdutosController extends AppController {

    public function index() {
        $msg = "BEM VINDO AO CAKE";

        // pra mandar uma variável pra visualização
        $this->set('msg', $msg);
    }
}
?>