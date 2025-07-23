<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends AUTH_Controller
{

    var $template = 'template_adm/index';
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['tittle']         = 'HIPMI | Dashboard';
        $data['userdata']       = $this->userdata;
        $data['content']        = 'page_admin/dashboard/dashboard';
        $data['script']         = 'page_admin/dashboard/dashboard_js';
        $this->load->view($this->template, $data);
    }
}