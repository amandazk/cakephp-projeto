<?php
namespace App\Controller;

use Cake\ORM\TableRegistry;
use App\Model\Table\UsersTable;
use Cake\Event\EventInterface;

class UsersController extends AppController {

    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->Auth->allow(['adicionar', 'salvar']);
    }

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
            
        if($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) { // se encontrar um usuário
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->set('Usuário ou senha inválido', ['element' => 'error']);
            }
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
}
