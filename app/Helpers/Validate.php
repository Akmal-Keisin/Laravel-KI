<?php 
namespace App\Helpers;

Class Validate {
    public static function bookName() {
        return 'required';
    }
    public static function author() {
        return 'required';
    }
    public static function description() {
        return 'required';
    }
    public static function price() {
        return 'required|numeric';
    }
}