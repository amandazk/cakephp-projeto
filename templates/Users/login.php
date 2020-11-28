<h1>Acesso ao sistema</h1>

<?php
    echo $this->Form->create();
    echo $this->Form->control('username');
    echo $this->Form->control('password');
    echo $this->Form->button('Acessar');
    echo $this->Form->end();    

?>