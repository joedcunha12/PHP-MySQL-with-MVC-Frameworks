<?php
class ProductsController extends AppController{
	var $uses = array('Product');
		
	public function index(){

		if($this->request->is('post')){ //check if data is posted
			switch(true){
				case isset($this->request->data['add']):
					//Use the request object directly to save data as
					//the html field names exactly matches with the table
					//field names
					$this->Product->clear();
					$this->Product->create();
					$this->Product->save($this->request->data);
					$new_product_id = $this->Product->id;
					$this->Session->setFlash("New Product saved successfully. Product id: " . $new_product_id);
					
					break;
				//Update data
				case isset($this->request->data['update']):
					//get submitted data from request object
					$product_id = $this->request->data['product_id'];
					$price = $this->request->data['price'];
					$this->Product->read(null,$product_id); //load the record in Model array
		
					$this->Product->set('price',$price); //set the price
					$this->Product->save();
					$this->Session->setFlash("Product data updated successfully");
					break;
					
				//Delete data
				case isset($this->request->data['delete']):
				
					$product_id = $this->request->data['product_id'];
					$this->Product->delete($product_id);
					$this->Session->setFlash("Product data Deleted successfully");
					break;					
			}

			//redirect to display action
			//$this->redirect(array('controller'=>'students','action'=>'display'));
		}//end of is('post')
		
		$product_records = $this->Product->find('all');
		//set products data
		$this->set('products',$product_records);
		//set title
		$this->set('title' , 'Products Home');		
		//use custom layout
		$this->layout = 'custom_layout';
		
	}//end of index()
}//end of class ProductsController

?>