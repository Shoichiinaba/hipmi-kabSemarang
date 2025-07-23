<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengurus_model extends CI_Model
{
    function save_data($data)
    {
        return $this->db->insert('map', $data);
    }


    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    // kode datatables

    var $column_order = array(null, 'hipmi_position.position', 'user.nama');
    var $column_search = array('hipmi_position.position', 'user.nama');
    var $ordertrx = array('hipmi_position.id_position' => 'ASC');

    private function _get_datatables_trx()
    {
        $this->db->select('hipmi_position.id_position, hipmi_position.position, user.nama');
        $this->db->from('hipmi_position');
        $this->db->join('user', 'user.id_position = hipmi_position.id_position', 'left');
        $this->db->order_by('hipmi_position.id_position', 'ASC');

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
        return $this->db->count_all('hipmi_position');
    }


}