<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends MX_Controller
{
    function index()
    {
        $this->load->view('welcome_hmvc');
    }
}
