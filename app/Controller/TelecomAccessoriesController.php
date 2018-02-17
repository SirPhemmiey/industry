<?php
class TelecomAccessoriesController extends AppController{

    public function beforeFilter(){
        $this->loadModel('Company');
        $this->loadModel('Product');
        $this->loadModel('PrimaryCategory');
        $this->loadModel('ParentCategory');
        $this->loadModel('ProductsCategory');
        $this->loadModel('Industry');
        //$this->Session->write('industries_id', 5);
    }

  public function index(){ 
        //set_time_limit(300);
        //ini_set('memory_limit', '816M');
        // ini_set("max_execution_time", 0);
        $this->layout = 'index';
        $query = $this->Company->find('all', array(
            'fields' => array('Company.companies_id, Company.companies_name'),
            'conditions' => array('industries_id' => 5),
            'order' => array('Company.companies_name' => 'ASC')));
        $this->set(compact('query'));       
    }

    public function chooseAcc(){
        $this->layout = false;
        $getValue = $_POST['telecomsValue'];
        if($this->request->is('post')){
            if($this->request->is('ajax')){                  
                $data = $this->Product->find('all', array('conditions' => array('Product.companies_id' => $getValue)));
                $this->set(compact('data'));
            }
        }
    }
       public function productEdit(){
        $this->layout = 'index';
        if(!is_null($this->request->query('productID'))){
            $getId = $this->request->query('productID');

            $PrimaryAndParentCat = $this->Product->find('all', array(
                'fields' => array('PrimaryCategory.primary_categories_name', 'PrimaryCategory.primary_categories_id', 'ParentCategory.parent_categories_name', 'ParentCategory.parent_categories_id', 'Company.companies_id', 'Company.companies_name'),
                'conditions' => array('Product.products_id' => $getId),
                'group' => array('PrimaryCategory.primary_categories_name', 'ParentCategory.parent_categories_name')
            ));

            foreach($PrimaryAndParentCat as $getCat){
                $primaryCatID = $getCat['PrimaryCategory']['primary_categories_id'];
                $parentCatID = $getCat['ParentCategory']['parent_categories_id'];
                $companyID = $getCat['Company']['companies_id'];
            }

            $specificPrimaryCat = $this->PrimaryCategory->find('all', array(
                'fields' => array('PrimaryCategory.primary_categories_name', 'PrimaryCategory.primary_categories_id'),
                'conditions' => array('PrimaryCategory.industries_id' => 5,
                                      'not' => array('PrimaryCategory.primary_categories_id' => $primaryCatID)),
                'group' => array('PrimaryCategory.primary_categories_name')
            ));

            $specificParentCat = $this->ParentCategory->find('all', array(
                'fields' => array('ParentCategory.parent_categories_id', 'ParentCategory.parent_categories_name'),
                'conditions' => array('ParentCategory.industries_id' => 5,
                                      'not' => array('ParentCategory.parent_categories_id' => $parentCatID)),
                'group' => array('ParentCategory.parent_categories_id')));


            $product_name = $this->Product->find('all', array(
                'conditions' => array('Product.products_id' => $getId)));
            
             $specificCompany = $this->Company->find('all', array(
                'fields' => array('Company.companies_name', 'Company.companies_id'),
                'conditions' => array('Company.industries_id' => 5,
                                      'not' => array('Company.companies_id' => $companyID)),
                'group' => array('Company.companies_name')
            ));


            $this->set(compact('product_name', 'PrimaryAndParentCat', 'specificPrimaryCat', 'specificParentCat', 'specificCompany'));
        }

        if(!is_null($this->request->query('productCat'))){
            $getCat = $this->request->query('productCat');

            $product_cat = $this->Product->find('all', array(
                'conditions' => array('PrimaryCategory.primary_categories_name' => $getCat)
            ));
            $this->set(compact('product_cat', 'getCat'));
        }

        if(!is_null($this->request->query('parentCat'))){
            $getParentCat = $this->request->query('parentCat');

            $parentProductCompID = $this->Product->find('all', array(
                'conditions' => array('ParentCategory.parent_categories_name' => $getParentCat)
            ));
            $this->set(compact('parentProductCompID', 'getParentCat'));
        }

        if(!is_null($this->request->query('ProductCompanyID'))){  
            $compID = $this->request->query('ProductCompanyID');

            $productCompID = $this->Product->find('all', array(
                'conditions' => array('Product.companies_id' => $compID)
            ));
            foreach($productCompID as $compName){
                $company_name = $compName['Company']['companies_name'];
            }
            $this->set(compact('productCompID', 'company_name'));
        }

        if($this->request->is('post')){
            //debug($this->data);
            if($this->request->is('ajax')){
                if(!empty($this->data)){
                    $products_id = $this->request->data['Product']['products_id'];
                    $products_name = $this->request->data['Product']['products_name'];
                    $products_description = $this->request->data['Product']['products_description'];
                    $tags = $this->request->data['Product']['tags'];
                    $companies_id = $this->request->data['Product']['companies_id'];
                    $products_image = $this->request->data['Product']['products_image'];
                    $parent_categories_id = $this->request->data['Product']['parent_categories_id'];
                    //$primary_categories_id = implode(',', $this->request->data['ProductsCategory']['primary_categories_id']);
                    $primary_categories_id = $this->request->data['ProductsCategory']['primary_categories_id'];
                    if(!empty($this->request->data['Product']['products_image']['name'])){
                        $file = $this->request->data['Product']['products_image'];//Putting the data in the Variable for easy access
                        $extension = substr(strtolower(strrchr($file['name'], '.')), 1);
                        $arr_ext = array('jpg', 'png', 'jpeg', 'gif');
                        //Only process the allowed extension
                        if(in_array($extension, $arr_ext)){
                            move_uploaded_file($file['tmp_name'], WWW_ROOT. 'img/'. $file['name']);
                            //prepare the filename for database entry
                            $this->request->data['Product']['products_image'] = $file['name'];
                        }
                    }
                    else{
                        $pImage = $this->Product->find('all', 
                                                       array('fields' => array('Product.products_image'),
                                                             'conditions' => array('Product.products_id' => $products_id)));
                        foreach($pImage as $img){
                            $this->request->data['Product']['products_image'] = $img['Product']['products_image'];
                        }
                    }
                    $tags->request->data['ProductsCategory']['parent_categories_id'] = $parent_categories_id;
                    $this->request->data['ProductsCategory']['products_id'] = $products_id;

                    foreach($primary_categories_id as $pid){
                        $this->request->data['ProductsCategory']['primary_categories_id'] = $pid;
                        $this->request->data['Product']['primary_categories_id'] = $pid;
                        $this->ProductsCategory->products_id = $products_id; 
                        $this->ProductsCategory->create();
                        $this->ProductsCategory->saveAll($this->data);
                        $this->Product->create();
                        $this->Product->id = $products_id;
                        $this->Product->saveAll($this->data);
                    }
                }
            }
        }
    }
    public function addProducts(){
        $this->layout = 'index';


        $allPrimaryCat = $this->PrimaryCategory->find('all', array(
            'fields' => array('PrimaryCategory.primary_categories_name', 'PrimaryCategory.primary_categories_id'),
            'conditions' => array(
            'PrimaryCategory.industries_id' => 5,
            'not' => array('PrimaryCategory.primary_categories_name' => null)),
            'group' => array('PrimaryCategory.primary_categories_name')
        ));

        $allParentCat = $this->ParentCategory->find('all', array(
            'conditions' => array(
            'ParentCategory.industries_id' => 5,
            'not' => array('ParentCategory.parent_categories_name' => null)),
            'group' => array('ParentCategory.parent_categories_name')
        ));

        $companies = $this->Company->find('all', array(
            'fields' => array('Company.companies_id', 'Company.companies_name'),
            'conditions' => array('Company.industries_id' => 5),
            'order' => array('Company.companies_name' => 'ASC')
        ));

        $this->set(compact('allPrimaryCat', 'companies', 'allParentCat'));

        if($this->request->is('post')){
            // if($this->request->is('ajax')){
            // debug($this->data);
            if(!empty($this->data)){
                //$parent_categories_id = $this->request->data['Product']['parent_categories_id'];
                $companies_id = $this->request->data['Product']['companies_id'];
                $products_name = $this->request->data['Product']['products_name'];
                $products_description = $this->request->data['Product']['products_description'];
                $products_image = $this->request->data['Product']['products_image'];
                $tags =$this->request->data['Product']['tags'];
                $primary_categories_id = $this->request->data['Product']['primary_categories_id'];

                if(!empty($this->request->data['Product']['products_image']['name'])){
                    $file = $this->request->data['Product']['products_image'];//Putting the data in the Variable for easy access
                    $extension = substr(strtolower(strrchr($file['name'], '.')), 1);
                    $arr_ext = array('jpg', 'png', 'jpeg', 'gif');
                    //Only process the allowed extension
                    if(in_array($extension, $arr_ext)){
                        move_uploaded_file($file['tmp_name'], WWW_ROOT. 'img/'. $file['name']);
                        //prepare the filename for database entry
                        $this->request->data['Product']['products_image'] = $file['name'];
                    }
                }

                $condition = array(
                    'products_name' => $products_name
                );
                if($this->Product->hasAny($condition)){
                    $duplicate = "This product already exist. Please check again.";
                }
                if(!$this->Product->hasAny($condition)){
                    $this->Product->create();
                    //$lastInsertIdProducts = $this->Product->getInsertId();
                    //$this->request->data['ProductsCategory']['products_id'] = $lastInsertIdProducts;
                    foreach($primary_categories_id as $pid){
                        //$this->request->data['ProductsCategory']['primary_categories_id'] = $pid;
                        $this->request->data['Product']['primary_categories_id'] = $pid;
                        $this->Product->saveAll($this->data);
                        $lastInsertIdProducts = $this->Product->getInsertId();
                        $this->request->data['ProductsCategory']['products_id'] = $lastInsertIdProducts;
                        // $this->ProductsCategory->create();
                        //$this->ProductsCategory->saveAll($this->data); 
                    }
                    $success = "The Product has been added successfully.";
                }

            }
            //}
        }
        $this->set(compact('duplicate', 'success'));
    }
    
     public function addSubCategory(){
        $this->layout = 'index';
        $specificParentCategory = $this->ParentCategory->find('all', array(
            'fields' => array('ParentCategory.parent_categories_id', 'ParentCategory.parent_categories_name'),
            'conditions' => array('ParentCategory.industries_id' => 5),
            'group' => array('ParentCategory.parent_categories_name')));

        $industry_name = $this->Industry->find('all', array(
            'group' => array('Industry.industries_name')));

        if($this->request->is('post')){
            //$this->request->data['PrimaryCategory']['industries_id'] = $this->Session->read('industries_id');
            $this->PrimaryCategory->create();
            $condition = array(
                'primary_categories_name' => $this->request->data['PrimaryCategory']['primary_categories_name']);
            if($this->PrimaryCategory->hasAny($condition)){
                $duplicate = "This sub category already exist. Please check again";
            }
            else if($this->PrimaryCategory->save($this->request->data)){
                $success = "The Sub Category has been added successfully";
            }
            else{
                $error = "An error occured while adding the sub category. Please try again.";
            }
        }
        $this->set(compact('error', 'success', 'duplicate', 'specificParentCategory', 'industry_name'));
    }
    
    public function addParentCategory(){
        $this->layout = 'index';

        $industry_name = $this->Industry->find('all', array(
            'group' => array('Industry.industries_name')));

        if($this->request->is('post')){
            //$this->request->data['ParentCategory']['industries_id'] = $this->Session->read('industries_id');
            $this->ParentCategory->create();
            $condition = array(
                'parent_categories_name' => $this->request->data['ParentCategory']['parent_categories_name']);
            if($this->ParentCategory->hasAny($condition)){
                $duplicateParent = "This Parent category already exist. Please check again";
            }
            else if($this->ParentCategory->save($this->request->data)){
                $successParent = "The Parent Category has been added successfully";
            }
            else{
                $errorParent = "An error occured while adding the Parent category. Please try again.";
            }

        }
        $this->set(compact('errorParent', 'successParent', 'duplicateParent', 'industry_name'));
    }
    
        public function deleteProduct(){
        $this->layout = 'index';
        $allProducts = $this->Product->find('all', array(
            'conditions' => array('Company.industries_id' => 5),
            'group' => array('Product.products_name')));
        if($this->request->is('post')){
            //if($this->request->is('ajax')){
            $products_id = $this->request->data['Product']['products_id'];
            $this->Product->delete($products_id);
            //}
        }
        $this->set(compact('allProducts'));
    }
    
       
    public function addCompany(){
        $this->layout = 'index';
        
        $industry_name = $this->Industry->find('all', array(
        'group' => array('Industry.industries_name')));
        
        if($this->request->is('post')){
            $this->Company->create();
            
            $condition = array(
            'companies_name' => $this->request->data['Company']['companies_name']);
            if($this->Company->hasAny($condition)){
               $duplicateCompany = "This Company already exist. Please check again";
            }
            else if($this->Company->save($this->request->data)){
                $successCompany = "The company has been added successfully";
            }
            else{
               $errorCompany = "An error occured while adding the Company. Please try again."; 
            }
        }
         $this->set(compact('errorCompany', 'successCompany', 'duplicateCompany', 'industry_name'));
    }

        public function updateCompany(){
        $this->layout = 'index';

         $company_name = $this->Company->find('all', array(
        'group' => array('Company.companies_name')));

         if($this->request->is('post')){
             //debug($this->request->data); exit();
            $companies_id = $this->request->data['Company']['companies_id'];
             if(!empty($this->request->data['Company']['picture']['name'])){
                        $file = $this->request->data['Company']['picture'];//Putting the data in the Variable for easy access
                        $extension = substr(strtolower(strrchr($file['name'], '.')), 1);
                        $arr_ext = array('jpg', 'png', 'jpeg', 'gif');
                        //Only process the allowed extension
                        if(in_array($extension, $arr_ext)){
                            move_uploaded_file($file['tmp_name'], WWW_ROOT. 'img/'. $file['name']);
                            
                        }
                        //prepare the filename for database entry
                            $this->request->data['Company']['picture'] = $file['name'];
                    }
                     else{
                        $companyImage = $this->Company->find('all', 
                                                       array('fields' => array('Company.picture'),
                                                             'conditions' => array('Company.companies_id' => $companies_id)));
                        foreach($companyImage as $img){
                            $this->request->data['Company']['picture'] = $img['Company']['picture'];
                        }
                    }
                    //debug($this->request->data); exit();
                    if($this->Company->updateAll(array('Company.picture' => "'".$this->request->data['Company']['picture']."'"), array('Company.companies_id' => $companies_id))){
                         $successEditCompany = "The Company details  has been updated successfully";
                    }
                    else{
                        $errorEditCompany = "TOops! An error occured. Please try again";
                    }
         }

         $this->set(compact('company_name', 'successEditCompany', 'errorEditCompany'));
    }

                public function chooseCompany(){
        $this->layout = false;
            $getComp = $_POST['companyValue'];
             if($this->request->is('post')){
            if($this->request->is('ajax')){                   
                 $dataImage = $this->Company->find('all', array(
                    'fields' => array('picture'),
                    'conditions' => array('Company.companies_id' => $getComp)));
                 foreach($dataImage as $img){
                    $data = $img['Company']['picture'];
                    echo $data;
                 }
            }
        }
    }
}