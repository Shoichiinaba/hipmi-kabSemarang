<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category_model extends CI_Model
{
    function get_provinsi()
    {
        $this->db->select('*');
        $this->db->from('map');
        $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id = map.id_prov');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_id_prov($id_prov)
    {
        $this->db->where('id_prov', $id_prov);
        $query = $this->db->get('map');
        return $query->row();
    }

    function get_provinsi_select()
    {
        $this->db->select('*');
        $this->db->from('wilayah_provinsi');
        $query = $this->db->get();
        return $query->result();
    }

    function get_map_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('map');
        $this->db->where('id_prov', $id);
        $query = $this->db->get();

        log_message('debug', 'Query: ' . $this->db->last_query());

        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null;
        }
    }

    function save_data($data)
    {
        return $this->db->insert('map', $data);
    }

    public function countByProv($id_prov)
    {
        $this->db->where('id_prov', $id_prov);
        $this->db->from('data_map');
        return $this->db->count_all_results();
    }


    // kode untuk import data map excel
    public function upload_file($filename)
    {
        $this->load->library('upload');

        $config['upload_path'] = './upload/excel/';
        $config['allowed_types'] = 'xlsx';
        $config['max_size'] = '2048';
        $config['overwrite'] = true;
        $config['file_name'] = $filename;

        $this->upload->initialize($config);
        if ($this->upload->do_upload('file')) {
            return array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
        } else {
            return array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
        }
    }

    public function insert_multiple($data)
    {
        $this->db->insert_batch('data_map', $data);
        return $this->db->affected_rows();
    }

    public function get_svg_by_id($id_prov) {
        $this->db->select('svg_map');
        $this->db->from('map');
        $this->db->where('id_prov', $id_prov);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row()->svg_map;
        } else {
            return null;
        }
    }

    public function update_svg($id_prov, $updated_svg_path) {
        // Update query
        $this->db->where('id_prov', $id_prov);
        return $this->db->update('map', array('svg_map' => $updated_svg_path));
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // kode datatables KOTA

    var $column_order = array(null, 'business_category.category_name', 'sub_sector.sector_name');
    var $column_search = array('business_category.category_name', 'sub_sector.sector_name');
    var $ordertrx = array('business_category.id_category' => 'ASC');

    private function _get_datatables_trx()
    {
        $this->db->select('business_category.id_category, business_category.category_name, sub_sector.sector_name');
        $this->db->from('business_category');
        $this->db->join('sub_sector', 'sub_sector.id_category = business_category.id_category');

        // Filter pencarian
        $search_value = $_POST['search']['value'] ?? null;
        if (!empty($search_value)) {
            $this->db->group_start();
            foreach ($this->column_search as $i => $item) {
                if ($i === 0) {
                    $this->db->like($item, $search_value);
                } else {
                    $this->db->or_like($item, $search_value);
                }
            }
            $this->db->group_end();
        }

        // Sorting
        if (isset($_POST['order'])) {
            $order_column_index = $_POST['order']['0']['column'];
            $order_dir = $_POST['order']['0']['dir'];
            $order_column = $this->column_order[$order_column_index] ?? null;
            if ($order_column) {
                $this->db->order_by($order_column, $order_dir);
            }
        } else if (!empty($this->ordertrx)) {
            $order = $this->ordertrx;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatablest()
    {
        $this->_get_datatables_trx();
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_trx();
        $query = $this->db->get();
        return $query->num_rows();
    }

    function count_all()
    {
        return $this->db->count_all('business_category');
    }


}