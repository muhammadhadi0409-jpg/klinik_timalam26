<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_pasien');
    }

    public function index()
    {
        $data['title'] = "Manajemen Data Pasien";

        $data['pasien'] = $this->m_pasien->tampil_data()->result_array();

        $this->load->view('v_header', $data);
        $this->load->view('pasien/v_pasien', $data);
        $this->load->view('v_footer', $data);
    }

    function tambah(){
        $data['title'] = "Tambah Data Pasien";

        $this->load->view('v_header', $data);
        $this->load->view('pasien/v_pasien_tambah');
        $this->load->view('v_footer');
    }

    function insert(){
        $nama_pasien = $this->input->post('nama_pasien');
        $alamat = $this->input->post('alamat');
        $umur = $this->input->post('umur');

        $data = array(
            'nama_pasien' => $nama_pasien,
            'alamat' => $alamat,
            'umur' => $umur
        );

        $this->m_pasien->insert_data($data);

        redirect('pasien');
    }

    function edit($id){
         $data['title'] = "Edit Data Pasien";

         $where = array('id_pasien' => $id);
         $data['r'] = $this->m_pasien->edit_data($where)->row_array();

        $this->load->view('v_header', $data);
        $this->load->view('pasien/v_pasien_edit', $data);
        $this->load->view('v_footer');
    }

  }
