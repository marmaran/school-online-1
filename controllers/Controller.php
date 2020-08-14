<?php
/*

    Базовый абстрвктный класс контроллера

*/

namespace School\controllers;

abstract class Controller 
{
    
    
    public abstract function action_any();   // объявить методы абстрактные 

    
    public function __construct() {

    }
    
  
    
    public function __call($name, $params){
      
	}
    
}

?>