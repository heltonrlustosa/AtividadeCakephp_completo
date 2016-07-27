<?php
    
    class ExamesController extends AppController{
        
        public $helpers = array('Html', 'Form');
        public $components = array('Flash');
        
        
        public function admin_listar(){
            
            $this->set('exames', $this->Exame->find('all'));
            
        }
        
        public function admin_crud($codigo){
            
            $exame = $this->Exame->findById($codigo);
            $this->set('exame', $exame);
        }
        
        public function admin_edit($codigo){
        
        if(empty($this->request->data)){
            //data vazia => campos para edição
            
            //carregar os dados para exibição
            $Exames = $this->Exame->find('list', array('fields' => array('id')));
            
            //setar na view a váriavel com os dados 
            $this->set('exames', $Exames);
            
            //recuperar dados atuais
            
            $this->request->data = $this->Exame->findById($codigo);
            
        }else{
            //Persistir os dados
            if($this->Exame->save($this->request->data)){
                $this->Flash->set('Exame editado com sucesso!');
                $this->redirect(array('action' => 'admin_listar'));
            }
        }
    }
        
        public function admin_del($codigo){
            
            $this->Exame->delete($codigo);
            $this->Flash->set('Exame excluido com sucesso!');
            $this->redirect(array('action' => 'admin_listar'));
            
        }
       public function view(){
            //$this->set('procedimentos', $this->Procedimento->find('all'));
           
            $usuario = $this->Session->read('Paciente');  
            
          
            $this->set('exames', $this->Exame->find('all', array('order'=>array('data'=>'desc', 'Procedimento.nome'=>'asc'), 'conditions'=>array('paciente_id =' => $usuario['0']['Paciente']['id']))));
           
          // $this->set('procedimentos', $this->Exame->find('all'));
           
           //carregar os dados para exibição
           // $procedimentos = $this->Exame->Procedimento->find('list', array('fields' => array('id', 'nome')));
           // Debugger::dump($procedimentos);
            //setar na view a váriavel com os dados do 
            //$this->set('procedimentos', $procedimentos);
            
        }
        
        public function admin_view(){
            
            $this->set('exames', $this->Exame->find('all', array('order'=>array('data'=>'desc'))));
        }
        
        public function admin_total_view(){
            
            $this->set('exames', $this->Exame->query('SELECT pacientes.id, pacientes.nome, procedimentos.id, procedimentos.nome, SUM(procedimentos.preco) total_procedimento, COUNT(exames.id) as num_exames FROM pacientes, procedimentos, exames WHERE exames.paciente_id = pacientes.id AND exames.procedimento_id = procedimentos.id GROUP BY pacientes.id, pacientes.nome, procedimentos.id, procedimentos.nome'));
           
        }
        
        public function index(){
        
        if(empty($this->request->data)){
            //data vazia => campos para inserção
            
            //carregar os dados para exibição
            $procedimentos = $this->Exame->Procedimento->find('list', array('fields' => array('id', 'nome')));
            
            //setar na view a váriavel com os dados do 
            $this->set('procedimentos', $procedimentos);
            
        }else{
            //Persistir os dados
            if($this->Exame->save($this->request->data)){
                $this->Flash->set('Exame inserido com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    
       
        
        public function edit($codigo){
        
        if(empty($this->request->data)){
            //data vazia => campos para edição
            
            //carregar os dados para exibição
            $procedimentos = $this->Exame->Procedimento->find('list', array('fields' => array('id', 'nome')));
            
            //setar na view a váriavel com os dados do estado
            $this->set('procedimentos', $procedimentos); 
            
            //recuperar dados atuais
            
            $this->request->data = $this->Exame->findById($codigo);
            
        }else{
            //Persistir os dados
            if($this->Exame->save($this->request->data)){
                $this->Flash->set('Exame editado com sucesso!');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
        
        public function del($codigo){
            
            $this->Exame->delete($codigo);
            $this->Flash->set('Exame excluido com sucesso!');
            $this->redirect(array('action' => 'index'));
            
        }
    }

   
?>