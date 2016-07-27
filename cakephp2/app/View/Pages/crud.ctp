<h1>Implementações de CRUD </h1>


<h3>Paciente:</h3>

<span class="notice success">

    <?php echo $this->Html->link("Verificar pacientes", array('controller' => 'pacientes', 'action' => 'admin_listar'));?>

</span>

<h3>Procedimento:</h3>

<span class="notice success">

    <?php echo $this->Html->link("Verificar procedimentos", array('controller' => 'procedimentos', 'action' => 'admin_listar'));?>

</span>



<h3>Exame:</h3>

<span class="notice success">

    <?php echo $this->Html->link("Verificar exames", array('controller' => 'exames', 'action' => 'admin_listar'));?>

</span>


<?php  echo $this->Html->link("Voltar", array('controller' => 'pages', 'action' => 'home')); ?>