<?php
include 'InformationModel.php';

class Index extends Controller{

    function __construct() {
    //    echo 'se ejecuto el constructor de Index controller <br>';        
    }

    function index() {  
           $objInformation = new Model\Information();
           //$objInformation->testInsert(array('dato' => 'valor'));
           return $this->render('index.php');
    }
}