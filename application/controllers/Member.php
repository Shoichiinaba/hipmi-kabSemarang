<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends AUTH_Controller
{

    var $template = 'template_adm/index';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Member_model');
    }

    public function index()
    {
        $data['tittle']         = 'HIPMI | Katehori Bisnis';
        $data['userdata']       = $this->userdata;
        $data['content']        = 'page_admin/kategori_bisnis/kategori_bisnis';
        $data['script']         = 'page_admin/kategori_bisnis/bisnis_kat_js';
        $this->load->view($this->template, $data);
    }

    public function anggota($encoded_id = null)
    {
        $data['tittle']   = 'HIPMI | Anggota';
        $data['userdata'] = $this->userdata;
        $data['content']  = 'page_admin/member/anggota';
        $data['script']   = 'page_admin/member/anggota_js';

        // Fungsi untuk decode base64 URL-safe
        function base64url_decode($data) {
            return base64_decode(strtr($data, '-_', '+/'));
        }

        if (!empty($encoded_id)) {
            $id_kategori = base64url_decode($encoded_id);
            $this->session->set_userdata('filter_kategori', $id_kategori);
        }

        $this->load->view($this->template, $data);
    }

    public function fetch_member()
    {
        $output = '';
        $limit = $this->input->post('limit');
        $start = $this->input->post('start');
        $search = $this->input->post('search');
        $id_kategori = $this->session->userdata('filter_kategori');

        $data = $this->Member_model->get_member($limit, $start, $search, $id_kategori);
        $total_data = $this->Member_model->count_member($search);
        $total_pages = ceil($total_data / $limit);

        // Ambil data user login dari session
        $userdata = $this->session->userdata('userdata');
        $role_login = strtolower(trim($userdata->role ?? ''));

        if (count($data) > 0) {
            foreach ($data as $agn) {

                // Buat tombol berdasarkan role user login
                $buttons = '';

                if ($role_login == 'admin') {
                    $buttons .= '
                        <button class="btn btn-danger btn-sm shadow rounded-2 btn-delete" title="hapus" data-id="' . $agn->id . '">
                            <i class="bx bx-trash"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-primary btn-edit ubah-data rounded-3"
                            data-bs-toggle="modal"
                            data-bs-target="#edit-agent"
                            data-id="' . $agn->id . '"
                            data-nama_agent="' . $agn->nama . '"
                            data-email="' . $agn->email . '"
                            data-no_tlp="' . $agn->no_tlp . '"
                            data-position="' . $agn->role . '"
                            data-username="' . $agn->username . '"
                            data-foto="' . $agn->foto . '">
                            <i class="bx bx-message-rounded-edit"></i>
                        </button>';
                }

                $encoded_id = rtrim(strtr(base64_encode($agn->id), '+/', '-_'), '=');
                $buttons .= '
                    <a href="' . site_url('Curriculum_vitae/cv/' . $encoded_id) . '"
                    class="btn btn-sm btn-primary rounded-3"
                    title="Lihat CV"
                    target="_blank">
                        <i class="bx bx-show"></i>
                    </a>';

                // HTML output
                $output .= '
                    <div class="col-lg-4 mb-4 order-0">
                        <div class="card shadow-lg position-relative">
                            <div class="d-flex align-items-end row">
                                <div class="col-sm-7 col-lg-7">
                                    <div class="card-body pt-0 mt-0" style="position: relative; top: 10px; left: -10px;">
                                        <div class="d-flex align-items-center flex-nowrap w-100" style="gap: 6px; min-width: 200px;">
                                            <h5 class="card-title text-primary mb-0" style="flex-grow: 1; flex-shrink: 1; min-width: 0; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                ' . $agn->nama . '
                                            </h5>
                                            <span class="badge bg-label-primary rounded-2 badge-small flex-shrink-0">
                                                ' . $agn->role . '
                                            </span>
                                        </div>
                                        <ul class="list-unstyled">
                                            <li class="d-flex mb-2 pb-1 pt-2">
                                                <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                                    <div class="me-0">
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-flex mb-1 align-items-center">
                                                                <span class="text-muted me-1">Registered:</span>
                                                                <span>' . date('d-m-Y', strtotime($agn->dibuat)) . '</span>
                                                            </li>
                                                            <li class="d-flex mb-1 align-items-center">
                                                                <span class="text-muted me-1">Email:</span>
                                                                <span>' . $agn->email . '</span>
                                                            </li>
                                                            <li class="d-flex mb-1 align-items-center">
                                                                <span class="text-muted me-1">WA:</span>
                                                                <span>' . $agn->no_tlp . '</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-5 col-lg-5 text-end text-sm-left position-relative">
                                    <div class="card-body pb-0 px-0 px-md-4 pt-0">
                                        <div class="profile-image-container position-relative">
                                            <img src="' . base_url('assets_adm/img/anggota/') . $agn->foto . '" height="105"
                                                alt="View Badge User"
                                                data-app-dark-img="' . base_url('assets_adm/img/anggota/') . $agn->foto . '"
                                                data-app-light-img="' . base_url('assets_adm/img/anggota/') . $agn->foto . '" class="img-fluid rounded" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hover-buttons action-buttons">
                                ' . $buttons . '
                            </div>
                        </div>
                    </div>';
            }

            echo json_encode([
                'data' => $output,
                'total_pages' => $total_pages
            ]);
        } else {
            echo json_encode([
                'data' => '',
                'total_pages' => $total_pages
            ]);
        }
    }

// menampilkan data kategori bisnis

    public function fetch_kategori()
    {
        $output = '';
        $limit = $this->input->post('limit');
        $start = $this->input->post('start');
        $search = $this->input->post('search');

        $data = $this->Member_model->get_kategori($limit, $start, $search);
        $total_data = $this->Member_model->count_category($search);
        $total_pages = ceil($total_data / $limit);

        // Ambil data user login dari session
        $userdata = $this->session->userdata('userdata');
        $role_login = strtolower(trim($userdata->role ?? ''));

        // Fungsi base64 URL-safe encode (inline)
        function base64url_encode($data) {
            return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
        }

        if (count($data) > 0) {
            foreach ($data as $agn) {
                $encoded_id = base64url_encode($agn->id_category);

                $output .= '
                    <div class="col-md-6 col-lg-6">
                        <a href="' . site_url('Member/anggota/' . $encoded_id) . '" class="text-decoration-none text-white">
                            <div class="toast-container w-100 shadow-lg">
                                <div class="bs-toast toast fade show bg-success w-100">
                                    <div class="toast-header">
                                        <i class="bx bx-bell me-2"></i>
                                        <div class="me-auto fw-semibold">' . htmlspecialchars($agn->category_name) . '</div>
                                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                    <div class="toast-body"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                ';
            }

            echo json_encode([
                'data' => $output,
                'total_pages' => $total_pages
            ]);
        } else {
            echo json_encode([
                'data' => '',
                'total_pages' => $total_pages
            ]);
        }
    }

}