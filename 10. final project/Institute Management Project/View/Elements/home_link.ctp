<?php 
echo $this->Html->image("home.png", array(
	"alt" => "Home",
	'url' => array('controller'=>'home','action' => 'index'),
	'style' => 'height:30px;width:30px;padding:2px'
));
?>