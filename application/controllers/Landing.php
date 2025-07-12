<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{

    var $template = 'template/index';
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['tittle']         = 'Hipmi | Semarang';
        $data['content']        = 'front/home/home_page';
        $data['script']         = 'front/home/home_js';
        $this->load->view($this->template, $data);
    }

    public function about_us()
    {
        $data['tittle']         = 'About Us | Semarang';
        $data['content']        = 'front/about/about';
        $data['script']         = 'front/about/about_js';
        $this->load->view($this->template, $data);
    }

    public function contact()
    {
        $data['tittle']         = 'Contuct | Semarang';
        $data['content']        = 'front/contact/contact';
        $data['script']         = 'front/contact/contact_js';
        $this->load->view($this->template, $data);
    }
}