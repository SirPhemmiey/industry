<?php
class AdminController extends AppController{


    public function beforeFilter(){
        $this->loadModel('Company');
        $this->loadModel('Product');
        $this->loadModel('PrimaryCategory');
        $this->loadModel('ParentCategory');
    }
    public function index(){ 
        //set_time_limit(300);
        //ini_set('memory_limit', '816M');
        // ini_set("max_execution_time", 0);
        $this->layout = 'index';    
    }

      public function chooseNames(){
        $this->layout = false;
        $getName = $_POST['nameValue'];
        if($this->request->is('post')){
            if($this->request->is('ajax')){                  
               if($getName == 'products'){
                 $data = $this->Product->find('all');
               }
               else if($getName == 'parent_categories'){
                $data_parent = $this->ParentCategory->find('all');
               }
               else if($getName == 'primary_categories'){
                 $data_primary = $this->PrimaryCategory->find('all');
               }
               }
               else if($getName == 'company'){
                 $data_company = $this->Company->find('all');
               }
               }
                $this->set(compact('data', 'data_parent', 'data_primary', 'data_company'));

            }
}