<?php

/*
        code by Peter Mileshko 
        Контроллер для работы с моделью - БД / талица Users

*/

namespace School\controllers;



class Users extends Controller {

    private $email;
    private $password;

      use TraitControllers;
    
    public function __construct ($rest) {
        parent::__construct ($rest);
        $this->email = parent::getValue('email');
        $this->password = parent::getValue('password');
    }
    
        public function action_login() {

            # Start...    тестовй код   удалить после отладки


            foreach ( $this->user as $val ) {

                if( $val['email'] == $this->email and $val['password'] == $this->password ) {
                    ob_start();
                    echo 'Добро пожаловать - '.$val['name'];
                    echo '<br>Доступ - '.$val['access'];

                    return ob_get_clean();
                }
            }
            
           return 'Такой пользователь не найден';

           # End  ...    тестовый код

        } 
    
        /* Функция для вывода всех пользователей в админке */

        public function action_all() {

        } 


    
}

?>