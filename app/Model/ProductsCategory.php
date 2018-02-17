<?php
class ProductsCategory extends AppModel{
    
    public $uses = 'ProductsCategory';
    public $primaryKey = 'products_categories_id';
    public $hasMany = array(
        // 'ProductsCategory' => array(
        //     'className' => 'ProductsCategory',
        //     'foreignKey' => 'primary_categories_id'
        // )
    );
//    
   public $belongsTo = array(
       'Product' => array(
   'className' => 'Product',
   'foreignKey' => 'products_id')
   );
}