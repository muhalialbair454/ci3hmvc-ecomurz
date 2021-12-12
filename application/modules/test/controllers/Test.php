<?php

class Test extends HMVC_Controller{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
    public function runTest(){
        $this->load->view("v_test");
    }

}