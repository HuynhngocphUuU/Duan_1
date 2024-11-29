<?php
class productMod{
    public $mangsp;

    public function dssp() {
        include_once 'Model/connectMod.php';
        $data = new connectMod;
        $sql="select * from sanpham";
        $this->mangsp=$data->selectall($sql);
    }
    
}

?>