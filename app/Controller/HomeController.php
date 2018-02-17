<?php
class HomeController extends AppController{
        

    public function beforeFilter(){
          $this->loadModel('Company');
        $this->loadModel('Product');
        $this->loadModel('PrimaryCategory');
        $this->loadModel('ParentCategory');
        $this->loadModel('ProductsCategory');
    }
  public function index(){
        $this->layout = 'index';
    }
    public function login(){
        $this->layout = 'login';
    }
     public function login_admin(){
        $this->layout = 'login_admin';
    }
}
