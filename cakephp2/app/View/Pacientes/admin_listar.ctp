

<h1>Relação de procedimentos:</h1>

<?php

    echo $this->Html->link("Inserir", array( 'controller' => 'pacientes', 'action' => 'admin_add'));
?>



<table>
    
    <tr>
        
        <th>ID</th>
        <th>Nome</th>
        <th>Login</th>
        <th>Senha</th>
        
        
    </tr>
    
    
    <?php foreach($pacientes as $e): ?>
    <tr>
    
        <td>
        
            <?php echo $e['Paciente']['id']; ?>
        </td>
         <td>
        
            <?php echo $this->Html->link( $e['Paciente']['nome'],
                   array('controller' => 'pacientes',
                          'action' => 'admin_crud', $e['Paciente']['id']));
             
             ?>
        </td>
         <td>
        
            <?php echo $e['Paciente']['login']; ?>
        </td>
       
         <td>
        
            <?php echo $e['Paciente']['senha']; ?>
        </td>
        
    </tr>
    
    <?php endforeach; ?>
    
</table>

<?php  echo $this->Html->link("Voltar", array('controller' => 'pages', 'action' => 'crud')); ?>


