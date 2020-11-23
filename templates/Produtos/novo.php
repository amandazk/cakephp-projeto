<?php
    // helper para criar formulario
    echo $this->Form->create($produto, ['action' => 'salva']); // primeiro parâmetro é o que quero inserir
    echo $this->Form->control('nome');
    echo $this->Form->control('preco');
    echo $this->Form->control('descricao');
    echo $this->Form->end();


?>