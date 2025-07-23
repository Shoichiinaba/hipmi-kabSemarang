<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model
{
    public function get_member($limit = 6, $start = 0, $search = '', $id_kategori = null)
    {
        if ($start < 0) $start = 0;

        $this->db->select('user.*, profile.id_category, profile.id_user');
        $this->db->from('user');
        $this->db->join('profile', 'profile.id_user = user.id');

        if (!empty($search)) {
            $this->db->like('user.nama', $search);
        }

        if (!empty($id_kategori)) {
            $this->db->where('profile.id_category', $id_kategori);
        }

        $this->db->where('role', 'anggota');
        $this->db->order_by("user.id", "ASC");
        $this->db->limit($limit, $start);

        return $this->db->get()->result();
    }

    public function count_member($search = '')
    {
        $this->db->select('*');
        $this->db->from('user');
        if (!empty($search)) {
            $this->db->like('nama', $search);
        }
        return $this->db->count_all_results();
    }

    // code untuk kategori bisnis

    public function get_kategori($limit = 15, $start = 0, $search = '')
    {
        if ($start < 0) $start = 0;

        $this->db->select('*');
        $this->db->from('business_category');

        if (!empty($search)) {
            $this->db->like('business_category.category_name', $search);
        }

        $this->db->order_by("business_category.id_category", "ASC");
        $this->db->limit($limit, $start);
        $query = $this->db->get();

        return $query->result();
    }

    public function count_category($search = '')
    {
        $this->db->select('*');
        $this->db->from('business_category');
        if (!empty($search)) {
            $this->db->like('category_name', $search);
        }
        return $this->db->count_all_results();
    }

    // code curiculume vitea

    public function get_cv_by_id($id_user = null)
    {

        $this->db->select('*, profile.foto as foto_owner');
        $this->db->from('profile');
        $this->db->join('user', 'user.id = profile.id_user');
        $this->db->where('profile.id_user', $id_user);
        $this->db->order_by("user.id", "ASC");

        return $this->db->get()->result();
    }

    public function get_about_by_id($id_user = null)
    {

        $this->db->select('*');
        $this->db->from('about');
        $this->db->join('user', 'user.id = about.id_user');
        $this->db->where('about.id_user', $id_user);
        $this->db->order_by("user.id", "ASC");

        return $this->db->get()->result();
    }

    public function get_resume_by_id($id_user = null)
    {

        $this->db->select('*');
        $this->db->from('resume');
        $this->db->join('user', 'user.id = resume.id_user');
        $this->db->join('education', 'education.id_resume = resume.id_resume');
        $this->db->join('experience', 'experience.id_resume = resume.id_resume');
        $this->db->join('key_skill', 'key_skill.id_resume = resume.id_resume');
        $this->db->where('resume.id_user', $id_user);
        $this->db->order_by("user.id", "ASC");

        return $this->db->get()->result();
    }

    public function get_edukasi_by_id($id_user = null)
    {

        $this->db->select('*');
        $this->db->from('resume');
        $this->db->join('user', 'user.id = resume.id_user');
        $this->db->join('education', 'education.id_resume = resume.id_resume');
        $this->db->where('resume.id_user', $id_user);
        $this->db->order_by("user.id", "ASC");

        return $this->db->get()->result();
    }

    public function get_experience_by_id($id_user = null)
    {

        $this->db->select('*');
        $this->db->from('resume');
        $this->db->join('user', 'user.id = resume.id_user');
        $this->db->join('experience', 'experience.id_resume = resume.id_resume');
        $this->db->where('resume.id_user', $id_user);
        $this->db->order_by("user.id", "ASC");

        return $this->db->get()->result();
    }

    public function get_skill_by_id($id_user = null)
    {

        $this->db->select('*');
        $this->db->from('resume');
        $this->db->join('user', 'user.id = resume.id_user');
        $this->db->join('key_skill', 'key_skill.id_resume = resume.id_resume');
        $this->db->where('resume.id_user', $id_user);
        $this->db->order_by("user.id", "ASC");

        return $this->db->get()->result();
    }

    public function get_service_by_id($id_user = null)
    {
        $this->db->select('*');
        $this->db->from('service');
        $this->db->join('user', 'user.id = service.id_user');
        $this->db->where('service.id_user', $id_user);
        $this->db->order_by("service.id_service", "ASC");

        return $this->db->get()->result();
    }

    public function get_contact_by_id($id_user = null)
    {
        $this->db->select('*');
        $this->db->from('about');
        $this->db->join('user', 'user.id = about.id_user');
        $this->db->where('about.id_user', $id_user);
        $this->db->order_by("about.id_about", "ASC");

        return $this->db->get()->result();
    }

   // Ambil daftar portofolio user
    public function get_portofolio_by_user($id_user)
    {
        return $this->db
            ->where('id_user', $id_user)
            ->order_by('id_porto', 'ASC')
            ->get('portofolio')
            ->result();
    }

    // Ambil semua gambar per portofolio
    public function get_images_by_portofolio($id_porto)
    {
        return $this->db
            ->where('id_porto', $id_porto)
            ->get('image_portofolio')
            ->result();
    }

    // kode untuk menampilkan data download CV
    public function get_contact_cv($id_user = null)
    {
       $this->db->select('*');
        $this->db->from('about');
        $this->db->join('user', 'user.id = about.id_user');
        $this->db->join('profile', 'profile.id_user = about.id_user');
        $this->db->where('about.id_user', $id_user);
        $this->db->order_by("user.id", "ASC");

        return $this->db->get()->result();
    }

}