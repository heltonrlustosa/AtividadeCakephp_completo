

<h1>Relação de exames:</h1>


<table>
    
    <tr>
        <th>Paciente</th>
        
        <th>Procedimento</th>
        <th>Valor total</th>
        <th>Quantidade</th>
        
       
    </tr>
    
    <?php //Debugger::dump($exames);?>
    
    <?php foreach($exames as $e): ?>
    <tr>
    
        <td>
        
            <?php echo $e['pacientes']['nome']; ?>
        </td>
        
        <td>
            <?php echo $e['procedimentos']['nome']; ?>
        </td>
        <td>    
                
          
           <?php echo $e[0]['total_procedimento']; ?>
          
        </td>
        
          <td>    
                
          
           <?php echo $e[0]['num_exames']; ?>
          
        </td>

        
        
        
    </tr>
    
    <?php endforeach; ?>
    
</table>

 <?php  echo $this->Html->link("Voltar", array('controller' => 'pages', 'action' => 'admin')); ?>


