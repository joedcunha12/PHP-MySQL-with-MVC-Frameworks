<?php
class ProductsController1 extends AppController{
    var $uses = array('Product');

    public function index(){

        if($this->request->is('post')){

            switch(true){
                case isset($this->request->data['add']):

                    $this->Product->clear();
                    $this->Product->create();
                    $this->Product->save($this->request->data);
                    $new_product_id = $this->Product->id;
                    $this->session->setFlash("New Product Saved successfully. product id: " . $new_product_id);

                    break;

                    case isset($this->request->data['update']):
                        $product_id = $this->request->data['product_id'];
                        $price = $this->request->data['price'];
                        $this->Product->read(null,$product_id)

                        $this->Product->set('price',$price);
                        $this->Product->save();
                        $this->Session->setFlash("Product data updated successfully");
                        break;

                        case isset($this->request->data['delete']);

                        $product_id = $this->request->data['product_id'];
                        $this->Product->delete($product_id);
                        $this->Session->setFlash("Product data Deleted successfully");
                        break;
            }
            	//redirect to display action
			//$this->redirect(array('controller'=>'students','action'=>'display'));
        }

        $product_records = $this->Product->find('all');
        $this->set('products',$product_records);
        $this->set('title','products Home');
        $this->layout = 'custom_layout';
    }
}
?>