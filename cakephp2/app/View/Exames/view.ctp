

<h1>Relação de exames:</h1>


<table>
    
    <tr>
        
        <th>Procedimento</th>
        <th>Data</th>
       
    </tr>
    
    <?php //Debugger::dump($exames);?>
    
    <?php foreach($exames as $e): ?>
    <tr>
    
        
        <td>
           <?php //foreach($procedimentos as $p): 
                
                //if($p['Procedimento']['id'] == $e['Exame']['procedimento_id']){
                   // echo $p['Procedimento']['nome'];
               // }
            //endforeach; ?>
           <?php echo $e['Procedimento']['nome']; ?>
           <?php //echo $procedimentos['0']['Paciente']['nome'] ?> 
        </td>

        <td>
        
            <?php echo $e['Exame']['data']; ?>
        </td>
        
        
    </tr>
    
    <?php endforeach; ?>
    
</table>

<?php  echo $this->Html->link("Voltar", array('controller' => 'exames', 'action' => 'index')); ?>


