<?php

/*
	
    	 Если у контроллеров будут одинаковые методы пишем их тут
    
*/
namespace School\controllers;

trait TraitControllers {

    # Start...    тестовй код    удалить после отладки

    private $user = [
        [
         'name' => 'Peter',
         'email' => 'peter@mail.ru',
         'password' => '1234',
         'access' => 'Учитель'
        ],
        [
         'name' => 'Иван',
         'email' => 'ivan@mail.ru',
         'password' => '1234',
         'access' => 'Ученик'
        ],
    ]; 

	# End  ...    тестовый код

        public function action_any() {
            
            return 'Any called';
        }
    
}

?>