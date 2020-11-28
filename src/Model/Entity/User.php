<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class User extends Entity {

    protected $_accessible = [
        '*' => true,
        'id' => false // não quero que o id seja acessado por qualquer um
    ];

    public function _setPassword($password) {
        return (new DefaultPasswordHasher())->hash($password);
    }
}

?>