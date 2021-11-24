<!-- <?php
echo $this->Form->create();
echo "Creating select (drop-down)...<br>";
echo $this->Form->input('relation1',array('type' => 'select',
										 'options' => $select_options));

echo '<hr>';
echo "Creating radio buttons....<br>";			 
echo $this->Form->input('relation2',array('type' => 'radio',
										 'options' => $select_options));											
echo '<hr>';
echo "Creating checkboxes...<br>";
echo $this->Form->input('relation3',array('type' => 'select',
										 'multiple' => 'checkbox',
										 'options' => $select_options));
					
echo $this->Form->end('Submit');
?> -->

<?php
echo $this->Form->create();
echo "Creating select (drop-down)...<br>";
echo $this->Form->input('relation1',array('type' => 'select',
                                         'options' => $select_options));

echo '<hr>';
echo "Creating radio Button...<br>";
echo $this->Form->input('relation2',array('type' => 'radio',
                                         'options' => $select_options));									 
echo '<hr>';
echo "Creating checkboxes...<br>";
echo $this->Form->input('relation3',array('type' => 'select',
'multiple' => 'checkbox',
									'options' => $select_options));

echo $this->Form->end('Submit');
?>