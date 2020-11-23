<?php
    // helper para criar formulario
    echo $this->Form->create($produto, ['action' => 'salva']); // primeiro parâmetro é o que quero inserir
    echo $this->Form->input('nome');
    echo $this->Form->input('preco');
    echo $this->Form->input('descricao');
    echo $this->Form->end();


?>