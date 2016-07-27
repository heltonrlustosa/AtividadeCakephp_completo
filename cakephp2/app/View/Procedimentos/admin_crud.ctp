<h1> Dados do procedimento</h1>

    <p>ID: <?php echo $procedimento['Procedimento']['id']?></p>
    <p>Nome: <?php echo $procedimento['Procedimento']['nome']?></p>
    <p>Preço: <?php echo $procedimento['Procedimento']['preco']?></p>

    <?php 
        echo $this->Html->link("Editar", array('controller' => 'procedimentos', 'action' => 'admin_edit', $procedimento['Procedimento']['id']));
        echo $this->Html->link("Excluir", array('controller' => 'procedimentos', 'action' => 'admin_del', $procedimento['Procedimento']['id']), array('confirm' => 'Deseja Excluir?'));
        echo $this->Html->link("Voltar", array('controller' => 'procedimentos', 'action' => 'admin_listar'));
    ?>
    
    
  