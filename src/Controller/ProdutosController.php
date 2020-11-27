<?php
namespace App\Controller;

use App\Model\Table\ProdutosTable;
use Cake\ORM\TableRegistry;

class ProdutosController extends AppController {

    public function index() {
        //ele busca automaticamente uma view com o nome da função
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
        $dados = $this->request->getData();
        $produto = $produtosTable -> newEmptyEntity($dados);
        if ($produtosTable->save($produto)) {
            $msg = "Produto salvo com sucesso";
            $this->Flash->set($msg, ['element' => 'success']);
        } else {
            $msg = "Não foi possível salvar o produto";
            $this->Flash->set($msg, ['element' => 'error']);
        }
        // print_r($this->request->getData()); exit;
        //pra disponibilizar a msg pra view (salva.php)
        // $this->set('msg', $msg);
        $this->redirect('Produtos/index');
    }

    public function editar($id) {
        $produtosTable = TableRegistry::getTableLocator()->get('Produtos');
        $produto = $produtosTable->get($id);
        $this->set('produto', $produto);
        $this->render('novo');
    }

    public function excluir($id) {
        $produtosTable = TableRegistry::getTableLocator()->get('Produtos');
        $produto = $produtosTable->get($id);
        if ($produtosTable->delete($produto)) {
            $msg = "Produto excluído com sucesso";
            $this->Flash->set($msg, ['element' => 'error']);
        } else {
            $msg = "Não foi possível excluir o produto";
            $this->Flash->set($msg);
        }
        $this->redirect('Produtos/index');
    }
}

