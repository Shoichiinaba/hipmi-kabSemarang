<?php
defined('BASEPATH') or exit('No direct script access allowed');
use Dompdf\Dompdf;
use Dompdf\Options;

class Curriculum_vitae extends AUTH_Controller
{
    var $template_cv = 'template_cv/index';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Member_model');
    }

    public function cv($encoded_id = null)
    {
       if ($encoded_id !== null) {
            $id_user = base64_decode(strtr($encoded_id, '-_', '+/'));
        } else {
            show_404();
            return;
        }

        $data['member']   = $this->Member_model->get_cv_by_id($id_user);
        $data['tittle']   = 'HIPMI | Curriculum Vitae';
        $data['userdata'] = $this->userdata;
        $data['content']  = 'page_admin/curriculum_vitae/cv';
        $data['script']   = 'page_admin/curriculum_vitae/cv_js';

        $this->load->view($this->template_cv, $data);
    }

    public function about($encoded_id = null)
    {
        if ($encoded_id === null) {
            show_404();
            return;
        }

        $decoded = base64_decode(strtr($encoded_id, '-_', '+/'));
        if (!$decoded || !is_numeric($decoded)) {
            show_error("ID tidak valid: " . htmlspecialchars($encoded_id));
            return;
        }

        $id_user = $decoded;

        $data['about']     = $this->Member_model->get_about_by_id($id_user);
        $data['tittle']    = 'HIPMI | Curriculum Vitae';
        $data['content']   = 'page_admin/curriculum_vitae/about';
        $data['script']    = 'page_admin/curriculum_vitae/cv_js';

        $this->load->view($this->template_cv, $data);
    }

    public function resume($encoded_id = null)
    {
        if ($encoded_id === null) {
            show_404();
            return;
        }

        $decoded = base64_decode(strtr($encoded_id, '-_', '+/'));
        if (!$decoded || !is_numeric($decoded)) {
            show_error("ID tidak valid: " . htmlspecialchars($encoded_id));
            return;
        }

        $id_user = $decoded;

        $data['edukasi']     = $this->Member_model->get_edukasi_by_id($id_user);
        $data['experience']  = $this->Member_model->get_experience_by_id($id_user);
        $data['keyskill']  = $this->Member_model->get_skill_by_id($id_user);
        $data['tittle']      = 'HIPMI | Curriculum Vitae';
        $data['content']     = 'page_admin/curriculum_vitae/resume';
        $data['script']      = 'page_admin/curriculum_vitae/cv_js';

        $this->load->view($this->template_cv, $data);
    }

    public function service($encoded_id = null)
    {
        if ($encoded_id === null) {
            show_404();
            return;
        }

        $decoded = base64_decode(strtr($encoded_id, '-_', '+/'));
        if (!$decoded || !is_numeric($decoded)) {
            show_error("ID tidak valid: " . htmlspecialchars($encoded_id));
            return;
        }

        $id_user = $decoded;

        $data['service_data']  = $this->Member_model->get_service_by_id($id_user);
        $data['tittle']        = 'HIPMI | Curriculum Vitae';
        $data['content']       = 'page_admin/curriculum_vitae/services';
        $data['script']        = 'page_admin/curriculum_vitae/cv_js';

        $this->load->view($this->template_cv, $data);
    }

    public function contact($encoded_id = null)
    {
        if ($encoded_id === null) {
            show_404();
            return;
        }

        $decoded = base64_decode(strtr($encoded_id, '-_', '+/'));
        if (!$decoded || !is_numeric($decoded)) {
            show_error("ID tidak valid: " . htmlspecialchars($encoded_id));
            return;
        }

        $id_user = $decoded;

        $data['contact_data']  = $this->Member_model->get_contact_by_id($id_user);
        $data['tittle']        = 'HIPMI | Curriculum Vitae';
        $data['content']       = 'page_admin/curriculum_vitae/contact';
        $data['script']        = 'page_admin/curriculum_vitae/cv_js';

        $this->load->view($this->template_cv, $data);
    }

    public function portofolio($encoded_id = null)
    {
        if ($encoded_id === null) {
            show_404();
            return;
        }

        // Decode ID dari base64 URL safe
        $decoded = base64_decode(strtr($encoded_id, '-_', '+/'));
        if (!$decoded || !is_numeric($decoded)) {
            show_error("ID tidak valid: " . htmlspecialchars($encoded_id));
            return;
        }

        $id_user = (int) $decoded;

        // Ambil data portofolio berdasarkan user
        $portofolio_list = $this->Member_model->get_portofolio_by_user($id_user);

        // Untuk setiap portofolio, ambil gambar terkait
        foreach ($portofolio_list as &$porto) {
            $porto->images = $this->Member_model->get_images_by_portofolio($porto->id_porto);
        }

        $data['porto_data'] = $portofolio_list;
        $data['tittle']     = 'HIPMI | Curriculum Vitae';
        $data['content']    = 'page_admin/curriculum_vitae/portofolio';
        $data['script']     = 'page_admin/curriculum_vitae/cv_js';

        $this->load->view($this->template_cv, $data);
    }

   private function base64url_encode($data)
    {
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
    }

    public function export_pdf($encoded_id = null)
{
    if ($encoded_id === null) {
        show_404();
        return;
    }

    // Decode ID manual
    $decoded = base64_decode(strtr($encoded_id, '-_', '+/'));
    if (!$decoded || !is_numeric($decoded)) {
        show_error("ID tidak valid: " . htmlspecialchars($encoded_id));
        return;
    }

    $id_user = $decoded;

    // Ambil data dari database
    $data['userdata']   = $this->Member_model->get_contact_cv($id_user);
    $data['pendidikan'] = $this->Member_model->get_edukasi_by_id($id_user);
    $data['keahlian']   = $this->Member_model->get_skill_by_id($id_user);
    $data['pengalaman'] = $this->Member_model->get_experience_by_id($id_user);
    $data['service']    = $this->Member_model->get_service_by_id($id_user);

    // Render view HTML
    $html = $this->load->view('page_admin/curriculum_vitae/cv_pdf', $data, true);

    // Konfigurasi Dompdf
    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isRemoteEnabled', true);
    $options->set('defaultFont', 'DejaVu Sans'); // Font aman unicode & Dompdf-friendly

    $dompdf = new Dompdf($options);
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');

    // Render PDF
    $dompdf->render();

    // Nama file output
    $filename = 'CV_' . ($data['userdata']->nama ?? 'user') . '.pdf';

    // Tampilkan preview tanpa force download
    $dompdf->stream($filename, ["Attachment" => false]);
}


}