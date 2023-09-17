<?php 

namespace Xelanid\Pdophp\utils;

class UUID{
    public static function generateId(){
        return uniqid();
    }
}