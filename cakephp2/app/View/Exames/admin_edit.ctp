<h1>Editar exame</h1>


<?php
    
    echo $this->Form->create('Exame');
    echo $this->Form->input('id');
    echo $this->Form->hidden('paciente_id');
    echo $this->Form->hidden('procedimento_id');
    echo $this->Form->input('data');

    
    echo $this->Form->end('Salvar');

?>