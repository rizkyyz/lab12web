<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class page extends BaseController

public function index()
{
    $data['title']= "Tutorial - Page";
    $this=>load->view('page_index',$data);
}