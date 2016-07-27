<span class="notice success">
<?php

    echo $this->Html->link("Visualizar exames solicitados", array('class' => 'button', 'controller' => 'exames', 'action' => 'view'));
?>


</span>

<h1>Solicitar exame:</h1>


<?php


    $usuario = $this->Session->read('Paciente');
               // Debugger::dump($usuario);
                
    
    echo $this->Form->create('Exame');
   
    echo $this->Form->hidden('paciente_id', ['value' => $usuario['0']['Paciente']['id']]);
    echo $this->Form->select('procedimento_id', $procedimentos, array('empty' => 'Selecione: '));
    echo $this->Form->input('data');
    
    echo $this->Form->end('Salvar');

    

?>

<span class="notice success">
<?php

    echo $this->Html->link("Sair do sistema", array('controller' => 'pacientes', 'action' => 'logout'));
?>


</span>


<?php  echo $this->Html->link("Voltar e continuar logado", array('controller' => 'pages', 'action' => 'home')); ?>