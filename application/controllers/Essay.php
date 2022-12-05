<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Essay extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        //validasi jika user belum login
        $this->data['CI'] = &get_instance();
        $this->load->helper(array('form', 'url'));
        $this->load->model('M_Admin');
        $this->load->library(array('cart'));
        if ($this->session->userdata('masuk_sistem_rekam') != TRUE) {
            $url = base_url('login');
            redirect($url);
        }
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function index()
    {
        $this->data['title_web'] = 'Data Pinjam Buku ';
        $this->data['idbo'] = $this->session->userdata('ses_id');

        if ($this->session->userdata('level') == 'Anggota') {
            $this->data['pinjam'] = $this->db->query(
                "SELECT DISTINCT `pinjam_id`, `anggota_id`, 
				`status`, `tgl_pinjam`, `lama_pinjam`, `tgl_balik`, `tgl_kembali` 
				FROM tbl_pinjam WHERE status = 'Dipinjam' 
				AND anggota_id = ? ORDER BY pinjam_id DESC",
                array($this->session->userdata('anggota_id'))
            );
        } else {
            $this->data['pinjam'] = $this->db->query("SELECT DISTINCT `pinjam_id`, `anggota_id`, 
				`status`, `tgl_pinjam`, `lama_pinjam`, `tgl_balik`, `tgl_kembali` 
				FROM tbl_pinjam WHERE status = 'Dipinjam' ORDER BY pinjam_id DESC");
        }

        $this->load->view('header_view', $this->data);
        $this->load->view('sidebar_view', $this->data);
        $this->load->view('pinjam/pinjam_view', $this->data);
        $this->load->view('footer_view', $this->data);
    }


    public function show()
    {
        $this->data['title_web'] = 'Data Essay ';
        $id_praja = $this->data['idbo'] = $this->session->userdata('ses_id');

        if ($this->session->userdata('level') == 'Praja') {
            $this->data['essay'] = $this->db->query("SELECT  `id_essay`,`judul`, `id_praja`
				FROM tbl_essay WHERE id_praja = $id_praja");
        } else {
            $this->data['essay'] = $this->db->query("SELECT DISTINCT `id_essay`,`pinjam_id`, `anggota_id`, 
				`status`, `tgl_pinjam`, `lama_pinjam`, `tgl_balik`, `tgl_kembali` 
				FROM tbl_pinjam WHERE status = 'Di Kembalikan' ORDER BY id_pinjam DESC");
        }

        $this->load->view('header_view', $this->data);
        $this->load->view('sidebar_view', $this->data);
        $this->load->view('essay/home', $this->data);
        $this->load->view('footer_view', $this->data);
    }


    public function show_edit()
    {
        $this->data['title_web'] = 'Data Essay ';
        $id_praja = $this->data['idbo'] = $this->session->userdata('ses_id');

        //jika belum input essay
        if (!empty($this->uri->segment(3))) {
            $id_essay = $this->uri->segment(3);
            if ($this->session->userdata('level') == 'Praja') {
                $this->data['essay'] = $this->db->query("SELECT * FROM tbl_essay WHERE id_essay = $id_essay AND id_praja = $id_praja")->row_array();
                $this->data['data_praja'] = $this->db->query("SELECT * FROM tbl_login WHERE id_login = $id_praja")->row_array();
            } elseif ($this->session->userdata('level') == 'Petugas') {
                $this->data['data_praja'] = $this->db->query("SELECT * FROM tbl_login WHERE id_login = $id_essay")->row_array();
                $this->data['essay'] = $this->db->query("SELECT * FROM tbl_essay WHERE id_praja = $id_essay")->row_array();
            } else {
                $this->data['data_praja'] = $this->db->query("SELECT * FROM tbl_login WHERE id_login = $id_praja")->row_array();
                $this->data['essay'] = "";
            }
        }
        // sudah input essay 
        else {
            $this->data['data_praja'] = $this->db->query("SELECT * FROM tbl_login WHERE id_login = $id_praja")->row_array();
            $this->data['essay'] = "";
        }


        $this->load->view('header_view', $this->data);
        $this->load->view('sidebar_view', $this->data);
        $this->load->view('essay/show_edit', $this->data);
        $this->load->view('footer_view', $this->data);
    }


    public function simpan()
    {
        if ($this->session->userdata('level') == 'Praja') {
            if ($this->input->post('method') === "update") {
                $data = array(
                    'judul' => $this->input->post('judul'),
                    'id_praja' => $this->data['idbo'] = $this->session->userdata('ses_id'),
                    'isi' => $this->input->post('essay')
                );
                $this->db->where('id_essay', $this->input->post('id_essay'));
                $this->db->update('tbl_essay', $data);

                $this->session->set_flashdata('pesan', '<div id="notifikasi"><div class="alert alert-success">
            <p> Essay telah berhasil diperbaharui !</p>
            </div></div>');
                redirect(base_url('essay/show/' . $this->session->userdata('ses_id')));
            } elseif ($this->input->post('method') === "new") {
                $data = array(
                    'judul' => $this->input->post('judul'),
                    'id_praja' => $this->data['idbo'] = $this->session->userdata('ses_id'),
                    'isi' => $this->input->post('essay')
                );
                $this->db->insert('tbl_essay', $data);
                $this->session->set_flashdata('pesan', '<div id="notifikasi"><div class="alert alert-success">
            <p> Essay telah berhasil disimpan !</p>
            </div></div>');
                redirect(base_url('essay/show/' . $this->session->userdata('ses_id')));
            } else {
                echo "data kosong";
            }
        }
        //petugas
        elseif ($this->session->userdata('level') == 'Petugas') {
            if ($this->input->post('method') === "update") {
                $data = array(
                    'judul' => $this->input->post('judul'),
                    'isi' => $this->input->post('essay')
                );
                $this->db->where('id_essay', $this->input->post('id_essay'));
                $this->db->update('tbl_essay', $data);

                $this->session->set_flashdata('pesan', '<div id="notifikasi"><div class="alert alert-success">
            <p> Essay telah berhasil diperbaharui !</p>
            </div></div>');
                redirect(base_url('user'));
            } elseif ($this->input->post('method') === "new") {
                $data = array(
                    'judul' => $this->input->post('judul'),
                    'id_praja' => $this->data['idbo'] = $this->session->userdata('ses_id'),
                    'isi' => $this->input->post('essay')
                );
                $this->db->insert('tbl_essay', $data);
                $this->session->set_flashdata('pesan', '<div id="notifikasi"><div class="alert alert-success">
            <p> Essay telah berhasil disimpan !</p>
            </div></div>');
                redirect(base_url('user'));
            } else {
                echo "data kosong";
            }
        } else {
        }
    }
}