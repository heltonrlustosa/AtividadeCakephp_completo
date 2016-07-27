

<h1>Relação de exames:</h1>


<table>
    
    <tr>
        <th>Data</th>
        <th>Paciente</th>
        <th>Procedimento</th>
        
       
    </tr>
    
    <?php //Debugger::dump($exames);?>
    
    <?php foreach($exames as $e): ?>
    <tr>
    
        <td>
        
            <?php echo $e['Exame']['data']; ?>
        </td>
        
        <td>
            <?php echo $e['Paciente']['nome']; ?>
        </td>
        <td>    
                
          
           <?php echo $e['Procedimento']['nome']; ?>
          
        </td>

        
        
        
    </tr>
    
    <?php endforeach; ?>
    
</table>

 <?php  echo $this->Html->link("Voltar", array('controller' => 'pages', 'action' => 'admin')); ?>


