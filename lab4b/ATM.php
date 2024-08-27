<?php 

Class ATM{
    public $location;
    public $managed_by;

    public function identifies(){
        return false;
    }

    public function transactions(){
        return false;
    }
}


?>