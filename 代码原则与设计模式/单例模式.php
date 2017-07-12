<?php

class Connection
{
    private static $conn = null;

    private function __construct(){
    }

    private function __clone(){
    }

    public static function get(){
        if ( is_null(self::$conn) && self::$conn instanceof Connection ) {
            self::$conn = new Obj();
        }

        return self::$conn;
    }
}