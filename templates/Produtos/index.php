<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Preço com Desconto</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($produtos as $produto) {
        ?>
            <tr>
                <td><?= $produto['id']; ?></td>
                <td><?= $produto['nome']; ?></td>
                <td><?= $this->Money->format($produto['preco']); ?></td>
                <td><?= $this->Money->format($produto->calculaDesconto()); ?></td>
                <td><?= $produto['descricao']; ?></td>
                <td>
                    <?php
                    echo $this->Html->Link(
                        'Editar',
                        [
                            'controller' => 'produtos',
                            'action' => 'editar',
                            $produto['id']
                        ]
                    );
                    ?>
                    <?php
                    echo $this->Form->postLink(
                        'Excluir', // pra não passar nenhum dado na url e qualquer um poder copiar o link e excluir sem querer  
                        [
                            'controller' => 'produtos',
                            'action' => 'excluir',
                            $produto['id']
                        ],
                        ['confirm' => 'Deseja mesmo excluir esse produto ' . $produto['nome'] . '?']
                    );
                    ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php
// helper para fazer um link com o controller
echo $this->Html->Link('Novo Produto', ['controller' => 'produtos', 'action' => 'novo']);

?>