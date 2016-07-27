

<h1>Relação de procedimentos:</h1>

<?php

    echo $this->Html->link("Inserir", array( 'controller' => 'procedimentos', 'action' => 'admin_add'));
?>



<table>
    
    <tr>
        
        <th>ID</th>
        <th>Nome</th>
        <th>Preço</th>
        
    </tr>
    
    
    <?php foreach($procedimentos as $e): ?>
    <tr>
    
        <td>
        
            <?php echo $e['Procedimento']['id']; ?>
        </td>
         <td>
        
            <?php echo $this->Html->link( $e['Procedimento']['nome'],
                   array('controller' => 'procedimentos',
                          'action' => 'admin_crud', $e['Procedimento']['id']));
             
             ?>
        </td>
         <td>
        
            <?php echo $e['Procedimento']['preco']; ?>
        </td>
       
        
        
    </tr>
    
    <?php endforeach; ?>
    
</table>

<?php  echo $this->Html->link("Voltar", array('controller' => 'pages', 'action' => 'crud')); ?>


