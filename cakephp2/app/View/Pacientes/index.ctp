<h1>Relação de Pacientes:</h1>


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
        
            <?php echo $e['Paciente']['nome']; ?>
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


<?php  echo $this->Html->link("Voltar", array('controller' => 'pages', 'action' => 'admin')); ?>