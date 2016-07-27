<h3>Área administrativa</h3>

<span class="notice success">
<?php

    echo $this->Html->link("Exames solicitados", array('controller' => 'exames', 'action' => 'admin_view'));
?>


</span>


<span class="notice success">
<?php

    echo $this->Html->link("Lista de Pacientes", array('controller' => 'pacientes', 'action' => 'index'));
?>


</span>


<span class="notice success">
<?php

    echo $this->Html->link("Total de exames", array('controller' => 'exames', 'action' => 'admin_total_view'));
?>


</span>





<?php  echo $this->Html->link("Voltar", array('controller' => 'pages', 'action' => 'home')); ?>