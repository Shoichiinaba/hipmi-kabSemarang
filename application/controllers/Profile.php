<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends AUTH_Controller
{

    var $template = 'template_cv/index';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Member_model');
    }

     public function cv($encoded_id = null)
    {
        if ($encoded_id === null) {
            show_404();
            return;
        }

        // Decode dari base64-url-safe ke base64 normal
        $decoded = base64_decode(strtr($encoded_id, '-_', '+/'));
        if (!$decoded || !is_numeric($decoded)) {
            show_error("ID tidak valid");
            return;
        }

        $id_user = $decoded;

        $data['member']   = $this->Member_model->get_cv_by_id($id_user);
        $data['tittle']   = 'HIPMI | Curriculum Vitae';
        $data['userdata'] = $this->userdata;
        $data['content']  = 'page_admin/curriculum_vitae/cv';
        $data['script']   = 'page_admin/curriculum_vitae/cv_js';

        $this->load->view($this->template_cv, $data);
    }



}