<?php
namespace App\Controller;

use App\Model\Table\ProdutosTable;
use Cake\ORM\TableRegistry;

class ProdutosController extends AppController {

    public function index() {
        $produtosTable = TableRegistry::getTableLocator()->get('Produtos');

        $produtos = $produtosTable->find('all');

        // pra mandar uma variável pra visualização
        $this->set('produtos', $produtos);
    }

    public function novo() {
        $produtosTable = TableRegistry::getTableLocator()->get('Produtos');
        $produto = $produtosTable -> newEmptyEntity();
        $this->set('produto', $produto);
    }

    public function salva() {
        $produtosTable = TableRegistry::getTableLocator()->get('Produtos');
        $produto = $produtosTable -> newEmptyEntity($this->request->getData());
        if ($produtosTable->save($produto)) {
            $msg = "Produto salvo com sucesso :)";
        } else {
            $msg = "Não foi possível salvar o produto";
        }
        //pra disponibilizar a msg pra view (salva.php)
        $this->set('msg', $msg);
    }
}

