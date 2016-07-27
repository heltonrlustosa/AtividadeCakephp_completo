<?php

    class PacientesController extends AppController{
        
         public $helpers = array('Form');
         public $components  = array('Flash');
        
        
         public function admin_listar(){
            
            $this->set('pacientes', $this->Paciente->find('all'));
            
        }
        
         public function admin_crud($codigo){
            
            $paciente = $this->Paciente->findById($codigo);
            $this->set('paciente', $paciente);
        }
        
        public function admin_add(){
        
        if(empty($this->request->data)){
            //data vazia => campos para inserção
            
          
            
        }else{
            //Persistir os dados
            if($this->Paciente->save($this->request->data)){
                $this->Flash->set('Paciente inserido com sucesso!');
                $this->redirect(array('action' => 'admin_listar'));
            }
        }
    }
        public function admin_edit($codigo){
        
        if(empty($this->request->data)){
            //data vazia => campos para edição
            
            //carregar os dados para exibição
            $Pacientes = $this->Paciente->find('list', array('fields' => array('id', 'nome')));
            
            //setar na view a váriavel com os dados 
            $this->set('pacientes', $Pacientes);
            
            //recuperar dados atuais
            
            $this->request->data = $this->Paciente->findById($codigo);
            
        }else{
            //Persistir os dados
            if($this->Paciente->save($this->request->data)){
                $this->Flash->set('Paciente editado com sucesso!');
                $this->redirect(array('action' => 'admin_listar'));
            }
        }
    }
        
        public function admin_del($codigo){
            
            $this->Paciente->delete($codigo);
            $this->Flash->set('Paciente excluido com sucesso!');
            $this->redirect(array('action' => 'admin_listar'));
            
        }
        public function index(){
            
            $this->set('pacientes', $this->Paciente->find('all', array('order'=>array('nome'=>'asc'))));
            
        }
        
        public function admin_view(){

            

            $this->set( $this->Paciente->Exame->find('all', array('order'=>array('(Paciente.data) ASC'))));
                //Debugger::dump($);
        
        }
        
        
    
    
    
       public function index_login(){
           
       }
        
        public function login(){
            
            if(!empty($this->data['Paciente']['login'])){
                //validar
                $paciente = $this->Paciente->findAllByLoginAndSenha(
                    $this->data['Paciente']['login'],
                    $this->data['Paciente']['senha']
                );
                //se esta correto
                if(!empty($paciente)){
                    
                    $this->Flash->set('Acesso realizado!');
                    $this->Session->write('Paciente', $paciente);
                    $this->redirect(array('controller' => 'exames', 'action' => 'index'));
                    exit();
                //caso contrario
                }else{
                    
                    $this->Flash->set('Paciente e/ou senha incorreto!');
                    $this->redirect(array('action' => 'index_login'));
                    exit();
            }
        }
    }
        
    public function logout(){
        
        $this->Session->destroy();
        $this->Flash->set('Atividades encerradas!');
        
        $this->redirect(array('action' => 'index_login'));
        exit();
    }
    }
?>