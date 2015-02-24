<?php
/**
 * Created by PhpStorm.
 * User: iridhama
 * Date: 2/24/2015
 * Time: 8:32 PM
 */

class First_Test_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction(){
        /*echo'this is index action of test';


        $product = Mage::getModel('catalog/product')->load(1);
        echo 'name='.$product->name;

        $product->name = $product->name.' New Samsung';
        $product->save();
        echo '<br>name='.$product->name;*/
        
        echo'<br>using collection of magento<br>';
        
        $collections = Mage::getModel('catalog/product')->getCollection();
        $collections->addAttributeToSelect('name');

        foreach($collections as $collection){
            echo '<br>name of product='.$collection->name;
        }
        //echo $collection->getSelect()->__toString(); // for printing sql used for printing product

        /*1. Get product collection only from a specific category.
        2. Get new products since X date.
        3. Get Bestseller products.
        4. Filter product collection by visibility.
        5. Filter products without image.
        6. Add multiple sort orders.*/
        
        
    }
} 