<?php
App::uses('AppModel', 'Model');
    class OrganigramasController extends AppController { 
        var $name = 'Organigramas';
        var $helpers = array( 'Javascript'); 
         /**
        * Components
        *
        * @var array
        */
    	public $components = array('Paginator');

        /**
        * index method
        *
        * @return void
        */
              
        public function index() { 
         	$this->Organigrama->recursive = 0;
 			$this->set('organigramas', $this->Paginator->paginate());
            //$organigramas = $this->Organigrama->generateTreeList(null, null, null, '&nbsp;&nbsp;&nbsp;'); 
            
            $this->set(compact('organigramas')); 
            // reorder(array('id' => null, 'field' => $organigramas->displayField, 'order' => 'ASC', 'verify' => true));
        }
        public function view($id = null) {
			if (!$this->Organigrama->exists($id)) {
				throw new NotFoundException(__('Invalid organigramas'));
			}
			$options = array('conditions' => array('Organigrama.' . $this->Organigrama->primaryKey => $id));
			$this->set('organigrama', $this->Organigrama->find('first', $options));
		} 
        public function add() { 
            if (!empty($this -> data) ) { 
                $this->Organigrama->save($this -> data); 
                $this->Session->setFlash('A new organigrama has been added'); 
                $this->redirect(array('action' => 'index')); 
            } else { 
                $parents[0] = "[Top]"; 
                $organigramas = $this->Organigrama->generateTreeList(null,null,null," - "); 
                if($organigramas) { 
                    foreach ($organigramas as $key=>$value) 
                    $parents[$key] = $value; 
                } 
                $this->set(compact('parents')); 
            } 
        }
        public function edit($id=null) { 
            if (!empty($this->data)) { 
                if($this->Organigrama->save($this->data)==false) 
                $this->Session->setFlash('Error saving Node.'); 
                $this->redirect(array('action'=>'index')); 
            } else { 
                if($id==null) die("No ID received"); 
                $this->data = $this->Organigrama->read(null, $id); 
                $parents[0] = "[ Top ]"; 
                $organigramas = $this->Organigrama->generateTreeList(null,null,null," - "); 
                if($organigramas) 
                foreach ($organigramas as $key=>$value) 
                $parents[$key] = $value; 
                $this->set(compact('parents')); 
            } 
        }
        public function delete($id=null) { 
            if($id==null) 
            die("No ID received"); 
            $this->Organigrama->id=$id; 
            if($this->Organigrama->removeFromTree($id,true)==false) 
            $this->Session->setFlash('The Organigrama could not be deleted.'); 
            $this->Session->setFlash('Organigrama has been deleted.'); 
            $this->redirect(array('action'=>'index')); 
        }
        // Función para organizar las categorías
        public function organizar() {}
        
        public function getnodes() {
           Configure::write('debug', 0);
           // obtener el identificador del padre que se envío por POST vía Ajax
           $parent = intval($this->params['form']['node']);
           // encontrar los hijos directos del nodo anterior
           $nodes = $this->Organigrama->children($parent, true, null, 'Organigrama.lft ASC');
        
           $this->set(compact('nodes'));
        
           $this->render('getnodes', 'ajax');
        }
        
        public function reorder(){
           Configure::write('debug', 0);
        
           // delta es la diferencia en la posición (1 = nodo siguiente, -1 = nod anterior)
           $node = intval($this->params['form']['node']);
           $delta = intval($this->params['form']['delta']);
        
           if ($delta > 0) {
              $this->Organigrama->movedown($node, abs($delta));
           } elseif ($delta < 0) {
              $this->Organigrama->moveup($node, abs($delta));
           }
        
           exit('1');
        }
        
        public function reparent(){
           Configure::write('debug', 0);
        
           $node = intval($this->params['form']['node']);
           $parent = intval($this->params['form']['parent']);
           $position = intval($this->params['form']['position']);
        
           // guardamos el nuevo padre de la categoría
           $this->Organigrama->id = $node;
           $this->Organigrama->saveField('parent_id', $parent);
        
           // Si position == 0, nos movemos al inicio.
           // En otro caso, calculamos la distancia que nos moveremos ($delta).
           if ($position == 0) {
              $this->Organigrama->moveup($node, true);
           } else {
              $count = $this->Organigrama->childcount($parent, true);
              $delta = $count - $position - 1;
              if ($delta > 0) {
                 $this->Organigrama->moveup($node, $delta);
              }
           }
        
           exit('1');
        }
    } 
?>