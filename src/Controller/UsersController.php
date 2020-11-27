<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;
use App\Model\Table\UsersTable;


class UsersController extends AppController {

    public function adicionar() {

        $userTable = TableRegistry::getTableLocator()->get('Users');
        $user = $userTable->newEmptyEntity();

        $this->set('user', $user);
    }

    public function salvar() {

        $userTable = TableRegistry::getTableLocator()->get('Users');
        $user = $userTable -> newEmptyEntity($this->request->getData());
        if ($userTable->save($user)) {
            $msg = "Usuário salvo com sucesso";
            $this->Flash->set($msg, ['element' => 'success']);
        } else {
            $msg = "Não foi possível salvar o usuário";
            $this->Flash->set($msg, ['element' => 'error']);
        }
        // print_r($this->request->getData()); exit;
        $this->redirect('Users/adicionar');
    }

    public function login() {

        $userTable = TableRegistry::getTableLocator()->get('Users');
        $user = $userTable -> newEmptyEntity($this->request->getData());

        $this->set('user', $user);
    }
}

?>