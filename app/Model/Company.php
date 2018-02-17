<?php
class Company extends AppModel{
    
    public $uses = 'Company';
    public $primaryKey = 'companies_id';
      public $hasMany = array(
    'PrimaryCategory' => array(
    'className' => 'PrimaryCategory',
    'foreignKey' => 'primary_categories_id',
    //'dependent' => true
    ),
          'Product' => array(
      'className' => 'Product',
      'foreignKey' => 'companies_id')
    );
         public function beforeSave($options = array()){
    $this->data[$this->alias]['date'] = date("Y-m-d");
    return true;
   }
}