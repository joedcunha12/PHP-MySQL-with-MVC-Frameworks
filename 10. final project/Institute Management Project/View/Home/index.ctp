<?php 

echo $this->Html->link('Institutes',array('controller' => 'institutes','action' => 'index'),
											array('style' => 'padding:5px'));
echo $this->Html->link('Students',array('controller' => 'students','action' => 'index'),
											array('style' => 'padding:5px'));
echo $this->Html->link('Courses',array('controller' => 'courses','action' => 'index'),
											array('style' => 'padding:5px'));
echo $this->Html->link('Users',array('controller' => 'users','action' => 'index'),
											array('style' => 'padding:5px'));											

?>
