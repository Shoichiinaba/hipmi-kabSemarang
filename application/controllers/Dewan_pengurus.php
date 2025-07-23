<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dewan_pengurus extends AUTH_Controller
{

    var $template = 'template_adm/index';
    public function __construct()
    {
        parent::__construct();
         $this->load->model('Pengurus_model');
    }

    public function index()
    {
        $data['tittle']         = 'HIPMI | KategoriBisnis';
        $data['userdata']       = $this->userdata;
        $data['content']        = 'page_admin/pengurus/pengurus';
        $data['script']         = 'page_admin/pengurus/pengurus_js';
        $this->load->view($this->template, $data);
    }

    function get_pengurus()
    {
        $category = $this->Pengurus_model->get_datatablest();

        // Grouping
        $grouped = [];
        foreach ($category as $kt) {
            $grouped[$kt->id_position]['position'] = $kt->position;
            $grouped[$kt->id_position]['nama_anggota'][] = $kt->nama;
        }

        // Total kategori setelah grouping
        $all_position = array_values($grouped);
        $total_filtered = count($all_position);

        // Pagination manual setelah grouping
        $start = @$_POST['start'] ?: 0;
        $length = @$_POST['length'] ?: 10;

        $paginated_data = array_slice($all_position, $start, $length);

        $data = [];
        $no = $start;
        foreach ($paginated_data as $group) {
            $no++;

            $row = [];
            $row[] = $no . ".";
            $row[] = htmlspecialchars($group['position'], ENT_QUOTES, 'UTF-8');

            $sector_list = '';
            $i = 1;
            foreach ($group['nama_anggota'] as $sector) {
                $sector_list .= $i++ . '. ' . htmlspecialchars($sector, ENT_QUOTES, 'UTF-8') . '<br>';
            }

            $row[] = $sector_list;
            $data[] = $row;
        }

        $output = array(
            "draw" => intval($this->input->post('draw')),
            "recordsTotal" => $this->Pengurus_model->count_all(),
            "recordsFiltered" => $total_filtered,
            "data" => $data,
        );

        echo json_encode($output);
    }

}