<?php
class Product extends AppModel{
    
    public $uses = 'Product';
    //var $belongTo = 'PrimaryCategory';
    public $primaryKey = 'products_id';
   public $belongsTo = array(
     'PrimaryCategory' => array(
       'className' => 'PrimaryCategory',
       'foreignKey' => 'primary_categories_id'),
       'Company'  => array(
         'className' => 'Company',
         'foreignKey' => 'companies_id'),
       'ParentCategory' => array(
         'className' => 'ParentCategory',
         'foreignKey' => 'parent_categories_id')
     ); 
   // public $hasMany = array(
   //     'ProductsCategory' => array(
   // 'className' => 'ProductsCategory',
   // 'foreignKey' => 'primary_categories_id')
   // );

   // public $belongsTo = array(
   //  'ParentCategory' => array(
   //    'className' => 'ParentCategory',
   //    'foreignKey' => 'parent_categories_id'));
//       public $hasandBelongToMany = array(
//           'PrimaryCategory' => array(
//        'className' => 'PrimaryCategory',
//        'joinTable' => 'ParentCategory',
//        'foreignKey' => 'primary_categories_id',
//        'associationForeignKey' => 'parent_categories_id'
//    )
//           );
      public function beforeSave($options = array()){
    $this->data[$this->alias]['date'] = date("Y-m-d");
    return true;
   }
}