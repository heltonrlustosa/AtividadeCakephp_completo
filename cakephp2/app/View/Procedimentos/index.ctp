

<h1>Relação de Procedimentos:</h1>


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
                         
                          'action' => 'view', $e['Procedimento']['nome']));
             
             ?>
        </td>

        <td>
        
            <?php echo $e['Procedimento']['preco']; ?>
        </td>
    </tr>
    
    <?php endforeach; ?>
    
</table>

<?php  echo $this->Html->link("Voltar", array('controller' => 'pages', 'action' => 'home')); ?>


