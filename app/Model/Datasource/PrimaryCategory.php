<?php
class PrimaryCategory extends AppModel{
 
    public $uses = 'PrimaryCategory';
    public $primaryKey = 'primary_categories_id';
    // public $hasMany = array(
    // 'Product' => array(
    // 'className' => 'Product',
    // 'foreignKey' => 'primary_categories_id'
    // ) 
    // );

    // public $belongsTo = array(
    //     'ParentCategory' => array(
    //         'className' => 'ParentCategory',
    //         'foreignKey' => 'parent_categories_id')
    //     );
//       public $belongsTo = array(
//    'Product' => array(
//    'className' => 'Product',
//    'foreignKey' => 'primary_categories_id',
//    //'dependent' => true
//    ) 
//    );
    //     public $belongsTo = array(
    // 'ParentCategory' => array(
    // 'className' => 'ParentCategory',
    // 'foreignKey' => 'parent_categories_id'
    // )
    // );
}