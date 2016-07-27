<?php
    
    class ProcedimentosController extends AppController{
        
        public $helpers = array('Html');
        
        public function admin_listar(){
            
            $this->set('procedimentos', $this->Procedimento->find('all'));
            
        }
       
        public function index(){
            //$this->set('procedimentos', $this->Procedimento->find('all'));
            
            $this->set('procedimentos', $this->Procedimento->find('all', array('order'=>array('nome'=>'asc'))));
            
        }
        
        public function admin_crud($codigo){
            
            $procedimento = $this->Procedimento->findById($codigo);
            $this->set('procedimento', $procedimento);
        }
        
        public function admin_add(){
        
        if(empty($this->request->data)){
            //data vazia => campos para inserção
            
          
            
        }else{
            //Persistir os dados
            if($this->Procedimento->save($this->request->data)){
                $this->Flash->set('Procedimento inserido com sucesso!');
                $this->redirect(array('action' => 'admin_listar'));
            }
        }
    }
        
        public function admin_edit($codigo){
        
        if(empty($this->request->data)){
            //data vazia => campos para edição
            
            //carregar os dados para exibição
            $Procedimentos = $this->Procedimento->find('list', array('fields' => array('id', 'nome')));
            
            //setar na view a váriavel com os dados 
            $this->set('procedimentos', $Procedimentos);
            
            //recuperar dados atuais
            
            $this->request->data = $this->Procedimento->findById($codigo);
            
        }else{
            //Persistir os dados
            if($this->Procedimento->save($this->request->data)){
                $this->Flash->set('Procedimento editado com sucesso!');
                $this->redirect(array('action' => 'admin_listar'));
            }
        }
    }
        
        public function admin_del($codigo){
            
            $this->Procedimento->delete($codigo);
            $this->Flash->set('Procedimento excluido com sucesso!');
            $this->redirect(array('action' => 'admin_listar'));
            
        }
    }
?>