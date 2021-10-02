<?php

class Mahasiswa extends CI_Controller {
    
    public function index() {
        $this->load->helper('url');
        $this->load->view('view-form-mahasiswa');
    }

    public function cetak() {
        $this->load->helper('url');
		$data = [
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'usia' => $this->input->post('usia') ];

        $this->load->view('view-data-mahasiswa', $data);
    }
}

?>