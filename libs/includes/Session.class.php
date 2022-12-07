<?php

/**
 * This is PHP session wrapper class
*/

Class Session{

    public static function start(){
        session_start();
    }

    public static function unset(){
        session_unset();
    }

    public static function destroy(){
        session_destroy();
    }

    // Set a new variable in session
    public static function set($key, $value){
        $_SESSION[$key] = $value;
    }

    public static function delete($key){
        unset($_SESSION[$key]);
    }

    public static function isset($key){
        return isset($_SESSION[$key]);
    }

    public static function get($key, $default=false){
        if(Session::isset($key)){
            return $_SESSION[$key];
        } else {
            return $default;
        }
    }

}