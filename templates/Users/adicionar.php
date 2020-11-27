<h1>Cadastrar usuário</h1>

<?php
    echo $this->Form->create($user, ['action' => 'salvar']);
    echo $this->Form->control('username');
    echo $this->Form->control('password');
    echo $this->Form->button('Cadastrar');
    echo $this->Form->end();
?>