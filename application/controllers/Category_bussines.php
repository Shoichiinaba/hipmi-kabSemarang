<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category_bussines extends AUTH_Controller
{

    var $template = 'template_adm/index';
    public function __construct()
    {
        parent::__construct();
         $this->load->model('Category_model');
    }

    public function index()
    {
        $data['tittle']         = 'HIPMI | KategoriBisnis';
        $data['userdata']       = $this->userdata;
        $data['content']        = 'page_admin/kategori/kategori';
        $data['script']         = 'page_admin/kategori/kategori_js';
        $this->load->view($this->template, $data);
    }

    function get_kategori()
    {
        $category = $this->Category_model->get_datatablest();

        // Grouping
        $grouped = [];
        foreach ($category as $kt) {
            $grouped[$kt->id_category]['category_name'] = $kt->category_name;
            $grouped[$kt->id_category]['sectors'][] = $kt->sector_name;
        }

        // Total kategori setelah grouping
        $all_categories = array_values($grouped);
        $total_filtered = count($all_categories);

        // Pagination manual setelah grouping
        $start = @$_POST['start'] ?: 0;
        $length = @$_POST['length'] ?: 10;

        $paginated_data = array_slice($all_categories, $start, $length);

        $data = [];
        $no = $start;
        foreach ($paginated_data as $group) {
            $no++;

            $row = [];
            $row[] = $no . ".";
            $row[] = htmlspecialchars($group['category_name'], ENT_QUOTES, 'UTF-8');

            $sector_list = '';
            $i = 1;
            foreach ($group['sectors'] as $sector) {
                $sector_list .= $i++ . '. ' . htmlspecialchars($sector, ENT_QUOTES, 'UTF-8') . '<br>';
            }

            $row[] = $sector_list;
            $data[] = $row;
        }

        $output = array(
            "draw" => intval($this->input->post('draw')),
            "recordsTotal" => $this->Category_model->count_all(),
            "recordsFiltered" => $total_filtered,
            "data" => $data,
        );

        echo json_encode($output);
    }

}