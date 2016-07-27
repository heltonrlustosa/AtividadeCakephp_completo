<h1> Dados do paciente</h1>

    <p>ID: <?php echo $paciente['Paciente']['id']?></p>
    <p>Nome: <?php echo $paciente['Paciente']['nome']?></p>
    <p>Login: <?php echo $paciente['Paciente']['login']?></p>
    <p>Senha: <?php echo $paciente['Paciente']['login']?></p>

    <?php 
        echo $this->Html->link("Editar", array('controller' => 'pacientes', 'action' => 'admin_edit', $paciente['Paciente']['id']));
        echo $this->Html->link("Excluir", array('controller' => 'pacientes', 'action' => 'admin_del', $paciente['Paciente']['id']), array('confirm' => 'Deseja Excluir?'));
        echo $this->Html->link("Voltar", array('controller' => 'pacientes', 'action' => 'admin_listar'));
    ?>
    
    
  