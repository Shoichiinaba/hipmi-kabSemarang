<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_diri extends AUTH_Controller
{

    var $template = 'template_adm/index';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Datadiri_model');
    }

     public function index()
    {

        // $data['member']   = $this->Datadiri_model->get_cv_by_id($id_user);
        $data['tittle']   = 'HIPMI | Form Biodata';
        $data['userdata'] = $this->userdata;
        $data['content']  = 'page_admin/form_bio/biodata';
        $data['script']   = 'page_admin/form_bio/biodata_js';

        $this->load->view($this->template, $data);
    }


}