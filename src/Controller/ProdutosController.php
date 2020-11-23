<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;

class ProdutosController extends AppController {

    public function index() {
        $produtosTable = TableRegistry::getTableLocator()->get('Produtos');

        $produtos = $produtosTable->find('all');

        // pra mandar uma variável pra visualização
        $this->set('produtos', $produtos);
    }

    public function novo() {
        
    }
}
