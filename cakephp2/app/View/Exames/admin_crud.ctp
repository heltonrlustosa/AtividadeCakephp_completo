<h1> Dados do Exame:</h1>

    <p>ID: <?php echo $exame['Exame']['id']?></p>
    <p>Paciente id: <?php echo $exame['Exame']['paciente_id']?></p>
    <p>Procedimento id: <?php echo $exame['Exame']['procedimento_id']?></p>
    <p>Data: <?php echo $exame['Exame']['data']?></p>

    <?php 
        echo $this->Html->link("Editar", array('controller' => 'exames', 'action' => 'admin_edit', $exame['Exame']['id']));
        echo $this->Html->link("Excluir", array('controller' => 'exames', 'action' => 'admin_del', $exame['Exame']['id']), array('confirm' => 'Deseja Excluir?'));
        echo $this->Html->link("Voltar", array('controller' => 'exames', 'action' => 'admin_listar'));
    ?>