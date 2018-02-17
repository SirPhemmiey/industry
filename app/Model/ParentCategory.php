<?php
class ParentCategory extends AppModel{
    
    public $uses = 'ParentCategory';
    public $primaryKey = 'parent_categories_id';
     public $hasMany = array(
     'PrimaryCategory' => array(
     'className' => 'PrimaryCategory',
       'foreignKey' => 'primary_categories_id'),
       'Product' => array(
       	'className' => 'Product',
        'foreignKey' => 'parent_categories_id') 
     );
//    public $hasandBelongToMany = array(
//        'className' => 'PrimaryCategory',
//        'joinTable' => 'Product',
//        'foreignKey' => 'products_categories_id',
//        'associationForeignKey' => 'primary_categories_id',
//        'unique' => true
//    )
        public function beforeSave($options = array()){
    $this->data[$this->alias]['date'] = date("Y-m-d");
    return true;
   }
}