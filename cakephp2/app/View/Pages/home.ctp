<h3>Página inicial</h3>

<span class="notice success">
<?php

    echo $this->Html->link("Área Geral", array('controller' => 'procedimentos', 'action' => 'index'));
?>


</span>


<span class="notice success">
<?php

    echo $this->Html->link("Área do Paciente", array('controller' => 'exames', 'action' => 'index'));
?>


</span>


<span class="notice success">
<?php

    echo $this->Html->link("Área Administrativa", array('controller' => 'pages', 'action' => 'admin'));
?>


</span>

<span class="notice success">
<?php

    echo $this->Html->link("CRUD", array('controller' => 'pages', 'action' => 'crud'));
?>


</span>


<span class="notice success">
<?php

    echo $this->Html->link("Sair do sistema", array('controller' => 'pacientes', 'action' => 'logout'));
?>


</span>