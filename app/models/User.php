<?php


defined('ROOTPATH') OR exit('Access Denied');

class User {

     use Model;

     protected $table = 'users';

     /////// if our data is not in this allowed part then we ignore it 
     protected $allowedColumns = [
          'name',
          'age',
     ];
}