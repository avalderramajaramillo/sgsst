
<h1>Add a new organigrama</h1> 
<?php 
	echo $this->Html->link('Back',array('action'=>'index'));
    echo $this->Form->create('Organigrama'); 
    echo $this->Form->input('parent_id',array('label'=>'Parent')); 
    echo $this->Form->input('cargo',array('label'=>'Name')); 
    echo $this->Form->end('Add'); 
    
?>