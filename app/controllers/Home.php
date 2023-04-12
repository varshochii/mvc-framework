
<?php 


defined('ROOTPATH') OR exit('Access Denied');


class Home extends Controller{

     public function index(){
         $this->view('home');
     }

     public function edit(){
         $this->view('home');
     }
}




