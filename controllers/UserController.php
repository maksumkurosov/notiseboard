<?php

class UserController
{

    public function test()
    {
        return 'blabla';

    }

    public static function setSessionName($login)
    {
        $_SESSION['email'] = $login;

    }
    public static function unsetSessionName()
    {
        unset($_SESSION['email']);

    }
    public static function  checkUserData($email, $password)
    {
        if(User::checkUserData($email,$password)) {
          echo 'Ви залогінилися!';
          return true;
        } else {
            echo 'Неправельний логін або пароль';
            return false;
        }
    }

    public static function checkEmailExists ($email,$login,$password)
    {
        if (!User::checkCorectEmail($email)) {
            if(User::register($login,$email,$password)) {
                echo 'Ви успішло зареєстровані';
            }
        } else {
            echo 'Такий Email вже використовується, введіть інший';
        }
    }

}
