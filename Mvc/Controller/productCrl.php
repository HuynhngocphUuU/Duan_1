<?php

class productCrl {
    

    public function __construct() {
        include_once 'Model/productMod.php';
        $ds=new productMod();
        $ds->dssp();
        include_once 'View/product.php';
    }
}

?>