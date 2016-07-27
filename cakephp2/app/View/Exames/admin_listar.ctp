

<h1>Relação de exames:</h1>


<table>
    
    <tr>
        
        <th>ID</th>
        <th>ID do Paciente</th>
        <th>ID do Procedimento</th>
        <th>Data</th>
        
        
    </tr>
    
    
    <?php foreach($exames as $e): ?>
    <tr>
    
        
         <td>
        
            <?php echo $this->Html->link( $e['Exame']['id'],
                   array('controller' => 'exames',
                          'action' => 'admin_crud', $e['Exame']['id']));
             
             ?>
        </td>
         <td>
        
            <?php echo $e['Exame']['paciente_id']; ?>
        </td>
       
         <td>
        
            <?php echo $e['Exame']['procedimento_id']; ?>
        </td>
        
        <td>
        
            <?php echo $e['Exame']['data']; ?>
        </td>
        
    </tr>
    
    <?php endforeach; ?>
    
</table>

<?php  echo $this->Html->link("Voltar", array('controller' => 'pages', 'action' => 'crud')); ?>


